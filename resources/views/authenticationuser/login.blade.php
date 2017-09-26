@extends('layout')

@section('content')

<body class="theme-default page-signin-alt">
    <div class="signin-header">
        <a href="index.html" class="logo">
            <div class="demo-logo bg-primary"></div>&nbsp;
        </a> <!-- / .logo -->
        <a href="register" class="btn btn-primary">Register</a>
    </div> <!-- / .header -->

    <h1 class="form-header">Log in to your Account</h1>


    <!-- Form -->
    <form action="login" method="post" id="signin-form_id" class="panel">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="username" id="username_id" class="form-control input-lg" placeholder="Username">
        </div> <!-- / Username -->

        <div class="form-group signin-password">
            <input type="password" name="password" id="password_id" class="form-control input-lg" placeholder="Password">
            <a href="#" class="forgot">Forgot?</a>
        </div> <!-- / Password -->

        <div class="form-actions">
            <input type="submit" value="Sign In" class="btn btn-primary btn-block btn-lg">
        </div> <!-- / .form-actions -->
    </form>
    <!-- / Form -->
    </body>
@endsection
