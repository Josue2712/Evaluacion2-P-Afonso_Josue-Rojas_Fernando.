@extends('layouts.app')

@section('content')
<h1>Editar Estudiante</h1>

<form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $estudiante->nombre) }}" required>
    </div>
    
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $estudiante->email) }}" required>
    </div>
    
    <div class="mb-3">
        <label>Fecha Nacimiento</label>
        <input type="date" name="fecha_nacimiento" class="form-control" value="{{ old('fecha_nacimiento', $estudiante->fecha_nacimiento) }}" required>
    </div>
    
    <div class="mb-3">
        <label>Curso</label>
        <select name="curso_id" class="form-control" required>
            @foreach($cursos as $curso)
                <option value="{{ $curso->id }}" {{ old('curso_id', $estudiante->curso_id) == $curso->id ? 'selected' : '' }}>
                    {{ $curso->nombre }}
                </option>
            @endforeach
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection