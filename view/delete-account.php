<?php
require_once 'controller/account-controller.php';
$obj = new account_controller();
$get_view = explode('/', $_GET['view']);
$id = $get_view[1];
$obj->delete($id);
