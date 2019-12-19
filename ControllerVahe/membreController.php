<?php
/*require_once __DIR__.'/../config_ivan/conf-ivan.php';*/

require_once("../includesVahe/modele.inc.php");

$reponse=array();

// Le controlleur

$action=$_POST['action'];

switch ($action){
    case 'devenirmembre':
        enregistrerMembre();
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

echo json_encode($reponse);
?>

