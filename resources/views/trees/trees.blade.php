<!doctype html>
<html lang="en">

<head>
    <title>Trees</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{assert('assets/style.css')}}">

</head>

<form>
    @include('/inc/header')
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css /> -->
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <form action="{{route('verArboles')}}" method="post">

                                <div class="col col-sm-3 col-xs-12">
                                    <h4 class="title">trees <span>List</span></h4>
                                </div>
                                <div class="col-sm-9 col-xs-12 text-right">
                                    <div class="btn_group">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Especie</th>
                                    <th>Tamaño</th>
                                    <th>Ubicación Geográfica</th>
                                    <th>Estado</th>
                                    <th>Precio</th>
                                    <th>Foto del Árbol</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($arboles as $arbol)
                                    <tr>
                                        <td> {{$arbol->id}} </td>
                                        <td> {{$arbol->especie}} </td>
                                        <td> {{$arbol->nombre_cientifico}} </td>
                                        <td> {{$arbol->tamaño}} </td>
                                        <td> {{$arbol->ubicacion_geografica}} </td>
                                        <td> {{$arbol->estado}} </td>
                                        <td> {{$arbol->precio}} </td>
                                        <td> {{$arbol->foto}} </td>
                                        <td><a href="#" data-tip="comprar"> Comprar </a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>