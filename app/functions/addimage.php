<?php
try{
    $user = 'root';
    $password = '';
    $server ='localhost';
    $conn = new PDO("mysql:host=$server;dbname=php-movies", $user, $password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($conn, $_POST['image_text']);


    $stmt= $conn->prepare("INSERT INTO images(id, image, image_text) VALUES (:id,:image,:image_text)");

    $stmt->execute(array('id' => hexdec(uniqid()), 'image' => $image, 'image_text'=>$image_text));

    print 'Connection created and data was transfer successfully';
} catch (PDOException $e) {
    print 'Connection failed: ' . $e->getMessage();
}
