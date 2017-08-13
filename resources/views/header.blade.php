<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Electrify Responsive Multipurpose Template</title>
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS FILES -->
    {{ Html::style('elec/css/bootstrap.css') }}
    {{ Html::style('elec/css/bootstrap.min.css') }}
    {{ Html::style('elec/css/style.css') }}
    {{ Html::style('elec/css/style.css') }}
    {{ Html::style('elec/css/layout/wide.css') }}

     {{ Html::style('elec/css/fractionslider.css') }}
     {{ Html::style('elec/css/style-fraction.css') }}
     {{ Html::style('elec/css/animate.css') }}

    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="home">
    <header id="header">
        <div id="top-bar">
            <div class="container">
                <table>
                <tr>
                <td>
                     {{ Html::image('img/logo.png','',array(
                                        'alt'=>'testimonial',
                                        'wiidth'=>'80',
                                        'height'=>'80')) }}
                </td>
                <td>
                     <h1 style="color:white;"><b>GO SEDEKAH</b></h1>
                </td>
                </tr>
                </table>



            </div>
        </div>
        <div id="logo-bar">
            <div class="container">
                <div class="row">
                    <!-- Logo / Mobile Menu -->
                    <div  class="col-lg-3 col-sm-3 ">

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
                                    <li class="active"><a href="#">Beranda</a>
                                    </li>

                                    <li><a href="#" >Pages</a>
                                    </li>

                                    <li><a href="#">Kontak</a>
                                    </li>
                                    <li>


                                            <ul class="nav navbar-nav navbar-right">
                                    <!-- Authentication Links -->
                                    @if (Auth::guest())
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @else
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @endif
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

    @yield('content')





<section class="footer_bottom">
    <div class="container">
        <div class="row">

            <div class="col-sm-6">
                <p class="copyright">&copy;2017 Luwak Develop </p>
            </div>

        </div>
    </div>
</section>


{{ Html::script('elec/js/jquery-1.10.2.min.js') }}
{{ Html::script('elec/js/bootstrap.min.js') }}
{{ Html::script('elec/js/jquery.easing.1.3.js') }}
{{ Html::script('elec/js/retina-1.1.0.min.js') }}
{{ Html::script('elec/js/jquery.cookie.js') }}
{{ Html::script('elec/js/styleswitch.js') }}
{{ Html::script('elec/js/jquery.fractionslider.js" type="text/javascript" charset="utf-8') }}
{{ Html::script('elec/js/jquery.smartmenus.min.js') }}
{{ Html::script('elec/js/jquery.smartmenus.bootstrap.min.js') }}
{{ Html::script('elec/js/owl.carousel.min.js') }}
{{ Html::script('elec/js/jflickrfeed.js') }}
{{ Html::script('elec/js/jquery.magnific-popup.min.js') }}
{{ Html::script('elec/js/jquery.isotope.min.js') }}
{{ Html::script('elec/js/jquery-hoverdirection.min.js') }}
{{ Html::script('elec/js/jquery.easypiechart.min.js') }}
{{ Html::script('elec/js/swipe.js') }}
{{ Html::script('elec/js/jquery.matchHeight-min.js') }}
{{ Html::script('elec/js/jquery-scrolltofixed-min.js') }}
{{ Html::script('elec/js/main.js') }}



    <!-- WARNING: Wow.js doesn't work in IE 9 or less -->
    <!--[if gte IE 9 | !IE ]><!-->
    {{ Html::script('elec/js/wow.min.js') }}
    <script>
        // WOW Animation
        new WOW().init();
    </script>

   <!--  <![endif]--> 
</body>
</html>
