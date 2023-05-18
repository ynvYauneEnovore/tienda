<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Ver detalles del productos:') }}
            <a class="btn btn-success" href="{{ route('productos.index') }}">Atras</a>

        </h2>
    </x-slot>

    <div class="container text-white text-center justify-content-center align-items-center">
        <br><br>
        <div class="row">
            <div class="col-6">
                <img class="img-fluid" src="{{ asset('imagenes/' . $producto->imagen) }}" alt="ynv">
            </div>
            <div class="col-6 text-white bg success">
                <ul class="list-group">
                    <li class="list-group-item text-white bg-success">
                        <strong>Nombre:</strong>
                        {{ $producto->Nombre }}
                    </li>
                    <li class="list-group-item text-white bg-success">
                        <strong>Precio:</strong>
                        {{ $producto->Precio }}
                    </li>
                    <li class="list-group-item text-white bg-success">
                        <strong>Descripción:</strong>
                        {{ $producto->Descripcion }}
                    </li>
                    <li class="list-group-item text-white bg-success">
                        <strong>Estado:</strong>
                        {{ $producto->Estado }}
                    </li>
                    <li class="list-group-item text-white bg-success">
                        <strong>Stock Mínimo:</strong>
                        {{ $producto->min }}
                    </li>
                    <li class="list-group-item text-white bg-success">
                        <strong>Stock Máximo:</strong>
                        {{ $producto->max }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
