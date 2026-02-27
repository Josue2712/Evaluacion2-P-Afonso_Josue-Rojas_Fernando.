@extends('layouts.app')

@section('content')
<h1>Editar Curso</h1>

<form action="{{ route('cursos.update', $curso->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Curso *</label>
        <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre', $curso->nombre) }}" required>
        @error('nombre')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="nivel" class="form-label">Nivel</label>
        <input type="text" class="form-control @error('nivel') is-invalid @enderror" id="nivel" name="nivel" value="{{ old('nivel', $curso->nivel) }}">
        @error('nivel')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Actualizar Curso</button>
        <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Cancelar</a>
    </div>
</form>
@endsection