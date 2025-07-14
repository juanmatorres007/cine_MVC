<?php
include_once "../controller/ContLogUser.php";

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $synopsis = $_POST["synopsis"];
    $duration = $_POST["duration"];
    $date = $_POST["date"];
    $classification = $_POST["classification"];
    $img = $_FILES["img"]["name"];
    $trailer = $_POST["trailer"];

    $regController = new RegMovControllerClass();
    $regController->RegMovFunction($title, $synopsis, $duration, $date, $classification, $img, $trailer);
}
?>
