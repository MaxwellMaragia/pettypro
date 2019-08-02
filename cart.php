<?php
session_start();
if($_SESSION['student'])
{
    include_once 'functions/actions.php';
    $obj=new DataOperations();
    $admission = $_SESSION['student'];
    $success = '';

    if(isset($_POST['delete']))
    {
        $id = $_POST['delete'];
        $where = array('id'=>$id);
        $obj->delete_record('cart',$where);
    }
    if(isset($_POST['checkout'])){
        $cart = $_POST['checkout'];
        $where = array('admission'=>$admission,'state'=>0);
        $data = array('state'=>1);
        $amount = $cart*200;
        if($obj->update_record('cart',$where,$data)){
            $exe = mysqli_query($obj->con,"UPDATE student_ledger SET amount = amount - $amount WHERE admission='$admission'" );
        $success = "$cart unit/s registered";
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

                <div class="row page-title-header">
                    <div class="col-12">
                        <div class="page-header">
                            <h4 class="page-title text-pri-color"><span class="fa fa-shopping-cart text-sec-color"></span> &nbsp; Cart</h4>
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







                            <div class="col-lg-12 grid-margin stretch-card">

                                <div class="card">
                                    <div class="card-body">
                                        <?php if($success){$obj->successDisplay($success);}?>
                                        <h4 class="card-title">Selected units</h4>
                                        <p class="card-description">To delete a unit simply click on the <span class="fa fa-trash-o primary-icon-color"> button</span> </p>
                                        <form method="post" action="">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th >Unit name</th>
                                                <th>Unit code</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php
                                            $where = array('admission'=>$admission,'state'=>0);
                                            $get_cart = $obj->fetch_records('cart',$where);
                                            foreach ($get_cart as $row)
                                            {
                                                $unit= $row['unit_name'];
                                                $code = $row['unit_code'];
                                                $id = $row['id'];
                                                ?>
                                                <tr>
                                                    <td><?=$unit?></td>
                                                    <td><?=$code?></td>
                                                    <td>
                                                        <button style="font-size: 20px" value="<?=$id?>" name="delete" type="submit"><span class="fa fa-trash-o primary-icon-color"></span></button>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>

                                            </tbody>
                                        </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-12 grid-margin stretch-card">
                        <?php
                        if($cart>0)
                        {
                            ?>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="d-flex align-items-center pb-2">
                                                <div class="dot-indicator bg-primary mr-2"></div>
                                                <p class="mb-0">Total payable</p>
                                            </div>
                                            <h4 class="font-weight-semibold">Ksh <?=$cart*200;?></h4>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-4 mt-md-0">
                                            <div class="d-flex align-items-center pb-2">
                                                <div class="dot-indicator bg-primary mr-2"></div>
                                                <p class="mb-0">Current balance</p>
                                            </div>
                                            <h4 class="font-weight-semibold">Ksh <?=$balance?></h4>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-4 mt-md-0">
                                            <div class="d-flex align-items-center pb-2">
                                                <div class="dot-indicator bg-warning mr-2"></div>
                                                <p class="mb-0">Deficit</p>
                                            </div>
                                            <h4 class="font-weight-semibold">Ksh
                                                <?php
                                                $deficit=($cart*200)-$balance;
                                                if($deficit>0)
                                                {
                                                    echo $deficit;
                                                }
                                                else{
                                                    echo 0;
                                                }
                                                ?>
                                            </h4>
                                            <div class="progress progress-md">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 grid-margin stretch-card average-price-card">


                                                <?php
                                                if($deficit>0)
                                                {
                                                    ?>
                                                    <div class="card text-white">
                                                    <div class="card-body bg-primary" style="align-content: center">
                                                        <!--                                                    <div class="d-flex justify-content-between pb-2 align-items-center">-->
                                                        <!--                                                        <h2 class="font-weight-semibold mb-0">4,624</h2>-->
                                                        <!--                                                        <div class="icon-holder">-->
                                                        <!--                                                            <i class="mdi mdi-briefcase-outline"></i>-->
                                                        <!--                                                        </div>-->
                                                        <!--                                                    </div>-->

                                                        <!--                                                        <h5 class="font-weight-semibold mb-0">Average Price</h5>-->
                                                        <p class="text-white mb-0">Deposit cash to checkout</p>

                                                    </div>
                                                    </div>
                                                    <?php
                                                }
                                                else{
                                                    ?>
                                                    <form action="" method="post">

                                                        <button class="btn btn-success" type="submit" name="checkout" value="<?=$cart?>"><span class="fa fa-check"></span> Checkout</button>

                                                    </form>
                                                    <?php
                                                }
                                                ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        </div>







                    <!-- content-wrapper ends -->


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