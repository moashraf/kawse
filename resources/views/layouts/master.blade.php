<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>kawse Construction  </title>
    <!-- Stylesheets -->
    <!-- bootstrap v3.3.6 css -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- font-awesome css -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- flaticon css -->
    <link href="css/flaticon.css" rel="stylesheet">
    <!-- animate css -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- owl.carousel css -->
    <link href="css/owl.css" rel="stylesheet">
    <!-- fancybox css -->
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">
    <!-- style css -->
    <link href="css/hovereffect.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href="css/revolution/settings.css">
    <link rel="stylesheet" type="text/css" href="css/revolution/layers.css">
    <link rel="stylesheet" type="text/css" href="css/revolution/navigation.css">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header -->
        <header class="site-header headersecond transparenthd">
            <!-- Header Top -->
            <div class="header-top">
                <div class="container clearfix">
                    <!--Top Left-->
                    <div class="top-left pull-left">
                        <ul class="links-nav clearfix">
                            <li><a href="#"><span class="fa fa-map-marker"></span>20c  Avenue, lakepool, USA</a></li>
                            <li><a href="#"><span class="fa fa-phone"></span>(+01) 123 456 7896</a></li>
                            <li><a href="#"><span class="fa fa-envelope-o"></span>mailus@gmail.com</a></li>

                        </ul>
                    </div>
                    <!--Top Right-->
                    <div class="top-right pull-right">
                        <a href="contact.html" class="theme-btn quote-btn"><i class="fa fa-share"></i> Get a Quote</a>
                    </div>
                    <!--Top Right-->
                    <div class="top-right pull-right">
                        <div class="social-links clearfix">
                            <a href="#"><span class="fa fa-facebook-f"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Top End -->

            <!--Header-Main-->
            <div class="header-main">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="logo">
                                <a href="index.html"><img src="images/kawse-1.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-sm-9">
 

                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    

                            @include('layouts.menu')

                                    
                                </div>
                            </nav>
                            <!-- Main Menu end -->

                        </div>
                    </div>
                </div>
            </div>

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="index.html" class="img-responsive"><img src="images/kawse-1.png" alt="Transpo" title="Transpo"></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">
 

                        <!-- Main Menu -->
                           <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                   


                            @include('layouts.menu')


                                </div>
                            </nav>

                        <!-- Main Menu End-->
                    </div>

                </div>
            </div>
            <!--End Sticky Header-->

        </header>
        <!-- Main Header end -->
 		@yield('content')	

        <!-- footer section -->
        <footer class="footer1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footersec">
                            <a class="ftlogo" href="#">
                                <img alt="Awesome Image" src="images/kawse-1.png" />
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper</p>
                            <div class="subscribe_us">
                                <form action="#">
                                    <input type="email" placeholder="Email address">
                                    <button class="subscbtn" type="submit"><i class="fa fa-send"></i></button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-sec quick-links">
                            <h3 class="title">Useful Links</h3>
                            <ul>
                                <li><i class="fa fa-chevron-circle-right"></i><a href="#">Construction Consultant</a></li>
                                <li><i class="fa fa-chevron-circle-right"></i><a href="#">General Contracting</a></li>
                                <li><i class="fa fa-chevron-circle-right"></i><a href="#">Architectural Design</a></li>
                                <li><i class="fa fa-chevron-circle-right"></i><a href="#">Reconstruction Services</a></li>
                                <li><i class="fa fa-chevron-circle-right"></i><a href="#">Building Information</a></li>
                                <li><i class="fa fa-chevron-circle-right"></i><a href="#">Project Partnering</a></li>
                                <li><i class="fa fa-chevron-circle-right"></i><a href="#">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 latest-post col-sm-6">
                        <div class="footer-sec latest-post">
                            <h3 class="title">Latest Tweets</h3>
                            <ul>
                                <li>
                                    <img src="images/resource/post-thumb-1.jpg" alt="image" />
                                    <div class="content">
                                        <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                        <span>June 12, 2017</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/resource/post-thumb-2.jpg" alt="image" />
                                    <div class="content">
                                        <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                        <span>June 12, 2017</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/resource/post-thumb-3.jpg" alt="image" />
                                    <div class="content">
                                        <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</a>
                                        <span>June 12, 2017</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-sec footersec contact-footer">
                            <h3 class="title">Contact Us</h3>

                            <div class="ftcontact">
                                <ul>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <div class="continfo">
                                            <strong>Company Name.</strong>
                                            <br> 20c Avenue, lakepool, USA
                                        </div>

                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <div class="continfo">
                                            <a href="#">+ 0123 4567 8901</a> / <a href="#">9876 543 210</a>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <div class="continfo">
                                            <a href="#">contact@construction.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-clock-o"></i>
                                        <div class="continfo">
                                            Monday - Friday : 9.00 - 7.00
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            Copyright &copy; 2018.
                            <br class="visible-xs"> All rights reserved.
                        </div>
                        <div class="text-right col-sm-4">

                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- footer section end -->

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".site-header"><span class="icon fa fa-long-arrow-up"></span></div>

    <!-- jquery Liabrary -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- bootstrap v3.3.6 js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- fancybox js -->
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.fancybox-media.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.js"></script>
    <!-- counter js -->
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <!-- mixitup js -->
    <script src="js/mixitup.js"></script>
    <!-- validate js -->
    <script src="js/validate.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="js/revolution/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/revolution/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js/revolution/extensions/revolution.extension.video.min.js"></script>

    <!-- script JS  -->
    <script src="js/script.js"></script>
</body>

</html>