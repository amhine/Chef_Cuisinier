<?php
$host = 'localhost';
$dbname = 'chef cuisinier';
$username = 'root';
$password = '';


$connect = new mysqli($host, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// echo "Connection successful!";
?>