<?php
// load config
require_once 'config/config.php';

// autoload libraries
spl_autoload_register(function($className){
   require_once 'libraries/'.$className.'.php';
});
