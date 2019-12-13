<?php

//TODO Initialization Smarty
require __DIR__.'/../libs/Smarty/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__.'/../tmp/template');
$smarty->setCompileDir(__DIR__.'/../tmp/template_c');
$smarty->setCacheDir(__DIR__.'/../tmp/cashe');
$smarty->setCompileDir(__DIR__.'/../tmp/configs');

?>