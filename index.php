<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:login.php');
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
    <!-- FONTS-ICONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- SCRIPTS -->
    <script defer type="text/javascript" src="js/main.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <?php include('view/section/header.php'); ?>
    <div class="container">
        <div class="content">
            <h1>Sube y administra los datos de tus cuentas</h1>
            <p>Puedes consultar tus datos cuando los necesites</p>
            <?php include 'controller/view-controller.php'; ?>
        </div>
    </div>

    <?php
    include('view/section/footer.php');
    ?>
</body>

</html>