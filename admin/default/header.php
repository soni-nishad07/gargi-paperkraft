<head>
    <title>Administrator Page</title>
</head>

<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <?php
      include "../../connection.php";
      $query="select * from logo";
      $res=mysqli_query($conn,$query);
      while($row=mysqli_fetch_assoc($res))
  
    {
      ?>



            <div class="logo">
                <!-- <h1 class="text-light"><a href="index.php"></a></h1> -->
                <a href="index.php"><img src="../../upload/<?php echo $row['image'] ?>" alt="Anch-Meta"
                        class="img-fluid"></a>
            </div>
            <?php
    }
    ?>
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu icon-toggle-right"></i>
            </a>
            <a class="mobile-options waves-effect waves-light">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li class="header-search">

                </li>
                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                        <i class="full-screen feather icon-maximize"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">

                <li class="header-notification">
                    <div class="dropdown-primary dropdown">

                    </div>
                </li>

                <li class="user-profile header-notification">
                    <?php
                    include "../../connection.php";
                    $query="select * from admin_login";
                    $res=mysqli_query($conn,$query);
                    while($row=mysqli_fetch_assoc($res))
                    {
                   ?>

                    <img src="../../upload/<?php echo $row['image'] ?>" class="img-radius">
                    <span><?php echo $row['account_name'] ?></span>
                    <?php
}
?>
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">

                            <i class="feather icon-chevron-down"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn"
                            data-dropdown-out="fadeOut">
                            <li>
                                <a href="admin_account">
                                    <i class="feather icon-user"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a href="change_password">
                                    <i class="fa fa-key" aria-hidden="true"></i> Change Password
                                </a>
                            </li>

                            <li>
                                <a href="../logout">
                                    <i class="feather icon-log-out"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>