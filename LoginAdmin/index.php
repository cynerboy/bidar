<?php
$titleSite = "Admin Login";
$message = "";
include ('../layout/loginHeader.php');

require_once dirname(__DIR__) . '/controller/superAdmin.php';

if(isset($_POST['submit'])){

    $message = $superAdmin->loginAdmin($_POST['username'], $_POST['password']);

}

?>

        <div class="row">

            <div class="offset-xl-4 offset-lg-4 offset-md-4 offset-sm-4 offset-xs-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <br>
                <h1 class="display-4 text-center customTitle">Admin Login</h1><br>
                <?php if($message != ""){echo $message; } ?>
                <form class="needs-validation" method="post">
                    <div class="form-row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label for="validationTooltipUsername" class="col-form-label-lg">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fas fa-user fa-2x"></i></span>
                                </div>
                                <input type="text" name="username" autocomplete="off" class="form-control form-control-lg" id="validationTooltipUsername" placeholder="please type username" aria-describedby="validationTooltipUsernamePrepend" required>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label for="validationTooltipUsername" class="col-form-label-lg">Password</label>
                            <div class="input-group" id="show_hide_password">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fas fa-lock fa-2x"></i></span>
                                </div>
                                <input type="password" name="password" style="border-right:none !important;" autocomplete="off" class="form-control form-control-lg" id="validationTooltipUsername" placeholder="please type password" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="input-group-prepend" id="span">
                                    <span class="input-group-text" style="background-color:transparent !important;border-left:none !important;" id="validationTooltipUsernamePrepend"><i class="fas fa-eye-slash fa-2x"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-primary btn-lg btn-block btn3d" name="submit" type="submit"><i class="fas fa-sign-in-alt fa-2x"></i></button>

                </form>

            </div>


        </div>

<?php
include ('../layout/bothFooter.php');

?>