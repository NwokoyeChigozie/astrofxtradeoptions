<?php
ob_start();
//Start session
session_start();
//Connect to the database
if (!isset($_SESSION['admin_id'])) {
    header("location:../");
}
include("../../phpscripts/connection.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!--====== FAVICON ICON =======-->
    <link rel="apple-touch-icon" sizes="120x120" href="../../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon-16x16.png">
    <link rel="manifest" href="../../site.webmanifest">
    <link rel="mask-icon" href="../../safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#fff7f7">
    <meta name="theme-color" content="#ffffff">


    <link rel="apple-touch-icon" sizes="120x120" href="../../apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../favicon-16x16.png">
    <link rel="manifest" href="../../site.webmanifest">
    <link rel="mask-icon" href="../../safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#fff7f7">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item" style="float: right; background-color:blue;border-radius:20px">
                    <a class="nav-link" href="logout.php" role="button">Logout</a>
                </li>
            </ul>

            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="../../images/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style=""><br>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="index.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>

                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="./users.php" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Users
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="./payments.php" class="nav-link">
                                <i class="nav-icon fa fa-paper-plane"></i>
                                <p>
                                    Payments
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="./withdrawal_requests.php" class="nav-link">
                                <i class="nav-icon fa fa-arrow-up"></i>
                                <p>
                                    Withdrawal Requests
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="./feedbacks.php" class="nav-link">
                                <!--              <i class="nav-icon fa fa-location-arrow"></i>-->
                                <i class="nav-icon fa fa fa-reply"></i>
                                <p>
                                    <!--                  <i class="material-icons">menu</i>-->
                                    Feedbacks
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="./add_funds.php" class="nav-link">
                                <i class="nav-icon fa fa fa-plus"></i>
                                <p>
                                    Add Funds
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="./history_display.php" class="nav-link active">
                                <i class="nav-icon fa fa fa-plus"></i>
                                <p>
                                    Homepage History
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <!-- Main content -->
            <section class="content" style="padding-bottom:40px">
                <form method="post">
                    <?php
                    if ($_POST) {
                        if (isset($_POST['add_trade'])) {
                            $transaction = $_POST['transaction'];
                            $transaction = mysqli_real_escape_string($link, $transaction);
                            $amount = $_POST['amount'];
                            $amount = mysqli_real_escape_string($link, $amount);
                            $date = $_POST['date'];
                            $date = mysqli_real_escape_string($link, $date);
                            $currency = $_POST['currency'];
                            $currency = mysqli_real_escape_string($link, $currency);
                            $comment = $_POST['comment'];
                            $comment = mysqli_real_escape_string($link, $comment);
                            $status = $_POST['status'];
                            $status = mysqli_real_escape_string($link, $status);
                            //Check user inputs
                            //Define error messages
                            $missingTransaction = '<p style="background-color:red;text-align:center"><stong>Please enter Transaction details!</strong></p>';
                            $missingAccount = '<p style="background-color:red;text-align:center"><stong>Please enter Transaction Amount!</strong></p>';
                            $missingDate = '<p style="background-color:red;text-align:center"><stong>Please enter Date!</strong></p>';
                            $errors = "";
                            //Get email and password
                            //Store errors in errors variable
                            if (empty($transaction)) {
                                echo $missingTransaction;
                            } else {
                                if (empty($amount)) {
                                    echo $missingAccount;
                                } else {
                                    if (empty($date)) {
                                        echo $missingDate;
                                    } else {
                                        $sql1 = "INSERT INTO `$username`(`transaction`, `currency`, `amount`, `date`, `comment`, `status`) VALUES ('$transaction','$currency','$amount','$date','$comment','$status')";
                                        if (mysqli_query($link1, $sql1)) {

                                            $resultMessage = "<div class='alert alert-success'>Trade successfully added</div>";
                                            echo $resultMessage;
                                            //            header("Refresh:1; url=../dashboard");
                                        } else {
                                            echo 'Error occurred while creating trade history';
                                        }
                                    }
                                }
                            }
                        }
                    }
                    ?>
                    <!--              </form></section>       -->


                    <br>
                    <section class="content">

                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Deposit History</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped projects">
                                    <thead>
                                        <tr>


                                            <th style="width: 30%; text-align:center">
                                                Name
                                            </th>
                                            <th style="width: 30%; text-align:center">
                                                Date
                                            </th>
                                            <th style="width: 18%; text-align:center">
                                                Plan
                                            </th>
                                            <th style="width: 12%">
                                                Amount
                                            </th>

                                            <th style="width: 10%; text-align:center">

                                            </th>
                                            <!--
                      <th style="width: 8%" class="text-center">
                          Account status
                      </th>
                      <th style="width: 8%" class="text-center">
                          Last seen
                      </th>
-->
                                            <th style="width: 20%">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $sql1 = "SELECT * FROM `landing_history` WHERE `type` = 'deposit'  ORDER BY id DESC ";
                                        if ($result = mysqli_query($link, $sql1)) {
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                    $history_id = $row["id"];
                                                    $history_name =  $row["name"];
                                                    $history_date =  $row["date"];
                                                    $history_amount =  $row["amount"];
                                                    $history_plan =  $row["plan"];
                                                    $history_type =  $row["type"];


                                                    echo " <tr>
                   <td style='text-align:center'>$history_name</td>
                   <td style='text-align:center'>$history_date</td>
                   <td style='text-align:center'>Plan $history_plan</td>
                   <td style='text-align:center'>$$history_amount</td>
                   <td class='project-actions text-right'>
                                                  <a class='btn btn-danger btn-sm' href='historylanding_delete.php?id=$history_id'>
                                                      <i class='fas fa-trash'>
                                                      </i>
                                                      Delete
                                                  </a>
                                              </td> </tr>";
                                                }
                                            }
                                        }
                                        ?>





                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </section>
                    <br>
                    <section class="content">

                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Withdrawal History</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped projects">
                                    <thead>
                                        <tr>


                                            <th style="width: 30%; text-align:center">
                                                Name
                                            </th>
                                            <th style="width: 30%; text-align:center">
                                                Date
                                            </th>
                                            <th style="width: 18%; text-align:center">
                                                Plan
                                            </th>
                                            <th style="width: 12%">
                                                Amount
                                            </th>

                                            <th style="width: 10%; text-align:center">

                                            </th>
                                            <!--
                      <th style="width: 8%" class="text-center">
                          Account status
                      </th>
                      <th style="width: 8%" class="text-center">
                          Last seen
                      </th>
