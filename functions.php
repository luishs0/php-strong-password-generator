<?php
$length = intval($_GET["length"] ?? 0);

$caracters = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZabdcefghijklmnñopqrstuvwxyz0123456789+*^-_<>¿?¡![]#$%&/()={}";
$caracters_length = strlen($caracters);
$password = "";

function createPassword($length, $caracters, $caracters_length, $password)
{

    for ($i = 0; $i < $length; $i++) {
        $cur_caracter = $caracters[rand(0, ($caracters_length - 1))];
        $password = $password . $cur_caracter;
    }
    if (!empty($password)) {
        $_SESSION["password"] = $password;
    }
    return $password;
}
