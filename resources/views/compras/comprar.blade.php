<!doctype html>
<html lang="en">

<head>
    <title>Comprar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container my-5">
        <div class="jumbotron text-center bg-success text-white">
            <h1 class="display-4">Compra de Árboles</h1>
            <hr class="my-4">
        </div>

        <form action="{{route('comprar')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$arbol->id}}">
            <!-- Especie -->
            <div class="form-group">
                <label for="especie">Especie</label>
                <input id="especie" class="form-control" type="text" name="especie" value="{{$arbol->especie}}"
                    readonly>
            </div>
            <div class="form-group">
                <label for="nombre_cientifico"> Nombre cientifico</label>
                <input id="nombre_cientifico" class="form-control" type="text" name="nombre_cientifico" value="{{$arbol->nombre_cientifico}}"
                    readonly>
            </div>

            <!-- Tamaño -->
            <div class="form-group">
                <label for="tamaño">Tamaño</label>
                <input id="tamaño" class="form-control" type="text" name="tamaño" value="{{$arbol->tamaño}}" readonly>
            </div>

            <!-- Ubicación Geográfica -->
            <div class="form-group">
                <label for="ubicacion_geografica">Ubicación Geográfica</label>
                <input id="ubicacion_geografica" class="form-control" type="text" name="ubicacion_geografica"
                    value="{{$arbol->ubicacion_geografica}}" readonly>
            </div>

            <!-- Estado -->
            <div class="form-group">
                <label for="estado">Estado</label>
                <input id="estado" class="form-control" type="text" name="estado" value="{{$arbol->estado}}" readonly>
            </div>

            <!-- Precio -->
            <div class="form-group">
                <label for="precio">Precio</label>
                <input id="precio" class="form-control" type="text" name="precio" value="{{$arbol->precio}}" readonly>
            </div>

            <!-- Foto -->
            <div class="form-group text-center">
                <label for="foto">Foto</label>
                @if (isset($arbol->foto) && $arbol->foto)
                    <img id="foto" class="img-fluid rounded shadow mt-2" src="{{ asset($arbol->foto) }}"
                        alt="Foto del árbol">
                @else
                    <p class="text-muted">No hay foto disponible</p>
                @endif
            </div>


            <!-- Botones de Acción -->
            <div class="d-flex justify-content-center my-4">
                <button type="submit" class="btn btn-primary mx-2">Comprar</button>
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