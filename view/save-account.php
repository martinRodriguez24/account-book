<?php
require_once 'controller/account-controller.php';
require_once 'section/form.php';
include_once 'controller/res-message-controller.php';
$obj = new account_controller();
if ($_POST) {
    $obj->save($_POST['entity'], $_POST['email'], $_POST['name'], $_POST['desc'], $_POST['pass']);
}
?>
<section class="main-content">
    <div class="form-box">
        <h2>Subir cuenta</h2>
        <?php
        res_message();
        create_form('', $submit_account); ?>
    </div>
</section>