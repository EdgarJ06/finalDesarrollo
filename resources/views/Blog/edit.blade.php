@extends('adminlte::page')

@section('title', 'Entradas | Editar')

@section('content_header')
    <h1>Editar Entrada</h1>
@stop

@section('content')
    <div class="container">
        <h1>Editar Entrada</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('entradas.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="contenido">Contenido</label>
                <textarea name="contenido" class="form-control" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="imagen">Imagen</label>
                @if($entrada->imagen)
                    <div>
                        <img src="{{ asset('storage/' . $entrada->imagen) }}" alt="Imagen Actual" width="300">
                    </div>
                @else
                    <p>No hay imagen disponible.</p>
                @endif
                <input type="file" name="imagen" class="form-control">
            </div>

            <div class="form-group">
                <label for="etiquetas">Etiquetas</label>
                <input type="text" name="etiquetas" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@stop
