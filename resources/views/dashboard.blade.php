<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Electrify Responsive Multipurpose Template</title>
    <meta name="description" content="">

    <!-- CSS FILES -->
    {{ Html::style('elec/css/bootstrap.css') }}
	{{ Html::style('elec/css/bootstrap.min.css') }}
	{{ Html::style('elec/css/style.css') }}
	{{ Html::style('elec/css/layout/wide.css') }}
	{{ Html::style('elec/css/switcher.css') }}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--Start Header-->
<header id="header">
    <div id="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 top-info hidden-xs">
                    <span><i class="fa fa-phone"></i>Phone: 083834519320</span>
                    <span><i class="fa fa-envelope"></i>Email: mail@example.com</span>
                </div>
                <div class="col-sm-4 top-info">
                    <ul>
                        <li><a href="" class="my-tweet"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="" class="my-skype"><i class="fa fa-skype"></i></a></li>
                        <li><a href="" class="my-pint"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="" class="my-rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="" class="my-google"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="logo-bar">
        <div class="container">
            <div class="row">
                <!-- Logo / Mobile Menu -->
                <div  class="col-lg-3 col-sm-3 ">
                    <div id="logo">
                       <h1><a href="index.html">
						{{ Html::image('img/logo.png','',array('alt' => 'logo')) }}

                       </a></h1>
                    </div>
                </div>
                <!-- Navigation
================================================== -->
                <div class="col-lg-9 col-sm-9">
                    <div class="navbar navbar-default navbar-static-top" role="navigation">
                        <!--  <div class="container">-->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                 <li><a href="#">Home</a>
                                    <ul class="dropdown-menu">
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index_2.html">Home 2</a></li>
                                            <li><a href="index_3.html">Home 3</a></li>
                                            <li><a href="index_4.html">Home 4</a></li>
                                            <li><a href="index_5.html">Home 5</a></li>
                                            <li><a href="index_6.html">Home 6</a></li>
                                            <li><a href="index_7.html">Home 7</a></li>
                                        </ul>
                                </li>

                                <li><a href="#">Shortcodes</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="elements.html">Elements</a></li>
                                        <li><a href="form-elements.html">Form Elements</a></li>
                                        <li><a href="columns.html">Columns</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                        <li><a href="animation.html">Animation</a></li>
                                        <li><a href="icons.html">Icons</a></li>
                                    </ul>
                                </li>

                                <li><a href="#" >Pages</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="about.html">About</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about.html">About Us 1</a></li>
                                                <li><a href="about-2.html">About Us 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="sidebar-right.html">Right Sidebar</a></li>
                                        <li><a href="sidebar-left.html">Left Sidebar</a></li>
                                        <li><a href="404-page.html">404 Page</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">Portfolio</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Portfolio Classic</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio_2.html">Portfolio 2</a></li>
                                                <li><a href="portfolio_3.html">Portfolio 3</a></li>
                                                <li><a href="portfolio_4.html">Portfolio 4</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="portfolio_masonry_3.html">Portfolio Masnory</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio_masonry_2.html">Masonry portfolio 2</a></li>
                                                <li><a href="portfolio_masonry_3.html">Masonry portfolio 3</a></li>
                                                <li><a href="portfolio_masonry_4.html">Masonry portfolio 4</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="portfolio_single.html">Portfolio Single</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="portfolio_single.html">Portfolio Single 1</a></li>
                                                <li><a href="portfolio_single_2.html">Portfolio Single 2</a></li>
                                                <li><a href="portfolio_single_3.html">Portfolio Single 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="#">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="portfolio_masonry_3.html">Masnory Blog Style</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-masonry-two.html">Blog Masonry 2</a></li>
                                                <li><a href="blog-masonry-three.html">Blog Masonry 3</a></li>
                                                <li><a href="blog-masonry-four.html">Blog Masonry 4</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="portfolio_masonry_3.html">Classic Blog Style</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog-large-image.html">Large Image</a></li>
                                                <li><a href="blog-medium-image.html">Medium Image</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-post.html">Single Post</a></li>
                                    </ul>
                                </li>

                                <li class="active"><a href="#">Contact</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="contact_1.html">Contact 1</a></li>
                                        <li><a href="contact_2.html">Contact 2</a></li>
                                        <li class="active"><a href="contact_3.html">Contact 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--End Header-->

