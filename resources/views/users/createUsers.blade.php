<!doctype html>
<html lang="en">

<head>
    <title>Create User</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
</head>

<body>
    <div class="container my-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center mb-0">Crear un Nuevo Usuario</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ingresa tu nombre" required />
                        </div>
                        <div class="col-md-6">
                            <label for="lastname" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Ingresa tu apellido" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="phone_number" class="form-label">Número de Teléfono</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Ingresa tu teléfono" required />
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="address" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Ingresa tu dirección" required />
                        </div>
                        <div class="col-md-6">
                            <label for="country" class="form-label">País</label>
                            <input type="text" class="form-control" id="country" name="country" placeholder="Ingresa tu país" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Crea una contraseña" required />
                        </div>
                        <div class="col-md-6">
                            <label for="repeat" class="form-label">Repetir Contraseña</label>
                            <input type="password" class="form-control" id="repeat" name="repeat" placeholder="Repite la contraseña" required />
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Rol</label>
                        <select class="form-select" id="role" name="role" required>
                            <option value="operador">Operador</option>
                            <option value="admin">Administrador</option>
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-lg shadow-sm">Crear Usuario</button>
                        <a href="{{ route('manageUsers') }}" class="btn btn-secondary btn-lg shadow-sm">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>