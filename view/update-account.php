<?php
require_once("c://xampp/htdocs/personal/controller/account-controller.php");
$get_view = explode('/', $_GET['view']);
$id = $get_view[1];
$obj = new Account_controller();
$obj->update($id, $_POST['email'], $_POST['password']);