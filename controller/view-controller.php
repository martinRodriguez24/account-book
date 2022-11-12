<?php
define('DEFAULT_URL', 'view/home.php');
if (isset($_GET['view'])) {
    $get_view = explode('/', $_GET['view']);
    $req_file = 'view/' . $get_view[0] . '.php';
    if (is_file($req_file)) {
        include $req_file;
    } else {
        include DEFAULT_URL;
    }
} else {
    include DEFAULT_URL;
}