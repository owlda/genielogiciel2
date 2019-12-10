<?php
if (isset($_POST['upload'])) {

    try{
        $user = 'root';
        $password = '';
        $server ='localhost';
        $conn = new PDO("mysql:host=$server;dbname=php-movies", $user, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


        // Get image name
        $image = $_FILES["myimage"]["name"];
        // Get text
        $imagetmp = addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

        $insert_image="INSERT INTO image_table VALUES('$imagetmp','$image')";


        $stmt= $conn->prepare("INSERT INTO images(id, image, image_text) VALUES (:id,:image,:image_text)");

        $stmt->execute(array('id' => hexdec(uniqid()), 'image' => $imagetmp, 'image_text'=> $image));

    }
    catch (PDOException $e) {
        print 'Connection failed: ' . $e->getMessage();
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <style type="text/css">
        #content{
            width: 50%;
            margin: 20px auto;
            border: 1px solid #cbcbcb;
        }
        form{
            width: 50%;
            margin: 20px auto;
        }
        form div{
            margin-top: 5px;
        }
        #img_div{
            width: 80%;
            padding: 5px;
            margin: 15px auto;
            border: 1px solid #cbcbcb;
        }
        #img_div:after{
            content: "";
            display: block;
            clear: both;
        }
        img{
            float: left;
            margin: 5px;
            width: 300px;
            height: 140px;
        }
    </style>
</head>
<body>
<div id="content">
    <form method="POST" action="test.php" enctype="multipart/form-data">
        <input type="file" name="myimage">
        <input type="submit" name="upload" value="Upload">
    </form>
</div>
</body>
</html>