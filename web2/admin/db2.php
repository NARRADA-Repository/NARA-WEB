<?php
$connect = new mysqli("localhost", "root", "", "nara_db");

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>
