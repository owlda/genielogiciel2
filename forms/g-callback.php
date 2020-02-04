<?php
// require_once "./config.php"; // not ok - error après le login de Google

// require_once "forms/config.php"; // not ok - error après le login de Google

require_once dirname(__FILE__) . '/config.php';

// require_once "forms/config.php"; // ok dans la page index_forms.php

if (isset($_GET['code'])) {
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $token;
}

$oAuth = new Google_Service_Oauth2($gClient);
$userData = $oAuth->userinfo_v2_me->get();

//temporarily :
echo "<pre>";
var_dump($userData);

//$_SESSION['email'] = $userData['email'];
//$_SESSION['gender'] = $userData['gender'];
//$_SESSION['picture'] = $userData['picture'];
//$_SESSION['familyName'] = $userData['familyName'];
//$_SESSION['familyName'] = $userData['familyName'];

