<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Peliculas Registradas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>

    <body>
        <h1>Tabla de peliculas registradas</h1>

        <table>
            <thead>
                <th>ID</th>
                <th>Titulo</th>
                <th>Sinopsis</th>
                <th>Duracion</th>
                <th>Fecha de emicion</th>
                <th>Clasificacion</th>
                <th>Portada</th>
                <th>Trailer</th>
                <th>Accion</th>
            </thead>
            <tbody>
                <?php foreach ($rta1 as $row): ?>
                    <tr>
                        <td>
                            <?php echo $row['id_movie']; ?>
                        </td>
                        <td>
                            <?php echo $row['title_mov']; ?>
                        </td>
                        <td>
                            <?php echo $row['synopsis_mov']; ?>
                        </td>
                        <td>
                            <?php echo $row['duration_mov']; ?>
                        </td>
                        <td>
                            <?php echo $row['date_emission_mov']; ?>
                        </td>
                        <td>
                            <?php echo $row['classification_mov']; ?>
                        </td>
                        <td>
                            <?php echo $row['img_mov']; ?>
                        </td>
                        <td>
                            <?php echo $row['trailer_mov']; ?>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>
        </table>
    </body>

</html>