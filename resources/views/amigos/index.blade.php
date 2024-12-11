@extends('layouts.app')

@section('content')
<h1>Lista de Amigos</h1>
<ul>
    @foreach($amigos as $amigo)
        <li>
            {{ $amigo->name }}
            <a href="{{ route('amigos.show', $amigo->id) }}">Ver Detalles</a>
        </li>
    @endforeach
</ul>
@endsection
