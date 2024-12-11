<!doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{assert('assets/style.css')}}">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"> My Trees </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{route('login')}}" class="nav-link active">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('register')}}" class="nav-link">Signup</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link">Logout</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('manageUsers')}}" class="nav-link">Administración de Usuarios</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container my-5">
        <h1 class="text-center mb-4">Dashboard del Administrador</h1>

        <!-- Estadísticas -->
        <div class="row text-center">
            <!-- Tarjeta: Amigos Registrados -->
            <div class="col-md-4 mb-3">
                <div class="card bg-info shadow-sm h-100">
                    <div class="card-body">
                        <a href="{{route('amigos.index')}}"><h5 class="card-title">Amigos Registrados</h5></a>
                        <p class="card-text display-4"><strong>{{$friendsCount}}</strong></p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta: Árboles Disponibles -->
            <div class="col-md-4 mb-3">
                <div class="card bg-success shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Árboles Disponibles</h5>
                        <p class="card-text display-4"><strong>{{$treesAvailableCount}}</strong></p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta: Árboles Vendidos -->
            <div class="col-md-4 mb-3">
                <div class="card bg-danger shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Árboles Vendidos</h5>
                        <p class="card-text display-4"><strong>{{$treesSoldCount}}</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botón para ver amigos y añadir un nuevo árbol -->
        <div class="text-center my-4">
            <a href="#" class="btn btn-warning btn-lg">Ver Amigos Registrados</a>
            <a href="{{route('addTree')}}" class="btn btn-info btn-lg">Agregar Nuevo Árbol</a>
        </div>

        <!-- Tabla de Árboles con Estado -->
        <div class="card shadow-sm">
            <div class="card-header bg-info">
                <h2 class="mb-0">Listado de Árboles Disponibles</h2>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-hover m-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Especie</th>
                            <th>Nombre Científico</th>
                            <th>Tamaño</th>
                            <th>Ubicación Geográfica</th>
                            <th>Estado</th>
                            <th>Precio</th>
                            <th>Foto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($treesAvailable as $arbol)
                            <tr>
                                <td> {{$arbol->especie}} </td>
                                <td> {{$arbol->nombre_cientifico}} </td>
                                <td> {{$arbol->tamaño}} </td>
                                <td> {{$arbol->ubicacion_geografica}} </td>
                                <td> {{$arbol->estado}} </td>
                                <td> {{$arbol->precio}} </td>
                                <td> {{$arbol->foto}} </td>
                                <td>
                                    <a href="{{route('trees.edit', $arbol->id)}}" data-tip="editar" class="btn btn-warning btn-sm">Editar</a>
                                    <!-- Formulario de eliminación -->
                                    <form action="{{ route('trees.destroy', $arbol->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE') <!-- Esto indica que la solicitud es de tipo DELETE -->
                                        <button type="submit" class="btn btn-danger btn-sm" data-tip="eliminar">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous">
        </script>
    </div>
</body>


</html>