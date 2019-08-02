<?php
session_start();
if($_SESSION['student'])
{
    include_once 'functions/actions.php';
    $obj=new DataOperations();
    $admission = $_SESSION['student'];
    $success = '';

    if(isset($_POST['submit'])){
        $unit_name = $_POST['unit'];

        $data = array('admission'=>$admission,'unit_code'=>'MSU 101','unit_name'=>$unit_name);
        if($obj->insert_record('cart',$data))
        {
            $success = "Unit registered successfully";
        }
    }
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
    <?php include_once 'includes/head.php' ?>
</head>
<body>
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include_once 'includes/navbar.php' ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <?php include_once 'includes/sidebar.php'?>
        <!-- partial -->


        <div class="main-panel">
            <div class="content-wrapper">
                <!-- Page Title Header Starts-->
                <div class="row page-title-header">
                    <div class="col-12">
                        <div class="page-header">
                            <h4 class="page-title text-pri-color"><span class="fa fa-pencil-square-o text-sec-color"></span> &nbsp; Register units</h4>
<!--                            <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">-->
<!--                                <ul class="quick-links">-->
<!--                                    <li><a href="#">ICE Market data</a></li>-->
<!--                                    <li><a href="#">Own analysis</a></li>-->
<!--                                    <li><a href="#">Historic market data</a></li>-->
<!--                                </ul>-->
<!--                                <ul class="quick-links ml-auto">-->
<!--                                    <li><a href="#">Settings</a></li>-->
<!--                                    <li><a href="#">Analytics</a></li>-->
<!--                                    <li><a href="#">Watchlist</a></li>-->
<!--                                </ul>-->
<!--                            </div>-->
                        </div>
                    </div>

                </div>
                <div class="row">



                    <div class="col-md-12 d-flex align-items-stretch">

                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">

                                        <form class="form-sample" method="post" action="">
                                            <?php if($success){$obj->successDisplay($success);}?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">

                                                        <label class="col-sm-3 col-form-label">Course</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" name="course" required="required">
                                                                <option value="">choose</option>
                                                                <option>Bachelor in IT</option>
                                                                <option>Bachelor in economics</option>
                                                                <option>Bachelor in mathematics</option>
                                                                <option>Bachelor in physics</option>
                                                                <option>Bachelor in accounting</option>
                                                                <option>Bachelor in hacking</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Year</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control">
                                                                <option>Choose</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Unit</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control" required="required" name="unit">
                                                                <option value="">Choose</option>
                                                                <option>Discrete Mathematics</option>
                                                                <option>Probability theory</option>
                                                                <option>Scientific themes</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <div class="col-sm-9">
                                                            <button class="btn btn-primary" name="submit" type="submit">Register</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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