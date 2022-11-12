<?php
class Account_model
{
    private $PDO;
    public function __construct()
    {
        require_once 'config/db.php';
        $con = new db();
        $this->PDO = $con->connection();
    }
    public function insert($entity, $email, $name, $desc, $pass)
    {
        $statement = $this->PDO->prepare('INSERT INTO account VALUES(DEFAULT, :entity, :email, :name, :desc, :pass)');
        $statement->bindParam(':entity', $entity);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':desc', $desc);
        $statement->bindParam(':pass', $pass);
        return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function show($id)
    {
        $statement = $this->PDO->prepare('SELECT * FROM account where id_account = :id limit 1');
        $statement->bindParam(':id', $id);
        return ($statement->execute()) ? $statement->fetch() : false;
    }
    public function index()
    {
        $statement = $this->PDO->prepare('SELECT * FROM account');
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }
    public function update($id, $email, $pass)
    {
        $statement = $this->PDO->prepare('UPDATE account SET email=:email, password=:pass WHERE id_account=:id');
        $statement->bindParam(':email', $email);
        $statement->bindParam(':pass', $pass);
        $statement->bindParam(':id', $id);
        return ($statement->execute()) ? $id : false;
    }
    public function delete($id)
    {
        $statement = $this->PDO->prepare('DELETE FROM account WHERE id_account = :id');
        $statement->bindParam(':id', $id);
        return ($statement->execute()) ? true : false;
    }
}
