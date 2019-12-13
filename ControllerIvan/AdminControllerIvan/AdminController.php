<?php
require_once __DIR__.'/../../config_ivan/conf-ivan.php';
require_once __DIR__.'/../../voc/lb_en.php';

$reponse = array();

switch($_POST['action']){
    case "addcircuit" :
        AddCircuit($smarty,$voc);
        break;
}

function AddCircuit($smarty,$voc){
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
    $arr_ville_depart = $voc["ville_depart"];
    $smarty->assign('arr_ville_depart', $arr_ville_depart);

    $reponse['form'] = $smarty->fetch("addcircuit.tpl");
}

echo json_encode($reponse);

?>
