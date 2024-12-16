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
     <link rel="shortcut icon" href="logo.png">
     
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

                    <div class="pcoded-content">

                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-hash bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Footter</h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="#"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Admin</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Footter</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">

                                        <div class="card">
                                            <div class="card-header">
                                                <h5>All Footter</h5>
                                                
                                            </div>
                                            <div class="card-block">
                                                 <div style="overflow-x:auto;">
                                                <table id="demo-foo-filtering" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th data-breakpoints="xs">Area</th>
                                                            <th data-breakpoints="xs">City_Name</th>
                                                            <th data-breakpoints="xs">Pincode</th>
                                                            <th data-breakpoints="xs">State</th>
                                                            <th data-breakpoints="xs">Edit</th>
                                                            <th data-breakpoints="xs">Delete</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
<?php
    include "../../connection.php";
    $query="select * from flutter";
    $res=mysqli_query($conn,$query);
     $a=1;
    while($row=mysqli_fetch_assoc($res))
    {

?>

                                                        <tr>
                                                            <td><?php echo $a ?></td>
                                                            <td><?php echo $row['area']?></td>
                                                            <td><?php echo $row['city_name']?></td>
                                                            <td><?php echo $row['pincode']?></td>
                                                             <td><?php echo $row['state']?></td>
                                                            <td>
                                                                <a href="edit_flutter.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-primary waves-effect waves-light add">Edit</button></a>
                                                            </td>

                                                            <td>
                                                                <a href="flutter_delete.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-primary waves-effect waves-light add">Delete</button></a>
                                                            </td>
                                                        </tr>
<?php
++$a;
}
?>                                                        
                                                       
                                                    </tbody>
                                                </table>
                                              </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="styleSelector">
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

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>