<!DOCTYPE html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>CRM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Open Sans font from Google CDN -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">

    <!-- Pixel Admin's stylesheets -->
    <link href="{{URL::asset('html/assets/stylesheets/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('html/assets/stylesheets/pixel-admin.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('html/assets/stylesheets/pages.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('html/assets/stylesheets/rtl.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('html/assets/stylesheets/themes.min.css')}}" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="{{URL::asset('html/assets/javascripts/ie.min.js')}}"></script>
    <![endif]-->
</head>

<script>var init = [];</script>
<!-- Demo script --> <script src="{{URL::asset('html/assets/demo/demo.js')}}"></script> <!-- / Demo script -->
    <body class="theme-default page-signin-alt">
    <div class="signin-header">
        <a href="index.html" class="logo">
            <div class="demo-logo bg-primary"></div>&nbsp;
        </a> <!-- / .logo -->
        <a href="login" class="btn btn-primary">Login</a>
    </div> <!-- / .header -->

    <h1 class="form-header">Create your Account</h1>


    <!-- Form -->
    <form action="register" method="post" id="signup-form_id" class="panel">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="username" id="username_id" class="form-control input-lg" placeholder="Username">
        </div>

        <div class="form-group">
            <input type="password" name="password" id="password_id" class="form-control input-lg" placeholder="Password">
        </div>

        <div class="form-group">
            <input type="text" name="name" id="name_id" class="form-control input-lg" placeholder="Name">
        </div>

        <div class="form-group">
            <input type="text" name="email" id="email_id" class="form-control input-lg" placeholder="E-mail">
        </div>

       {{-- <div class="form-group" style="margin-top: 20px;margin-bottom: 20px;">
            <label class="checkbox-inline">
                <input type="checkbox" name="signup_confirm" class="px" id="confirm_id">
                <span class="lbl">I agree with the <a href="#" target="_blank">Terms and Conditions</a></span>
            </label>
        </div>--}}

        <div class="form-actions">
            <input type="submit" value="Create an account" class="btn btn-primary btn-lg btn-block">
        </div>
    </form>
    <!-- / Form -->
    </body>
<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->


<!-- Pixel Admin's javascripts -->
<script src="{{URL::asset('html/assets/javascripts/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('html/assets/javascripts/pixel-admin.min.js')}}"></script>

<script type="text/javascript">
    init.push(function () {
        // Javascript code here
    })
    window.PixelAdmin.start(init);
</script>
</html>

