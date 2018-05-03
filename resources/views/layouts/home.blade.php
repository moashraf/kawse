@extends('layouts.master')
@section('content')
        <!--Main Slider-->
        <section class="rev_slider_wrapper">
            <div id="slider2" class="rev_slider" data-version="5.0">
                <ul>
             
 @foreach($slider as $sliderval)

 <li data-transition="random">
                        <img src="{{ URL::to('/').'/data/'.$sliderval->photo}}" alt=" {!! $sliderval->Title !!}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                        <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-798-layer-1" data-x="left" data-hoffset="" data-y="center" data-voffset="-50" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: normal; font-size: 16px; line-height: 24px;margin-bottom:20px;font-weight:normal;">
                            <div class="smooth-textbox">
                                <h1> {!! $sliderval->title !!} </h1>
                            </div>
                        </div>

                        <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-899-layer-4" data-x="left" data-hoffset="" data-y="center" data-voffset="70" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="3000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: normal; font-size: 20px; line-height: 30px;font-weight:400;">
                            <div class="smooth-textbox">
                                <p> {!! $sliderval->body !!} </p>
                            </div>
                        </div>

                        <div class="tp-caption NotGeneric-Title   tp-resizeme" id="slide-998-layer-3" data-x="left" data-hoffset="" data-y="center" data-voffset="180" data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="3000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 16px; line-height: 50px;font-weight:500;">
                            <div class="slidebtns smooth-textbox">
                                <a href="{!! route('contact.index') !!}" class="slidebtn1">Our Company</a>
                                <a href="{!! route('contact.index') !!}" class="slidebtn2">Contact Us</a>
                            </div>

                        </div>
                    </li>





                        @endforeach




                </ul>
            </div>
        </section>
        <!--Main Slider  end-->

		
		<!--Welcome Strip-->
		<section class="welblock">
			<div class="container">
				<div class="welinfobox">
					<h2>{{ site_settings("call action")  }}</h2>
					
					<a href="{{ URL::to('/contact')}}" class="welcontact">Contact Us</a>
				</div>
			</div>
		</section>
		<!--Welcome Strip end-->		
		
		
		 <!--wel service Section-->
		<section class="weltopservice">
			<div class="container">
                 <div class="sec-title text-center">
                    <h2> Services     </h2>
                     <span class="colorborder"></span>
                </div>
				<div class="row">
				 
 @foreach($services as $servicessval)
           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="singleserv_item">
							<div class="serviceitem-image">
								<div class="ovrly19">
									<img src="{{ URL::to('/').'/data/'.$servicessval->photo}}" alt="{!! $servicessval->title !!}">
									<div class="ovrly"></div>
									<div class="buttons">
										<a href="{!! URL::to('/service/').'/'. $servicessval->id !!}" class="fa fa-link"></a>
										<a  class="fa fa-search lightbox-image" data-fancybox="gallery" href="{{ URL::to('/').'/data/'.$servicessval->photo}}"></a>
									</div>
								</div>
							</div>
							<div class="serviceitem-content">
								<h3><a href="{!! URL::to('/service/').'/'. $servicessval->id !!}"> {!! $servicessval->title !!}  </a></h3>
							<a href="{!! URL::to('/service/').'/'. $servicessval->id !!}"> 	<p> 
								 <?php
								  $pieces = explode(" ",$servicessval->body );
$first_part = implode(" ", array_splice($pieces, 0, 10)); 

echo $first_part ;  ?> ...
								</p></a>
								<div class="link">
									<a href="{!! URL::to('/service/').'/'. $servicessval->id !!}" class="readmore-btn">READ MORE</a>
								</div>
							</div>
						</div>
					</div>

 

                        @endforeach

				</div>	
			</div>	
		 </section>		
		 <!--wel service Section end-->
		
     
 

        <!--Gallery Section-->
        <section class="gallery-section  homegallery glrybgimage">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h2>Our  Featured Projects</h2>
                    <span class="colorborder"></span>
                </div>
                <div class="mixitup-gallery">

                    <!--Filter-->
                    <div class="filters text-center">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="active filter" data-role="button" data-filter="all">All  </li>
 @foreach($catProject as $catProjectval)
                                <a href="{!! URL::to('/Projects/').'/'. $catProjectval->id !!}">
                            <li class="filter" data-role="button"  >
                             {!! $catProjectval->title !!}   </li>
                              </a>
                        @endforeach
                        
                        </ul>
                    </div>

                    <!--Filter List-->
                    <div class="filter-list row clearfix">
 @foreach($Projects as $Projectsval)
              <!--Default Portfolio Item-->
             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 project-item mix mix_all  all 
              {!! $Projectsval->get_projects_cat->id !!}">
                            <div class="glrybox">
                                <a href="{!! URL::to('/Projects/').'/'. $Projectsval->id !!}">
                                    <img src="{{ URL::to('/').'/data/'.$Projectsval->photo}}" alt="image">
                                    <div class="glryinfo">
                                        <div class="projinrtext">
                                            <h3> {!! $Projectsval->title !!}  </h3>
                                            <p> 
                                             <?php
								  $Project = explode(" ",$Projectsval->body );
