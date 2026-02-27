@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Lista de Estudiantes</h1>
    <a href="{{ route('estudiantes.create') }}" class="btn btn-primary">+ Nuevo Estudiante</a>
</div>

@if(isset($estudiantes) && $estudiantes->isEmpty())
    <div class="alert alert-info">
        No hay estudiantes registrados. <a href="{{ route('estudiantes.create') }}">Crear el primero</a>
    </div>
@elseif(isset($estudiantes))
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Fecha Nacimiento</th>
                <th>Curso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $estudiante)
            <tr>
                <td>{{ $estudiante->id }}</td>
                <td>{{ $estudiante->nombre }}</td>
                <td>{{ $estudiante->email }}</td>
                <td>{{ $estudiante->fecha_nacimiento }}</td>
                <td>{{ $estudiante->curso->nombre ?? 'Sin curso' }}</td>
                <td>
                    <a href="{{ route('estudiantes.edit', $estudiante) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else
    <div class="alert alert-danger">Error: No se pudieron cargar los estudiantes</div>
@endif
@endsection