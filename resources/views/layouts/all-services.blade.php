@extends('layouts.master')
@section('content')
        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/page-title-1.jpg);">
            <div class="auto-container">
                <h1>{{trans('file.Services')}}</h1>
            </div>
        </section>
        <!--Page Title end-->

        <!--Page Info-->
        <section class="page-info">
            <div class="auto-container clearfix">
                <div class="pull-left">
                    <h3>{{trans('file.Services')}}</h3>
                </div>
               
            </div>
        </section>
        <!--Page Info end-->

        <!--All Services-->

		<section class="weltopservice">
            <div class="container">
                <div class="sec-title text-center">
                    <h2>{{trans('file.Services')}}</h2>
                     <span class="colorborder"></span>
                </div>			
				<div class="row">
				  
 @foreach($services as $servicessval)
				 
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="singleserv_item">
							<div class="serviceitem-image">
								<div class="ovrly19">
									<img src="{{ URL::to('/').'/data/'.$servicessval->photo}}" alt="image">
									<div class="ovrly"></div>
									<div class="buttons">
										<a href="{!! URL::to('/service/').'/'. $servicessval->id !!}" class="fa fa-link"></a>
										<a  class="fa fa-search lightbox-image" data-fancybox="gallery" href="{{ URL::to('/').'/data/'.$servicessval->photo}}"></a>
									</div>
								</div>
							</div>
							<div class="serviceitem-content">
								<h3><a href="{!! URL::to('/service/').'/'. $servicessval->id !!}">  
								{!! $servicessval->title !!}  </a></h3>
	<a href="{!! URL::to('/service/').'/'. $servicessval->id !!}"> 	<p> 
								 <?php
								  $pieces = explode(" ",$servicessval->body );
$first_part = implode(" ", array_splice($pieces, 0, 25)); 

echo $first_part ;  ?> ...
								</p></a>								<div class="link">
									<a href="{!! URL::to('/service/').'/'. $servicessval->id !!}" class="readmore-btn">READ MORE</a>
								</div>
							</div>
						</div>
					</div>
 

   @endforeach 

				</div>		
			</div>	
			              <CENTER>{{ $services->links() }} </CENTER>>  

		 </section>
        <!--about-section end-->

 @endsection
