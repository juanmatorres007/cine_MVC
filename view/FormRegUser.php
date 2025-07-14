<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>registrar usuario</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/register.css'>
    <link rel="icon" href="../img/adso__1_-removebg-preview (6).png">
    <script src='main.js'></script>
</head>

<body>
    <div class="container">
        <div class="blur">
            <div class="logo">REGISTRARSE</div>
            <form action="../routes/RegNewUser.php" method="POST">
                <label>Nombre</label><br>
                <input type="text" name="name" required><br>
                <label>Apellido</label><br>
                <input type="text" name="lastame"><br>
                <label>identificacion</label><br>
                <select class="tipeid" name="tipeid">
                    <option value="1">TI</option>
                    <option value="2">CC</option>
                </select>
                <input type="number" name="numberid"><br>
                <label>Fecha de Nacimiento</label><br>
                <input type="date" name="datebirth"><br>
                <label>Direcccion de correo</label><br>
                <input type="text" name="email" required><br>
                <label>contraseña</label><br>
                <input type="password" name="pass" required><br><br>
                <input class="button" type="submit" value="Registrarse">
            </form>
        </div>
    </div>
    </div>
</body>



</html>