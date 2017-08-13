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
<body class="home" style="background-image:url('elec/images/fraction-slider/base_2.jpg'); ">

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
    </header>
    <!--End Header-->










<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Priviligess </label>
                            <div class="col-md-6">
                                <select class="form-control" name="admin">
                                    <option value="1">Admin</option>
                                    <option value="0">User</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>











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

   <!--  <![endif]--> -->

</body>
</html>
