<?php require_once dirname(__DIR__) . '/config/initializeAddress.php';
require_once dirname(__DIR__) . '/controller/databaseApi.php';
?>

    <br><br>

    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" position: relative;text-align: center;color: white;">

            <p class="lead" style="color:black">تمام حقوق بر این ویب سایت محفوظ است. توسعه یافته توسط ضیاوالدین بیدار</p>

            <img src="<?php echo SITE_ROOT . 'img/footer.jpg'; ?>" class="embed-responsive">

        </div>

    </div>

    </div>

    </body>
    </html>
<?php $db->CloseConnection(); ?>