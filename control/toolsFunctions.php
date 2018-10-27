<?php
/* redirect in php */
require_once('../config/initializeAddress.php');

function redirect_to($location){
    header('Location:'.$location);
    die();
    exit();
}