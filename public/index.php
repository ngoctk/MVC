<?php

namespace MVC;



define('WEBROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

use CONFIG\Dispatcher;

require_once('../vendor/autoload.php');

$dispatch = new Dispatcher();
$dispatch->dispatch();