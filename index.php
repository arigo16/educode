<?php
session_start();

  if (empty($_SESSION['id_user'])) {
    header("location:login.php");
  }else{
    if (isset($_SESSION['id_user'])) {
        $id_user = trim($_SESSION['id_user']);
    }
    if (isset($_SESSION['otorisasi'])) {
        $otorisasi = trim($_SESSION['otorisasi']);
    }
    require_once('include/config.php');
    isset ($_GET['page']) ? $page = $_GET['page'] : $page = 'home';
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard Educode</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets-admin/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="assets-admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets-admin/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets-admin/css/owl.carousel.css">
    <link rel="stylesheet" href="assets-admin/css/owl.theme.css">
    <link rel="stylesheet" href="assets-admin/css/owl.transitions.css">
    <link rel="stylesheet" href="assets-admin/css/animate.css">
    <link rel="stylesheet" href="assets-admin/css/normalize.css">
    <link rel="stylesheet" href="assets-admin/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets-admin/css/main.css">
    <link rel="stylesheet" href="assets-admin/css/educate-custon-icon.css">
    <link rel="stylesheet" href="assets-admin/css/morrisjs/morris.css">
    <link rel="stylesheet" href="assets-admin/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets-admin/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="assets-admin/css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="assets-admin/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assets-admin/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="assets-admin/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="assets-admin/css/data-table/bootstrap-editable.css">
    <link rel="stylesheet" href="assets-admin/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assets-admin/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="assets-admin/css/datapicker/datepicker3.css">
    <link rel="stylesheet" href="assets-admin/css/select2/select2.min.css">
    <link rel="stylesheet" href="assets-admin/css/form/all-type-forms.css">
    <link rel="stylesheet" href="assets-admin/css/tabs.css">
    <link rel="stylesheet" href="assets-admin/css/ionRangeSlider/ion.rangeSlider.css">
    <link rel="stylesheet" href="assets-admin/css/ionRangeSlider/ion.rangeSlider.skinFlat.css">
    <link rel="stylesheet" href="assets-admin/style.css">
    <link rel="stylesheet" href="assets-admin/css/responsive.css">
    <script src="assets-admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <?php
        include 'include/sidebar.php';
    ?>

    <?php
        include 'include/header.php';
    ?>

    <div class="all-content-wrapper">
    <?php

        if(isset($_SESSION['pesan'])){echo $_SESSION['pesan']; unset($_SESSION['pesan']);}

        if(file_exists('page/'.$page.'.php')){
            include ('page/'.$page.'.php');
        }else{
            include ('page/404.php');
        }

    ?>
    </div>

    <script src="assets-admin/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets-admin/js/bootstrap.min.js"></script>
    <script src="assets-admin/js/wow.min.js"></script>
    <script src="assets-admin/js/jquery-price-slider.js"></script>
    <script src="assets-admin/js/jquery.meanmenu.js"></script>
    <script src="assets-admin/js/owl.carousel.min.js"></script>
    <script src="assets-admin/js/jquery.sticky.js"></script>
    <script src="assets-admin/js/jquery.scrollUp.min.js"></script>
    <script src="assets-admin/js/counterup/jquery.counterup.min.js"></script>
    <script src="assets-admin/js/counterup/waypoints.min.js"></script>
    <script src="assets-admin/js/counterup/counterup-active.js"></script>
    <script src="assets-admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets-admin/js/scrollbar/mCustomScrollbar-active.js"></script>
    <script src="assets-admin/js/data-table/bootstrap-table.js"></script>
    <script src="assets-admin/js/data-table/tableExport.js"></script>
    <script src="assets-admin/js/data-table/data-table-active.js"></script>
    <script src="assets-admin/js/data-table/bootstrap-table-editable.js"></script>
    <script src="assets-admin/js/data-table/bootstrap-editable.js"></script>
    <script src="assets-admin/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="assets-admin/js/data-table/colResizable-1.5.source.js"></script>
    <script src="assets-admin/js/data-table/bootstrap-table-export.js"></script>
    <script src="assets-admin/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="assets-admin/js/datapicker/datepicker-active.js"></script>
    <script src="assets-admin/js/select2/select2.full.min.js"></script>
    <script src="assets-admin/js/select2/select2-active.js"></script>
    <script src="assets-admin/js/metisMenu/metisMenu.min.js"></script>
    <script src="assets-admin/js/metisMenu/metisMenu-active.js"></script>
    <script src="assets-admin/js/morrisjs/raphael-min.js"></script>
    <script src="assets-admin/js/morrisjs/morris.js"></script>
    <script src="assets-admin/js/morrisjs/morris-active.js"></script>
    <script src="assets-admin/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets-admin/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="assets-admin/js/sparkline/sparkline-active.js"></script>
    <script src="assets-admin/js/calendar/moment.min.js"></script>
    <script src="assets-admin/js/calendar/fullcalendar.min.js"></script>
    <script src="assets-admin/js/calendar/fullcalendar-active.js"></script>
    <script src="assets-admin/js/pdf/jquery.media.js"></script>
    <script src="assets-admin/js/pdf/pdf-active.js"></script>
    <script src="assets-admin/js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="assets-admin/js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="assets-admin/js/rangle-slider/rangle-active.js"></script>
    <script src="assets-admin/js/tab.js"></script>
    <script src="assets-admin/js/plugins.js"></script>
    <script src="assets-admin/js/main.js"></script>
</body>

</html>

<?php
    }
?>