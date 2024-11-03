@extends('adminlte::page')

@section('title', 'Entradas')


@section('content')
    <div class="container">
        <h1>Entradas del Blog</h1>
        <a href="{{ route('entradas.create') }}" class="btn btn-primary mb-3">Crear nueva entrada</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Título</th>
                <th>Contenido</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($entradas as $entrada)
                <tr>
                    <td>{{ $entrada->titulo }}</td>
                    <td>{{ Str::limit($entrada->contenido, 50) }}</td>
                    <td>
                        @if($entrada->imagen)
                            <img src="{{ asset('storage/' . $entrada->imagen) }}" alt="Imagen" width="100">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('entradas.edit', $entrada) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('entradas.destroy', $entrada) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $entradas->links() }}
    </div>
@stop
