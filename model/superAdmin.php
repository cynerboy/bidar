<?php

require_once(dirname(__DIR__). "/controller/databaseApi.php");

class ModelSuperAdmin{

    public function getUsernamePassword(){

        global $db;

        return $db->selectQuery("SELECT username, password FROM superadmin WHERE id='1'");

    }



}

$modelSuperAdmin = new ModelSuperAdmin();