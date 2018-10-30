<?php
/* redirect in php */
require_once(dirname(__DIR__). '/config/initializeAddress.php');

function redirect_to($location){
    header('Location:'.$location);
    die();
    exit();
}