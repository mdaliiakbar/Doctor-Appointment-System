@extends('layouts.app')
@section('title', 'Doctor Login')
@section('contents')

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <!-- Login Tab Content -->
                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-6 login-left">
                                <img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Login">
                            </div>
                            <div class="col-md-12 col-lg-6 login-right">
                                <div class="login-header">
                                    <h3>Login <span>Doctor</span></h3>
                                </div>
                                <form action="index.html">
                                    <div class="form-group form-focus">
                                        <input type="email" class="form-control floating">
                                        <label class="focus-label">Email</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="password" class="form-control floating">
                                        <label class="focus-label">Password</label>
                                    </div>
                                    <div class="text-right">
                                        <a class="forgot-link" href="#">Forgot Password ?</a>
                                    </div>
                                    <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>

                                    <div class="text-center dont-have">Don’t have an account? <a
                                            href="{{ route ('doctor-register')}}">Register</a></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Login Tab Content -->

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->

@endsection
