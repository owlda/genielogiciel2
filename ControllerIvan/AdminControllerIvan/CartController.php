<?php
session_start();
//Config Ivan
require_once __DIR__ . '/../../config_ivan/conf-ivan.php';
$voc = null;

$reponse = array();

switch ($_POST['action']) {
    case "addpanier" :
        AddToCart($smarty, $voc, $db);
        break;
    case "panier_count" :
        global $reponse;
        $reponse['action'] = "panier_count";
        if (isset($_SESSION['id'])){
            $reponse['count_item_cart'] = CoutItemToCart($_SESSION['id'], $db);
        } else {
            $reponse['count_item_cart'] = 0;
        }
        break;
    case "show_cart_modal" :
        ShowCart($smarty, $voc, $db);
        break;
}

function AddToCart($smarty, $voc, $db){

    global $reponse;
    $reponse['action'] = "add_to_cart";
    $table = 'panier';
    $record['idMembre'] = $_SESSION['id'];
    $record['idCircuit'] = $_POST['idCircuit'];
    $record['montant'] = 0;
    $db->autoExecute($table, $record, 'INSERT');

    $reponse['idCircuit'] = $_POST['idCircuit'];
    $reponse['count_item_cart'] = CoutItemToCart($_SESSION['id'], $db);
    $t=0;

}

function CoutItemToCart($idMEmbre, $db){
    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $rs = $db->getAll("SELECT COUNT(*) as count FROM panier WHERE idMembre = " . $idMEmbre);
    return $rs[0]['count'];
}

function GetCircuitById($idCircuit, $db){
    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $SQL = 'SELECT * FROM circuit WHERE idCircuit = '.$idCircuit;
    $rs = $db->getAll($SQL);
    return $rs[0];
}

function ShowCart($smarty, $voc, $db){
    global $reponse;
    $reponse['action'] = "show_cart";

    if (isset($_SESSION['id'])){
        $reponse['res'] = "USER_OK";
        $db->setFetchMode(ADODB_FETCH_ASSOC);
        $rs = $db->getAll("SELECT * FROM panier WHERE idMembre = " . $_SESSION['id']);

        if (sizeof($rs)){
            foreach($rs as $key=>$value){
                $arr_circuit_cart[$key] = GetCircuitById($rs[$key]['idCircuit'], $db);
            }
            $reponse['count_item_cart'] = sizeof($rs);
        }
    } else {
        $reponse['res'] = "USER_NOK";
    }



}

echo json_encode($reponse);

?>