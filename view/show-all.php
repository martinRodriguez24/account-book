<?php
require_once 'controller/account-controller.php';
$obj = new account_controller();
$rows = $obj->index();
?>

<?php if ($rows) : ?>
    <div class="main-content">
        <?php foreach ($rows as $key => $val) :
            if ($key % 2 == 0) { ?>
                <div class="account-box account-bg">
                <?php } else { ?>
                    <div class="account-box">

                    <?php } ?>
                    <section class="account-info">
                        <h2><?= $val[1]; ?></h2>
                        <p><?= $val[4]; ?></p>
                    </section>
                    <section class="account-option">
                        <div>
                            <a href="show-account/<?= $val[0]; ?>">Ver <i class="fa-solid fa-eye"></i></a>
                        </div>
                        <div>
                            <a href="edit-account/<?= $val[0]; ?>">Editar <i class="fa-solid fa-pen-to-square"></i> </a>
                            <a href="delete-account/<?= $val[0]; ?>">Borrar <i class="fa-solid fa-trash"></i> </a>
                        </div>
                    </section>
                    </div>
                <?php endforeach; ?>
                </div>

            <?php else : ?>
                <p>No hay registros</p>
            <?php endif; ?>