<!doctype html>
<html lang="en">

<head>
    <title>My Shopping</title>
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
                    <div class="panel-heading mb-4 p-3">
                        <div class="row">
                            <form action="verCompras" method="post">
                                @csrf
                                <div class="col col-sm-3 col-xs-12">
                                    <h4 class="title">Shopping <span>My</span></h4>
                                </div>
                                <div class="col-sm-9 col-xs-12 text-right">
                                    <div class="btn_group">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="card shadow-sm">
                        <div class="card-header bg-success">
                            <h2 class="mb-0 text-white">Mis Compras</h2>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped table-hover m-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>User_Id</th>
                                        <th>Especie</th>
                                        <th>Nombre cientifico </th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($compras as $compra)
                                        <tr>
                                            <td> {{$compra->id}}</td>
                                            <td> {{$compra->user_id}} </td>
                                            <td> {{$compra->especie}} </td>
                                            <td> {{$compra->nombre_cientifico}} </td>
                                            <td>
                                                <a href="{{ route('compra.detalles', ['id' => $compra->id]) }}"
                                                    class="btn btn-primary btn-sm">Ver Detalles</a>
                                                <a href="{{ route('compra.history', ['id' => $compra->id]) }}"
                                                    class="btn btn-primary btn-sm"> Ver historial </a>
                                            </td>
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