<?php
function conectaDb() {
    try {
         $conn = new PDO("mysql:host=localhost;dbname=cine_adso" , "root","");
          return $conn;
    } catch (PDOException $e) {
        echo "ERROR: en la coneccion" . $e->getMessage();
      
    }
}
?>