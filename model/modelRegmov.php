<?php 



class RegMovClass{

    public function InsertMovFunction($title, $synopsis, $duration, $date, $classification, $img, $trailer){
        $conn =  conectaDb();
        $_sql = $conn->prepare("INSERT INTO movie (title_mov, synopsis_mov, duration_mov, date_emission_mov, classification_mov, img_mov, trailer_mov) VALUES(?,?,?,?,?,?,?)");
        $_sql->bindParam(1, $title);
        $_sql->bindParam(2, $synopsis);
        $_sql->bindParam(3, $duration);
        $_sql->bindParam(4, $date);
        $_sql->bindParam(5, $classification);
        $_sql->bindParam(6, $img);
        $_sql->bindParam(7, $trailer);
        $rta1 = $_sql -> execute();
        
        return $rta1;
    }

    public function RegDoneFunction($rta1){
        if ($rta1 > 0){
            include "../view/TableMovReg.php";
        }else{
            echo "No";
        }
    }

    
}

class ReadMovClass{
    public function ReadActiveFunction(){
        $conn = conectaDb();
        $sql = $conn->prepare("SELECT * FROM movie");
        $sql->execute();
        $rta1 = $sql->fetchAll();
        return $rta1;
    }

}