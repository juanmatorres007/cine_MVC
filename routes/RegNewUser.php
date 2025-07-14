<?php
include_once "../controller/ContLogUser.php";

extract($_POST);
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$tipeid = $_POST['tipeid'];
$numid = $_POST['numberid'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$reg = new RegUserControllerClass;
$reg -> RegUserFunction($name, $lastname, $tipeid, $numid, $pass);

?>