
@extends('layouts.master')
@section('content')

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/page-title-5.jpg);">
            <div class="auto-container">
                <h1>Projects</h1>
            </div>
        </section>
        <!--Page Title end-->

        <!--Page Info-->
        <section class="page-info">
            <div class="auto-container clearfix">
                <div class="pull-left">
                    <h3>Projects</h3>
                </div>
                <div class="pull-right">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Projects</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Info end-->

        <!--Gallery Section-->
        <section class="gallery-section  homegallery">
            <div class="auto-container">
                <div class="mixitup-gallery">

                    <!--Filter-->
                    <div class="filters text-center">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="active filter" data-role="button" data-filter="all">All Projects</li>
                            <li class="filter" data-role="button" data-filter=".meterial">Office Building</li>
                            <li class="filter" data-role="button" data-filter=".power">Shopping Mall</li>
                            <li class="filter" data-role="button" data-filter=".chemical">Private Estate</li>
                        </ul>
                    </div>

                    <!--Filter List-->
                    <div class="filter-list row clearfix">

                        <!--Default Portfolio Item-->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 project-item mix mix_all  all meterial">
                            <div class="glrybox">
                                <a href="#">
                                    <img src="images/gallery/37.jpg" alt="image">
                                    <div class="glryinfo">
                                        <div class="projinrtext">
                                            <h3>Office Building</h3>
                                            <p>Typi non habent claritatem insitam usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt. </p>
                                            <span class="vbtn">View Project</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--Default Portfolio Item-->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 project-item mix mix_all  all meterial">
                            <div class="glrybox">
                                <a href="#">
                                    <img src="images/gallery/38.jpg" alt="image">
                                    <div class="glryinfo">
                                        <div class="projinrtext">
                                            <h3>Shopping Mall</h3>
                                            <p>Typi non habent claritatem insitam usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt. </p>
                                            <span class="vbtn">View Project</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--Default Portfolio Item-->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 project-item mix mix_all  all power">
                            <div class="glrybox">
                                <a href="#">
                                    <img src="images/gallery/39.jpg" alt="image">
                                    <div class="glryinfo">
                                        <div class="projinrtext">
                                            <h3>Hospital Building</h3>
                                            <p>Typi non habent claritatem insitam usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt. </p>
                                            <span class="vbtn">View Project</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--Default Portfolio Item-->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 project-item mix mix_all  all power">
                            <div class="glrybox">
                                <a href="#">
                                    <img src="images/gallery/40.jpg" alt="image">
                                    <div class="glryinfo">
                                        <div class="projinrtext">
                                            <h3>Private Estate</h3>
                                            <p>Typi non habent claritatem insitam usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt. </p>
                                            <span class="vbtn">View Project</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--Default Portfolio Item-->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 project-item mix mix_all  all chemical">
                            <div class="glrybox">
                                <a href="#">
                                    <img src="images/gallery/41.jpg" alt="image">
                                    <div class="glryinfo">
                                        <div class="projinrtext">
                                            <h3>Private Residence</h3>
                                            <p>Typi non habent claritatem insitam usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt. </p>
                                            <span class="vbtn">View Project</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--Default Portfolio Item-->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 project-item mix mix_all  all chemical">
                            <div class="glrybox">
                                <a href="#">
                                    <img src="images/gallery/42.jpg" alt="image">
                                    <div class="glryinfo">
                                        <div class="projinrtext">
                                            <h3>Swimming Pool</h3>
                                            <p>Typi non habent claritatem insitam usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt. </p>
                                            <span class="vbtn">View Project</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Gallery Section end-->
 @endsection
        