<!--start wrapper-->
<section class="wrapper">
    <section class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>Contact Three</h2>
                    </div>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a>/</li>
                            <li>Contact Us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="contact_3">
        <div class="maps">
            <div id="page_maps"></div>
        </div>
        <div class="container">
            <div class="row sub_content">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <div class="dividerHeading text-center">
                        <h4><span>Get in Touch</span></h4>
                    </div>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis excepturi ipsum non, sequi soluta. Cupiditate incidunt sunt velit? Accusantium aperiam fugit iure minus optio perferendis praesentium sed sequi voluptatibus. Aenean vulputate eleifend tellus.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="alert alert-success hidden alert-dismissable" id="contactSuccess">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Success!</strong> Your message has been sent to us.
                    </div>

                    <div class="alert alert-error hidden" id="contactError">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Error!</strong> There was an error sending your message.
                    </div>

                    <form id="contactForm" action="" novalidate="novalidate">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-4 ">
                                    <label>Your name (required)</label>
                                    <br>
                                    <input type="text" id="name" name="name" class="form-control" maxlength="100" data-msg-required="Please enter your name." value="" placeholder="" >
                                </div>
                                <div class="col-lg-4 ">
                                    <label>Your Email (required)</label>
                                    <br>
                                    <input type="email" id="email" name="email" class="form-control" maxlength="100" data-msg-email="Please enter a valid email address." data-msg-required="Please enter your email address." value="" placeholder="" >
                                </div>
                                <div class="col-md-4">
                                    <label>Subject</label>
                                    <br>
                                    <input type="text" id="subject" name="subject" class="form-control" maxlength="100" data-msg-required="Please enter the subject." value="" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Your Message :-</label>
                                    <br>
                                    <textarea id="message" class="form-control" name="message" rows="10" cols="50" data-msg-required="Please enter your message." maxlength="5000" placeholder=""></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" data-loading-text="Loading..." class="btn btn-default btn-lg" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="sidebar">
                        <div class="widget_info">
                            <div class="dividerHeading">
                                <h4><span>Contact Info</span></h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis excepturi blanditiis ipsum non, sequi soluta. Cupiditate incidunt sunt velit? Accusantium aperiam fugit iure minus optio perferendis praesentium sed sequi voluptatibus. Aenean vulputate eleifend tellus.</p>
                            <ul class="widget_info_contact clearfix">
                                <li class="col-sm-4"><i class="fa fa-map-marker"></i><strong>Address</strong> <p> : #2021 Lorem ipsum dolor sit amet Delhi 125001</p></li>
                                <li class="col-sm-4"><i class="fa fa-envelope"></i> <strong>Email</strong><p> : <a href="#"> mail@example.com</a></p> <p>: <a href="#"> mail@example.com</a></p></li>
                                <li class="col-sm-4"><i class="fa fa-phone"></i> <strong>Our Phone</strong> <p> : (+91 - 012)  9000 - 12345</p><p>: (+91 - 011)  8000 - 54321</p></li>
                            </ul>
                        </div>

                        <div class="widget_social">
                            <!--<div class="dividerHeading">
                                <h4><span>Get Social</span></h4>
                            </div>-->
                            <ul class="widget_social">
                                <li><a class="fb" href="#." data-placement="bottom" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twtr" href="#." data-placement="bottom" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="gmail" href="#." data-placement="bottom" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="dribbble" href="#." data-placement="bottom" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                                <li><a class="skype" href="#." data-placement="bottom" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
                                <li><a class="pinterest" href="#." data-placement="bottom" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                <li><a class="instagram" href="#." data-placement="bottom" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="youtube" href="#." data-placement="bottom" data-toggle="tooltip" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                                <li><a class="linkedin" href="#." data-placement="bottom" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="flickrs" href="#." data-placement="bottom" data-toggle="tooltip" title="Flickr"><i class="fa fa-flickr"></i></a></li>
                                <li><a class="rss" href="#." data-placement="bottom" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</section>
