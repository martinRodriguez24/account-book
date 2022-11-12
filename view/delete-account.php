<?php
require_once 'C:\xampp\htdocs\personal\controller/account-controller.php';
$obj = new Account_controller();
$get_view = explode('/', $_GET['view']);
$id = $get_view[1];
$obj->delete($id);
