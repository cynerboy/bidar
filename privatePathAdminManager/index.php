<?php

require_once dirname(__DIR__) . '/config/initializeAddress.php';
require_once dirname(__DIR__) . '/controller/toolsFunctions.php';

session_start();

if(!isset($_SESSION['autho']) || $_SESSION['autho'] != "whiter"){

    redirect_to(SITE_ROOT);

}

echo "helloooooo";