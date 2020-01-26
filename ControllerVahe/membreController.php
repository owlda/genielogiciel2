<?php
session_start();
require_once('../config_ivan/conf-ivan.php');

require_once("../includesVahe/modele.inc.php");

$reponse=array();

// Le controlleur

$action=$_POST['action'];

switch ($action){
    case 'devenirmembre':
        enregistrerMembre();
        break;
    case 'i_connecter':
        i_connecter($smarty, $db);
        break;
    case 'connecter':
        connecter($smarty, $db);
        break;
    case 'deconnect':
        deconnect();
        break;
    case 'showcircuit':
        $id = $_POST['id'];
        showcircuit($smarty, $db, $id);
    default: break;
}

// Les actions

// cette fonction fait requet à la base de données pour recevoir les données de circuit avec id pour montrer au client
function showcircuit($smarty, $db, $id)
{

}

// Enregistre les données de la formulaire créer un compte
function enregistrerMembre()
{
    global $reponse;
    $reponse['action']='devenirmembre';

/*    $record['nomMembre'] = $_POST['txtNomNouv'];
    $record['prenomMembre'] = $_POST['txtPrenomNouv'];
    $record['courriel'] = $_POST['txtCourrielNouv'];
    $record['motdepass'] = $_POST['txtMotPasseNouv'];
    $record['telephone'] = $_POST['txtTelephone'];
    $record['adresse'] = $_POST['txtAdresse'];
    $record['villle'] = $_POST['txtVille'];
    $record['pays'] = $_POST['txtPays'];
    $record['codepostal'] = $_POST['txtCodePostal'];*/

    $prenom = $_POST["txtPrenomNouv"];
    $nom = $_POST["txtNomNouv"];
    $courriel = $_POST["txtCourrielNouv"];
    $motdepass = $_POST["txtMotPasseNouv"];
    $motdepassconf = $_POST["txtMotPasseConf"];
    $telephone = $_POST["txtTelephone"];
    $adresse = $_POST["txtAdresse"];
    $ville = $_POST["txtVille"];
    $pays = $_POST["txtPays"];
    $codepostale = $_POST["txtCodePostal"];


    //On verifie si les deux mot de passe sésis sont identique
    if($_POST['txtMotPasseNouv'] != $_POST["txtMotPasseConf"])
    {
        $reponse['msg']="NOK";
    }else{
        try{

            $requete="INSERT INTO membre (nomMembre, prenomMembre, courriel, motdepass, telephone, adresse, ville, pays, codepostal) VALUES(?,?,?,?,?,?,?,?,?)";
            $unModele=new membreModele($requete,array($nom, $prenom, $courriel,  $motdepass, $telephone, $adresse, $ville, $pays, $codepostale));
            $stmt=$unModele->executer();
            $reponse['msg']="OK";

        }catch(Exception $e){
        }finally{
            unset($unModele);
        }
    }
}

// cette fonction fait la login du client
function connecter($smarty, $db)
{
    global $reponse;
    $reponse['action'] = 'connecter';

    //on lit le courriel et le mot de pass de la forme de connexion
    $courriel_form = $_POST['courrielCnx'];
    $motdepass_form = $_POST['motPasseCnx'];

    // le requete pour recevoir le mot de passe et le ID du client
    $requete = "SELECT idMembre, courriel, motdepass FROM membre WHERE courriel = ?";
    try{
        $unModele=new membreModele($requete,array($courriel_form));
        $stmt=$unModele->executer();
        $ligne = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$ligne)
        {
            //la requete retourne false si le courriel n'existe pas
            $reponse['msg'] = 'NOTMEMBER';
        }
        else
        {
            // si le courriel existe dans la base de données, on vérifie le mot de pass
            if($motdepass_form == $ligne['motdepass']){
                // si le mot de pass est correct, on ouvre une session

                $_SESSION['id'] = $ligne['idMembre'];
                $_SESSION['sessionstatus'] = true;
                $_SESSION['courriel'] = $ligne['courriel'];

/*                $smarty->assign('courriel', $_SESSION['courriel']);
                $smarty->fetch('../tmp/template/menu_client.tpl');*/


            }
            else{
                // si le mot de pass n'est pas correct on envoit un message
                $reponse['msg'] = 'BADPASS';
            }

        }

    }catch(Exception $e){
    }finally{
        unset($unModele);

    }

}

// pour loader la page du client après la connexion
function i_connecter($smarty, $db)
{
    global $reponse;

    $requete = "SELECT * FROM circuit limit  3"; // we select first three circuits to show on the main page
    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $arrayCircuit = $db->getAll($requete);
    $smarty->assign('arrayCircuit', $arrayCircuit); //arrayCircuit of the circuit
    //$arr['Photo'] = array('1'=>'11111','2'=>'22222');
   // $arrayCircuit[0]['photo'] = $arr['Photo'];

    $reponse['card1'] = $smarty->fetch('cardssliderVaheContent.tpl');

/*    try{
        $unModele=new membreModele($requete, $arrayCircuit);
        $stmt=$unModele->executer();
        $ligneCircuit = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$ligneCircuit)
        {
            //la requete retourne false si la table est vide
            $reponse['msg'] = 'table circuit empty';
        }
        else
        {
            // we add tha data to smarty variables

                $idCircuit = $ligneCircuit['idCircuit'];
                $titreCircuit = $ligneCircuit['titre'];
                $descCircuit = $ligneCircuit['description'];
                $reponse['msg'] = 'OK';
                $smarty->assign('idCircuit1', $ligneCircuit['idCircuit']); //id of the circuit
                $smarty->assign('titreCircuit1', $ligneCircuit['titre']); // title of the circuit
                $smarty->assign('descCircuit1', $ligneCircuit['description']); // description of the circuit

                $reponse['card1'] = $smarty->fetch('../tmp/template/cardssliderVaheContent.tpl');
                // we fetch variables into cardssliderVahe.tpl
        }
    }catch(Exception $e){
    }finally{
        unset($unModele);
    }*/

    $reponse['action'] = 'i_connecter'; //on traite la valeur 'i_connecter' dans la vue pour ajouter le menu du client
    $smarty->assign('courriel', $_SESSION['courriel']); // to show the e-mail of the client on the mene
    $reponse['temp'] = $smarty->fetch('menu_client.tpl'); // we pass the code of menu template to vue


   /* $requete = 'SELECT * FROM circuit';
    try{
        $unModel = new membreModele($requete, array());
        $stmt = $unModel->executer();
        $ligne = $stmt->fetch(PDO::FETCH_ASSOC);
        $reponse['id'] = $ligne['idCircuit'];
        $smarty->assign('id', $ligne['idCircuit']);
        $smarty->fetch('carousel_vahe.tpl');

    }
    catch(Exception $e){

    }finally{
        unset($unModele);
    }*/

}

// deconnect le client et destroy la session
function deconnect()
{
    global $reponse;
    $reponse['action'] = 'deconnect';
    session_destroy();

}

echo json_encode($reponse);
?>