<?php
define("SERVEUR","localhost");
define("USAGER","root");
define("PASS","");
define("BD","dbemployes");
if(!$connexion = @mysql_connect(SERVEUR,USAGER,PASS)){
    echo "Probleme de connexion au serveur";
    exit();
}
@mysql_select_db(BD,$connexion)or die ("probleme de selection de la base de donnees");
?>