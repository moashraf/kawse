
@extends('layouts.master')
@section('content')
        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/page-title-1.jpg);">
            <div class="auto-container">
                <h1>  {{trans('file.Contact Us')}} </h1>
            </div>
        </section>
        <!--Page Title end-->

        <!--Page Info-->
        <section class="page-info">
            <div class="auto-container clearfix">
                <div class="pull-left">
                    <h3>   {{trans('file.Contact Us')}} </h3>
                </div>
                
            </div>
        </section>
        <!--Page Info end-->

        <!--google map-->
        <div class="google-map-area">
  
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
      <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: <?php  echo  site_settings("x")   ?> , lng:<?php  echo  site_settings("y")   ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>

  
        </div>
        
        <!--google map end-->
        <!-- contect-page-section -->
        <section class="contact-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column col-md-7 col-sm-6 col-xs-12">
                        <h2> {{trans('file.Send_Message')}} </h2>
                        <div class="contact-form default-form">
							<form method="post" action="ajax/mail.php"  id="contact-form" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input name="name" value="" placeholder="{{trans('file.Name')}}" type="text">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input name="email" value="" placeholder="{{trans('file.Email')}}" type="email">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <input name="phone" value="" placeholder="{{trans('file.Number')}}" type="text">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="{{trans('file.Message')}}"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
										<button type="submit" class="btn-style-two">{{trans('file.SEND')}}</button>
                                    </div>
                                    <div id="loading" style="display:none"><img src="images/ajax-loader.png" alt="loading"/></div>							
                                </div>
                            </form>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column col-md-5 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <h2> {{ site_settings("Web site name")  }}   </h2>


                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <span class="icon flaticon-placeholder"></span>
                                        <h3>{{trans('file.Address')}}</h3>{{ site_settings("Location")  }}
                                    </li>
                                    <li>
                                        <span class="icon flaticon-envelope-1"></span>
                                        <h3>{{trans('file.Email')}}</h3>{{ site_settings("Mail")  }}
                                    </li>
                                    <li>
                                        <span class="icon flaticon-phone-call"></span>
                                        <h3>{{trans('file.Number')}}</h3> {{ site_settings("phone")  }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A&callback=initMap">
    </script>

 @endsection
