@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{route('logout')}}" class="btn btn-danger"> Salir del sistema </a>
                                    
                                    <a href="{{route('trees')}}" class="btn btn-wanger"> Trees </a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                @endsection