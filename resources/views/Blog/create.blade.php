@extends('adminlte::page')

@section('title', 'Entradas | Crear')

@section('content_header')
    <h1>Crear nueva Entrada</h1>
@stop

@section('content')
    <div class="container">
        <h1>Crear Nueva Entrada</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('entradas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
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
                <input type="file" name="imagen" class="form-control">
            </div>

            <div class="form-group">
                <label for="etiquetas">Etiquetas</label>
                <input type="text" name="etiquetas" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@stop
