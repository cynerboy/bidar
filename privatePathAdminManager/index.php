<?php

require_once dirname(__DIR__) . '/controller/superAdmin.php';
require_once dirname(__DIR__) . '/config/initializeAddress.php';
require_once dirname(__DIR__) . '/controller/toolsFunctions.php';

$superAdmin->checkAdmin();

$message = $superAdmin->checkNewMessage();

$arr = $superAdmin->showNews();

if(isset($_POST['submitNews'])){

    $message = $superAdmin->updateNews($_POST['titleNews'], $_POST['descNews']);

}

if(isset($_POST['workSubmit'])){

    if (isset($_POST['descriptionWork'])){

        $descriptionWork = 1;

    }else{

        $descriptionWork = 0;

    }

    $message = $superAdmin->addWork($_POST['workName'], $descriptionWork, $_POST["smsWork"]);


}

if(isset($_POST['deleteWork'])){

    $superAdmin->deleteWorkRow($_POST['id']);

}

$titleSite = "Admin Area";
include ('../layout/header.php');

include "../layout/privatePathAdminManager.php";

include ('../layout/footer.php');

?>
