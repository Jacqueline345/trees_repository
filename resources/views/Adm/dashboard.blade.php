@extends('layouts.app')

@section('titulo_pagina', 'adminDashboard')

@section('contenido')
<div class="container my-5">
    <h1 class="text-center mb-4">Dashboard del Administrador</h1>

    <!-- Mostrar mensajes -->
    @if(session('success_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(session('error_message'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Estadísticas -->
    <div class="row text-center">
        <div class="col-md-4">
            <a href="{{ route('dashboard') }}" class="card text-white bg-info mb-3 text-decoration-none shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Amigos Registrados</h5>
                    <p class="card-text display-4">{{ $friendsCount }}</p>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Árboles Disponibles</h5>
                    <p class="card-text display-4">{{ $treesAvailableCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Árboles Vendidos</h5>
                    <p class="card-text display-4">{{ $treesSoldCount }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Botón agregar árbol -->
    <div class="text-center my-4">
        <a href="{{ route('admin.addTree') }}" class="btn btn-primary btn-lg">Agregar Nuevo Árbol</a>
    </div>

    <!-- Tabla de árboles -->
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Listado de Árboles</h2>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped table-hover m-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Especie</th>
                        <th>Nombre Científico</th>
                        <th>Tamaño</th>
                        <th>Ubicación</th>
                        <th>Estado</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trees as $tree)
                        <tr>
                            <td>{{ $tree->especie }}</td>
                            <td>{{ $tree->nombre_cientifico }}</td>
                            <td>{{ $tree->tamaño }}</td>
                            <td>{{ $tree->ubicacion_geografica }}</td>
                            <td>{{ $tree->estado }}</td>
                            <td>
                                @if ($tree->foto)
                                    <img src="{{ asset('uploads/' . $tree->foto) }}" 
                                         alt="Imagen de {{ $tree->especie }}" 
                                         style="max-width: 100px; max-height: 100px;">
                                @else
                                    Sin imagen
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.editTree', $tree->id) }}" 
                                   class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('admin.deleteTree', $tree->id) }}" method="POST" 
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" 
                                            onclick="return confirm('¿Estás seguro de eliminar este árbol?');">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
