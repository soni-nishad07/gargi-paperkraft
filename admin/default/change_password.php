<?php
 include "../../connection.php";   
    session_start();
    if (!isset($_SESSION["userid"]))
    {
        header("Location:../index.php");
    }    
    
$_SESSION["id"] = "1";

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT * from admin_login WHERE id='" . $_SESSION["id"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($conn, "UPDATE admin_login set password='" . $_POST["newPassword"] . "' WHERE id='" . $_SESSION["id"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
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

<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
    currentPassword.focus();
    document.getElementById("currentPassword").innerHTML = "required";
    output = false;
}
else if(!newPassword.value) {
    newPassword.focus();
    document.getElementById("newPassword").innerHTML = "required";
    output = false;
}
else if(!confirmPassword.value) {
    confirmPassword.focus();
    document.getElementById("confirmPassword").innerHTML = "required";
    output = false;
}
if(newPassword.value != confirmPassword.value) {
    newPassword.value="";
    confirmPassword.value="";
    newPassword.focus();
    document.getElementById("confirmPassword").innerHTML = "New password not match with confirm Password";
    output = false;
}   
return output;
}
</script>


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
                                            <h5>Change Password</h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="#"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Pages</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Change Password</a>
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
                                                <h5>Change Password</h5>
                                              
                                            </div>
                                            <div class="card-block">
                                                <div style="color: red;"><h4><?php if(isset($message)) { echo $message; } ?></h4></div>
                                             <form action="" name="frmChange" method="post" onSubmit="return validatePassword()"enctype="multipart/form-data">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Current Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" name="currentPassword" id="cp" onpaste="return false" class="form-control" placeholder="Current Password" autocomplete="off" required>
                                                    </div>
                                                    <div><span id="currentPassword" class="required" style="color: red;"></span></div>
                                                </div>
                                                 <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">New Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" name="newPassword" id="np" onpaste="return false" class="form-control" placeholder="New Password" autocomplete="off" required>
                                                    </div>
                                                    <div><span id="newPassword" class="required" style="color: red;"></span></div>
                                                </div>
                                                  <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Confirm Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" name="confirmPassword" id="cnp" onpaste="return false" class="form-control" placeholder="Confirm Password" autocomplete="off" required>
                                                    </div>
                                                    <div><span id="confirmPassword" class="required" style="color: red;"></span></div>
                                                </div>
                                              
                                                <button type="submit" class="btn btn-primary waves-effect waves-light add">Submit</button>
                                             </form>
<script>
    
document.getElementById("cp").onkeypress = function(e) {
    var chr = String.fromCharCode(e.which);
    if ("></\"=".indexOf(chr) >= 0)
        return false;
};
document.getElementById("np").onkeypress = function(e) {
    var chr = String.fromCharCode(e.which);
    if ("></\"=".indexOf(chr) >= 0)
        return false;
};
document.getElementById("cnp").onkeypress = function(e) {
    var chr = String.fromCharCode(e.which);
    if ("></\"=".indexOf(chr) >= 0)
        return false;
};

</script>

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

    
</body>

</html>