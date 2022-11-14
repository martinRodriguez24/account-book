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
        header('location: http://localhost/account-book/');
    } else {
        header('location: http://localhost/account-book/login.php');
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
    <link rel="stylesheet" href="http://localhost/account-book/css/styles.css" />
    <link rel="stylesheet" href="http://localhost/account-book/css/styles.css" />
    <!-- FONTS-ICONS -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- SCRIPTS -->
    <script defer type="text/javascript" src="js/main.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    <?php include 'view/section/footer.php'; ?>
</body>

</html>