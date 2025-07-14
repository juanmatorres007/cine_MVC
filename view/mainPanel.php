<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>panelprincipal</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/mainpanel.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header class="header">
     
            <div class="btn-menu">
                <label for="btn-menu" class="bi bi-list"></label>
            </div>

            <div class="logo"><img src="../img/logo.png" alt=""></div>

            <div class="user col-lg-7 col-xl-8 col-sm-4 col-md-7">
                <p>Juan Manuel</p>
                <div class="foto"><img src="../img/user.png" alt=""></div>
      
    </header>
    <div class="capa"></div>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a href="../view/FromRegMov.php">Registrar pelicula</a>
                <a href="../view/TableMovReg.php">Peliculas registradas</a>
                <a href="#">Evidencias</a>
                <a href="#">Contactos</a>
                <a href="#">Ayuda</a>
                <a href="#">Saber mas...</a>
            </nav>
            <label for="btn-menu" class="bi bi-x"></label>

        </div>
    </div>
    </div>
    <!--Contenido-->
    <section class="gallery">
        <a href="https://www.youtube.com/watch?v=qSwobe3uIII" target="_blank"><img src="../img/ex_machina.jpg"
                alt="imagen1"> </a>
        <a href="https://www.youtube.com/watch?v=QfNSlNzXj4w" target="_blank"><img
                src="../img/asi en la tierra como en el infierno.jpg" alt="imagen2"> </a>
        <a href="https://www.youtube.com/watch?v=Qc9NcoVXWUo" target="_blank">
            <img src="../img/artersun.jpg" alt="imagen3">
        </a>
        <a href="https://www.youtube.com/watch?v=X_exzE_l-t0" target="_blank"><img src="../img/the wicth.jpg"
                alt="imagen4"></a>
        <a href="https://www.youtube.com/watch?v=qwcdxkz_KkE" target="_blank"><img
                src="../img/616f28c1f32dfc0b6b4f0f7c029eebf3.jpg" alt="imagen5"></a>
        <a href="https://www.youtube.com/watch?v=Z4zCPgMdbo0" target="_blank"><img
                src="../img/728b81cd9d8ef02c64dc070da43ab7eb.jpg" alt="imagen6"></a>
        <a href="https://www.youtube.com/watch?v=vX2qQuUB2dk" target="_blank"><img src="../img/tar.jpg" alt="imagen6"></a>
        <a href="https://www.youtube.com/watch?v=f1el56alYI4" target="_blank"><img src="../img/black swan.jpg"
                alt="imagen7"></a>
    </section>
    <?php

    ?>

    <script src="script.js"></script>
</body>

</html>