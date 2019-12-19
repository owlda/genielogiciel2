<?php
$voc = array();
//Array from BD
$voc["arr_theme_circuit"] = array();
$db->setFetchMode(ADODB_FETCH_ASSOC);
$voc["arr_theme_circuit"] = $db->getAssoc('SELECT * FROM typecircuit');

$voc["arr_status_circuit"] = array();
$db->setFetchMode(ADODB_FETCH_ASSOC);
$voc["arr_status_circuit"] = $db->getAssoc('SELECT * FROM statutcircuit');

$voc["arr_pays"] = array();
$db->setFetchMode(ADODB_FETCH_ASSOC);
$voc["arr_pays"] = $db->getAssoc('SELECT * FROM pays');

//TODO vocabulary AddCircuit
$voc["label_add_circuit"] = "Ajouter un circuit";
$voc["label_titre_circuit"] = "Titre:";
$voc["label_date_circuit"] = "Date:";
$voc["label_description_circuit"] = "Description:";
$voc["label_theme_circuit"] = "Thème:";
$voc["btn_add_theme"] = "Ajouter un thème";
$voc["label_ville_depart"] = "Ville de départ";
$voc["btn_submit"] = "Enregistrer";

$voc['email'] = "Corriel:";







?>
