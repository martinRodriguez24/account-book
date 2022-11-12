<?php
class login_controller
{
private $model;
public function __construct()
{
    require_once 'model/login-model.php';
    $this->model = new login_model();
}
    public function login($email, $pass)
    {
        return ($this->model->login($email, $pass) != false) ? $this->model->login($email, $pass) : header('Location: login.php');
    }
}
