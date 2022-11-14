<?php
require_once 'controller/account-controller.php';
$get_view = explode('/', $_GET['view']);
$id = $get_view[1];
$obj = new account_controller();
$obj->update($id, $_POST['email'], $_POST['pass']);