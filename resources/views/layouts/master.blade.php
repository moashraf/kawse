<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> {{ site_settings("Web site name")  }}     </title>
    <!-- Stylesheets -->
    <!-- bootstrap v3.3.6 css -->
    <link href=" {{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- font-awesome css -->
    <link href=" {{ asset('css/font-awesome.css') }} " rel="stylesheet">
    <!-- flaticon css -->
    <link href=" {{ asset('css/flaticon.css') }} " rel="stylesheet">
    <!-- animate css -->
    <link href=" {{ asset('css/animate.css') }} " rel="stylesheet">
    <!-- owl.carousel css -->
    <link href=" {{ asset('css/owl.css') }} " rel="stylesheet">
    <!-- fancybox css -->
    <link href=" {{ asset('css/jquery.fancybox.css') }} " rel="stylesheet">
    <link href=" {{ asset('css/hover.css') }} " rel="stylesheet">
    <!-- style css -->
    <link href=" {{ asset('css/hovereffect.css') }} " rel="stylesheet">
    <link href=" {{ asset('css/style.css') }} " rel="stylesheet">
    <!-- revolution slider css -->
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/revolution/settings.css') }} ">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/revolution/layers.css') }} ">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/revolution/navigation.css') }} ">
    <link href=" {{ asset('css/responsive.css') }} " rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ URL::to('/').'/data/'.site_settings('logo') }}" type="image/x-icon">
    <link rel="icon" href="{{ URL::to('/').'/data/'.site_settings('logo') }}" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                            <li><a href="#"><span class="fa fa-map-marker"></span> {{ site_settings("Location")  }} </a></li>
                            <li><a href="#"><span class="fa fa-phone"></span> {{ site_settings("phone")  }} </a></li>
                            <li><a href="#"><span class="fa fa-envelope-o"></span> {{ site_settings("Mail")  }} </a></li>

                        </ul>
                    </div>
                   
                    <div class="top-right pull-right">
                        <div class="social-links clearfix">
                            <a href="{{ site_settings("facebook")  }}"><span class="fa fa-facebook-f"></span></a>
                            <a href="{{ site_settings("twitter")  }}"><span class="fa fa-twitter"></span></a>
                            <a href="{{ site_settings("linkedin")  }}"><span class="fa fa-linkedin"></span></a>
                            <a href="{{ site_settings("youtube")  }}"><span class="fa fa-youtube"></span></a>

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
                                <a href="{!!  URL::to('/'); !!}"><img src="{{ URL::to('/').'/data/'.site_settings('logo') }}" alt="logo"></a>
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
                                    


                                 <ul class="navigation clearfix">
                                


                                        
                                        <li class=" {{ Request::is('/') ? 'current' : '' }} ">
                                            <a href="{!!  URL::to('/'); !!}">Home</a>
                                       </li>
                                        <li class=" {{ Request::is('about') ? 'current' : '' }} " >
                                            <a href="{!! route('about.index') !!}">About Us</a>
                                          
                                        </li>
										
										 <li class=" {{ Request::is('service') ? 'current' : '' }}  dropdown">
                                         <a href="{!! route('service.index') !!}">Services</a>
                                            <ul>
                                        <?php   $services=  services_mn()  ; ?>
											 @foreach($services as $servicessval)
											 <li><a href="{{ URL::to('/').'/service/'.$servicessval->id }} ">{!! $servicessval->title !!}  </a></li>
                                         @endforeach
										 </ul>
                                        <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
										
                                        <li  class=" {{ Request::is('Projects') ? 'current' : '' }} " ">
                                            <a href="{!! route('Projects.index') !!}">Our Projects</a>
                                           
                                        </li   >
                                        
                                        <li class=" {{ Request::is('client') ? 'current' : '' }} "  >
                                            <a href="{!! route('client.index') !!}">our clients</a>
                                             
                                        </li   >
                                        <li class=" {{ Request::is('contact') ? 'current' : '' }} " >
                                            <a href="{!! route('contact.index') !!}">Contact Us</a>
                                        </li>
                                    </ul>

                                    
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
                    <div class="logo pull-left" style="    background: #adadad;">
                        <a href="{!!  URL::to('/'); !!}" class="img-responsive"><img src="{{ URL::to('/').'/data/'.site_settings('logo') }}" alt="Transpo" title="Transpo"></a>
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
                                <ul class="navigation clearfix">
                                


                                        
                                        <li class=" {{ Request::is('/') ? 'current' : '' }} ">
                                            <a href="{!!  URL::to('/'); !!}">Home</a>
                                       </li>
                                        <li class=" {{ Request::is('about') ? 'current' : '' }} " >
                                            <a href="{!! route('about.index') !!}">About Us</a>
                                          
                                        </li>
										
										 <li class=" {{ Request::is('service') ? 'current' : '' }}  dropdown">
                                         <a href="{!! route('service.index') !!}">Services</a>
                                            <ul>
											 @foreach($services as $servicessval)
											 <li><a href=" {{ URL::to('/').'/service/'.$servicessval->id }} ">{!! $servicessval->title !!}  </a></li>
                                         @endforeach
										 </ul>
                                        <div class="dropdown-btn"><span class="fa fa-angle-down"></span></div></li>
										
                                        <li  class=" {{ Request::is('Projects') ? 'current' : '' }} " ">
                                            <a href="{!! route('Projects.index') !!}">Our Projects</a>
                                           
                                        </li   >
                                        
                                        <li class=" {{ Request::is('client') ? 'current' : '' }} "  >
                                            <a href="{!! route('client.index') !!}">our clients</a>
                                             
                                        </li   >
                                        <li class=" {{ Request::is('contact') ? 'current' : '' }} " >
                                            <a href="{!! route('contact.index') !!}">Contact Us</a>
                                        </li>
                                    </ul>


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
                    <div class="col-md-4 col-sm-6">
                        <div class="footersec">
                            <a class="ftlogo" href="#">
                                <img alt="{{ site_settings('About Us')  }}  " src="{{ URL::to('/').'/data/'.site_settings('logo') }}" />
                            </a>
                            <p> 
                                
                            <?php
                            $About=site_settings("About Us");
      $pieces = explode(" ",$About );
