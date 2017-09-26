@extends('layout')

@section('content')
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
@endsection
