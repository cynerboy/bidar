<?php
$titleSite = "Admin Login";
include ('../layout/header.php');
require_once dirname(__DIR__) . '/config/initializeAddress.php';
?>
    <div class="container-fluid">

        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">

                <img src="<?php echo SITE_ROOT . 'img/logo.jpg' ?>" width="100px" class="">

            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">

            <h3 class=""><br>د نفوسو د احوال ثبتولو مرکزي اداره<br>اداره مـــــرکـــــزي ثبت احـــوال نفوس <br>Afghanistan Central Civil Registration Authority</h3>

            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">

                <img src="<?php echo SITE_ROOT . 'img/afghan.png' ?>" width="150px" class="">

            </div>

        </div>
        <div class="row">

            <img src="<?php echo SITE_ROOT . 'img/black.gif' ?>" class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <img src="<?php echo SITE_ROOT . 'img/red.gif' ?>" class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <img src="<?php echo SITE_ROOT . 'img/green.gif' ?>" class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">

        </div>

        <div class="row">

            <div class="offset-xl-4 offset-lg-4 offset-md-4 offset-sm-4 offset-xs-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <br>
                <h1 class="display-4 text-center">Admin Login</h1><br>
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label for="validationTooltipUsername" class="col-form-label-lg">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" autocomplete="off" class="form-control form-control-lg" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Please choose a unique and valid username.
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label for="validationTooltipUsername" class="col-form-label-lg">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="text" autocomplete="off" class="form-control form-control-lg" id="validationTooltipUsername" placeholder="Password" aria-describedby="validationTooltipUsernamePrepend" required>
                                <div class="invalid-tooltip">
                                    Please choose a unique and valid username.
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-primary btn-lg btn-block btn3d" type="submit">Login</button>

                </form>

            </div>


        </div><br><br><br><br>




<?php
include ('../layout/footer.php');

?>