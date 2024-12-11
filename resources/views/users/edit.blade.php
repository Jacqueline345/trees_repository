@extends('layouts.app')

@section('content')
<div class="card shadow-sm mt-5">
    <div class="card-header bg-warning text-white text-center">
        <h2 class="mb-0">Editar Usuario</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label fw-bold">Nombre</label>
                    <input type="text" class="form-control shadow-sm" id="name" name="name" value="{{ $user->name }}" required>
                </div>
                <div class="col-md-6">
                    <label for="name" class="form-label fw-bold">Lastname</label>
                    <input type="text" class="form-control shadow-sm" id="lastname" name="name" value="{{ $user->lastname }}" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label fw-bold">Correo Electrónico</label>
                    <input type="email" class="form-control shadow-sm" id="email" name="email" value="{{ $user->email }}" required>
                </div>
            </div>
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="role" class="form-label fw-bold">Rol</label>
                    <select id="role" name="role" class="form-select shadow-sm">
                        <option value="amigo" {{ $user->role == 'amigo' ? 'selected' : '' }}>Amigo</option>
                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Administrador</option>
                    </select>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-warning btn-lg shadow-sm">
                    <i class="bi bi-save"></i> Actualizar Usuario
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
