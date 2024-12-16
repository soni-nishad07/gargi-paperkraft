<?php
 include "../../connection.php";   
    session_start();
    if (!isset($_SESSION["userid"]))
    {
        header("Location:../index.php");
    }    
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
   
    <link rel="shortcut icon" href="">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">

    <link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="../files/assets/icon/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../files/assets/pages/foo-table/css/footable.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/foo-table/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/foo-table/css/footable.standalone.min.css">

    <link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/css/pages.css">


<style type="text/css">
    .calender iframe
    {
        width: 1000px;
        height: 300px;
    }
     .map iframe
    {
        width: 1000px;
        height: 300px;
        margin-left: -20px;
    }
    @media (max-width:767px){
         .calender iframe
    {
        width: 320px;
        height: 300px;
        margin-left: -30px;
    }
     .map iframe
    {
        width: 320px;
        height: 300px;
       margin-left: -50px;
    }
    }
</style>

</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

      <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

 <?php include "header.php" ?>      

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <?php include "navigation.php" ?> 

                                    <div class="col-lg-12 col-md-12">
                                        <div class="pcoded-content">                       
                                            <div class="page-header card">
                                              <div class="col-lg-6 col-md-6 col-sm-12" style="float: left;">
                                                <div class="row align-items-end">
                                                    <div class="col-lg-8">
                                                        <div class="page-header-title">
                                                            <i class="feather icon-home bg-c-blue"></i>
                                                            <div class="d-inline">
                                                                <h5>CALENDER</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="calender">
                                                    <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;&amp;color=%231B887A&amp;src=en.indian%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=Asia%2FKolkata" style="border:solid 1px #777" frameborder="0" scrolling="no"></iframe>
                                                </div>
                                            </div>
                                                <div class="page-header card col-lg-6 col-md-6 col-sm-12" style="float: right;">
                                                    <div class="row align-items-end">
                                                        <div class="col-lg-12">
                                                            <div class="page-header-title">
                                                                <i class="feather icon-home bg-c-blue"></i>
                                                                <div class="d-inline">
                                                                    <h5>GOOGLE MAP</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="map">
                                                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.996714772052!2d81.06427671448321!3d26.90359936696025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3999598ece95d2d3%3A0x25c02a155bf9f8a5!2sGargi%20PaperKraft!5e0!3m2!1sen!2sin!4v1678373720549!5m2!1sen!2sin" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                    </div>                    
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

    <script src="../files/assets/pages/waves/js/waves.min.js"></script>

    <script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

    <script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

    <script src="../files/assets/pages/foo-table/js/footable.min.js"></script>
    <script src="../files/assets/pages/foo-table/js/foo-table-custom.js"></script>

    <script src="../files/assets/js/pcoded.min.js"></script>
    <script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
    <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="../files/assets/js/script.js"></script>

    
</body>

</html>