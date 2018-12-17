<?php

require_once(dirname(__DIR__). "/controller/databaseApi.php");

class ModelSuperAdmin{

    public function selectAllWork($id){

        global $db;

        return $db->selectQuery("SELECT * FROM work WHERE id='$id';")[0];

    }

    public function insertWorkIdNameDescriptionTextSmsForReport($workId, $name, $description, $textSms){

        global $db;

        if($db->query("INSERT INTO superadmindeleteworks(workId, name, description, textSms)VALUES('$workId', '$name', '$description', '$textSms')")){

            return true;

        }else{

            return false;

        }

    }

    public function deleteWorkRowWithId($id){

        global $db;

        if($db->query("DELETE FROM work WHERE id='$id'")){

            return true;

        }else{

            return false;

        }

    }

    public function selectIdNameDescriptionTextSmsWork(){

        global $db;

        return $db->selectQuery("SELECT id, name, description, textSms FROM work;");

    }

    public function insertNameDescriptionTextSmsWorkForReport($name, $description, $textSms){

        global $db;

        $workId = $db->selectTheLastId("work");

        if($db->query("INSERT INTO superadmininsertworks(workId, name, description, textSms) VALUES( '$workId', '$name', '$description', '$textSms' );")){

            return true;

        }else{

            return false;

        }

    }

    public function insertNameDescriptionTextSmsWork($name, $description, $textSms){

        global $db;

        if($db->query("INSERT INTO work(name, description, textSms) VALUES('$name', '$description', '$textSms')")){

            return true;

        }else{

            return false;

        }

    }

    public function insertTitleAndDescNews($title, $description){

        global $db;

        if($db->query("INSERT INTO superadminupdatenews(title, description)VALUES('$title', '$description')")){

            return true;

        }else{

            return false;

        }

    }

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