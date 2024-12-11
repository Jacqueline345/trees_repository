@extends('layouts.app')

@section('content')
<h1>Editar Compra</h1>
<form action="{{ route('compras.update', $compra->id) }}" method="POST">
    @csrf
    <label for="producto">Especie</label>
    <input type="text" name="especie" value="{{ $compra->especie }}" required>

    <label for="cantidad">Tamaño</label>
    <input type="text" name="tamaño" value="{{ $compra->tamaño }}" required>

    <label for="precio">Ubicacion geografica </label>
    <input type="text" name="ubicacion_geografica" value="{{ $compra->ubicacion_geografica }}" step="0.01" required>

    <label for="estado">Estado</label>
    <input type="text" name="estado" value="{{$compra->estado}}" required>

    <button type="submit">Actualizar</button>
</form>
@endsection
