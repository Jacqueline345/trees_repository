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
        <h2 class="text-center mb-5">Crear un Nuevo Usuario</h2>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required />
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required />
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Número de Teléfono</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" required />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required />
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="address" name="address" required />
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">País</label>
                <input type="text" class="form-control" id="country" name="country" required />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required />
            </div>
            <div class="mb-3">
                <label for="repeat" class="form-label">Repetir Contraseña</label>
                <input type="password" class="form-control" id="repeat" name="repeat" required />
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Rol</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="operador">Operador</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Crear Usuario</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>
