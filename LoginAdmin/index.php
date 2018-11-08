<?php
$titleSite = "Admin Login";
$message = "";
include ('../layout/loginHeader.php');

require_once dirname(__DIR__) . '/controller/superAdmin.php';

if(isset($_POST['submit'])){

    $message = $superAdmin->loginAdmin($_POST['username'], $_POST['password']);

}

include "../layout/adminLogin.php";

include ('../layout/bothFooter.php');

?>