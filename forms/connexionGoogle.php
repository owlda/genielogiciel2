<?php
require_once "forms/GoogleAPI/vendor/autoload.php";
// Get $id_token via HTTPS POST.

$client = new Google_Client();
$client->setClientId("266969397484-tlf4h2dn463kvmhn9lpovtgm93re0i63.apps.googleusercontent.com");
$client->setClientSecret("SsG5WZI5Hd4UYYQzbmc8QeDt");
$client->setApplicationName("VoyagesMerveille");
$client->setRedirectUri("http://localhost/genielogiciel2/forms/g-callback.php");
$client->addScope(
    "https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
// Specify the CLIENT_ID of the app that accesses the backend
//$payload = $client->verifyIdToken($id_token);
//if ($payload) {
//    $userid = $payload['sub'];
//    // If request specified a G Suite domain:
//    //$domain = $payload['hd'];
//} else {
//    // Invalid ID token
//}
