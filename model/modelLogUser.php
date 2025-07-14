<?php
class LoginModel
{

    private $conn;

    public function __construct()
    {
        $this->db();
    }

    public function db()
    {
        $this->conn = conectaDb();
    }

    public function startSession($email, $pass)
    {

        $emailU = $email;
        $password = $pass;

        $sql = $this->conn->prepare("SELECT * FROM login_user WHERE user_log=? AND pass_log=?");
        $sql->bindParam(1, $emailU);
        $sql->bindParam(2, $password);
        $sql->execute();

        $user = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $user;
    }


}