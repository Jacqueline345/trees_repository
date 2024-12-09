<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{assert('assets/style.css')}}">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        .dashboard {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .card {
            border: 1px solid #ccc;
            background-color: #84fab0;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            width: 50%;
            box-shadow: #84fab0;
        }

        .card h2 {
            margin-bottom: 10px;
            font-size: 1.5em;
        }

        .card p {
            font-size: 1.2em;
        }
    </style>

</head>

<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Dashboard del Operador</h1>

        <!-- Estadísticas -->
        <div class="dashboard">
            <div class="card">
                <h2> Amigos registrados </h2>
                <p> <strong> {{$friendsCount}} </strong> </p>
            </div>

            <div class="card">
                <h2> Arboles disponibles </h2>
                <p> <strong> {{$treesAvailableCount}} </strong> </p>
            </div>

            <div class="card">
                <h2> Arboles Vendidos </h2>
                <p> <strong> {{$treesSoldCount}} </strong> </p>
            </div>
        </div>



        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
</body>

</html>