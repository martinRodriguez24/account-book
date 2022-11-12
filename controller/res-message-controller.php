<?php
function res_message()
{
    $get_view = explode('/', $_GET['view']);
    if (count($get_view) > 1 && strlen($get_view[1]) > 1) {
        $res = $get_view[1];
        include('view/res-message/'.$res.'.php');
    }else {

    }
}
