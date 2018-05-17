
@extends('layouts.master')
@section('content')

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/page-title-1.jpg);">
            <div class="auto-container">
                <h1> {{trans('file.Our Projects')}} </h1>
            </div>
        </section>
        <!--Page Title end-->

        <!--Page Info-->
        <section class="page-info">
            <div class="auto-container clearfix">
                <div class="pull-left">
                    <h3> {{trans('file.Our Projects')}} </h3>
                </div>
                
            </div>
        </section>
        <!--Page Info end-->

     
        <!--Gallery Section-->
        <section class="gallery-section  homegallery  ">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h2>   {{trans('file.Our Projects')}}  </h2>
                    <span class="colorborder"></span>
                </div>
                <div class="mixitup-gallery">

                    <!--Filter-->
                    <div class="filters text-center">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="active filter" data-role="button" data-filter="all">All  </li>
 @foreach($catProject as $catProjectval)
                                <a href="{!! $catProjectval->id !!}">
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
                                <a href="{!! $Projectsval->id !!}">
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
                                              <CENTER>{{ $Projects->links() }} </CENTER>  

                </div>
            </div>
        </section>
        <!--Gallery Section end-->
 @endsection
        
