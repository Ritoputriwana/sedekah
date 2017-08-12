@extends('header')

@section('content')


    <section class="wrapper">
        <!--Start Slider-->
        <div class="slider-wrapper">
            <div class="slider">
                
                <!-- <div class="fs_loader"></div> -->
                <!-- <div class="slide"> -->
                    <!-- <img src="" width="1920" height="auto" data-in="fade" data-out="fade" /> -->
                    {{ Html::image('elec/images/fraction-slider/base.jpg','',array('class' => 'img-responsive img-centered')) }}

                   <!--  <img src="images/fraction-slider/slider-boy.png" width="600" height="600" data-position="30,1100" data-in="left" data-out="right" data-delay="700"/> -->
                   

                    <!-- <p class="slide-1" data-position="50,610" data-in="fade" data-out="fade" data-delay="800">fully responsive</p>
                    <p class="slide-1" data-position="100,560" data-in="fade" data-out="fade" data-delay="1200">Our latest designs </p>
                    <p class="slide-1" data-position="150,500" data-in="fade" data-out="fade" data-delay="1600">Simply & Clear Design</p>

                    <p class="slide-1a" data-position="220,770" data-in="bottom" data-out="bottom" data-delay="2000" data-ease-in="easeOutBounce">SEO Friendly Website</p>
                    <p class="slide-1a" data-position="267,698" data-in="bottom" data-out="bottom" data-delay="3200"  data-ease-in="easeOutBounce">7 combination color option</p>
                    <p class="slide-1a" data-position="314,760" data-in="bottom" data-out="bottom" data-delay="4200"  data-ease-in="easeOutBounce">Animated layer slider</p>
                    <p class="slide-1a" data-position="361,753" data-in="bottom" data-out="bottom" data-delay="5200"  data-ease-in="easeOutBounce">Much More Featured...</p> -->
                <!-- </div> -->

                <!-- <div class="slide">
                    <img src="images/fraction-slider/base_2.jpg" width="1920" height="auto" data-in="fade" data-out="fade" />

                    <img src="images/fraction-slider/slider-girl.png" width="600" height="545" data-position="20,400" data-in="right" data-0ut="bottom" data-delay="500"/>

                    <p class="slide-2 " data-position="120,900" data-in="bottom" data-out="top" data-delay="2000">Your-Business</p>
                    <p class="slide-2a " data-position="210,900" data-in="left" data-out="right" data-delay="3000">A responsive multipurpose Theme</p>
                    <p class="slide-2b " data-position="270,900" data-in="top" data-out="bottom" data-delay="4000" data-ease-in="easeOutBounce">For Your Prestigious World !</p>
                </div> -->

                <!-- <div class="slide">
                    <img src="images/fraction-slider/base_3.jpg"  width="1920" height="auto" data-in="fade" data-out="fade" />

                    <p class="slide-heading" data-position="130,370" data-in="top" data-out="top" data-ease-in="easeOutBounce" data-delay="1500">Electrify theme</p>

                    <p class="sub-line" data-position="230,370" data-in="right" data-out="left" data-delay="2500">grid system and responsive design</p>

                    <img src="images/fraction-slider/gadgets/laptop.png" width="456" height="272" data-position="115,1180" data-in="bottom" data-out="bottom" data-delay="400">

                    <img src="images/fraction-slider/gadgets/mack.png" width="357" height="313" data-position="90,1040" data-in="top" data-out="bottom" data-delay="200">

                    <img src="images/fraction-slider/gadgets/ipad.png" width="120" height="170" data-position="230,1030" data-in="left" data-out="left" data-delay="300">

                    <img src="images/fraction-slider/gadgets/smartphone.png" width="70" height="140" data-position="270,1320" data-in="right" data-out="right" data-delay="300">

                    <a href=""	class="btn btn-lg btn-default" data-position="320,370" data-in="bottom"  data-out="bottom" data-delay="3700" data-ease-in="easeOutBounce">Free Download</a>
                </div> -->
            </div>
        </div>
        <!--End Slider-->
        <!--start info service-->
        <section class="info_service">
            <div class="container">
                <div class="row sub_content">
                    <div class="rs_box  wow bounceInRight" data-wow-offset="200">
                        <div class="col-sm-4">
                            <div class="serviceBox_1">
                                <div class="service-icon">
                                    <i class="fa fa-folder-open-o"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Clean &amp; Minimal</h3>
                                    <p>Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="serviceBox_1">
                                <div class="service-icon">
                                    <i class="fa fa-folder-o"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Branding Theme</h3>
                                    <p>Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="serviceBox_1">
                                <div class="service-icon">
                                    <i class="fa fa-heart-o"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Modern Design</h3>
                                    <p>Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row sub_content">
                    <div class="rs_box wow bounceInLeft" data-wow-offset="200">
                        <div class="col-sm-4">
                            <div class="serviceBox_1">
                                <div class="service-icon">
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Easy To Customize</h3>
                                    <p>Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="serviceBox_1">
                                <div class="service-icon">
                                    <i class="fa fa-comment-o"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Multimedia Support</h3>
                                    <p>Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="serviceBox_1">
                                <div class="service-icon">
                                    <i class="fa fa-bell-o"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Documentation</h3>
                                    <p>Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--end info service-->

    <!--Start recent work-->
        <section>
            <div class="container">
                <div class="row sub_content">
                    <div class="col-md-12">
                        <div class="dividerHeading">
                            <h4><span><b>Barang Yang dijual/sedekah</b></span></h4>
                        </div>
                        <div id="recent-work-slider" class="owl-carousel">
                            <div >
                                <figure class="touching ">
                                      {{ Html::image('elec/images/clients/1.png') }}
                                   
                                </figure>
                            </div>
                           <div class="recent-item box">
                                <figure class="touching ">
                                     {{ Html::image('elec/images/portfolio/portfolio_1.png','',array('class' => 'img-responsive img-centered')) }}
                                    <div class="option inner">
                                        <div>
                                            <span><h5>Mobile</h5></span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="recent-item box">
                                <figure class="touching ">
                                     {{ Html::image('elec/images/portfolio/portfolio_1.png','',array('class' => 'img-responsive img-centered')) }}
                                    <div class="option inner">
                                        <div>
                                            <span><h5>Mobile</h5></span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="recent-item box">
                                <figure class="touching ">
                                     {{ Html::image('elec/images/portfolio/portfolio_1.png','',array('class' => 'img-responsive img-centered')) }}
                                    <div class="option inner">
                                        <div>
                                            <span><h5>Mobile</h5></span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="recent-item box">
                                <figure class="touching ">
                                     {{ Html::image('elec/images/portfolio/portfolio_1.png','',array('class' => 'img-responsive img-centered')) }}
                                    <div class="option inner">
                                        <div>
                                            <span><h5>Mobile</h5></span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                            <div class="recent-item box">
                                <figure class="touching ">
                                    <img src="images/portfolio/portfolio_6.png" alt=""/>
                                    <div class="option inner">
                                        <div>
                                            <h5>Touch and Swipe</h5>
                                            <a href="images/portfolio/full/portfolio_6.png" class="fa fa-search mfp-image"></a>
                                            <a href="portfolio_single.html" class="fa fa-link"></a>
                                            <span>Mobile</span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                           <div class="recent-item box">
                                <figure class="touching ">
                                     {{ Html::image('elec/images/portfolio/portfolio_1.png','',array('class' => 'img-responsive img-centered')) }}
                                    <div class="option inner">
                                        <div>
                                            <span><h5>Mobile</h5></span>
                                        </div>
                                    </div>
                                </figure>
                            </div><div class="recent-item box">
                                <figure class="touching ">
                                     {{ Html::image('elec/images/portfolio/portfolio_1.png','',array('class' => 'img-responsive img-centered')) }}
                                    <div class="option inner">
                                        <div>
                                            <span><h5>Mobile</h5></span>
                                        </div>
                                    </div>
                                </figure>
                            </div><div class="recent-item box">
                                <figure class="touching ">
                                     {{ Html::image('elec/images/portfolio/portfolio_1.png','',array('class' => 'img-responsive img-centered')) }}
                                    <div class="option inner">
                                        <div>
                                            <span><h5>Mobile</h5></span>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--Start recent work-->

           <section class="team">
            <div class="container">
                <div class="row  sub_content">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="dividerHeading">
                            <h4><span><b>Bencana alam /orang yang sakit</b></span></h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                {{ Html::image('elec/images/teams/1.png','',array('alt' => 'profile img' )) }}
                            </div>
                            <div class="team_prof">
                                <h3 class="post-title">Nama orang<small>Asal/pekerjaan</small></h3>
                                <p class="description">penjelasan sakitnya </p>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                {{ Html::image('elec/images/teams/1.png','',array('alt' => 'profile img' )) }}
                            </div>
                            <div class="team_prof">
                                <h3 class="post-title">Nama orang<small>Asal/pekerjaan</small></h3>
                                <p class="description">penjelasan sakitnya </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                {{ Html::image('elec/images/teams/1.png','',array('alt' => 'profile img' )) }}
                            </div>
                            <div class="team_prof">
                                <h3 class="post-title">Nama orang<small>Asal/pekerjaan</small></h3>
                                <p class="description">penjelasan sakitnya </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                {{ Html::image('elec/images/teams/1.png','',array('alt' => 'profile img' )) }}
                            </div>
                            <div class="team_prof">
                                <h3 class="post-title">Nama orang<small>Asal/pekerjaan</small></h3>
                                <p class="description">penjelasan sakitnya </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Parallax with Testimonial -->
        <section class="parallax parallax-1">
            <div class="container">
                <div class="row">
                    <div id="parallax-testimonial-carousel" class="parallax-testimonial carousel wow fadeInUp">
                        <div class="carousel-inner">
                            <div class="active item">
                                <div class="parallax-testimonial-item">
                                    <blockquote>
                                        <p>Go Sedekah bisa meningkatkan pahala kita</p>
                                    </blockquote>
                                    <div class="parallax-testimonial-review">
                                        {{ Html::image('elec/images/testimonials/1.png','',array(
                                        'alt'=>'testimonial')) }}
                                        <span>Insan Afifah</span>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="parallax-testimonial-item">
                                    <blockquote>
                                        <p>Ayo berikan sisakan rezeki anda kepada orang yang membutuhkannya</p>
                                    </blockquote>
                                    <div class="parallax-testimonial-review">
                                        {{ Html::image('elec/images/testimonials/1.png','',array(
                                        'alt'=>'testimonial')) }}
                                        <span>Novridah Alvi Hasanah</span>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                 <div class="parallax-testimonial-item">
                                    <blockquote>
                                        <p>Sedekah dapat mempertambah rejeki kalian</p>
                                    </blockquote>
                                    <div class="parallax-testimonial-review">
                                        {{ Html::image('elec/images/testimonials/1.png','',array(
                                        'alt'=>'testimonial')) }}
                                        <span>Rito Putriwana</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-slide-to="0" data-target="#parallax-testimonial-carousel" class=""></li>
                            <li data-slide-to="1" data-target="#parallax-testimonial-carousel" class="active"></li>
                            <li data-slide-to="2" data-target="#parallax-testimonial-carousel" class=""></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
    <!-- end : Parallax with Testimonial -->

       

       

     








        <section class="clients">
            <div class="container">
                <div class="row sub_content">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="dividerHeading">
                            <h4><span>Supported By</span></h4>
                        </div>

                        <div class="our_clients">
                            <ul class="client_items clearfix">
                                <li class="col-sm-3 col-md-3 col-lg-3">
                                    <a href="services.html"  data-placement="bottom" data-toggle="tooltip" title="Client 1" > 
                                        {{ Html::image('elec/images/clients/1.png') }}
                                    </a>
                                </li>

                                <li class="col-sm-3 col-md-3 col-lg-3">
                                    <a href="services.html" data-placement="bottom" data-toggle="tooltip" title="Client 2" >
                                         {{ Html::image('elec/images/clients/2.png') }}
                                    </a>
                                </li>
                                
                                <li class="col-sm-3 col-md-3 col-lg-3">
                                    <a href="services.html" data-placement="bottom" data-toggle="tooltip" title="Client 3" >
                                     {{ Html::image('elec/images/clients/3.png') }}
                                    </a>
                                </li>
                                
                                <li class="col-sm-3 col-md-3 col-lg-3">
                                    <a href="services.html" data-placement="bottom" data-toggle="tooltip" title="Client 4" >
                                         {{ Html::image('elec/images/clients/4.png') }}
                                    </a>
                                </li>
                            </ul><!-- / .client_items-->
                             <ul class="client_items clearfix">
                                <li class="col-sm-3 col-md-3 col-lg-3">
                                    <a href="services.html"  data-placement="bottom" data-toggle="tooltip" title="Client 1" > 
                                        {{ Html::image('elec/images/clients/1.png') }}
                                    </a>
                                </li>

                                <li class="col-sm-3 col-md-3 col-lg-3">
                                    <a href="services.html" data-placement="bottom" data-toggle="tooltip" title="Client 2" >
                                         {{ Html::image('elec/images/clients/2.png') }}
                                    </a>
                                </li>
                                
                                <li class="col-sm-3 col-md-3 col-lg-3">
                                    <a href="services.html" data-placement="bottom" data-toggle="tooltip" title="Client 3" >
                                     {{ Html::image('elec/images/clients/3.png') }}
                                    </a>
                                </li>
                                
                                <li class="col-sm-3 col-md-3 col-lg-3">
                                    <a href="services.html" data-placement="bottom" data-toggle="tooltip" title="Client 4" >
                                         {{ Html::image('elec/images/clients/4.png') }}
                                    </a>
                                </li>
                            </ul><!-- / .client_items-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </section><!--end wrapper-->



@endsection