<!--end wrapper-->

<!--start footer-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="widget_title">
                    <h4><span>About Us</span></h4>
                </div>
                <div class="widget_content">
                    <p>Donec earum rerum hic tenetur ans sapiente delectus, ut aut reiciendise voluptat maiores alias consequaturs aut perferendis doloribus asperiores.</p>
                    <ul class="contact-details-alt">
                        <li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>: #2021 Lorem Ipsum</p></li>
                        <li><i class="fa fa-user"></i> <p><strong>Phone</strong>:(+91) 9000-12345</p></li>
                        <li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#">mail@example.com</a></p></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="widget_title">
                    <h4><span>Recent Posts</span></h4>
                </div>
                <div class="widget_content">
                    <ul class="links">
                        <li><a href="#">Aenean commodo ligula eget dolor<span>November 07, 2015</span></a></li>
                        <li><a href="#">Temporibus autem quibusdam <span>November 05, 2015</span></a></li>
                        <li><a href="#">Debitis aut rerum saepe <span>November 03, 2015</span></a></li>
                        <li><a href="#">Et voluptates repudiandae <span>November 02, 2015</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="widget_title">
                    <h4><span>Twitter</span></h4>
                </div>
                <div class="widget_content">
                    <ul class="tweet_list">
                            <li class="tweet_content item">
                                <p class="tweet_link"><a href="#">@jquery_rain </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                                <span class="time">29 September 2015</span>
                            </li>
                            <li class="tweet_content item">
                                <p class="tweet_link"><a href="#">@jquery_rain </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                                <span class="time">29 September 2015</span>
                            </li>
                            <li class="tweet_content item">
                                <p class="tweet_link"><a href="#">@jquery_rain </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                                <span class="time">29 September 2015</span>
                            </li>
                        </ul>
                </div>
                <div class="widget_content">
                    <div class="tweet_go"></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="widget_title">
                    <h4><span>Flickr Gallery</span></h4>
                </div>
                <div class="widget_content">
                    <div class="flickr">
                        <ul id="flickrFeed" class="flickr-feed"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--end footer-->

<section class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p class="copyright">&copy; Copyright 2015 Electrify | Powered by  <a href="http://www.jqueryrain.com/">jQuery Rain</a></p>
            </div>

            <div class="col-sm-6 ">
                <div class="footer_social">
                    <ul class="footbot_social">
                        <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#." data-placement="top" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="skype" href="#." data-placement="top" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
                        <li><a class="rss" href="#." data-placement="top" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{ Html::script('elec/js/jquery-1.10.2.min.js') }}
{{ Html::script('js/bootstrap.min.js') }}
{{ Html::script('js/jquery.easing.1.3.js') }}
{{ Html::script('js/retina-1.1.0.min.js') }}
{{ Html::script('js/jquery.cookie.js') }}
{{ Html::script('js/styleswitch.js') }} 
{{ Html::script('js/jquery.cookie.js') }} <!-- jQuery cookie -->
{{ Html::script('js/styleswitch.js') }}<!-- Style Colors Switcher -->



{{ Html::script('elec/js/jquery.smartmenus.min.js') }}
{{ Html::script('elec/js/jquery.smartmenus.bootstrap.min.js') }}
{{ Html::script('elec/js/jflickrfeed.js') }}
{{ Html::script('elec/js/jquery.magnific-popup.min.js') }}
{{ Html::script('elec/js/jquery.isotope.min.js') }}
{{ Html::script('elec/js/swipe.js') }}
{{ Html::script('elec/js/jquery-scrolltofixed-min.js') }}
{{ Html::script('elec/js/jquery.validate.js') }}
{{ Html::script('elec/js/view.contact.js') }}
{{ Html::script('elec/js/jquery.gmap.js') }}

{{ Html::script('elec/js/main.js') }}

<!-- Start Style Switcher -->
<div class="switcher"></div>
<!-- End Style Switcher -->
</body>
</html>
