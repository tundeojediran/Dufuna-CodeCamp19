<?php

$host = "localhost";
$username = "root";
$password = "mysql";
$dbname = "curry";
$dsn = "mysql:host=$host;dbname=$dbname";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);
