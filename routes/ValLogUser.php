<?php
include_once "../controller/ContLogUser.php";

 extract($_REQUEST);
 $email = $_REQUEST['email'];
 $pass = $_REQUEST['password'];

 $valController = new viewController();
 $valController -> validController($email, $pass);
 ?>