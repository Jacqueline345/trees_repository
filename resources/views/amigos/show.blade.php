@extends('layouts.app')

@section('content')
<h1>Compras de {{ $amigo->name }}</h1>
<ul>
    @foreach($amigo->compras as $compra)
        <li>
            Tamaño: {{ $compra->tamaño }} - Especie: {{ $compra->especie}} - Ubicacion: ${{ $compra->ubicacion_geografica }}
            - Estado: {{$compra->estado}}
            <a href="{{ route('compras.edit', $compra->id) }}">Editar</a>
        </li>
    @endforeach
</ul>
@endsection
