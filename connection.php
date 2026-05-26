<?php

function connection(){
    $host = "localhost";
    $user = "dev_user";
    $pass = "administrador123";

    $bd = "tso_practica";

    $connect = mysqli_connect($host,$user,$pass,$bd);

    mysqli_select_db($connect,$bd);

    return $connect;
};

?>