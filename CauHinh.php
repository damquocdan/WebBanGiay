<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webgiay";
$connect = new mysqli($servername, $username, $password, $dbname);
if ($connect->connect_error) 
    die("Không thể kết nối :" . $connect->connect_error);
else
    $connect->set_charset("utf8");

?>