<?php

$host ='localhost';
$username = 'root';
$password ='';
$dbName = 'shop_db';

$conn = new mysqli($host, $username, $password, $dbName);

if ($conn->connect_error) {
    die('pas de connection'. $conn->connect_error);

}