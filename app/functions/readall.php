<?php
$link = mysqli_connect("localhost", "root", "", "project-db");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT * FROM movies";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

        print "<div class='container-films'>";
         while($row = mysqli_fetch_array($result)){
             print "<div class='card' style='margin: 20px'>";
             print '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
             print "<div class='card-body'>";
             print "<h5 class='card-title'>".$row['title']."</h5>";
             print "<p class='card-text'></p>";
             print "</div>";
             print "<ul class=\"list-group list-group-flush\">";
             print "<li class=\"list-group-item\">".$row['author']."</li>";
             print "<li class=\"list-group-item\">".$row['price']."</li>";
             print "</ul>";
             print "<div class='card-body'>";
             print "<a class='align-self-end btn btn-lg btn-block btn-primary' href=".$row['url'].">Preview</a>";
             print "</div>";
             print "</div>";
            }
        echo "</div>";
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);

