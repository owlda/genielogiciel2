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
$voc["btn_add_circuit"] = "Ajouter un circuit";
$voc["btn_add_etape"] = "Ajouter un étape";
$voc["btn_add_day"] = "Ajouter un jour";
$voc["btn_add_theme"] = "Ajouter un thème";
$voc["btn_add_status"] = "Ajouter un statut";
$voc["btn_add_pays"] = "Ajouter un pays";
$voc["btn_submit"] = "Enregistrer";
$voc["btn_cancel"] = "Annuler";
$voc["btn_detail"] = "Détaillé";
$voc["btn_edit"] = "Modifier";
$voc["btn_del"] = "Supprimer";
$voc['btn_change_day'] = "Changer un jour";
$voc['btn_add_restaurant'] = "Ajouter un restaurant";
$voc['btn_add_activity'] = "Ajouter un activité";
$voc['btn_add_hotel'] = "Ajouter un hôtel";

//Label add/edit circuit
$voc["lb_status"] = "Statut";
$voc["lb_price"] = "Prix";
$voc["lb_h1_add_circuit"] = "Ajouter un circuit";
$voc["lb_title"] = "Titre";
$voc["lb_date_depart"] = "Date de départ";
$voc["lb_date_fin"] = "Date de fin";
$voc["lb_description"] = "Description";
$voc["lb_theme"] = "Thème";
$voc["lb_add_new_theme"] = "Nouveau thème";
$voc["lb_ville_depart"] = "Ville de départ";

//List
$voc["lb_h1_list_circuit"] = "Liste des circuits";
$voc["lb_rabais"] = "Rabais";

//Label add/edit etape
$voc["lb_h1_add_etape"] = "Ajouter un étape";
$voc["lb_pays"] = "Pays";
$voc["lb_ville"] = "Ville";
$voc["lb_date_debut_etape"] = "Date de début";
$voc["lb_description"] = "Description";
$voc["lb_add_new_pays"] = "Nouveau pays";
$voc["lb_number"] = "Numéro";
$voc['lb_day'] = "Jour";

$voc['lb_restaurant'] = "Restaurant(s)";
$voc['lb_activity'] = "Activité(s)";
$voc['lb_hotel'] = "Hotêl(s)";

$voc["lb_h1_add_restaurant"] = "Ajouter un restaurant";
$voc['lb_site'] = "Site";
$voc['lb_add_new_restaurant'] = "Nouveau restaurent";


?>
