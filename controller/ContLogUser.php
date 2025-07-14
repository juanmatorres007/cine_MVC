<?php
include_once "../conexion.php";
include_once "../model/modelLogUser.php";
include_once "../model/modelRegmov.php";

 class viewController{
    public function validController($email,$pass){
        $answer = new LoginModel();
        $user = $answer->startSession($email,$pass);

        if (!empty($user)) {        
                include_once "../view/mainPanel.php";
           $conn =null; 
        }else{
            header('location:../index.php');
        }
    }
    public function segurity($email,$pass) {
        $email_user = $email;
        $password = $pass;
    
      if ($username === "account_acc" && $password === "password_acc") {
        // Inicia la sesión y redirige al usuario a una página protegida
        session_start();
        $_SESSION["user"] = $username;
        header("Location: ../view/mainPanel.php");
        exit;
    } else {
        // Autenticación fallida, muestra un mensaje de error
        echo "Credenciales incorrectas. Inténtalo de nuevo.";
     } 
     }
   
} 


class RegMovControllerClass
{
    public function RegMovFunction($title, $synopsis, $duration, $date, $classification, $img, $trailer)
    {
        $reg = new RegMovClass();
        $rta1 = $reg->InsertMovFunction($title, $synopsis, $duration, $date, $classification, $img, $trailer);
        if ($rta1) {
            echo "Registro exitoso.";
        } else {
            echo "Error al registrar la película.";
        }
    }
}

    class ReadMovControllerClass {
        public function ReadMovFunction(){
            $read = new ReadMovClass();
            $rta1 = $read -> ReadActiveFunction();
            include "../view/TableMovReg.php";
        }
    }
  
?>