<?php
//Config Ivan
require_once __DIR__.'/../../config_ivan/conf-ivan.php';
//Initialize vocabulary
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
        DetailCircuit($smarty,$db,$voc);
        break;
    case 'modcircuit':
        FormModCircuit($smarty,$db, $voc);
        break;
    case 'addetape':
        FormAddEtape($smarty, $voc);
        break;
    case 'btn_register_rabais':
        EnregestrerRabais($db);
        break;
    case 'btn_register_pays':
        EnregistrerPays($smarty,$db);
        break;
    case 'btn_register_etape':
        EnregistrerEtape($smarty,$db);
        break;
    case 'btn_del_rabais':
        BtnDelRabais($db);
        break;
}

//TODO Supprimer un rabais
function BtnDelRabais($db){
    global $reponse;
    $reponse['action'] = "del_rabais";
    $sql = "DELETE FROM rabais WHERE idCircuit = " . $_POST['idCircuit'];
    $db->execute($sql);
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

//TODO Enregistrer nouveau pays
function EnregistrerPays($smarty,$db){
    global $reponse;
    $reponse['action'] = "register_pays";
    $table = 'pays';
    $record['nom'] = $_POST['new_pays'];
    $db->autoExecute($table, $record, 'INSERT');
    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $rs = $db->getAssoc('SELECT * FROM pays');
    $smarty->assign('arr_list_pays', $rs);
    $reponse['list_pays'] = $smarty->fetch("select_pays.tpl");
}

//TODO Form for Add un circuit
function FormAddCircuit($smarty, $voc){
    global $reponse;
    $reponse['action'] = 'addcircuit';
    //Initialization vocabulaire
    $smarty = AddEditCircuitSmarty($smarty, $voc);
    //Transfer data to *.tpl
    $reponse['form_add_circuit'] = $smarty->fetch("form_add_circuit.tpl");
}

//TODO Load form for Edit un circuit
function FormModCircuit($smarty,$db, $voc){
    global $reponse;
    $reponse['action'] = 'modcircuit';

    if ($_POST['idCircuit'] != "null"){
        /* Array */
        $arr_theme_circuit = $voc["arr_theme_circuit"];
        $smarty->assign('arr_theme_circuit', $arr_theme_circuit);
        $arr_status_circuit = $voc["arr_status_circuit"];
        $smarty->assign('arr_status_circuit', $arr_status_circuit);
        /* ---- */

        $smarty->assign('title', $voc["label_titre_circuit"]);
        $smarty->assign('theme', $voc["label_theme_circuit"]);
        $smarty->assign('btn_submit', $voc["btn_submit"]);
        $smarty->assign('h1_circuit', "Modifier un circuit:");
        $smarty->assign('btn_add_theme', $voc["btn_add_theme"]);
        $smarty->assign('ville_depart', $voc["label_ville_depart"]);

        //Get circuit by idCircuit
        $rs1 = GetCircuitById($_POST['idCircuit'], $db);

        $smarty->assign('db_idCircuit', $rs1[0]['idCircuit']);
        $smarty->assign('db_titre', $rs1[0]['titre']);
        $smarty->assign('db_description', $rs1[0]['description']);
        $smarty->assign('db_duree', $rs1[0]['duree']);
        $smarty->assign('db_pointDepart', $rs1[0]['pointDepart']);
        $smarty->assign('db_prix', $rs1[0]['prix']);
        $smarty->assign('db_idTheme', $rs1[0]['idTheme']);
        $smarty->assign('db_NomTheme', $rs1[0]['NomTheme']);
        $db_dateDepart = DateDBtoInputDate($rs1[0]['dateDepart']);
        $dateFin = DateDBtoInputDate($rs1[0]['dateFin']);
        $smarty->assign('db_dateDepart', $db_dateDepart);
        $smarty->assign('db_dateFin', $dateFin);
        $smarty->assign('db_idStatutCircuit', $rs1[0]['idStatutCircuit']);

        //Transfer form tpl to edit circuit
        $reponse['form_edit_circuit'] = $smarty->fetch("form_edit_circuit.tpl");


    } else {
        exit();
    }

}

//TODO Enregistrer un circuit
function EnregistrerCircuit($smarty,$db){

    global $reponse;
    $reponse['action'] = 'btn_register_circuit';

    $table = 'circuit';
    /*$record['idCircuit'] =*/
    $record['titre'] = $_POST['input_title'];
    $record['description'] = $_POST['description'];
    $record['duree'] = 0;
    $record['pointDepart'] = $_POST['input_ville_depart'];
    $record['prix'] = $_POST['prix'];
    $record['idTheme'] = (int)$_POST['SelectTheme'];
    $record['dateDepart'] = '2020-12-12 15:15:15';
    $record['dateFin'] = '2020-12-12 15:15:15';
    $record['idStatutCircuit'] = 0;

    $db->autoExecute($table, $record, 'INSERT');
}

//TODO Enregistrer un etape
function EnregistrerEtape($smarty,$db){

    global $reponse;
    $reponse['action'] = 'btn_register_etape';

    $table = 'etape';
    $record['numeroEtap'] = 0;
    $record['titre'] = $_POST['input_title'];
    $record['description'] = $_POST['description'];
    $record['duree'] = 0;
    $record['prix'] = 0;
    $record['idPays'] = (int)$_POST['SelectPays'];
    $record['dateDebut'] = $_POST['input_date'];
    $record['dateFin'] = $_POST['input_date'];
    $record['idCircuit'] = $_POST['idCircuit'];

    $db->autoExecute($table, $record, 'INSERT');
}

//TODO Lister des circuit
function ListerCircuit($smarty,$db){
    global $reponse;

    $reponse['action'] = "list_circuit";
    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $rs = $db->getAll('SELECT * FROM circuit');

    //TODO Get Nom Theme et Nom Status for un circuit
    foreach( $rs as $key=>$value){
        $db->setFetchMode(ADODB_FETCH_ASSOC);
        $SQL1 = 'SELECT * FROM typecircuit WHERE id ='. $rs[$key]['idTheme'];
        $supres = $db->getAll($SQL1);
        $rs[$key]['NomTheme'] = $supres[0]['theme'];
        $SQL2 = 'SELECT * FROM statutcircuit WHERE idStatutCircuit ='. $rs[$key]['idStatutCircuit'];
        $supres = $db->getAll($SQL2);
        $rs[$key]['NomStatutCircuit'] = $supres[0]['statut'];
        $SQL3 = 'SELECT * FROM rabais WHERE idCircuit ='. $rs[$key]['idCircuit'];
        $supres = $db->getAll($SQL3);
        if ($supres == false){
            $rs[$key]['Rabais'] = -1;
        } else {
            $rs[$key]['Rabais'] = $supres[0]['pourcentage'];
            $rs[$key]['DateDebut'] = $supres[0]['datedebut'];
            $rs[$key]['DateFin'] = $supres[0]['datefin'];
        }
    }

    $smarty->assign('arr_list_circuit', $rs);
    $reponse['list_circuit'] = $smarty->fetch("list_circuit.tpl");

}

//TODO Detail un circuit
function DetailCircuit($smarty,$db,$voc){
    global $reponse;
    $reponse['action'] = "detail_circuit";

    $idCircuit = $_POST["idCircuit"];
    $regex = "/^[1-9]+$/";
    $resultat = preg_match($regex, (int)$idCircuit);

    if($resultat === 1)
    {
        $rs1 = GetCircuitById($idCircuit, $db);
        $smarty->assign('idCircuit', $rs1[0]['idCircuit']);
        $smarty->assign('titre', $rs1[0]['titre']);
        $smarty->assign('description', $rs1[0]['description']);
        $smarty->assign('duree', $rs1[0]['duree']);
        $smarty->assign('pointDepart', $rs1[0]['pointDepart']);
        $smarty->assign('prix', $rs1[0]['prix']);
        $smarty->assign('idTheme', $rs1[0]['idTheme']);
        $smarty->assign('NomTheme', $rs1[0]['NomTheme']);
        $smarty->assign('dateDepart', $rs1[0]['dateDepart']);
        $smarty->assign('dateFin', $rs1[0]['dateFin']);
        $smarty->assign('idStatutCircuit', $rs1[0]['idStatutCircuit']);

        $arr_etape = GetAllEtapeFromCircuit($idCircuit, $db);
        $smarty->assign('arr_etape', $arr_etape);
        $smarty->assign('Nb_etape', sizeof($arr_etape));

        //Transfer data to *.tpl
        $smarty->fetch("modal_del_circuit.tpl");
        $reponse['detail_circuit'] = $smarty->fetch("detail_circuit.tpl");
        $reponse['detail_etape'] = $smarty->fetch("detail_etape.tpl");

    }
    else
    {

    }
}

//TODO Form for Add un etape
function FormAddEtape($smarty, $voc){
    global $reponse;
    $reponse['action'] = 'addetape';
    //Initialization vocabulaire
    $smarty = AddEditEtapeSmarty($smarty,$voc);
    //Transfer data to *.tpl
    $reponse['form_add_etape'] = $smarty->fetch("form_add_etape.tpl");
}

//TODO Get All Circuit from DB
function GetCircuitById($idCircuit, $db){

    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $SQL = 'SELECT * FROM circuit WHERE idCircuit = '.$idCircuit;
    $rs = $db->getAll($SQL);

    foreach($rs as $key=>$value){
        $db->setFetchMode(ADODB_FETCH_ASSOC);
        $SQL1 = 'SELECT * FROM typecircuit WHERE id ='. $rs[$key]['idTheme'];
        $supres = $db->getAssoc($SQL1);
        $rs[$key]['NomTheme'] = $supres[$rs[$key]['idTheme']];
        $SQL2 = 'SELECT * FROM statutcircuit WHERE idStatutCircuit ='. $rs[$key]['idStatutCircuit'];
        $supres = $db->getAssoc($SQL2);
        $rs[$key]['NomStatutCircuit'] = $supres[$rs[$key]['idStatutCircuit']];
    }

    return $rs;
}

//TODO Convert datetime DB to date input form
function DateDBtoInputDate($DateDB){
    $date_html = explode(" ", $DateDB);
    $DateDB = $date_html[0]."T".explode(":", $date_html[1])[0].":".explode(":", $date_html[1])[1];
    return $DateDB;
}

//TODO Get All Circuit from DB
function GetAllEtapeFromCircuit($idCircuit, $db){
    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $SQL = 'SELECT * FROM etape WHERE idCircuit = '.$idCircuit;
    $rs = $db->getAll($SQL);

    foreach($rs as $key=>$value){
        $db->setFetchMode(ADODB_FETCH_ASSOC);
        $SQL1 = 'SELECT * FROM pays WHERE idPays ='. $rs[$key]['idPays'];
        $supres = $db->getAssoc($SQL1);
        $rs[$key]['NomPays'] = $supres[$rs[$key]['idPays']];
    }
    return $rs;
}

//TODO Register un rabais pour circuit
function EnregestrerRabais($db){
    global $reponse;
    $reponse['action'] = 'register_rabais';
    $table = 'rabais';
    $record['pourcentage'] = $_POST['pourcentage'];
    $record['datedebut'] = $_POST['dateDebut'];
    $record['datefin'] = $_POST['dateFin'];
    $record['idCircuit'] = $_POST['idCircuit'];
    $db->autoExecute($table, $record, 'INSERT');
}

//TODO Transfer data to tpl smarty
function AddEditEtapeSmarty($smarty, $voc){
    $idCircuit = $_POST["idCircuit"];
    $smarty->assign('idCircuit', $idCircuit);
    $smarty->assign('h1_add_etape', $voc["lb_h1_add_etape"]);
    $smarty->assign('title', $voc["lb_titre_etape"]);
    $smarty->assign('pays', $voc["lb_pays_etape"]);
    $smarty->assign('add_new_pays', $voc["lb_add_new_pays"]);
    $smarty->assign('btn_add_pays', $voc["btn_add_pays"]);
    $smarty->assign('btn_submit', $voc["btn_submit"]);
    $smarty->assign('btn_cancel', $voc["btn_cancel"]);
    $smarty->assign('date_debut', $voc["lb_date_debut_etape"]);
    $smarty->assign('description', $voc["lb_description_etape"]);
    //Array
    $smarty->assign('arr_pays', $voc["arr_pays"]);
    return $smarty;
}

function AddEditCircuitSmarty($smarty, $voc){
    $smarty->assign('h1_circuit', $voc["lb_h1_add_circuit"]);
    $smarty->assign('title', $voc["lb_titre_circuit"]);
    $smarty->assign('theme', $voc["lb_theme_circuit"]);
    $smarty->assign('btn_submit', $voc["btn_submit"]);
    $smarty->assign('btn_cancel', $voc["btn_cancel"]);
    $smarty->assign('btn_add_theme', $voc["btn_add_theme"]);
    $smarty->assign('add_new_theme', $voc["lb_add_new_theme"]);
    $smarty->assign('ville_depart', $voc["lb_ville_depart"]);
    //Array
    $smarty->assign('arr_theme_circuit', $voc["arr_theme_circuit"]);
    return $smarty;
}

echo json_encode($reponse);

?>
