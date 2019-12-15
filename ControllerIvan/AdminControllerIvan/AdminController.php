<?php
require_once __DIR__.'/../../config_ivan/conf-ivan.php';
require_once __DIR__.'/../../voc/lb_fr.php';

$reponse = array();

switch($_POST['action']){
    case "addcircuit" :
        FormAddCircuit($smarty,$voc);
        break;
    case 'btn_register_theme':
        EnregistrerTheme($smarty,$db);
        break;
    case 'btn_register_circuit':
        EnregistrerCircuit($smarty,$db);
        break;
    case 'list_circuit':
        ListerCircuit($smarty,$db);
        break;
    case 'detail_circuit':
        DetailCircuit($smarty,$db);
        break;


}

//TODO Enregistrer nouveau theme
function EnregistrerTheme($smarty,$db){
    global $reponse;

    $reponse['action'] = "register_circuit";

    $table = 'typecircuit';
    $record['theme'] = $_POST['new_theme'];
    $db->autoExecute($table, $record, 'INSERT');

    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $rs = $db->getAssoc('SELECT * FROM typecircuit');
    $smarty->assign('arr_list_theme', $rs);
    $reponse['list_theme'] = $smarty->fetch("select_themes.tpl");
}

//TODO Ajouter Form un circuit
function FormAddCircuit($smarty, $voc){
    global $reponse;
    $reponse['action'] = 'addcircuit';


    $smarty->assign('title', $voc["label_titre_circuit"]);
    $smarty->assign('theme', $voc["label_theme_circuit"]);
    $smarty->assign('btn_submit', $voc["btn_submit"]);
    $smarty->assign('h1_circuit', $voc["label_add_circuit"]);
    $smarty->assign('btn_add_theme', $voc["btn_add_theme"]);
    $smarty->assign('ville_depart', $voc["label_ville_depart"]);

    //Array
    $arr_theme_circuit = $voc["theme_circuit"];
    $smarty->assign('arr_theme_circuit', $arr_theme_circuit);
/*    $arr_ville_depart = $voc["ville_depart"];
    $smarty->assign('arr_ville_depart', $arr_ville_depart);*/

    $reponse['form'] = $smarty->fetch("addcircuit.tpl");
}

//TODO Enregistrer un circuit
function EnregistrerCircuit($smarty,$db){
    $table = 'circuit';
    /*$record['idCircuit'] =*/
    $record['titre'] = $_POST['input_title'];
    $record['description'] = $_POST['description'];
    $record['duree'] = 0;
    $record['pointDepart'] = $_POST['input_ville_depart'];
    $record['prix'] = 0;
    $record['idTheme'] = (int)$_POST['SelectTheme'];
    $record['dateDepart'] = $_POST['input_date'];
    $record['dateFin'] = $_POST['input_date'];
    $record['idStatutCircuit'] = 0;

    $db->autoExecute($table, $record, 'INSERT');

}

//TODO Lister des circuit
function ListerCircuit($smarty,$db){
    global $reponse;

    $reponse['action'] = "list_circuit";
    $db->setFetchMode(ADODB_FETCH_ASSOC);

    $rs = $db->getAssoc('SELECT * FROM circuit');

    foreach( $rs as $key=>$value){
        $db->setFetchMode(ADODB_FETCH_ASSOC);
        $SQL1 = 'SELECT * FROM typecircuit WHERE id ='. $rs[$key]['idTheme'];
        $supres = $db->getAssoc($SQL1);
        $rs[$key]['idTheme'] = $supres[$rs[$key]['idTheme']];
        $SQL2 = 'SELECT * FROM statutcircuit WHERE idStatutCircuit ='. $rs[$key]['idStatutCircuit'];
        $supres = $db->getAssoc($SQL2);
        $rs[$key]['idStatutCircuit'] = $supres[$rs[$key]['idStatutCircuit']];
    }


    $smarty->assign('arr_list_circuit', $rs);
    $reponse['list_circuit'] = $smarty->fetch("list_circuit.tpl");

}

//TODO Lister des circuit
function DetailCircuit($smarty,$db){

    global $reponse;

    $reponse['action'] = "detail_circuit";

    $idCircuit = $_POST["idCircuit"];
    $regex = "/^[1-9]+$/";
    $resultat = preg_match($regex, (int)$idCircuit);
    if($resultat === 0)
    {
        $messageCourriel = "Le courriel est invalide.";
    }
    else
    {
        $valideCourriel = true;
    }



}

echo json_encode($reponse);

?>
