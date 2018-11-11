<br>
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <h4 class="text-center customTitle">Admin Area</h4><br>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link lead active navListColor" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-home"></i> Home</a>
            <a class="nav-link lead" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-newspaper"></i> Make news</a>
            <a class="nav-link lead" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-search"></i> Search</a>
            <a class="nav-link lead" id="v-pills-user-tab" data-toggle="pill" href="#v-pills-user" role="tab" aria-controls="v-pills-user" aria-selected="false"><i class="fas fa-user-plus"></i> Add new user</a>
            <a class="nav-link lead" id="v-pills-zone-tab" data-toggle="pill" href="#v-pills-zone" role="tab" aria-controls="v-pills-zone" aria-selected="false"><i class="fas fa-plus-circle"></i> Add new zone</a>
            <a class="nav-link lead" id="v-pills-structure-tab" data-toggle="pill" href="#v-pills-structure" role="tab" aria-controls="v-pills-structure" aria-selected="false"><i class="fas fa-cubes"></i> Change structure</a>
            <a class="nav-link lead" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-cogs"></i> Settings</a>
            <a class="nav-link lead" id="v-pills-history-tab" data-toggle="pill" href="#v-pills-history" role="tab" aria-controls="v-pills-history" aria-selected="false"><i class="fas fa-history"></i> History</a>
            <a class="nav-link lead" href="<?php echo SITE_ROOT . 'loginAdmin'; ?>" style="color:red;"><i class="fas fa-sign-out-alt" style="color:red;"></i> Log out</a>
        </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <?php if(isset($message)){echo $message; } ?>
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><h1 class="display-4 text-center customTitle"><i class="fas fa-home"></i> Data report</h1><br>

                ...

            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><h1 class="display-4 text-center customTitle"><i class="fas fa-newspaper"></i> Make news</h1><br>

                <?php

                    include "makeNews.php";

                ?>

            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><h1 class="display-4 text-center customTitle"><i class="fas fa-search"></i> Search</h1><br>...</div>
            <div class="tab-pane fade" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab"><h1 class="display-4 text-center customTitle"><i class="fas fa-user-plus"></i> Add new user</h1><br>...</div>
            <div class="tab-pane fade" id="v-pills-zone" role="tabpanel" aria-labelledby="v-pills-zone-tab"><h1 class="display-4 text-center customTitle"><i class="fas fa-plus-circle"></i> Add new zone</h1><br>...</div>
            <div class="tab-pane fade" id="v-pills-structure" role="tabpanel" aria-labelledby="v-pills-structure-tab"><h1 class="display-4 text-center customTitle"><i class="fas fa-cubes"></i> Change structure</h1><br>

                    <?php

                    include "structure.php";

                    ?>

            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"><h1 class="display-4 text-center customTitle"><i class="fas fa-cogs"></i> Settings</h1><br>...</div>
            <div class="tab-pane fade" id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-history-tab"><h1 class="display-4 text-center customTitle"><i class="fas fa-history"></i> History</h1><br>...</div>
        </div>
    </div>
</div>