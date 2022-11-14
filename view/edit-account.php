<?php
require_once 'section/form.php';
require_once 'controller/res-message-controller.php';
$get_view = explode('/', $_GET['view']);
$id = $get_view[1];
?>
<section class="main-content">
    <div class="form-box">
        <h1>Edita tu cuenta</h1>
        <?php
        res_message();
        create_form('http://localhost/account-book/update-account/' . $id, $update_account);
        ?>
    </div>
</section>