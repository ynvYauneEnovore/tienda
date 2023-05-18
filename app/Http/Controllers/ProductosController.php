<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $productos = Productos::latest()->paginate(5);

        return view('productos.index', compact('productos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Nombre' => 'required',
            'Precio' => 'required',
            'Descripcion' => 'required',
            'Estado' => 'required',
            'imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'min' => 'required',
            'max' => 'required',
            'stock' => 'required',
        ]);

        $imagenNombre = time().'.'.$request->imagen->extension();
        $request->imagen->move(public_path('imagenes'), $imagenNombre);

        Productos::create([
            'Nombre' => $request->Nombre,
            'Precio' => $request->Precio,
            'Descripcion' => $request->Descripcion,
            'Estado' => $request->Estado,
            'imagen' => $imagenNombre,
            'min' => $request->min,
            'max' => $request->max,
            'stock' => $request->stock,
        ]);

        return redirect()->route('productos.index')
            ->with('success', 'Producto creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $producto): View
    {
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $producto): View
    {
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $producto): RedirectResponse
    {
        $request->validate([
            'Nombre' => 'required',
            'Precio' => 'required',
            'Descripcion' => 'required',
            'Estado' => 'required',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        if ($request->hasFile('imagen')) {
            $imagenNombre = time().'.'.$request->imagen->extension();
            $request->imagen->move(public_path('imagenes'), $imagenNombre);
            $producto->imagen = $imagenNombre;
        }

        $producto->Nombre = $request->Nombre;
        $producto->Precio = $request->Precio;
        $producto->Descripcion = $request->Descripcion;
        $producto->Estado = $request->Estado;
        $producto->save();

        return redirect()->route('productos.index')
            ->with('success', 'Producto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productos $producto): RedirectResponse
    {
        $producto->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto eliminado exitosamente.');
    }
}
