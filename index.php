<?php
session_start();
if($_SESSION['student'])
{
    include_once 'functions/actions.php';
    $obj=new DataOperations();
}
else{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <?php include_once 'includes/head.php'?>
</head>
<body>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include_once 'includes/navbar.php'?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <?php include_once 'includes/sidebar.php'?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">



                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="row">









                        </div>
                    </div>
                    <!-- content-wrapper ends -->

                </div>
                <!-- main-panel ends -->
            </div>
            <!-- partial:../../partials/_footer.html -->
            <?php include_once 'includes/footer.php'?>
            <!-- partial -->
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="assets/vendors/js/vendor.bundle.base.js"></script>
        <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
        <!-- endinject -->
        <!-- inject:js -->
        <script src="assets/js/shared/off-canvas.js"></script>
        <script src="assets/js/shared/misc.js"></script>
        <!-- endinject -->
</body>
</html>