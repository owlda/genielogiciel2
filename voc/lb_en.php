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
$voc['btn_submit'] = "Add";
$voc['btn_cancel'] = "Cancel";
$voc['btn_detail'] = "Detail";
$voc['btn_edit'] = "Edit";
$voc['btn_del'] = "Delete";

//Label add/edit circuit
$voc['lb_status'] = "Status";
$voc['lb_price'] = "Price";
$voc['lb_h1_add_circuit'] = "Add travel";
$voc['lb_title'] = "Title";
$voc['lb_date_depart'] = "Starting day";
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


?>