$first_part = implode(" ", array_splice($Project, 0, 20)); 

echo $first_part ;  ?> ... </p>
                                            <span class="vbtn">View Project</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!--Gallery Section end-->

        <!-- testimonial section-->
        <section class="testmonialsec paddstyle2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 testsplwrp">
                        <div class="sec-title text-left">
                            <h2>What our clients say</h2>
                            <span class="colorborder"></span>
                        </div>
                        <div class="testm-wrp">
                            




 @foreach($Reviews as $Reviewsval)

                            <div class="textmitem">
                                <div class="quoteicon">
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <div class="testm-box">
                                    <div class="clntfeed">
                                           <p> 
                                             <?php
								  $Reviews = explode(" ",$Reviewsval->body );
$first_part = implode(" ", array_splice($Reviews, 0, 40)); 

echo $first_part ;  ?> ... </p>
                                    </div>
                                    <div class="clntbox">
                                        <div class="clntinfo">
                                            <div class="clntimg">
                                                <img src="{{ URL::to('/').'/data/'.$Reviewsval->photo}}" alt="  {!! $Reviewsval->id !!} ">
                                            </div>
                                            <div class="clntdtl">
                                                <h3>   </h3>
                                                <br>
                                                <span> {!! $Reviewsval->job !!} </span>
                                            </div>
                                        </div>
                                        <div class="reviewstar">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach




                        </div>
                    </div>

                    <div class="col-sm-5">
                       <div class="clntrgtimg">
							<img src="images/resource/man.png" alt=""/>
					   </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- testimonial section end-->


        <!-- contact-form start -->
        <section class="contact-form quotestyle2">
            <div class="outer-container clearfix">

                <!--Column-->
                <div class="column form-column">
                    <div class="inner-box">

                        <div class="default-form">
                            <form method="post" action="ajax/mail.php"  id="contact-form" novalidate="novalidate">
                                <div class="row clearfix">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="quotetext">
                                            <div class="sec-title text-left">
                                                <h2 class="lftheading">Request for Quote</h2>
                                                <span class="colorborder"></span>
                                            </div>
                                            <p class="quotecallinfo">  <span> {{ site_settings("call action")  }}</span></p>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input name="name" value="" placeholder="Username *" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <input name="email" value="" placeholder="Email *" type="email">
                                                </div>

                                                <div class="form-group">
                                                    <input name="phone" value="" placeholder="Phone Number *" type="text">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12 col-xs-12">
                                                <div class="form-group">
                                                    <input name="subject" value="" placeholder="Subject" type="text">
                                                </div>

                                                <div class="form-group">
                                                    <textarea name="message" placeholder="Message *"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="text-left">
													<button type="submit" class="btn-two">SEND</button>        
                                                </div>
												<div id="loading" style="display:none"><img src="images/ajax-loader.png" alt="loading"/></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- contact-form end -->

        <!-- informaation section-->
        <section class="info-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <h3>Looking for a quality and affordable Services</h3>
                    </div>
                    <div class="col-sm-7">
                        <p> {{ site_settings("quality")  }} </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- informaation section end-->
 

        <!--Partener slider -->
        <section class="parterer-sec">
            <div class="auto-container">
                <br>

                 <div class="sec-title text-center">
                    <h2> Our Happy Clients    </h2>
                     <span class="colorborder"></span>
                </div>
                 <div class="partener-slider">

                	    @foreach($clients as $clientsval)

                    <div class="image-box">
                        <a href="{{ URL::to('/client')}}">
                        	<img src="{{ URL::to('/').'/data/'.$clientsval->img}}" alt="{!! $clientsval->title !!}">
                        </a>
                    </div>

                        @endforeach

                </div>
             </div>
        </section>
        <!--Partener slider end-->
@endsection