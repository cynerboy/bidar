<?php

$titleSite = "Admin Area";
$message = "";
include ('../layout/header.php');

require_once dirname(__DIR__) . '/controller/superAdmin.php';
require_once dirname(__DIR__) . '/config/initializeAddress.php';
require_once dirname(__DIR__) . '/controller/toolsFunctions.php';

//session_start();

if(!isset($_SESSION['autho']) || $_SESSION['autho'] != "whiter"){

    redirect_to(SITE_ROOT);

}


?>
<br>
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <h4 class="text-center customTitle">Admin Area</h4><br>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link lead active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-home"></i> Home</a>
            <a class="nav-link lead" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-newspaper"></i> Make news</a>
            <a class="nav-link lead" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-search"></i> Search</a>
            <a class="nav-link lead" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-user-plus"></i> Add new user</a>
            <a class="nav-link lead" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-plus-circle"></i> Add new zone</a>
            <a class="nav-link lead" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-cubes"></i> Change structure</a>
            <a class="nav-link lead" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-cogs"></i> Settings</a>
            <a class="nav-link lead" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-history"></i> History</a>
            <a class="nav-link lead" href="<?php echo SITE_ROOT . 'loginAdmin'; ?>" style="color:red;"><i class="fas fa-sign-out-alt" style="color:red;"></i> Log out</a>
        </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><h1 class="display-4 text-center customTitle">Data report</h1><br>...</div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><h1 class="display-4 text-center customTitle">Make news</h1><br>...</div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><h1 class="display-4 text-center customTitle">Search</h1><br>...</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"><h1 class="display-4 text-center customTitle">Add new user</h1><br>...</div>
        </div>
    </div>
</div>
<?php

include ('../layout/footer.php');

?>
