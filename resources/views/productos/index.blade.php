<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Productos:') }}
            <a class="btn btn-success" href="{{ route('productos.create') }}">Crear nuevo producto</a>

        </h2>
    </x-slot>

    <div class="container">


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <br>

        <table class="table bg-black text-white">
            <tr>
                <th>No</th>
                <th>Nombre</th>
                <th>Foto</th>
                <th width="280px">Acción</th>
            </tr>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $producto->Nombre }}</td>
                <td>
                        @if ($producto->imagen)
                            <img src="{{ asset('imagenes/' . $producto->imagen) }}" alt="Imagen del producto" width="50">
                        @else
                            Sin imagen
                        @endif
                    </td>
                <td>
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('productos.show', $producto->id) }}">Mostrar</a>

                        <a class="btn btn-primary" href="{{ route('productos.edit', $producto->id) }}">Editar</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        {!! $productos->links() !!}

</div>
</x-app-layout>
