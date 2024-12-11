<style>
    body {
        font-family: Arial, sans-serif;
    }

    .container {
        width: 50%;
        margin: 0 auto;
        padding-top: 30px;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    .form-label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        border: none;
        color: white;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;

    }

    .container {
        width: 60%;
        margin: 0 auto;
        padding-top: 30px;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        background-color: #f8f9fa;
        margin: 10px 0;
        padding: 10px;
        border-radius: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    li:hover {
        background-color: #e9ecef;
    }

    a {
        text-decoration: none;
        background-color: #ffc107;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
    }

    a:hover {
        background-color: #e0a800;
    }
</style>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigos</title>
</head>

<body>
    <div>
        @yield('content')
    </div>
</body>

</html>