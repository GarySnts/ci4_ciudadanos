<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #ff0000, #00ff00, #0000ff);
            background-size: 600% 600%;
            animation: gradientBG 16s ease infinite;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .menu-container {
            text-align: center;
            color: white;
            margin-top: 20%;
        }

        .menu-container h1 {
            font-size: 3em;
            margin-bottom: 0.5em;
        }

        .menu-container a {
            display: block;
            margin: 0.5em 0;
            padding: 0.75em 1.25em;
            font-size: 1.25em;
        }
    </style>
</head>

<body>
    <div class="container menu-container">
        <h1>Ciudadanos - Base de datos</h1>
        <a href="ver_ciudadanos" class="btn btn-primary">Ciudadanos</a>
        <a href="ver_municipios" class="btn btn-primary">Municipios</a>
        <a href="ver_departamentos" class="btn btn-primary">Departamentos</a>
        <a href="ver_niveles" class="btn btn-primary">Niveles Académicos</a>
        <a href="ver_regiones" class="btn btn-primary">Regiones</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
