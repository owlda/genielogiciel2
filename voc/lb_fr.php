<?php
$voc = array();
//Array
$voc["theme_circuit"] = array();
$db->setFetchMode(ADODB_FETCH_ASSOC);
$voc["theme_circuit"] = $db->getAssoc('SELECT * FROM typecircuit');

//TODO vocabulary AddCircuit
$voc["label_add_circuit"] = "Ajouter un circuit";
$voc["label_titre_circuit"] = "Titre:";
$voc["label_date_circuit"] = "Date:";
$voc["label_description_circuit"] = "Description:";
$voc["label_theme_circuit"] = "Thème:";
$voc["btn_add_theme"] = "Ajouter un thème";
$voc["label_ville_depart"] = "Ville de départ";
$voc["btn_submit"] = "Enregistrer";

$voc["ville_depart"] = array();
$voc["ville_depart"]['50'] = "Montréal";
$voc["ville_depart"]['40'] = "Toronto";
$voc["ville_depart"]['2'] = "New York";

$voc['email'] = "Corriel:";







?>
