<?php
require_once 'controller/account-controller.php';
require_once 'controller/res-message-controller.php';
$get_view = explode('/', $_GET['view']);
$id = $get_view[1];
$obj = new account_controller();
$data = $obj->show($id);
if ($id == 'not-found') {
    res_message();
}
?>
<section class="main-content">
    <div class="account-information">
    <h2><?= $data['username']?></h2>
    <p>Cuenta para "<?= $data['entity'] ?>"</p>
    <p>Contraseña: <?= $data['password']; ?></p>
    </div>
</section>