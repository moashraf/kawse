
@extends('layouts.master')
@section('content')
        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/page-title-6.jpg);">
            <div class="auto-container">
                <h1>Contact Us</h1>
            </div>
        </section>
        <!--Page Title end-->

        <!--Page Info-->
        <section class="page-info">
            <div class="auto-container clearfix">
                <div class="pull-left">
                    <h3>Contact Us</h3>
                </div>
                <div class="pull-right">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Info end-->

        <!--google map-->
        <div class="google-map-area">
            <div class="google-map" 
			id="contact-google-map" data-map-lat="30.521338" data-map-lng="31.976751" data-icon-path="images/icons/map-icon.png" data-map-title="Chester" data-map-zoom="10" 
			data-markers='{
					"marker-1": [30.521338, 31.976751, "<h4>officeoffice office</h4><p>Lakepool, USA</p>"]
				}' style="height:450px;width:100%;">

            </div>
        </div>
        <!--google map end-->
        <!-- contect-page-section -->
        <section class="contact-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column col-md-7 col-sm-6 col-xs-12">
                        <h2>Send Us Message</h2>
                        <div class="contact-form default-form">
							<form method="post" action="ajax/mail.php"  id="contact-form" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input name="name" value="" placeholder="Username" type="text">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <input name="email" value="" placeholder="Email" type="email">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <input name="phone" value="" placeholder="Phone Number" type="text">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
										<button type="submit" class="btn-style-two">SEND</button>
                                    </div>
                                    <div id="loading" style="display:none"><img src="images/ajax-loader.png" alt="loading"/></div>							
                                </div>
                            </form>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column col-md-5 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <h2>Our Address</h2>

                            <div class="text">
                                Lorem ipsum dolor sit amet, placerat corrumpit eum ei. Qui id illum nullam volutpat, vix te posse malis viri. Mei ludus nusquam elaboraret ex an.
                            </div>

                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <span class="icon flaticon-placeholder"></span>
                                        <h3>Address</h3> 20c Avenue, lakepool, USA
                                    </li>
                                    <li>
                                        <span class="icon flaticon-envelope-1"></span>
                                        <h3>Email</h3> smaple@gmail.com
                                    </li>
                                    <li>
                                        <span class="icon flaticon-phone-call"></span>
                                        <h3>PHONE</h3> (+01) 123 456 7896, (+01) 123 456 7899
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- contect-page-section end -->
 @endsection
