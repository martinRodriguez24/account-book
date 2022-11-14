<?php
class login_model {
    private $PDO;
    public function __construct()
    {
        require_once 'config/db.php';
        $con = new db();
        $this->PDO = $con->connection();
    }
    public function login($email, $password) {
        $statement = $this->PDO->prepare('SELECT * FROM user where email = :email && password = :password');
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $password);
        return ($statement->execute()) ? $statement->fetch() : false;
    }
}