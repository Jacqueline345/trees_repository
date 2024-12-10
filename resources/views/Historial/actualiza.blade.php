<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Árbol</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Actualizar Árbol</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('store')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$compras->id}}" readonly>
                    <div class="form-group">
                        <label for="tamaño">Tamaño</label>
                        <input type="text" class="form-control" name="tamaño"
                            value="{{old('Tamaño', $compras->tamaño)}}">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto del Árbol:</label>
                        <input type="file" name="foto" id="foto" accept="image/*" class="form-control-file" value="{{old('foto',$compras->foto)}}">
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Actualizar Árbol</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>