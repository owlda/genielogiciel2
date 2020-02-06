<?php
//Array from BD
$voc['arr_theme_circuit'] = array();
$db->setFetchMode(ADODB_FETCH_ASSOC);
$voc['arr_theme_circuit'] = $db->getAll('SELECT * FROM typecircuit');

$voc['arr_status_circuit'] = array();
$db->setFetchMode(ADODB_FETCH_ASSOC);
$voc['arr_status_circuit'] = $db->getAssoc('SELECT * FROM statutcircuit');

$voc['arr_pays'] = array();
$db->setFetchMode(ADODB_FETCH_ASSOC);
$voc['arr_pays'] = $db->getAll('SELECT * FROM pays');

//Button
$voc['btn_add_circuit'] = "Add travel";
$voc['btn_add_etape'] = "Add etape";
$voc['btn_add_day'] = "Add day";
$voc['btn_add_theme'] = "Add theme";
$voc['btn_add_status'] = "Add status";
$voc['btn_add_pays'] = "Add country";
$voc['btn_add_ville'] = "Add Town";
$voc['btn_submit'] = "Add";
$voc['btn_cancel'] = "Cancel";
$voc['btn_detail'] = "Detail";
$voc['btn_edit'] = "Edit";
$voc['btn_del'] = "Delete";
$voc['btn_change_day'] = "Change day";
$voc['btn_add_restaurant'] = "Add restaurant";
$voc['btn_add_activity'] = "Add activity";
$voc['btn_add_hotel'] = "Add hotel";

//Label add/edit circuit
$voc['lb_status'] = "Status";
$voc['lb_price'] = "Price";
$voc['lb_h1_add_circuit'] = "Add travel";
$voc['lb_title'] = "Title";
$voc['lb_date_depart'] = "Starting day";
$voc["lb_date_debut"] = "Starting day";
$voc['lb_date_fin'] = "End day";
$voc['lb_description'] = "Description";
$voc['lb_theme'] = "Theme";
$voc['lb_add_new_theme'] = "New theme";
$voc['lb_ville_depart'] = "Starting city";

$voc['lb_h1_list_circuit'] = "List of travels";
$voc['lb_rabais'] = "Discount";

//Label add/edit etape
$voc['lb_h1_add_etape'] = "Add etape";
$voc['lb_pays'] = "Contry";
$voc['lb_ville'] = "Town";
$voc['lb_date_debut_etape'] = "Date de début";
$voc['lb_add_new_pays'] = "New country";
$voc['lb_number'] = "Number";
$voc['lb_day'] = "Day";

$voc['lb_restaurant'] = "Restaurant";
$voc['lb_activity'] = "Activity";
$voc['lb_hotel'] = "Hotel";

$voc["lb_h1_add_restaurant"] = "Add restaurant";
$voc['lb_site'] = "Site";
$voc['lb_add_new_restaurant'] = "New restaurant";

$voc["lb_h1_add_rabais"] = "Add discount";
$voc["lb_place"] = "Place";

?>