-->
                                            <th style="width: 20%">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $sql1 = "SELECT * FROM `landing_history` WHERE `type` = 'withdrawal'  ORDER BY id DESC ";
                                        if ($result = mysqli_query($link, $sql1)) {
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                    $history_id = $row["id"];
                                                    $history_name =  $row["name"];
                                                    $history_date =  $row["date"];
                                                    $history_amount =  $row["amount"];
                                                    $history_plan =  $row["plan"];
                                                    $history_type =  $row["type"];


                                                    echo " <tr>
                   <td style='text-align:center'>$history_name</td>
                   <td style='text-align:center'>$history_date</td>
                   <td style='text-align:center'>Plan $history_plan</td>
                   <td style='text-align:center'>$$history_amount</td>
                   <td class='project-actions text-right'>
                                                  <a class='btn btn-danger btn-sm' href='historylanding_delete.php?id=$history_id'>
                                                      <i class='fas fa-trash'>
                                                      </i>
                                                      Delete
                                                  </a>
                                              </td> </tr>";
                                                }
                                            }
                                        }
                                        ?>





                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </section>

                    <!-- Main content -->
                    <section class="content" style="padding-bottom:40px">
                        <form method="post">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">Add History</h3>



                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                                    <i class="fas fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="inputSpentBudget">Name</label>
                                                <input type="text" name="h_name" class="form-control" placeholder="Enter Name">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputSpentBudget">Date</label>
                                                <input type="text" name="h_date" class="form-control" placeholder="Confirm Date">
                                            </div>

                                            <div class="form-group">
                                                <label for="inputSpentBudget">Plan</label>
                                                <select class="form-control" name="h_plan">
                                                    <option value="">Select Plan</option>
                                                    <option value="1">Plan 1</option>
                                                    <option value="2">Plan 2</option>
                                                    <option value="3">Plan 3</option>
                                                    <option value="4">Plan 4</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputSpentBudget">Transaction Type</label>
                                                <select class="form-control" name="h_type">
                                                    <option value="">Select Transaction Type</option>
                                                    <option value="deposit">deposit</option>
                                                    <option value="withdrawal">withdrawal</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputSpentBudget">Amount($)</label>
                                                <input type="text" name="h_amount" class="form-control" placeholder="Enter Amount">
                                            </div>


                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->

                                    <!-- /.card -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-success float-right" name="add_history" type="submit">Add History</button>
                                </div>
                            </div><br>
                            <!------------------------------------------save-------------------------------------->
                            <?php
                            if ($_POST) {
                                function test_input($data)
                                {
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);
                                    return $data;
                                }

                                if (isset($_POST['add_history'])) {
                                    $h_name = $_POST['h_name'];
                                    $h_date = $_POST['h_date'];
                                    $h_amount = $_POST['h_amount'];
                                    $h_plan = $_POST['h_plan'];
                                    $h_type = $_POST['h_type'];
                                    if (empty($h_name)) {
                                        echo "<p class='alert alert-danger' style='text-align:center'>Name field is empty<p>";
                                        exit();
                                    }
                                    if (empty($h_date)) {
                                        echo "<p class='alert alert-danger' style='text-align:center'>Date field is empty<p>";
                                        exit();
                                    }
                                    if (empty($h_plan)) {
                                        echo "<p class='alert alert-danger' style='text-align:center'>Select Plan<p>";
                                        exit();
                                    }
                                    if (empty($h_amount)) {
                                        echo "<p class='alert alert-danger' style='text-align:center'>Enter a valid amount<p>";
                                        exit();
                                    }
                                    if (empty($h_type)) {
                                        echo "<p class='alert alert-danger' style='text-align:center'>Select Transaction Type<p>";
                                        exit();
                                    }

                                    $sql = "INSERT INTO `landing_history`(`name`,`date`,`amount`, `plan`,`type`) VALUES ('$h_name','$h_date','$h_amount','$h_plan','$h_type')";
                                    if (mysqli_query($link, $sql)) {
                                        echo "<p class='alert alert-success' style='text-align:center'>History Added<p>";
                                        echo "<script>
                                        function navigate(){
                                        window.location = './history_display.php';
                                        }
                                        
                                        setTimeout(navigate, 2000);
                                        </script>";
                                    } else {
                                        echo "<p class='alert alert-danger' style='text-align:center'>Error Occured<p>";
                                    }
                                }
                            }
                            ?>
                            <!------------------------------------------save-------------------------------------->

                            <!-- Main content -->


        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy;Gilab</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>
<?php ob_end_flush(); ?>