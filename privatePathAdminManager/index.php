<?php

require_once dirname(__DIR__) . '/controller/superAdmin.php';
require_once dirname(__DIR__) . '/config/initializeAddress.php';
require_once dirname(__DIR__) . '/controller/toolsFunctions.php';

$superAdmin->checkAdmin();

$message = $superAdmin->checkUpdater();

$arr = $superAdmin->showNews();

if(isset($_POST['submitNews'])){

    $message = $superAdmin->updateNews($_POST['titleNews'], $_POST['descNews']);

}

$titleSite = "Admin Area";
include ('../layout/header.php');

include "../layout/privatePathAdminManager.php";

include ('../layout/footer.php');

?>
