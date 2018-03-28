 
@extends('layouts.master')
@section('content')
  <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/page-title-1.jpg);">
            <div class="auto-container">
                <h1>  our clients     </h1>
            </div>
        </section>
        <!--Page Title end-->

        <!--Page Info-->
        <section class="page-info">
            <div class="auto-container clearfix">
                <div class="pull-left">
                    <h3>     our clients </h3>
                </div>
               
            </div>
        </section>
        <!--Page Info end-->

        <!-- Our Team Section -->
        <section class="ourteamsec ourteampage sec-padding">
            <div class="container">
                <div class="row">
				  


 @foreach($clients as $clientsval)

					    <div class="col-sm-6 col-md-3 col-lg-3">
                      

                         <a href="{!! $clientsval->link !!}">

  <div class="team-box">
                            <div class="team-head">
                                <img src="{{ URL::to('/').'/data/'.$clientsval->img}}" class="img-responsive mauto" alt="">
                                                           </div>
                            <div class="team-content">
                                <h3> {!! $clientsval->title !!}    </h3>
                                  <!-- end team-social -->
                            </div>
                            <!-- end team-content -->
                        </div>        </a>
                        <!-- end team-box -->
                    </div>
                        @endforeach
					
                           <CENTER>{{ $clients->links() }} </CENTER>  

                </div>
            </div>
        </section>
  
        <!--Partener slider end-->
 @endsection
