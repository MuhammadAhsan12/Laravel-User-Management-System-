
@extends('layouts.app')

@section('title', 'Regester')

@section('content')
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
            <div class="bar5"></div>
        </div>
    </div>

    <div class="pattern">
        <span class="red"></span>
        <span class="indigo"></span>
        <span class="blue"></span>
        <span class="green"></span>
        <span class="orange"></span>
    </div>

    <div class="auth-main particles_js">
        <div class="auth_div vivify popIn">
            <div class="auth_brand">
                <a class="navbar-brand" href="javascript:void(0);"><img src="{{asset('public/assets/images/icon.svg')}}" width="30" height="30" class="d-inline-block align-top mr-2" alt="">Regester</a>
            </div>
            <div class="card">
                <div class="body">
                    <p class="lead">Login to your account</p>
                    <form class="form-auth-small m-t-20" method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">Full Name</label>
                            <input type="text" name="name" class="form-control round" id="signin-email" value="" placeholder="Full Name">
                        </div>
                        @error('name')
                        <p style="color: red">{{$message}}</p>
                        @enderror
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">Email</label>
                            <input type="email" name="email" class="form-control round" id="signin-email" value="" placeholder="Email">
                        </div>
                        @error('email')
                        <p style="color: red">{{$message}}</p>
                        @enderror
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Password</label>
                            <input type="password" name="password" class="form-control round" id="signin-password" value="" placeholder="Password">
                        </div>
                        @error('password')
                        <p style="color: red">{{$message}}</p>
                        @enderror
                        <!--<div class="form-group clearfix">
                            <label class="fancy-checkbox element-left">
                                <input type="checkbox">
                                <span>Remember me</span>
                            </label>
                        </div>-->
                        <button type="submit" class="btn btn-primary btn-round btn-block">Signup</button>
                        <div class="bottom">
                            <span> OR </span><br/>
                            <button type="button" class="btn btn-danger btn-round btn-block gmail_login">Sign-up using <i class="fa fa-google-plus"></i></button>
                            <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span>
                            <span>Don't have an account? <a href="{{ asset('login')}}">Login</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>
@endsection