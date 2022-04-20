<?php
session_start();

$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "cosmetic_management";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
