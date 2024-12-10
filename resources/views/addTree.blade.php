<!doctype html>
<html lang="en">

<head>
    <title>Add Tree</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{assert('assets/style.css')}}">

</head>
<body>
    <!-- Formulario para Agregar un Nuevo Árbol -->
    <div class="card shadow-sm mt-5">
        <div class="card-header bg-primary text-white text-center">
            <h2 class="mb-0">Agregar Nuevo Árbol</h2>
        </div>
        <div class="card-body">
            <form action="{{route('storeTree')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="especie" class="form-label fw-bold">Especie</label>
                        <input type="text" class="form-control shadow-sm" id="especie" name="especie" placeholder="Ej. Pino" required>
                    </div>
                    <div class="col-md-6">
                        <label for="nombre_cientifico" class="form-label fw-bold">Nombre Científico</label>
                        <input type="text" class="form-control shadow-sm" id="nombre_cientifico" name="nombre_cientifico" placeholder="Ej. Pinus sylvestris" required>
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-md-4">
                        <label for="tamaño" class="form-label fw-bold">Tamaño</label>
                        <input type="text" class="form-control shadow-sm" id="tamaño" name="tamaño" placeholder="Ej. 2 metros" required>
                    </div>
                    <div class="col-md-4">
                        <label for="ubicacion_geografica" class="form-label fw-bold">Ubicación Geográfica</label>
                        <input type="text" class="form-control shadow-sm" id="ubicacion_geografica" name="ubicacion_geografica" placeholder="Ej. Oaxaca" required>
                    </div>
                    <div class="col-md-4">
                        <label for="estado" class="form-label fw-bold">Estado</label>
                        <select id="estado" name="estado" class="form-select shadow-sm">
                            <option value="Disponible">Disponible</option>
                            <option value="Vendido">Vendido</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label fw-bold">Foto (Opcional)</label>
                    <input type="file" class="form-control shadow-sm" id="foto" name="foto" accept="image/*">
                    <small class="form-text text-muted">Formatos soportados: JPG, PNG. Tamaño máximo: 2MB.</small>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-lg shadow-sm">
                        <i class="bi bi-save"></i> Guardar Árbol
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

