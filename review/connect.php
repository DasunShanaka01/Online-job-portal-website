<?php
$DB_name = 'hire_net';
$DB_username = 'root';
$DB_password = '';
$server = 'localhost';

$connect = mysqli_connect("localhost:3307", "root", "", "hire_net");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
} else {

}
?>