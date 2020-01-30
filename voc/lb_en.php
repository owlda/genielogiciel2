<?php
//Array from BD
$voc["arr_theme_circuit"] = array();
$db->setFetchMode(ADODB_FETCH_ASSOC);
$voc["arr_theme_circuit"] = $db->getAll('SELECT * FROM typecircuit');

$voc["arr_status_circuit"] = array();
$db->setFetchMode(ADODB_FETCH_ASSOC);
$voc["arr_status_circuit"] = $db->getAssoc('SELECT * FROM statutcircuit');

$voc["arr_pays"] = array();
$db->setFetchMode(ADODB_FETCH_ASSOC);
$voc["arr_pays"] = $db->getAll('SELECT * FROM pays');

//Button
$voc["btn_add_theme"] = "Add theme";
$voc["btn_add_status"] = "Add status";
$voc["btn_add_pays"] = "Add country";
$voc["btn_submit"] = "Add";
$voc["btn_cancel"] = "Cancel";

//Label add/edit circuit
$voc["lb_status"] = "Status";
$voc["lb_price"] = "Price";
$voc["lb_h1_add_circuit"] = "Add trip";
$voc["lb_title"] = "Title:";
$voc["lb_date_depart"] = "Starting day";
$voc["lb_description_circuit"] = "Description";
$voc["lb_theme"] = "Theme:";
$voc["lb_add_new_theme"] = "New theme";
$voc["lb_ville_depart"] = "Ville de départ";

//Label add/edit etape
$voc["lb_h1_add_etape"] = "Ajouter un étape";
$voc["lb_titre_etape"] = "Titre:";
$voc["lb_pays_etape"] = "Pays:";
$voc["lb_date_debut_etape"] = "Date de début";
$voc["lb_description_etape"] = "Description:";
$voc["lb_add_new_pays"] = "Nouveau pays:";


?>
