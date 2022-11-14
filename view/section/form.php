<?php

// ARRAY PARAMETERS:
// 'INPUTNAME' = ['TYPE_OF_INPUT', 'TEXT_LABEL, 'PLACEHOLDER']
$submit_account = [
    'name' => ['text', 'Nombre de usuario', 'Usuario123'],
    'entity' => ['text', 'Entidad', 'Google'],
    'email' => ['email', 'Correo', 'Ejemplo@gmail.com'],
    'desc' => ['textarea', 'Descripcion', 'Cuenta usada para...'],
    'pass' => ['password', 'Contraseña', 'Entre 8 a 50 caracteres'],
    'Subir cuenta' => ['submit']
];
$update_account = [

    'email' => ['email', 'Correo', 'Ejemplo@gmail.com'],
    'pass' => ['password', 'Contraseña', 'Entre 8 a 50 caracteres'],
    'Editar' => ['submit']
];

$login = [
    'email' => ['email', 'Correo', 'Ejemplo@gmail.com'],
    'pass' => ['password', 'Contraseña', 'Accede con tu contraseña'],
    'Acceder' => ['submit']
];

function create_form($action, $array)
{
    echo '<form method="post" action="' . $action . '" autocomplete="off" >';
    foreach ($array as $key => $val) {

        if ($val[0] == 'textarea') {
            echo '<label for="' . $key . '">' . $val[1] . '</label><br>
            <textarea name="' . $key . '" placeholder="' . $val[2] . '" maxlength="255"></textarea><br>';
        } elseif ($val[0] == 'submit') {
            echo '<input type="submit" value="' . $key . '" class="submit" />';
        } else {
            echo '<label for="' . $key . '">' . $val[1] . '</label><br>
            <input type="' . $val[0] . '" name="' . $key . '" placeholder="' . $val[2] . '" minlenght="5" maxlenght="50" required /><br>';
        }
    }
    echo '</form>';
}