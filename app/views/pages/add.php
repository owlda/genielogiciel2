<?php require APPROOT.'/views/_layouts/header.php'?>
<body>
<?php require APPROOT.'/views/_layouts/navbar.php'?>
<form method="POST" action="/sandbox/public/pages/add" enctype="multipart/form-data" style="width: 60%; margin-left: 5%; margin-top: 5%">
    <div class="form-group">
        <label for="InputTitle">Title</label>
        <input type="text" name="filmTitle" class="form-control" id="inputTitle" aria-describedby="textHelp" placeholder="Enter title">
        <small id="textHelp" class="form-text text-muted">Ajouter un title pour un film</small>
    </div>
    <div class="form-group">
        <label for="InputAuthor">Autheur</label>
        <input type="text" name="filmAuthor" class="form-control" id="inputTitle" aria-describedby="textHelp" placeholder="Enter autheur">
        <small id="textHelp" class="form-text text-muted">Ajouter un autheur pour un film</small>
    </div>
    <div class="form-group">
        <label for="InputURL">URL Preview</label>
        <input type="text" name="filmURL" class="form-control" id="inputTitle" aria-describedby="textHelp" placeholder="Enter URL">
        <small id="textHelp" class="form-text text-muted">Ajouter un url preview pour un film</small>
    </div>
    <div class="form-group">
        <label for="InputPrix">Prix</label>
        <input type="text" name="filmPrix" class="form-control" id="inputTitle" aria-describedby="textHelp" placeholder="Enter price">
        <small id="textHelp" class="form-text text-muted">Ajouter un prix pour un film</small>
    </div>
    <div class="form-group">
        <label for="InputCategorie">Categorie</label>
        <input type="text" name="filmCategorie" class="form-control" id="inputTitle" aria-describedby="textHelp" placeholder="Enter category">
        <small id="textHelp" class="form-text text-muted">Ajouter une categorie pour un film</small>
    </div>
    <div id="content">
        <label for="InputImage">Image</label>
        <input type="file" name="myimage">
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="POST_TO_DB" value="Upload">Ajouter</button>
</form>
</body>
<?php require APPROOT.'/views/_layouts/footer.php' ?>
</html>
<?php

if (isset($_POST['POST_TO_DB'])) {

    require APPROOT.'/models/Movie.php';

    try {
        $user = 'root';
        $password = '';
        $server ='localhost';

        // Get image name
        $image = file_get_contents($_FILES["myimage"]["tmp_name"]);
        // Construct model of the film
        $movie = new Movie($_POST['filmTitle'], $image, $_POST['filmCategorie'],$_POST['filmPrix'], $_POST['filmAuthor'], $_POST['filmURL']);

        // Prepare the PDO
        $conn = new PDO("mysql:host=$server;dbname=project-db", $user, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        // Pre-statement for query
        $stmt= $conn->prepare("INSERT INTO movies(id, title, author, url, price, category,image) VALUES (:id,:title,:author,:url,:price,:category,:img)");
        $stmt->execute(array('id' => hexdec(uniqid()), 'title' => $movie->getTitle(), 'author'=>$movie->getProducer(),'url'=>$movie->getURL(), 'price'=>$movie->getPrice(), 'category'=>$movie->getCategory(), 'img'=>$movie->getIMG()));

    } catch (PDOException $e) {
        print 'Connection failed: ' . $e->getMessage();
    }

}

?>


