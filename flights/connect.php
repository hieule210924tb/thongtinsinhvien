<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'baitap';

$conn = new mysqli($server, $user, $pass, $database);
if ($conn->connect_errno) {
    die("Connection failed:" . $conn->connect_errno);
} else {
    echo 'Connection successfully';
    echo "<br>";
}
