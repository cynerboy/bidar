<?php

require_once dirname(__DIR__) . '/model/superAdmin.php';
require_once dirname(__DIR__) . '/view/superAdmin.php';
require_once dirname(__DIR__) . '/config/initializeAddress.php';
require_once 'toolsFunctions.php';
require_once 'sessions.php';
require_once 'databaseApi.php';

class SuperAdmin{

    //

    public function checkUpdater(){

        global $session;
        global $viewSuperAdmin;

        if($session->checkUpdaterSession()){

            return $viewSuperAdmin->successUpdateNews();

        }

    }

    private function updateNewsReport($title, $description){

        global $modelSuperAdmin;

        if($modelSuperAdmin->insertTitleAndDescNews($title, $description)){

            return true;

        }else{

            return false;

        }

    }

    public function updateNews($title, $description){

        global $db;
        global $modelSuperAdmin;
        global $viewSuperAdmin;

        $title = $db->prep($title);
        $description = $db->prep($description);

        if($modelSuperAdmin->updateTitleNewsAndDescNews($title, $description)){

            if($this->updateNewsReport($title, $description)){

                $_SESSION["updater"] = "secured";

                redirect_to(SITE_ROOT . 'privatePathAdminManager');

                return null;

            }else{

                return $viewSuperAdmin->errorReportNews();

            }

        }else{

            return $viewSuperAdmin->errorUpdateNews();

        }

    }

    public function showNews(){

        global $modelSuperAdmin;

        return $modelSuperAdmin->getTitleNewsAndDescNews();

    }

    public function checkAdmin(){

        global $session;

        if($session->checkAdminSession()){

           return null;

        }else{

            redirect_to(SITE_ROOT);

        }

    }

    public function loginAdmin($username, $password){

        global $db;
        global $modelSuperAdmin;
        global $viewSuperAdmin;
        global $session;

        $username = $db->prep($username);
        $password = $db->prep($password);

        $arr = $modelSuperAdmin->getUsernamePassword();

        if ($arr[0]['username'] == $username && $arr[0]['password'] == $password){

            $session->setAdminSession();

            redirect_to(SITE_ROOT . 'privatePathAdminManager');

            return null;

        }else{

            return $viewSuperAdmin->wrongUsernameOrPassword();

        }

    }

}

$superAdmin = new SuperAdmin();