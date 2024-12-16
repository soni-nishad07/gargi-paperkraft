  <?php
    include "connection.php";
    $query="select * from header";
    $res=mysqli_query($conn,$query);
   $row=mysqli_fetch_assoc($res);
?>

<header class="site-header header-style-1  mobile-sider-drawer-menu">
        
            <div class="top-bar">
                <div class="container">
                    <div class="wt-topbar-left">
                        <ul class="list-unstyled e-p-bx">
                            <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo $row['email_id'] ?>">&nbsp&nbsp<?php echo $row['email_id'] ?></a></li>
                           
                        </ul>
                      
                   </div>
                    <div class="wt-topbar-right">
                     <ul class="social-bx list-inline">
                            <li><i class="fa fa-phone"></i><a href="tel:+91<?php echo $row['contact_number'] ?>"><?php echo $row['contact_number'] ?></a></li>
                     </ul>
                     </div>
                   
                </div>
            </div>
            <!-- Search Link -->

            <!-- Search Form -->

            <div class="sticky-header main-bar-wraper">
                <div class="main-bar bg-white">
                    <div class="container">
                        <?php
                            include "connection.php";
                            $query="select * from logo";
                            $res=mysqli_query($conn,$query);
                            $row=mysqli_fetch_assoc($res);
                            ?>
                        <div class="logo-header">
                            <a href="index">
                                <img src="upload/<?php echo $row['image'] ?>" width="216" height="37" alt="" >
                            </a>
                        </div>
                        
                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li class=""><a href="index">Home</a></li>
                                <li><a href="about-gargi-paperkfrat">About Us</a></li>
                                <li><a href="gargi-paperkraft-products">Products</a></li>
                                <li><a href="gargi-paperkraft-media">Media</a></li>
                                 <li><a href="enquiry">Enquiry</a></li>
                            </ul>
                        </div>
                        <div class="extra-nav">                         
                            <div class="extra-cell">
                            </div>
                         </div>
                         <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>
                       
                        
                        
                    </div>
                </div>
            </div>
            
        </header>