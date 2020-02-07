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
        $reponse['count_item_cart'] = CoutItemToCart($_SESSION['id'], $db);
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

    $reponse['count_item_cart'] = CoutItemToCart($_SESSION['id'], $db);
    $t=0;

}

function CoutItemToCart($idMEmbre, $db){

    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $rs = $db->getAll("SELECT COUNT(*) as count FROM panier WHERE idMembre = " . $idMEmbre);
    return $rs[0]['count'];

}

echo json_encode($reponse);

?>