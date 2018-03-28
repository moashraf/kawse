
@extends('layouts.master')
@section('content')
        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/page-title-1.jpg);">
            <div class="auto-container">
                <h1>About Us</h1>
            </div>
        </section>
        <!--Page Title end-->

        <!--Page Info-->
        <section class="page-info">
            <div class="auto-container clearfix">
                <div class="pull-left">
                    <h3>About Us</h3>
                </div>
               
            </div>
        </section>
        <!--Page Info end-->

        <!--about-section-->
        <section class="about-section  ashrafpadding ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="video-box">
                             <div class="overlay">
                                <div class="box">
                                    <div class="about_div  text-center">
                                        <a class="video-popup" href="{!!  URL::to('/'); !!}">
                                        <img src="{{ URL::to('/').'/data/'.site_settings('logo') }}" alt=" 
                                        {{ site_settings('About Us')  }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="right-side">
                            <h4>   <span class="p-color"> {{ site_settings("Web site name")  }}   </span>  </h4>
                             <p>  {{ site_settings("About Us")  }}</p>
                         </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about-section end-->
<hr>

        <section class="hometestmon">
            <div class="container">
                <div class="sec-title text-center">
                    <h2>Our Happy Clients</h2>
                     <span class="colorborder"></span>
                </div>
   <div class="auto-container">
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
            </div>
        </section>
 @endsection