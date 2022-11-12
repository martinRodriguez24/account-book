<?php
require_once('controller/account-controller.php');
$obj = new Account_controller();
$rows = $obj->index();
?>

<?php if ($rows) : ?>
    <div class="main-content">
        <?php foreach ($rows as $key => $val) : ?>
            <div class="account-box">

                <div class="account-info">
                    <p><?= $val[1]; ?></p>
                    <p><?= $val[4]; ?></p>
                </div>
                <div class="account-option">
                    <div>
                    <a class="show-btn" href="show-account/<?= $val[0]; ?>">ver</a>
                    </div>
                <div>
                    <a href="edit-account/<?= $val[0]; ?>">actualizar</a>
                    <a href="delete-account/<?= $val[0]; ?>">borrar</a>
                </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

<?php else : ?>
    <p>No hay registros</p>
<?php endif; ?>