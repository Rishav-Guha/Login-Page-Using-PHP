<?php
$host = 'localhost';
$user = 'root';
$password = '';
$DataBase = 'nshm';
$port = '3307';

try {
    $con = mysqli_connect($host, $user, $password, $DataBase, $port);
    if (!$con) {
        throw new Exception('Failed to connect to database');
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>