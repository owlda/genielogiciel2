<?php
$tab=array();
function enlever(){
    $conn = mysqli_connect("localhost","root", "", "dbemployes");

    global $tab;
    try{
        $idpersonne=$_POST['idpersonne'];
        $records = mysqli_query($conn,"DELETE FROM tabemployes WHERE id=$idpersonne");

        $data = array();
        while($row = mysqli_fetch_assoc($records))
        {
            $data[] = $row;
        }
        echo json_encode($data);

        mysqli_close($conn);

        $tab[0]="OK";
    }catch (Exception $e){
        $tab[0]="NOK";
    }
}
$action=$_POST['action'];
switch($action){

    case "enlever":
        enlever();
        break;
}
mysqli_close($conn);

