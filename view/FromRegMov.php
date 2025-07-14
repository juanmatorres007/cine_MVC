<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Registro Pelicula</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="css/tbl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="img/adso__1_-removebg-preview (6).png">
    <script src='main.js'></script>
    <style>
    </style>
</head>

<body>
    <div class="row">
        <div class="col-lg-3">
            <div class="container">
                <div class="form">
                    <div class="logo">REGISTRAR PELICULAS </div>
                    <form action="../routes/RegNewMov.php" method="POST" enctype="multipart/form-data">
                        <label>Titulo</label><br>
                        <input type="text" name="title" required><br>
                        <label>sinopsis</label><br>
                        <input type="text" name="synopsis"><br>
                        <label>Duracion</label><br>
                        <input type="time" name="duration" required><br>
                        <label>Fecha de emision</label><br>
                        <input type="date" name="date" required><br>
                        <label>Clasificacion</label><br>
                        <select class="tipeid" name="classification">
                            <option value="2">G - Película apta para todo público</option>
                            <option value="3">PG - Se recomienda la orientación de los padres o tutores para los
                                niños</option>
                            <option value="4">PG-13 - Se recomienda la orientación de los padres o tutores para
                                los
                                niños menores de 13 años</option>
                            <option value="5">R -Requiere supervisión de los padres o tutores para menores de 17
                                años</option>
                            <option value="6">NC-17 - Restringida a espectadores adultos de 18 años o más
                            </option>
                            <option value="7">NR - la película no ha sido calificada por la organización de
                                clasificación de películas </option>
                        </select><br>
                        <label>Portada</label><br>
                        <input type="file" name="img"><br>
                        <label>Trailer</label><br>
                        <input type="URL" name="trailer"><br><br>
                        <input class="button" type="submit" value=guardar><br><br>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
        </div>
    </div>
</body>

</html>