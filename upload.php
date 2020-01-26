<?php
session_start();
include 'config_ivan/conf-ivan.php';

if(!isset($_SESSION['numCircuit'])){
    exit;
}
$num_circuit = $_SESSION['numCircuit'];

$SQL = 'SELECT * FROM circuit WHERE idCircuit = '.$num_circuit;
$rs = $db->getAll($SQL);

if (sizeof($rs)<=0){
    echo "<script type='text/javascript'>alert('Circuit n\'existe pas');</script>";
    exit;
}

$mkdir = @mkdir(__DIR__.'/upload/circuits/'.$num_circuit);
$folder_name = __DIR__.'/upload/circuits/'.$num_circuit.'/';

if(!empty($_FILES))
{
    $temp_file = $_FILES['file']['tmp_name'];
    $location = $folder_name.$_FILES['file']['name'];
    $extension=strrchr($_FILES['file']['name'],'.');
    $NameFile=sha1($_FILES['file']['name'].time());

    $table = 'photo';
    $folder = '/upload/circuits/'.$num_circuit.'/';
    $record['imagePath'] = $folder.$NameFile.$extension;
    $db->autoExecute($table, $record, 'INSERT');

    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $str = '\'%'.$record['imagePath'].'\'';
    $SQL = 'SELECT * FROM photo WHERE imagePath LIKE '.$str;
    $rs = $db->getAll($SQL);

    $table = 'photocircuit';
    $record1['idCircuit'] = $num_circuit;
    $record1['idPhoto'] = $rs[0]['idPhoto'];
    $db->autoExecute($table, $record1, 'INSERT');

    @move_uploaded_file($temp_file, $folder_name.$NameFile.$extension);
    unset($temp_file);
}

if(isset($_POST["name"]))
{
    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $str = '\'%'.$_POST["name"].'\'';
    $SQL = 'SELECT * FROM photo WHERE imagePath LIKE '.$str;
    $rs = $db->getAll($SQL);
    $sql = "DELETE FROM photocircuit WHERE idPhoto = " . $rs[0]['idPhoto'];
    $db->execute($sql);

    $filename = 'upload/circuits/'.$num_circuit.'/'.$_POST["name"];
    unlink($filename);
    $idLike = '\'%'.$_POST["name"].'\'';
    $sql = "DELETE FROM photo WHERE imagePath LIKE " . $idLike;
    $db->execute($sql);
}

$result = array();
$dir = __DIR__.'/upload/circuits/'.$num_circuit;
$files = scandir($dir);
$folder_name = 'upload/circuits/'.$num_circuit.'/';
$output = '<div class="row">';

if(false !== $files)
{
    foreach($files as $file)
    {
        if('.' !=  $file && '..' != $file)
        {
            $output .= '<div class="col-md-2"><img src="'.$folder_name.$file.'" class="img-thumbnail" width="175" height="175" style="height:175px;" /><button type="button" class="btn btn-link remove_image" id="'.$file.'">Remove</button></div>';
        }
    }
}
$output .= '</div>';
echo $output;
