<?php require_once dirname(__DIR__) . '/config/initializeAddress.php';
    require_once dirname(__DIR__) . '/controller/databaseApi.php';
?>
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style=" position: relative;text-align: center;color: white;">

            <img src="<?php echo SITE_ROOT . 'img/footer.png'; ?>" style="" class="embed-responsive">

            <p style="position: absolute;top: 90%;left: 50%;transform: translate(-50%, -50%);">تمام حقوق بر این ویب سایت محفوظ است. توسعه یافته توسط ضیاوالدین بیدار</p>

        </div>

    </div>

</div>
<script src="<?php echo SITE_ROOT . 'boot/js/bootstrap.bundle.min.js'; ?>"></script>
<script src="<?php echo SITE_ROOT . 'boot/js/bootstrap.min.js'; ?>"></script>
<script src="<?php echo SITE_ROOT . 'boot/custom/jquery-3.3.1.slim.min.js'; ?>"></script>
<script src="<?php echo SITE_ROOT . 'boot/custom/popper.min.js'; ?>"></script>

</body>
</html>
<?php $db->CloseConnection(); ?>