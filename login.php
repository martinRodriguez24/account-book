<?php
require_once('controller/login-controller.php');
$obj = new login_controller();

if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $data = $obj->login($email, $password);
    if ($data) {
        session_start();
        $_SESSION['admin'] = $data[1];
        header('location: http://localhost/personal/');
    } else {
        header('location: http://localhost/personal/login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- STYLES.CSS -->
    <link rel="stylesheet" href="http://localhost/personal/css/styles.css" />
</head>

<body>
    <div class="container">
        <div class="content">
        <h1>Inicia sesion para poder ver y modificar tus cuentas</h1>
            
            <section class="main-content">
                <div class="form-box">
                    <h2>Introduce tus datos</h2>
                    <?php require_once 'view/section/form.php';
                    create_form('', $login);
                    ?>
                </div>
            </section>
        </div>
    </div>
</body>

</html>