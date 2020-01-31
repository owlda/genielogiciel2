<?php
session_start();
//require_once "./GoogleAPI/vendor/autoload.php";
require_once "forms/GoogleAPI/vendor/autoload.php"; //
$gClient = new Google_Client();
$gClient->setClientId("266969397484-tlf4h2dn463kvmhn9lpovtgm93re0i63.apps.googleusercontent.com");
$gClient->setClientSecret("SsG5WZI5Hd4UYYQzbmc8QeDt");
$gClient->setApplicationName("VoyagesMerveille");
$gClient->setRedirectUri("http://localhost/genielogiciel2/forms/g-callback.php");
$gClient->addScope(
    "https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
