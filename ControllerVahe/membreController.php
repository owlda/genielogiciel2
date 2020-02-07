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
        showcircuit($smarty, $db);
        break;
    case 'addpanier':
        addpanier($smarty, $db);
        break;
    case 'main':
        main($smarty, $db);
        break;
    default: break;
}

// Les actions

/*function main($smarty, $db)
{
    $requete = "SELECT * FROM circuit limit  3"; // we select first three circuits to show on the main page
    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $arrayCircuit = $db->getAll($requete);

    foreach ($arrayCircuit as $key=>$value){
        $idCircuit = $arrayCircuit[$key]['idCircuit'];
        $requet = "SELECT * FROM photoCircuit WHERE idCircuit = ".$idCircuit." limit 1";
        $idPhoto = $db->getAll($requet);

        $requet2 = "SELECT * FROM photo WHERE idPhoto = ".$idPhoto[0]['idPhoto'];
        $path = $db->getAll($requet2);
        $str = $path[0]['imagePath'];
        $arrayCircuit[$key]['photo'] = ltrim($str, '/');

    }
    $smarty->assign('arrayCircuit', $arrayCircuit); //arrayCircuit of the circuit

    $reponse['card1'] = $smarty->fetch('card_slider_main.tpl');


    $reponse['action'] = 'main';
}*/

// cette fonction fait requet à la base de données pour recevoir les données de circuit avec id pour montrer au client
function showcircuit($smarty, $db)
{
    global $reponse;
    $idCircuit = $_POST['id'];
    $reponse['action'] = 'showcircuit';
    $requet = "SELECT * FROM circuit WHERE idCircuit = ".$idCircuit;
    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $circuit = $db->getAll($requet);
    $titre = $circuit[0]['titre'];
    $description = $circuit[0]['description'];
    $prix = $circuit[0]['prix'];

    // we find ids of the photos of the circuits after we find paths of the photo and put in the array
    $arrayPhoto = array();
    $requet = "SELECT * FROM photocircuit WHERE idCircuit=".$idCircuit." limit 3"; // to find photo's ids of the circuit from tablle photocircuit
    $idPhotosCircuit = $db->getAll($requet);
    foreach($idPhotosCircuit as $key=>$value)
    {
        $requet = "SELECT * FROM photo WHERE idPhoto=".$idPhotosCircuit[$key]['idPhoto']; // to find photo path by photo id from table photo
        $path = $db->getAll($requet);
        $str = ltrim($path[0]['imagePath'], '/');
        array_push($arrayPhoto, $str);
    }

    // Here we need to get all the etaps for this circuit

    $requet = "SELECT * FROM etape WHERE idCircuit = ".$idCircuit." ORDER BY numeroEtap ASC";
    $arrayetap = $db->getAll($requet);

    foreach($arrayetap as $key=>$value)
    {
        $etaptemp = $arrayetap[$key]['idEtape'];
        $requet = "select jour.idJour, jour.description as jdesc, jour.numeroJour, hotel.idHotel as hid, hotel.titre as htitre, hotel.site as hsite, activity.titre as atitre, 
                activity.description as adesc, activity.idActivity as aid, restaurent.idRestaurent as rid, restaurent.titre as rtitre, restaurent.site as rsite  from jour left join hotelsjour on jour.idJour = hotelsjour.idJour 
                left join hotel on hotelsjour.idHotel = hotel.idHotel left join activity on jour.idJour = activity.idJour left join restaurentsjour on 
                jour.idJour=restaurentsjour.idJour left join restaurent on restaurent.idRestaurent = restaurentsjour.idRestaurent where jour.idEtape =".$etaptemp;
        $arrayjour = $db->getAll($requet);
        $arrayetap[$key]['jour'] = $arrayjour;
    }


    $smarty->assign('arrayetap', $arrayetap);
    $smarty->assign('arrayPhoto', $arrayPhoto);
    $smarty->assign('titre', $titre);
    $smarty->assign('description', $description);

    $reponse['circuit'] = $smarty->fetch('circuit_details.tpl');
}

// Enregistre les données de la formulaire créer un compte
function enregistrerMembre()
{
    global $reponse;
    $reponse['action']='devenirmembre';

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
    if(isset($_SESSION['sessionstatus'])){
        if ($_SESSION['sessionstatus'] == true) {
            $smarty->assign('courriel', $_SESSION['courriel']); // to show the e-mail of the client on the mene
            $reponse['temp'] = $smarty->fetch('menu_client.tpl');
        }
    }else
        {$reponse['temp'] = $smarty->fetch('menu_ren.tpl');}


    $requete = "SELECT * FROM circuit limit  3"; // we select first three circuits to show on the main page
    $db->setFetchMode(ADODB_FETCH_ASSOC);
    $arrayCircuit = $db->getAll($requete);

    foreach ($arrayCircuit as $key=>$value){
        $idCircuit = $arrayCircuit[$key]['idCircuit'];
        $requet = "SELECT * FROM photoCircuit WHERE idCircuit = ".$idCircuit." limit 1";
        $idPhoto = $db->getAll($requet);

        $requet2 = "SELECT * FROM photo WHERE idPhoto = ".$idPhoto[0]['idPhoto'];
        $path = $db->getAll($requet2);
        $str = $path[0]['imagePath'];
        $arrayCircuit[$key]['photo'] = ltrim($str, '/');

    }
    $smarty->assign('arrayCircuit', $arrayCircuit); //arrayCircuit of the circuit

    $reponse['card1'] = $smarty->fetch('cardssliderVaheContent.tpl');


    $reponse['action'] = 'i_connecter';


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