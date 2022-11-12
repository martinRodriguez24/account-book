<?php
require_once('controller/account-controller.php');
include('controller/res-message-controller.php');
$get_view = explode('/', $_GET['view']);
$id = $get_view[1];
$obj = new Account_controller();
$data = $obj->show($id);
if($id == 'not-found') { 
res_message();
} 
?>
<?= $data['password']; ?>
