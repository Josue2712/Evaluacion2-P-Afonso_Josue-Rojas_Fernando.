@extends('layouts.app')

@section('content')
<h1>Crear Nuevo Estudiante</h1>

<form action="{{ route('estudiantes.store') }}" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre completo *</label>
        <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
        @error('nombre')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="email" class="form-label">Email *</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento *</label>
        <input type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required>
        @error('fecha_nacimiento')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="curso_id" class="form-label">Curso *</label>
        <select class="form-control @error('curso_id') is-invalid @enderror" id="curso_id" name="curso_id" required>
            <option value="">Seleccione un curso</option>
            @foreach($cursos as $curso)
                <option value="{{ $curso->id }}" {{ old('curso_id') == $curso->id ? 'selected' : '' }}>
                    {{ $curso->nombre }}
                </option>
            @endforeach
        </select>
        @error('curso_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Guardar Estudiante</button>
        <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Cancelar</a>
    </div>
</form>
@endsection