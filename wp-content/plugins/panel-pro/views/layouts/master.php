
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>داشبرد | کنترل پنل مدیریت</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php include 'styles.php' ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php include_once 'main_header.php'?>
    <!-- right side column. contains the logo and sidebar -->
    <?php include_once 'main_sidebar.php'?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                داشبرد
                <small>کنترل پنل</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
                <li class="active">داشبرد</li>
            </ol>
        </section>


        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="container">
                    <?php
                    include UPP_DIR_VIEW.$view;
                    ?>
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include_once 'footer.php'?>

    <!-- Control Sidebar -->
    <?php include_once 'control_sidebar.php' ?>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php include_once 'scripts.php' ?>
</body>
</html>

