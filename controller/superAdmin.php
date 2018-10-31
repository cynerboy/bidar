<?php

require_once dirname(__DIR__) . '/model/superAdmin.php';
require_once dirname(__DIR__) . '/view/superAdmin.php';
require_once dirname(__DIR__) . '/config/initializeAddress.php';
require_once 'toolsFunctions.php';
require_once 'sessions.php';
require_once 'databaseApi.php';

class SuperAdmin{

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