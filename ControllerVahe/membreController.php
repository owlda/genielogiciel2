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
        i_connecter($smarty);
        break;
    case 'connecter':
        connecter($smarty);
        break;
    case 'deconnect':
        deconnect();
        break;
    default: break;
}

// Les actions

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
function connecter($smarty)
{
    global $reponse;
    $reponse['action'] = 'connecter';

    //on lit le courriel et le mot de pass de la forme de connexion
    $courriel_form = $_POST['courrielCnx'];
    $motdepass_form = $_POST['motPasseCnx'];

    // le requete pour recevoir le mot de passe et le ID du client
    $requete = "SELECT idMembre, courriel, motdepass FROM membre WHERE courriel = $courriel_form";
    try{
        $unModele=new membreModele($requete,array());
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
/*
                $smarty->assign('courriel', $_SESSION['courriel']);
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
function i_connecter($smarty)
{
    global $reponse;
    $reponse['action'] = 'i_connecter';
    $smarty->assign('courriel', $_SESSION['courriel']);
    $reponse['temp'] = $smarty->fetch('menu_client.tpl');

}

// deconnect le client et destroy la session
function deconnect()
{
    session_destroy();
}

echo json_encode($reponse);
?>