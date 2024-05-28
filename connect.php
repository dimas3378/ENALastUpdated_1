<?php
//$link = mysqli_connect("localhost", "root", "", "crudoperation") or die("Error " . mysqli_error($link));
$host = "localhost";
$user = "root";
$pass = "";
$db = "crudoperation";

$link = new mysqli($host, $user, $pass, $db);
echo "terkoneksi";
