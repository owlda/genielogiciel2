<?php
$dsn = 'mysql:dbname=bd; host=127.0.0.1';
$user = 'root';
$password = 'P@ssw0rd';

try {
    $dbh = new PDO($dsn, $user, $password);
    echo 'Connection created successfully';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}