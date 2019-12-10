<?php
try {

    $user = 'root';
    $password = '';
    $server ='localhost';
    $conn = new PDO("mysql:host=$server;dbname=php-movies", $user, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    print 'Connection failed: ' . $e->getMessage();
}