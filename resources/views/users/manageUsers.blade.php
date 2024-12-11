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
                    <a href="{{route('dashboard')}}" class="nav-link">Administración de Usuarios</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container my-5">
        <h1 class="text-center mb-4">Administración de Usuarios (Amigos)</h1>

        <!-- Tabla de Usuarios -->
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white">
                <h2 class="mb-0">Listado de Usuarios - Amigos</h2>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-hover m-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo Electrónico</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>{{ $user->address }}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Botón para añadir un nuevo amigo -->
        <div class="text-center my-4">
            <a href="{{route('users.createUsers')}}" class="btn btn-info btn-lg">Crear usuario</a>
        </div>
    </div>
</body>
</html>