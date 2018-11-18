<?php

require_once dirname(__DIR__) . '/model/superAdmin.php';
require_once dirname(__DIR__) . '/view/superAdmin.php';
require_once dirname(__DIR__) . '/config/initializeAddress.php';
require_once 'toolsFunctions.php';
require_once 'sessions.php';
require_once 'databaseApi.php';

class SuperAdmin{

    public function checkNewMessage(){

        global $session;
        global $viewSuperAdmin;

        if($session->checkUpdaterSession()){

            switch ($_SESSION['updater']){

                case "updateNews":
                    $_SESSION["updater"] = null;
                    return $viewSuperAdmin->successUpdateNews();
                    break;

                case "addWork":
                    $_SESSION["updater"] = null;
                    return $viewSuperAdmin->successInserttWork();
                    break;

                default:
                    return null;

            }

        }

    }

    public function addWork($name, $description, $textSms){

        global $db;
        global $modelSuperAdmin;
        global $viewSuperAdmin;

        $name = $db->prep($name);
        $description = $db->prep($description);

        if($modelSuperAdmin->insertNameDescriptionTextSmsWork($name, $description, $textSms)){

            if($modelSuperAdmin->insertNameDescriptionTextSmsWorkForReport($name, $description, $textSms)){

                $_SESSION["updater"] = "addWork";

                redirect_to(SITE_ROOT . 'privatePathAdminManager');

                return null;

            }else{

                return $viewSuperAdmin->errorInsertReportWork();

            }

        }else{

            return $viewSuperAdmin->errorInsertWork();

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

                $_SESSION["updater"] = "updateNews";

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