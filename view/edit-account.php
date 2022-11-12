<?php
$get_view = explode('/', $_GET['view']);
$id = $get_view[1];
include_once 'section/form.php';
create_form('http://localhost/personal/update-account/<?=$id?', $update_account);

include('controller/res-message-controller.php');
res_message();