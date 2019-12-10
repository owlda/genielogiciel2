<?php
declare(strict_types=1);
require APPROOT.'/models/Movie.php';

try {

    $user = 'root';
    $password = '';
    $server ='localhost';
    $movie = new Movie("Jack Rain II", "/img/dsd.png", "Action",12.56 , "HB", "https://gf.com/hu/fud/sd.mpeg");
    $conn = new PDO("mysql:host=$server;dbname=php-movies", $user, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $stmt= $conn->prepare("INSERT INTO movies(id, title, author, url, img, price, category) VALUES (:id,:title,:author,:url,:img,:price,:category)");
    $stmt->execute(array('id' => hexdec(uniqid()), 'title' => $movie->getTitle(), 'author'=>$movie->getProducer(),'url'=>$movie->getURL(), 'img'=>$movie->getIMG(), 'price'=>$movie->getPrice(), 'category'=>$movie->getCategory()));

        print 'Connection created and data was transfer successfully';
    } catch (PDOException $e) {
        print 'Connection failed: ' . $e->getMessage();
    }
