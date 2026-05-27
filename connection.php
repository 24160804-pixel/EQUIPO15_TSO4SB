<?php

function connection(){
    $host = "localhost";
    $user = "dev_user";
    $pass = "administrador123";

    $bd = "superpapeleriatony_equipo_15";

    $connect = mysqli_connect($host,$user,$pass,$bd);

    mysqli_select_db($connect,$bd);

    return $connect;
};

?>
