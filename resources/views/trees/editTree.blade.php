@extends('layouts.app')

@section('content')
<div class="card shadow-sm mt-5">
    <div class="card-header bg-warning text-white text-center">
        <h2 class="mb-0">Editar Árbol</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('trees.edit', $tree->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="especie" class="form-label fw-bold">Especie</label>
                    <input type="text" class="form-control shadow-sm" id="especie" name="especie" value="{{ $tree->especie }}" required>
                </div>
                <div class="col-md-6">
                    <label for="nombre_cientifico" class="form-label fw-bold">Nombre Científico</label>
                    <input type="text" class="form-control shadow-sm" id="nombre_cientifico" name="nombre_cientifico" value="{{ $tree->nombre_cientifico }}" required>
                </div>
            </div>
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="tamaño" class="form-label fw-bold">Tamaño</label>
                    <input type="text" class="form-control shadow-sm" id="tamaño" name="tamaño" value="{{ $tree->tamaño }}" required>
                </div>
                <div class="col-md-6">
                    <label for="ubicacion_geografica" class="form-label fw-bold">Ubicación Geográfica</label>
                    <input type="text" class="form-control shadow-sm" id="ubicacion_geografica" name="ubicacion_geografica" value="{{ $tree->ubicacion_geografica }}" required>
                </div>
            </div>
            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="precio" class="form-label fw-bold">Precio</label>
                    <input type="text" class="form-control shadow-sm" id="precio" name="precio" value="{{ $tree->precio }}">
                </div>
                <div class="col-md-6">
                    <label for="estado" class="form-label fw-bold">Estado</label>
                    <select id="estado" name="estado" class="form-select shadow-sm">
                        <option value="Disponible" {{ $tree->estado == 'Disponible' ? 'selected' : '' }}>Disponible</option>
                        <option value="Vendido" {{ $tree->estado == 'Vendido' ? 'selected' : '' }}>Vendido</option>
                    </select>
                </div>
            </div>
            <div class="row g-3 mb-3">
                <div class="col-md-4">
                    <label for="foto" class="form-label fw-bold">Foto</label>
                    <input type="file" class="form-control shadow-sm" id="foto" name="foto" accept="image/*">
                    <small class="form-text text-muted">Dejar vacío si no desea cambiar la foto.</small>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-warning btn-lg shadow-sm">
                    <i class="bi bi-save"></i> Actualizar Árbol
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
