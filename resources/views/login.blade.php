
@extends('header')

@section('content')

<!--start wrapper-->
<section class="wrapper">
    <section class="page_head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>Halaman Masuk Akun</h2>
                    </div>
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="index.html">Home</a>/</li>
                            <li>Shortcodes</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row sub_content">         
           <div class="col-lg-3 col-sm-3"></div>
            <div class="col-lg-6 col-sm-6">
                <div class="dividerHeading">
                    <h4><span>Masuk Akun</span></h4>
                </div>
                <form id="loginform" method="post" name="loginform" action="">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-default btn-lg button" value="Masuk">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--end wrapper-->

<!--start footer-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
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
            <div class="col-sm-3 col-md-3 col-lg-3">
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

@endsection