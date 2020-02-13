<?php
//TODO Initializer ADOdb
include __DIR__.'/../adodb5/adodb.inc.php';
$db = NewADOConnection('mysqli');
//Si vous utiliser un port pour connecter
$db->port = 3306;
$server = "localhost";
$user = "root";
$password = "";
$database = "northernstartravel";
$db->connect($server, $user, $password, $database);


//TODO Initialization Smarty
require __DIR__.'/../libs/Smarty/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__.'/../tmp/template');
$smarty->setCompileDir(__DIR__.'/../tmp/template_c');
$smarty->setCacheDir(__DIR__.'/../tmp/cashe');
$smarty->setCompileDir(__DIR__.'/../tmp/configs');

?>