<?php

require_once(dirname(__DIR__). "/controller/sessions.php");

class ViewSuperAdmin{

    public function errorUpdateNews(){

        global $session;

        $_SESSION['message'] = "You can't update News part! please contact with programmer";

        return $session->messageError($_SESSION['message']);

    }

    public function successUpdateNews(){

        global $session;

        $_SESSION['message'] = "News Updated!";

        return $session->messageSuccess($_SESSION['message']);

    }

    public function wrongUsernameOrPassword(){

        global $session;

        $_SESSION['message'] = "You entered incorrect username or password! please try again";

        return $session->messageError($_SESSION['message']);

    }

}

$viewSuperAdmin = new ViewSuperAdmin();