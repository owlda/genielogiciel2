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
}

//TODO Enregistrer nouveau theme
function EnregistrerTheme($smarty,$db){
    global $reponse;

    $reponse['action'] = "register_theme";

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

echo json_encode($reponse);

?>
