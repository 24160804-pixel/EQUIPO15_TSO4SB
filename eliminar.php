<?php
include("connection.php");

$con = connection();

$id = $_GET["id"];

$sql = "DELETE FROM articulos WHERE  id_articulo = $id";

$query = mysqli_query($con, $sql);

if($query) {  
    Header("Location: admin.php");
};