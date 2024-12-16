<?php 
      include('connection.php');
 ?>

<!DOCTYPE html>

<html lang="en">
<?php include('inc/head.php'); ?>

<body id="bg">

    <div class="page-wraper">

        <!-- HEADER START -->
        <?php
                include "connection.php";
                $query="select * from header";
                $res=mysqli_query($conn,$query);
                $row=mysqli_fetch_assoc($res);
         ?>

        <header class="site-header header-style-1  mobile-sider-drawer-menu">

            <div class="top-bar" stye="text-align: center;">
                <div class="container">
                    <div class="wt-topbar-right">
                        <ul class="list-unstyled e-p-bx" style="text-align: center;">
                            <li><i class="fa fa-envelope"></i><a
                                    href="mailto:<?php echo $row['email_id'] ?>">&nbsp&nbsp<?php echo $row['email_id'] ?></a>
                            </li>

                        </ul>
                        <ul class="social-bx list-inline" style="text-align: center;">
                            <li><i class="fa fa-phone"></i><a
                                    href="tel:+91<?php echo $row['contact_number'] ?>"><?php echo $row['contact_number'] ?></a>
                            </li>
                        </ul>
                        <ul class="social-bx list-inline" style="text-align: center;">
                            <li><a href="https://www.facebook.com/gargipaperkraft" target="_blank"
                                    class="fa fa-facebook"></a></li>
                            <li><a href="https://www.instagram.com/gargipaperkraft/" target="_blank"
                                    class="fa fa-instagram"></a></li>
                            <li><a href="https://twitter.com/gargipaperkraft" target="_blank" class="fa fa-twitter"></a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/sulekha-singh-3a2447271/" target="_blank"
                                    class="fa fa-linkedin"></a></li>
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
                                <img src="upload/<?php echo $row['image'] ?>" style="width: 420px; height: auto;"
                                    alt="">
                            </a>
                        </div>

                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li class="active"><a href="index">Home</a></li>
                                <li><a href="about-gargi-paperkraft">About Us</a></li>
                                <li><a href="gargi-paperkraft-products">Products</a></li>
                                <li><a href="gargi-paperkraft-media">Media</a></li>
                                <li><a href="enquiry">Contact</a></li>
                            </ul>
                        </div>
                        <div class="extra-nav">
                            <div class="extra-cell">
                            </div>
                        </div>
                        <!-- NAV Toggle Button -->
                        <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                            class="navbar-toggler collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar icon-bar-first"></span>
                            <span class="icon-bar icon-bar-two"></span>
                            <span class="icon-bar icon-bar-three"></span>
                        </button>



                    </div>
                </div>
            </div>

        </header>

        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">


            <!-- SLIDER START -->
            <div id="rev_slider_1050_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                data-alias="webproduct-light" data-source="gallery" style="background-color:transparent;padding:0px;">

                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                <div id="rev_slider_1050_1" class="slider-dots rev_slider fullscreenbanner" style="display:none;"
                    data-version="5.4.1">

                    <ul>

                        <li data-index="rs-2938" data-transition="slideleft" data-slotamount="default"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                            data-easeout="default" data-masterspeed="default"
                            data-thumb="images/main-slider/gargi-paperkraft-bags-manufaturer-lucknow-2.jpg"
                            data-rotate="0" data-fsslotamount="7" data-saveperformance="off" data-title=""
                            data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5=""
                            data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/main-slider/gargi-paperkraft-bags-manufaturer-lucknow-2.jpg" alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->


                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption WebProduct-Title   tp-resizeme" id="slide-2938-layer-01"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['-80','-80','200','130']"
                                data-fontsize="['57','55','55','30']" data-lineheight="['65','65','65','65']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;
                                 font-weight: 700">
                                <div class="site-text-primary"
                                    style="font-size: 60px; text-align: left; color: #ffffff; !important ">GARGI
                                    PAPERKRAFT</div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption WebProduct-SubTitle   tp-resizeme" id="slide-2938-layer-02"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['0','0','280','180']"
                                data-fontsize="['33','33','33','12']" data-lineheight="['75','75','75','75']"
                                data-width="['700','700','700','300']" data-height="none" data-whitespace="nowrap"
                                data-type="text" data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1250,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;
                                 font-weight: 700;">
                                <div class="site-text-primary"></br>
                                    <p style="font-size: 24px; text-align: left; color: #ffffff; !important ">PAPERKRAFT
                                        BAGS PRODUCTSR, LUCKNOW </p>
                                </div>

                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption WebProduct-Content   tp-resizeme" id="slide-2938-layer-03"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['80','80','380','250']"
                                data-fontsize="['55','55','55','30']" data-lineheight="['28','28','32','26']"
                                data-width="['700','700','700','300']" data-height="['none','none','76','68']"
                                data-whitespace="normal" data-type="text" data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal;"></br></br></br>
                                <!--<div class="site-text-primary"style="font-size: 32px; color: #ffffff; !important "><b> GARGI PAPERKRAFT</b></div>-->
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme" id="slide-2938-layer-04"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on" data-responsive="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index:13; text-transform:uppercase; font-weight:700;">
                                <a href="flat-bottom" class="site-button radius-sm button-lg">Flat Bottom Bags</a>
                            </div>
                            <!-- LAYER NR. 5 -->

                            <div class="tp-caption tp-resizeme" id="slide-2938-layer-05"
                                data-x="['left','left','left','left']" data-hoffset="['240','240','200','200']"
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on" data-responsive="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[40,40,40,40]"
                                style="z-index:13; margin-left: 50px; text-transform:uppercase; font-weight:700;">
                                <a href="enquiry" class="site-button-secondry radius-sm button-lg">Enquiry Now</a>
                            </div>

                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-2939" data-transition="slideleft" data-slotamount="default"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                            data-easeout="default" data-masterspeed="default"
                            data-thumb="images/main-slider/gargi-paperkraft-bags-manufaturer-lucknow-0.jpg"
                            data-rotate="0" data-saveperformance="off" data-title="" data-param1="" data-param2=""
                            data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                            data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/main-slider/gargi-paperkraft-bags-manufaturer-lucknow-0.jpg" alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->


                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption WebProduct-Title   tp-resizeme" id="slide-2938-layer-01"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['-80','-80','200','130']"
                                data-fontsize="['57','55','55','30']" data-lineheight="['65','65','65','65']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;
                                 font-weight: 700">
                                <div class="site-text-primary"
                                    style="font-size: 60px; text-align: left; color: #ffffff; !important ">GARGI
                                    PAPERKRAFT</div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption WebProduct-SubTitle   tp-resizeme" id="slide-2938-layer-02"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['0','0','280','180']"
                                data-fontsize="['33','33','33','12']" data-lineheight="['75','75','75','75']"
                                data-width="['700','700','700','300']" data-height="none" data-whitespace="nowrap"
                                data-type="text" data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1250,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;
                                 font-weight: 700;">
                                <div class="site-text-primary"></br>
                                    <p style="font-size: 24px; text-align: left; color: #ffffff; !important ">PAPERKRAFT
                                        BAGS PRODUCTSR, LUCKNOW</p>
                                </div>

                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption WebProduct-Content   tp-resizeme" id="slide-2938-layer-03"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['80','80','380','250']"
                                data-fontsize="['55','55','55','30']" data-lineheight="['28','28','32','26']"
                                data-width="['700','700','700','300']" data-height="['none','none','76','68']"
                                data-whitespace="normal" data-type="text" data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal;"></br></br></br>
                                <!--<div class="site-text-primary"style="font-size:60px; color: #ffffff; !important "><b> GARGI PAPERKRAFT</b></div>-->
                            </div>
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme" id="slide-2938-layer-04"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on" data-responsive="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index:13; text-transform:uppercase; font-weight:700;">
                                <a href="square-bottom" class="site-button radius-sm button-lg">Square-Bottom Bags</a>
                            </div>
                            <!-- LAYER NR. 5 -->

                            <div class="tp-caption tp-resizeme" id="slide-2938-layer-05"
                                data-x="['left','left','left','left']" data-hoffset="['240','240','200','200']"
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on" data-responsive="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[40,40,40,40]"
                                style="z-index:13; margin-left: 50px; text-transform:uppercase; font-weight:700;">
                                <a href="enquiry" class="site-button-secondry radius-sm button-lg">Enquiry Now</a>
                            </div>

                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-2940" data-transition="slideleft" data-slotamount="default"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                            data-easeout="default" data-masterspeed="default"
                            data-thumb="images/main-slider/gargi-paperkraft-bags-manufaturer-lucknow-2.jpg"
                            data-rotate="0" data-fsslotamount="7" data-saveperformance="off" data-title=""
                            data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5=""
                            data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/main-slider/gargi-paperkraft-bags-manufaturer-lucknow-2.jpg" alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->


                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption WebProduct-Title   tp-resizeme" id="slide-2938-layer-01"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['-80','-80','200','130']"
                                data-fontsize="['57','55','55','30']" data-lineheight="['65','65','65','65']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;
                                 font-weight: 700">
                                <div class="site-text-primary"
                                    style="font-size: 60px; text-align: left; color: #ffffff; !important ">GARGI
                                    PAPERKRAFT</div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption WebProduct-SubTitle   tp-resizeme" id="slide-2938-layer-02"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['0','0','280','180']"
                                data-fontsize="['33','33','33','12']" data-lineheight="['75','75','75','75']"
                                data-width="['700','700','700','300']" data-height="none" data-whitespace="nowrap"
                                data-type="text" data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1250,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;
                                 font-weight: 700;">
                                <div class="site-text-primary"></br>
                                    <p style="font-size: 24px; text-align: left; color: #ffffff; !important ">PAPERKRAFT
                                        BAGS PRODUCTSR, LUCKNOW</p>
                                </div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption WebProduct-Content   tp-resizeme" id="slide-2938-layer-03"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['80','80','380','250']"
                                data-fontsize="['55','55','55','30']" data-lineheight="['28','28','32','26']"
                                data-width="['700','700','700','300']" data-height="['none','none','76','68']"
                                data-whitespace="normal" data-type="text" data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal;"></br></br></br>
                                <!-- <div class="site-text-primary"style="font-size: 32px; color: #ffffff; !important "><b> GARGI PAPERKRAFT</b></div> -->
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme" id="slide-2938-layer-04"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on" data-responsive="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index:13; text-transform:uppercase; font-weight:700;">
                                <a href="v-bottom" class="site-button radius-sm button-lg">V-Bottom Bags</a>
                            </div>
                            <!-- LAYER NR. 5 -->


                            <div class="tp-caption tp-resizeme" id="slide-2938-layer-05"
                                data-x="['left','left','left','left']" data-hoffset="['240','240','200','200']"
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on" data-responsive="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[40,40,40,40]"
                                style="z-index:13; margin-left: 50px; text-transform:uppercase; font-weight:700;">
                                <a href="enquiry" class="site-button-secondry radius-sm button-lg">Enquiry Now</a>
                            </div>

                        </li>
                        <li data-index="rs-2941" data-transition="slideleft" data-slotamount="default"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                            data-easeout="default" data-masterspeed="default"
                            data-thumb="images/main-slider/gargi-paperkraft-bags-manufaturer-lucknow-3.jpg"
                            data-rotate="0" data-fsslotamount="7" data-saveperformance="off" data-title=""
                            data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5=""
                            data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/main-slider/gargi-paperkraft-bags-manufaturer-lucknow-3.jpg" alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->


                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption WebProduct-Title   tp-resizeme" id="slide-2938-layer-01"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['-80','-80','200','130']"
                                data-fontsize="['57','55','55','30']" data-lineheight="['65','65','65','65']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;
                                 font-weight: 700">
                                <div class="site-text-primary"
                                    style="font-size: 60px; text-align: left; color: #ffffff; !important ">GARGI
                                    PAPERKRAFT</div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption WebProduct-SubTitle   tp-resizeme" id="slide-2938-layer-02"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['0','0','280','180']"
                                data-fontsize="['33','33','33','12']" data-lineheight="['75','75','75','75']"
                                data-width="['700','700','700','300']" data-height="none" data-whitespace="nowrap"
                                data-type="text" data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1250,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;
                                 font-weight: 700;">
                                <div class="site-text-primary"></br>
                                    <p style="font-size: 24px; text-align: left; color: #ffffff; !important ">PAPERKRAFT
                                        BAGS PRODUCTSR, LUCKNOW</p>
                                </div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption WebProduct-Content   tp-resizeme" id="slide-2938-layer-03"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['80','80','380','250']"
                                data-fontsize="['55','55','55','30']" data-lineheight="['28','28','32','26']"
                                data-width="['700','700','700','300']" data-height="['none','none','76','68']"
                                data-whitespace="normal" data-type="text" data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal;"></br></br></br>
                                <!--<div class="site-text-primary"style="font-size: 32px; color: #ffffff; !important "><b> GARGI PAPERKRAFT</b></div>-->
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme" id="slide-2938-layer-04"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on" data-responsive="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index:13; text-transform:uppercase; font-weight:700;">
                                <a href="flat-bottom" class="site-button radius-sm button-lg">Flat-Bottom Bags</a>
                            </div>
                            <!-- LAYER NR. 5 -->


                            <div class="tp-caption tp-resizeme" id="slide-2938-layer-05"
                                data-x="['left','left','left','left']" data-hoffset="['240','240','200','200']"
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on" data-responsive="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[40,40,40,40]"
                                style="z-index:13; margin-left: 50px; text-transform:uppercase; font-weight:700;">
                                <a href="enquiry" class="site-button-secondry radius-sm button-lg">Enquiry Now</a>
                            </div>

                        </li>
                        <li data-index="rs-2942" data-transition="slideleft" data-slotamount="default"
                            data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                            data-easeout="default" data-masterspeed="default"
                            data-thumb="images/main-slider/gargi-paperkraft-bags-manufaturer-lucknow-1.jpg"
                            data-rotate="0" data-fsslotamount="7" data-saveperformance="off" data-title=""
                            data-param1="Additional Text" data-param2="" data-param3="" data-param4="" data-param5=""
                            data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="images/main-slider/gargi-paperkraft-bags-manufaturer-lucknow-1.jpg" alt=""
                                data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->


                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption WebProduct-Title   tp-resizeme" id="slide-2938-layer-01"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['-80','-80','200','130']"
                                data-fontsize="['57','55','55','30']" data-lineheight="['65','65','65','65']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;
                                 font-weight: 700">
                                <div class="site-text-primary"
                                    style="font-size: 60px; text-align: left; color: #ffffff; !important ">GARGI
                                    PAPERKRAFT</div>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption WebProduct-SubTitle   tp-resizeme" id="slide-2938-layer-02"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['0','0','280','180']"
                                data-fontsize="['33','33','33','12']" data-lineheight="['75','75','75','75']"
                                data-width="['700','700','700','300']" data-height="none" data-whitespace="nowrap"
                                data-type="text" data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1250,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 11;
                                white-space: nowrap;
                                text-transform:uppercase;
                                 font-weight: 700;">
                                <div class="site-text-primary"></br>
                                    <p style="font-size: 24px; text-align: left; color: #ffffff; !important ">PAPERKRAFT
                                        BAGS PRODUCTSR, LUCKNOW</p>
                                </div>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption WebProduct-Content   tp-resizeme" id="slide-2938-layer-03"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['80','80','380','250']"
                                data-fontsize="['55','55','55','30']" data-lineheight="['28','28','32','26']"
                                data-width="['700','700','700','300']" data-height="['none','none','76','68']"
                                data-whitespace="normal" data-type="text" data-responsive_offset="on"
                                data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal;"></br></br></br>
                                <!--<div class="site-text-primary"style="font-size: 32px; color: #ffffff; !important "><b> GARGI PAPERKRAFT</b></div>-->
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme" id="slide-2938-layer-04"
                                data-x="['left','left','left','left']" data-hoffset="['30','30','20','20']"
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on" data-responsive="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[40,40,40,40]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index:13; text-transform:uppercase; font-weight:700;">
                                <a href="square-bottom" class="site-button radius-sm button-lg">Square-Bottom Bags</a>
                            </div>
                            <!-- LAYER NR. 5 -->


                            <div class="tp-caption tp-resizeme" id="slide-2938-layer-05"
                                data-x="['left','left','left','left']" data-hoffset="['240','240','200','200']"
                                data-y="['middle','middle','top','top']" data-voffset="['180','180','480','400']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-2939","delay":""}]'
                                data-responsive_offset="on" data-responsive="on" data-frames='[ 
                                {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                ]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[40,40,40,40]"
                                style="z-index:13; margin-left: 50px; text-transform:uppercase; font-weight:700;">
                                <a href="enquiry" class="site-button-secondry radius-sm button-lg">Enquiry Now</a>
                            </div>

                        </li>




                    </ul>


                </div>

            </div>

            <!-- SLIDER END -->

            <?php
                            $a=1;
                            $query="select * from about";
                            $res=mysqli_query($conn,$query);
                            $row=mysqli_fetch_assoc($res);
                         ?>
            <!-- WELCOME SECTION START -->
            <div class="section-full p-t100  p-b70 bg-bottom-center bg-full-width bg-repeat"
                style="background-image:url(images/background/bg-8.jpg);">
                <div class="container ">
                    <div class="section-head text-center">
                        <h1 style="color: #ffffff;"><span class="site-text-primary" style="color: white;"> Welcome To
                            </span><?php echo $row['heading'] ?></h1>
                        <div class="wt-separator-outer " style="color: white;">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>

                        <p class="font-16" style="color: white;">
                            <strong>
                                <?php echo $row['paragraph'] ?>
                            </strong>
                        </p>

                    </div>
                    <div class="font-16" style="color: white;">
                        <p>
                            <?php echo $row['sub_paragraph'] ?>
                        </p>


                    </div>


                </div>

            </div>




            <div class="section-full bg-gray p-t100 p-b70 bg-repeat"
                style="background-image:url(images/background/bg-6.jpg);">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h1 style="color: #adc33c;"><span class="site-text-primary">PaperKraft </span>Products</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                        <p>|| FLAT BOTTOM BAGS || V-BOTTOM BAGS || SQUARE BOTTOM BAGS ||</p>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="row">

                            <?php 
                include('connection.php');
                $a=1;
                $query="select * from industrial";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($result))
                {
                
               ?>

                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                        <a href="gargi-paperkraft-products"><img
                                                src="upload/<?php echo $row['image']; ?>"
                                                style="height: 322px; width: 422px;" class="radius-bx" alt=""></a>
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                        <h3> <a href="gargi-paperkraft-products"><?php echo $row['heading']; ?></a></h3>
                                        <p><a href="gargi-paperkraft-products"> <?php echo $row['paragraph']; ?></a></p>
                                    </div>
                                </div>
                            </div>
                            <?php
              $a++;
                    }
               ?>


                        </div>
                    </div>
                </div>
            </div>




            <!-- COMPANY STATUS SECTION START -->
            <div class="section-full overlay-wraper bg-center bg-cover p-t100 p-b70 site-bg-primary"
                style="background-image:url(images/background/bg-9.png);">
                <div class="overlay-main site-bg-primary opacity-09"></div>
                <div class="container summary-counter">
                    <div class="row">

                        <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                            <div class="wt-icon-box-wraper left p-a10 text-white">
                                <span class="icon-md">
                                    <span class="flaticon-happy"></span>
                                </span>
                                <div class="icon-content">
                                    <div><span class="counter"> 458 </span><b>+</b></div>
                                    <span class="text-uppercase">Happy Clients</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                            <div class="wt-icon-box-wraper left p-a10 text-white">
                                <span class="icon-md">
                                    <span class="flaticon-trophy"></span>
                                </span>
                                <div class="icon-content">
                                    <div><span class="counter"> 05 </span><b>+</b></div>
                                    <span class="text-uppercase">Win Awards</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                            <div class="wt-icon-box-wraper left p-a10 text-white">
                                <span class="icon-md">
                                    <span class="flaticon-female-hairs"></span>
                                </span>
                                <div class="icon-content">
                                    <div><span class="counter"> 894 </span><b>+</b></div>
                                    <span class="text-uppercase">Our Products</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                            <div class="wt-icon-box-wraper left p-a10 text-white">
                                <span class="icon-md">
                                    <span class="flaticon-spray-bottle"></span>
                                </span>
                                <div class="icon-content">
                                    <div><span class="counter"> 758 </span><b>+</b></div>
                                    <span class="text-uppercase">Manufacturing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COMPANY STATUS SECTION END -->



            <div class="section-full bg-gray p-t100 p-b70 bg-repeat"
                style="background-image:url(images/background/bg-6.jpg);">
                <div class="container">
                    <div class="section-head text-center">
                        <h1 style="color: #adc33c;"><span class="site-text-primary">Industry </span> Verticals</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                                
                            </div>
                        </div>
                    </div>

                    <div class="section-content">
                        <div class="owl-carousel client-logo-carousel m-b30">
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo">
                                        <a href="enquiry" target="_blank"><img src="images/indianrailway.jpg"
                                                alt=""></a>
                                    </div>
                                </div>
                                <p style="color: #00000; font-size: 18px;">Indian Railways</p>
                            </div>

                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo">
                                        <a href="enquiry" target="_blank"><img src="images/laundry.jpg" alt=""></a>
                                    </div>
                                </div>
                                <p style="color: #00000; font-size: 18px;">Laundary</p>
                            </div>
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo">
                                        <a href="enquiry" target="_blank"><img src="images/grocerry.jpg" alt=""></a>
                                    </div>
                                </div>
                                <p style="color: #00000; font-size: 18px;">Grocerry</p>
                            </div>
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo">
                                        <a href="enquiry" target="_blank"><img src="images/vegitables.jpg" alt=""></a>
                                    </div>
                                </div>
                                <p style="color: #00000; font-size: 18px;">Vegitables</p>
                            </div>
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo">
                                        <a href="enquiry" target="_blank"><img src="images/giftarticles.jpg" alt=""></a>
                                    </div>
                                </div>
                                <p style="color: #00000; font-size: 18px;">Gift Article's</p>
                            </div>
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo">
                                        <a href="enquiry" target="_blank"><img src="images/clothesandapparels.jpg"
                                                alt=""></a>
                                    </div>
                                </div>
                                <p style="color: #00000; font-size: 18px;">Cloths / Apparels</p>
                            </div>
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo">
                                        <a href="enquiry" target="_blank"><img src="images/sweets.jpg" alt=""></a>
                                    </div>
                                </div>
                                <p style="color: #00000; font-size: 18px;">Sweets</p>
                            </div>
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo">
                                        <a href="enquiry" target="_blank"><img src="images/namkeen.jpg" alt=""></a>
                                    </div>
                                </div>
                                <p style="color: #00000; font-size: 18px;">Namkeen</p>
                            </div>
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo">
                                        <a href="enquiry" target="_blank"><img src="images/pharmacy.jpg" alt=""></a>
                                    </div>
                                </div>
                                <p style="color: #00000; font-size: 18px;">Pharmacy</p>
                            </div>
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo">
                                        <a href="enquiry" target="_blank"><img src="images/fastfoods.jpg" alt=""></a>
                                    </div>
                                </div>
                                <p style="color: #00000; font-size: 18px;">Fast Food</p>
                            </div>
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo">
                                        <a href="enquiry" target="_blank"><img src="images/shoes.jpg" alt=""></a>
                                    </div>
                                </div>
                                <p style="color: #00000; font-size: 18px;">Shoes</p>
                            </div>



                        </div>
                    </div>

                </div>
            </div>

            <div class="section-full p-t100  p-b70 bg-bottom-center bg-full-width bg-repeat"
                style="background-image:url(images/background/bg-8.jpg);">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h1 style="color: #ffffff;"><span class="site-text-primary" style="color: #ffffff;"> Our </span>
                            Experts</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                        <p style="color: #ffffff;">Professional and Expertized Team Members</p>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="row">

                            <?php 

                $query="select * from team";
                $result=mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($result))
                {
          ?>

                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-4 p-tb15">
                                <div class="wt-box">
                                    <div class="wt-media text-primary m-b20 radius-bx circle-effect-1">
                                        <img src="upload/<?php echo $row['image']; ?>"
                                            style="height: 322px; width: 422px;" class="radius-bx" alt="">
                                    </div>
                                    <div class="wt-info p-t30 text-center">
                                        <h3 style="color: #ffffff; font-size: 22px;"><?php echo $row['name']; ?></h3>
                                        <p style="color: #ffffff; font-size: 16px;"><?php echo $row['designation']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
              $a++;
                    }
               ?>


                        </div>
                    </div>
                </div>
            </div>


            <!-- CONTACT US SECTION END  -->
            <div class="section-full p-t100 p-b70 bg-repeat" style="background-image:url(images/background/bg-6.jpg);">
                <div class="container">

                    <!-- TITLE START -->
                    <div class="section-head text-center">
                        <h1 style="color: #adc33c;"><span class="site-text-primary"> Contact</span> Us</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                        <p>content will go here</p>
                    </div>
                    <!-- TITLE END -->

                    <div class="row conntact-home bg-gray m-b30">
                        <div class="col-lg-4 col-md-6 contact-home-left bg-no-repeat site-bg-primary bg-left-center"
                            style="background-image:url(images/background/contact-map.png);">
                            <div class="section-content">
                                <div class="p-a50">

                                    <div class="wt-icon-box-wraper left p-b20 text-white">
                                        <span class="icon-lg">
                                            <span class="flaticon-placeholder"></span>
                                        </span>
                                        <div class="icon-content">
                                            <h4 class="m-b5">Address</h4>
                                            <span class="font-12">B-33 Dayal Enclave Phase-I, Deva Road, Near Kunwar
                                                Global School , Lucknow, Uttar Pradesh - 226019</span>
                                        </div>
                                    </div>

                                    <div class="wt-icon-box-wraper left p-b20 text-white">
                                        <span class="icon-lg">
                                            <span class="flaticon-envelope"></span>
                                        </span>
                                        <div class="icon-content">
                                            <h4 class="m-b5">Email</h4>
                                            <span class="font-12">info@gargipaperkfrat.com </span>

                                        </div>
                                    </div>

                                    <div class="wt-icon-box-wraper left p-b20 text-white">
                                        <span class="icon-lg">
                                            <span class="flaticon-smartphone"></span>
                                        </span>
                                        <div class="icon-content">
                                            <h4 class="m-b5">Phone</h4>
                                            <span class="font-12">+91 99182 80347 </span>
                                        </div>
                                    </div>

                                    <div class="Opening-hours text-white">
                                        <h3 class="wt-title text-uppercase m-t0">Opening Hours</h3>
                                        <ul class="list-unstyled">
                                            <li>Monday - Saturday <span class="pull-right">10.00 AM- 6.00 PM</span></li>
                                            <li>Sunday <span class="pull-right">Closed</span></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-lg-8 col-md-6">
                            <div class="section-content bg-gray">
                                <div class="contact-home-right p-a30">
                                    <h5 class="text-uppercase font-26 p-b20 font-weight-400">GET IN TOUCH</h5>
                                    <form action="" method="POST" onsubmit="return validation()">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Your Name" required>
                                            </div>
                                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Your Email" required>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control" name="phone" id="phone"
                                                placeholder="Phone" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <textarea class="form-control" name="query" id="query" rows="5"
                                                placeholder="Message" required></textarea>
                                        </div>
                                        <button name="send" type="submit"
                                            class="btn btn-primary waves-effect waves-light add">Submit</button>
                                    </form>
                                    <?php
          if (isset($_POST['send'])) {
            $name = htmlentities($_POST['name']);
            $phone = htmlentities($_POST['phone']);
            $email = htmlentities($_POST['email']);
            $query = htmlentities($_POST['query']);
            $subject = "New Enquiry from GARGI PAPERKRAFT BAGS ";
            $from1 = 'info@gargipaperkraft.com';
             $to_mail = 'gargipaperkraft@gmail.com';
            
            $pattern = " /[6-9]\d{9}$/";
            $length = strlen($phone);
            $mlength = strlen($subject);
            $correct_way = " /^[A-Z a-z]+$/";
            $error = "";
            if (!preg_match($correct_way, $name))
              $error = "Name is Not valid";
           else if (!preg_match($pattern, $phone) || $length != 10) {
              $error = "Mobile Number is not valid";
            } else if ($mlength > 255) {
              $error = "message to Long";
            } 

            // email validation
            else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $error = "Email is not valid";
            } else {
              $headers  = 'MIME-Version: 1.0' . "\r\n";
              $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


              $headers .= 'From: ' . $from1 . "\r\n" .
                'Reply-To: ' . $from1 . "\r\n" .
                'X-Mailer: PHP/' . phpversion();




              $email_message = '<html><body><table border="1" solid blue cellpadding = "5" cellspacing = "0" ><tr><td colspan=2" align="center" style="color:#f40;"><h3>New Enquiry</h3></caption>';
              $email_message .= '<tr><td>Name:</td><td>' . $name . '</td></tr>';
              $email_message .= '<tr><td>Mobile No:</td><td>' . $phone . '</td></tr>';
              $email_message .= '<tr><td>Email-Id:</td><td>' . $email . '</td></tr>';
              $email_message .= '<tr><td>Query:</td><td>' . $query . '</td></tr>';
             

              $email_message .= '</table></body></html>';

              $success = mail($to_mail, $subject, $email_message, $headers);

              if ($success) {
                echo "<center><h3>Thankyou for your enquiry with us ! we will get back to you as soon as possible ....<h3></center>";
                header('refresh:2;url=enquiry.php');
              } else
                echo "something went wrong";
            }
            echo "<center><h3>$error</h3></center>";
          }
          ?>
                                    <script>
                                    function validation() {

                                        /* [Validation for name box] */
                                        var correct_way = /^[A-Z a-z]+$/;
                                        var a = document.getElementById('name').value;
                                        if (a.length < 1) {
                                            document.getElementById("validname").innerHTML =
                                            '**Please write your name.';
                                            return false;
                                        }
                                        if (a.match(correct_way))
                                            true;
                                        else {
                                            document.getElementById("validname").innerHTML =
                                                "** Only alphabet are allowed.";
                                            return false;
                                        }


                                        /* [Validation for mobile box] */

                                        var b = document.getElementById('mobile').value;
                                        if (b.length < 1) {
                                            document.getElementById("validmobile").innerHTML =
                                                '**Please write your mobile number.';
                                            return false;
                                        }
                                        if (isNaN(b)) {
                                            document.getElementById("validmobile").innerHTML =
                                                "** Only numbers are allowed.";
                                            return false;
                                        }
                                        if (b.length < 10) {
                                            document.getElementById("validmobile").innerHTML =
                                                "** Mobile number must be 10 digits.";
                                            return false;
                                        }
                                        if (b.length > 10) {
                                            document.getElementById("validmobile").innerHTML =
                                                "** Mobile number must be 10 digits.";
                                            return false;
                                        }
                                        if ((b.charAt(0) != 9) && (b.charAt(0) != 8) && (b.charAt(0) != 7) && (b.charAt(
                                                0) != 6)) {
                                            document.getElementById("validmobile").innerHTML =
                                                "** Mobile number must start with 9,8,7 & 6.";
                                            return false;
                                        }

                                        /* [Validation for email box] */
                                        var email = document.getElementById('email').value;
                                        if (email.length < 1) {
                                            document.getElementById("validemail").innerHTML =
                                                '**Please write your email id.';
                                            return false;
                                        }
                                        if (email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
                                            true;
                                        else {
                                            document.getElementById('validemail').innerHTML = '**Email Id not correct.';
                                            return false;
                                        }

                                        /* [Validation for vehicle model box] */
                                        var query = document.getElementById('query').value;
                                        if (query.length < 1) {
                                            document.getElementById("validquery").innerHTML =
                                                '**Please write your query.';
                                            return false;
                                        }


                                    }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="section-full p-t100  p-b70 bg-bottom-center bg-full-width bg-repeat"
                style="background-image:url(images/background/bg-8.jpg);">
                <div class="container">
                    <div class="section-head text-center">
                        <h1 style="color: #ffffff;"><span class="site-text-primary" style="color: white;"> Our</span>
                            Client</h1>
                        <div class="wt-separator-outer ">
                            <div class="wt-separator style-icon">
                                <i class="fa fa-leaf text-black"></i>
                                <span class="separator-left site-bg-primary"></span>
                                <span class="separator-right site-bg-primary"></span>
                            </div>
                        </div>
                    </div>


                    <div class="section-content">
                        <div class="owl-carousel client-logo-carousel m-b30" <div class="item">
                            <?php 

                                    $query="select * from clients";
                                    $result=mysqli_query($conn,$query);
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                 ?>
                            <div class="ow-client-logo">
                                <div class="client-logo">
                                    <a href="enquiry" target="_blank"><img src="upload/<?php echo $row['image']; ?>"
                                            style="height: 150px; width: 250px;" alt=""></a>
                                </div>
                            </div>
                            <?php
            }
            ?>


                        </div>



                    </div>






                </div>


            </div>


            <?php include('inc/footer.php'); ?>



            <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>

        </div>





        <!-- JAVASCRIPT  FILES ========================================= -->
        <script src="js/jquery-3.6.1.min.js"></script><!-- JQUERY.MIN JS -->
        <script src="js/popper.min.js"></script><!-- POPPER.MIN JS -->
        <script src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
        <script src="js/bootstrap-select.min.js"></script><!-- FORM JS -->
        <script src="js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->
        <script src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
        <script src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
        <script src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
        <script src="js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->
        <script src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
        <script src="js/imagesloaded.pkgd.min.js"></script><!-- MASONRY  -->
        <script src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
        <script src="js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->
        <script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
        <script src="js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->

        <!-- SLIDER REVOLUTION -->
        <!-- REVOLUTION JS FILES -->
        <script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>
        <!-- REVOLUTION SLIDER SCRIPT -->

        <!-- REVOLUTION SLIDER SCRIPT FILES -->
        <script src="js/rev-script-1.js"></script>

        <!-- GetButton.io widget -->
        <script type="text/javascript">
        (function() {
            var options = {
                call: "9918280347", // Call phone number
                whatsapp: "9918280347", // WhatsApp number
                call_to_action: "GARGI PAPERKRAFT", // Call to action
                button_color: "#129BF4", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "call,whatsapp", // Order of buttons
                pre_filled_message: "Welcome to GARGI PAPERKRAFT\n\nHow May I Assist You!", // WhatsApp pre-filled message
            };
            var proto = 'https:',
                host = "getbutton.io",
                url = proto + '//static.' + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
        </script>
        <!-- /GetButton.io widget -->
</body>

</html>