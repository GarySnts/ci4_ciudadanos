<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Municipios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-danger" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/fs2024/ci4_ciudadanos/public/">Raiz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="http://localhost/fs2024/ci4_ciudadanos/public/ver_ciudadanos">Ciudadanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="http://localhost/fs2024/ci4_ciudadanos/public/ver_municipios">Municipios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="http://localhost/fs2024/ci4_ciudadanos/public/ver_departamentos">Departamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="http://localhost/fs2024/ci4_ciudadanos/public/ver_niveles">Niveles Academicos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="http://localhost/fs2024/ci4_ciudadanos/public/ver_regiones">Regiones</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <h1>Municipios</h1>
        <table class="table table-border table-striped">
            <thead>
                <rt>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Codigo de departamento</th>
                </rt>
            </thead>
            <tbody>
                <?php
                    foreach($datos as $muni):
                ?>
                <tr>
                    <td><?php echo $muni['cod_muni']; ?> </td>
                    <td><?php echo $muni['nombre_municipio']; ?></td>
                    <td><?php echo $muni['cod_depto']; ?> </td>
                    <td></td>
                </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>