$first_part = implode(" ", array_splice($pieces, 0, 91)); 

echo $first_part ;  ?>

  </p>
                           

                        </div>
                    </div>
                     
                    <div class="col-md-4 latest-post col-sm-6">
                        <div class="footer-sec latest-post">
                            <h3 class="title"> Our Projects   </h3>
                            <ul>
                                <?php  $footer_Projects = footer_Projects() ;   ?>
                                 @foreach($footer_Projects as $Projectval)
                                <li>
                                    <img src="{{ URL::to('/').'/data/'.$Projectval->photo}}" alt="{{  $Projectval->title }}" />
                                    <div class="content">
                                        <a href="Projects/{{  $Projectval->id }}"> {{  $Projectval->title }}</a>
                                          <a href="Projects/{{  $Projectval->id }}"> {{  $Projectval->get_projects_cat->title }}</a>

                                        <span>{{  $Projectval->updated_at }}</span>
                                    </div>
                                </li>
                        @endforeach
                            
                             
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-sec footersec contact-footer">
                            <h3 class="title">Contact Us</h3>

                            <div class="ftcontact">
                                <ul>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <div class="continfo">
                                            <strong> {{ site_settings("Web site name")  }}</strong>
                                            <br>{{ site_settings("Location")  }}
                                        </div>

                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <div class="continfo">
                          <a href="">{{ site_settings("phone")  }} </a>   
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <div class="continfo">
                                            <a href="#">{{ site_settings("Mail")  }}</a>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fa fa-clock-o"></i>
                                        <div class="continfo">
                                           {{ site_settings("times work")  }}
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="social">
                                <li><a href="{{ site_settings("facebook")  }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ site_settings("twitter")  }}"><i class="fa fa-twitter"></i></a></li>
                                  <li><a href="{{ site_settings("linkedin")  }}"><i class="fa fa-linkedin"></i></a></li>
                                  <li><a href="{{ site_settings("youtube")  }}"><i class="fa fa-youtube"></i></a></li>
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
{{ site_settings("Web site name")  }}
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
    <script src=" {{ asset('js/jquery-1.12.4.min.js') }} "></script>
    <!-- bootstrap v3.3.6 js -->
    <script src=" {{ asset('js/bootstrap.min.js') }} "></script>
    <!-- fancybox js -->
    <script src=" {{ asset('js/jquery.fancybox.pack.js') }} "></script>
    <script src=" {{ asset('js/jquery.fancybox-media.js') }} "></script>
    <!-- owl.carousel js -->
    <script src=" {{ asset('js/owl.js') }} " ></script>
    <!-- counter js -->
    <script src=" {{ asset('js/jquery.appear.js') }} "></script>
    <script src=" {{ asset('js/jquery.countTo.js') }} "></script>
    <!-- mixitup js -->
    <script src=" {{ asset('js/mixitup.js') }} "></script>
    <!-- validate js -->
    <script src=" {{ asset('js/validate.js') }} "></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src=" {{ asset('js/revolution/jquery.themepunch.tools.min.js') }} "></script>
    <script type="text/javascript" src=" {{ asset('js/revolution/jquery.themepunch.revolution.min.js') }} "></script> 
     <script type="text/javascript" src="  {{ asset('js/revolution/extensions/revolution.extension.actions.min.js') }}  ">
     </script>
    <script type="text/javascript" src="  {{ asset('js/revolution/extensions/revolution.extension.carousel.min.js') }} ">
    </script>
    <script type="text/javascript" src="  {{ asset('js/revolution/extensions/revolution.extension.kenburn.min.js') }}  "></script>
    <script type="text/javascript" src="  {{ asset('js/revolution/extensions/revolution.extension.layeranimation.min.js') }}  "></script>
    <script type="text/javascript" src="  {{ asset('js/revolution/extensions/revolution.extension.migration.min.js') }}  "></script>
    <script type="text/javascript" src="  {{ asset('js/revolution/extensions/revolution.extension.navigation.min.js') }}  "></script>
    <script type="text/javascript" src="  {{ asset('js/revolution/extensions/revolution.extension.parallax.min.js') }}  "></script>
    <script type="text/javascript" src="  {{ asset('js/revolution/extensions/revolution.extension.slideanims.min.js') }}  "></script>
    <script type="text/javascript" src="  {{ asset('js/revolution/extensions/revolution.extension.video.min.js') }}  "></script>

    <!-- script JS  -->
    <script src=" {{ asset('js/script.js') }} "></script>
</body>

</html>