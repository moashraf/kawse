 @extends('layouts.master')
@section('content')


        <!--Page Title-->
        <section class="page-title" style="background-image:url({{ URL::to('/').'/data/'.$services->photo}});">
            <div class="auto-container">
                <h1> {{  $services->title }}  </h1>
            </div>
        </section>
        <!--Page Title end-->

        <!--Page Info-->
        <section class="page-info">
            <div class="auto-container clearfix">
                <div class="pull-left">
                    <h3> {{  $services->title }}  </h3></div>
                 
            </div>
        </section>
        <!--Page Info end-->

        <!--blog-single Page-->
        <section class="blog-home sec-padding2222222222222  blog-page blog-details">
            <div class="container">

            
                <div class="row">
                    <div class="col-lg-12 pull-left">
                        <div class="single-blog-post">
                            <div class="img-box222222222222222  centerdevimg ">
                                <img src="{{ URL::to('/').'/data/'.$services->photo}}" style="    width: 100%;">
                               
                            </div>
                            <div class="content-box">
                                <div class="content">
                                    <a href="#"><h3> {{  $services->title }} </h3></a>
                                    <p>  {{  $services->body }} </p>
                                    
                                    
                                </div>
                            </div>
                        </div>
 
                    </div>
					 
                </div>
            </div>
        </section>
        <!--blog-single Page end-->

		
@endsection
