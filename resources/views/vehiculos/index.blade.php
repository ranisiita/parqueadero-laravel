@extends('layouts.app')

@section('titulo', 'Vehículos')

@section('contenido')
    <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
        <h1 class="mb-2 mb-md-0">Vehículos</h1>
        <a href="{{ route('vehiculos.create') }}" class="btn btn-primary">Nuevo</a>
    </div>

    <!-- Vista de tabla para pantallas grandes -->
    <div class="table-responsive d-none d-md-block">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Placa</th>
                <th>Tipo</th>
                <th>Propietario</th>
                <th>Ingreso</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ $vehiculo->tipo }}</td>
                    <td>{{ $vehiculo->propietario ?? '-' }}</td>
                    <td>{{ $vehiculo->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('vehiculos.edit', $vehiculo) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('vehiculos.destroy', $vehiculo) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Vista de tarjetas para móviles -->
    <div class="d-md-none">
        @foreach($vehiculos as $vehiculo)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $vehiculo->placa }}</h5>
                    <p class="card-text mb-1"><strong>Tipo:</strong> {{ $vehiculo->tipo }}</p>
                    <p class="card-text mb-1"><strong>Propietario:</strong> {{ $vehiculo->propietario ?? '-' }}</p>
                    <p class="card-text mb-3"><strong>Ingreso:</strong> {{ $vehiculo->created_at->format('d/m/Y H:i') }}</p>
                    <div class="d-flex gap-2">
                        <a href="{{ route('vehiculos.edit', $vehiculo) }}" class="btn btn-sm btn-warning flex-fill">Editar</a>
                        <form action="{{ route('vehiculos.destroy', $vehiculo) }}" method="POST" class="flex-fill">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger w-100" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
