<?php

require_once(dirname(__DIR__). "/controller/databaseApi.php");

class ModelSuperAdmin{

    public function updateTitleNewsAndDescNews($title, $description){

        global $db;

        if($db->query("UPDATE news SET title='$title', description='$description' WHERE id='1'")){

            return true;

        }else{

            return false;

        }

    }

    public function getTitleNewsAndDescNews(){

        global $db;

        return $db->selectQuery("SELECT title, description FROM news WHERE id='1'");

    }

    public function getUsernamePassword(){

        global $db;

        return $db->selectQuery("SELECT username, password FROM superadmin WHERE id='1'");

    }



}

$modelSuperAdmin = new ModelSuperAdmin();