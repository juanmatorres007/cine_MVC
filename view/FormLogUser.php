
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Iniciar sesion</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/register.css'>
    <link rel="icon" href="../img/adso__1_-removebg-preview (6).png">
    <script src='main.js'></script>
</head>
<body> 
<div class="container">
<div class="blur">
<div class="logo">INICIAR SESION </div>
  <form action="../routes/ValLogUser.php" method = "POST">
        <label>Direcccion de correo</label><br>
        <input type="text" name="email" required><br>
        <label >contraseña</label><br>
        <input type="password" name="password" required><br><br>
        <input class="button" type="submit" value="guardar"><br>  
  </form>
  <a href="FormRegUser.php">Registrarse</a>
</div>
</div>

</body>
</html>