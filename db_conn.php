<?php

$sname = "localhost:3306";
$uname = "root";
$password = "";

$db_name = "test_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn) {
    echo "Falló la conexión";
}


