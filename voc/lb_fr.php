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
$voc["btn_add_theme"] = "Ajouter un thème";
$voc["btn_add_pays"] = "Ajouter un pays";
$voc["btn_submit"] = "Enregistrer";
$voc["btn_cancel"] = "Annuler";

//Label add/edit circuit
$voc["lb_h1_add_circuit"] = "Ajouter un circuit";
$voc["lb_titre_circuit"] = "Titre:";
$voc["lb_date_circuit"] = "Date:";
$voc["lb_description_circuit"] = "Description:";
$voc["lb_theme_circuit"] = "Thème:";
$voc["lb_add_new_theme"] = "Nouveau thème";
$voc["lb_ville_depart"] = "Ville de départ";

//Label add/edit etape
$voc["lb_h1_add_etape"] = "Ajouter un étape";
$voc["lb_titre_etape"] = "Titre:";
$voc["lb_pays_etape"] = "Pays:";
$voc["lb_date_debut_etape"] = "Date de début:";
$voc["lb_description_etape"] = "Description:";
$voc["lb_add_new_pays"] = "Nouveau pays:";


?>
