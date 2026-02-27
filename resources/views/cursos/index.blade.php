@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Lista de Cursos</h1>
    <a href="{{ route('cursos.create') }}" class="btn btn-primary">+ Nuevo Curso</a>
</div>

@if(isset($cursos) && $cursos->isEmpty())
    <div class="alert alert-info">
        No hay cursos registrados. <a href="{{ route('cursos.create') }}">Crear el primero</a>
    </div>
@elseif(isset($cursos))
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Nivel</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            <tr>
                <td>{{ $curso->id }}</td>
                <td>{{ $curso->nombre }}</td>
                <td>{{ $curso->nivel }}</td>
                <td>
                    <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-sm btn-warning">Editar</a>
                    <form action="{{ route('cursos.destroy', $curso) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar curso?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@else
    <div class="alert alert-danger">Error: No se pudieron cargar los cursos</div>
@endif
@endsection