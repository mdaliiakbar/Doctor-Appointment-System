@extends('layouts.app')
@section('title', 'Doctor Registration')
@section('contents')

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <!-- Register Content -->
                    <div class="account-content">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-md-7 col-lg-6 login-left">
                                <img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">
                            </div>
                            <div class="col-md-12 col-lg-6 login-right">
                                <div class="login-header">
                                    <h3>Doctor Registration </h3>
                                </div>
<style>
    .focus-select .focus-label{
        top: -18px;
        font-size: 12px;
    }
</style>
                                <!-- Register Form -->
                                <form action="doctor-dashboard.html">
                                    <div class="form-group form-focus">
                                        <input type="text" name="name" class="form-control floating">
                                        <label class="focus-label">Name</label>
                                    </div>
                                    <div class="form-group form-focus focus-select">
                                        <select type="text" name="name" class="form-control ">
                                            <option value="">Select Specialist</option>
                                            <option value="1">Dentist</option>
                                        </select>
                                        <label class="focus-label">Specialist</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="text" name="mobile" class="form-control floating">
                                        <label class="focus-label">Mobile Number</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="email" name="email" class="form-control floating">
                                        <label class="focus-label">Email</label>
                                    </div>
                                    <div class="form-group form-focus">
                                        <input type="password" name="password" class="form-control floating">
                                        <label class="focus-label">Create Password</label>
                                    </div>
                                    <div class="text-right">
                                        <a class="forgot-link" href="{{ route ('doctor-login')}}">Already have an account?</a>
                                    </div>
                                    <button class="btn btn-primary btn-block btn-lg login-btn"
                                        type="submit">Signup</button>


                                </form>
                                <!-- /Register Form -->

                            </div>
                        </div>
                    </div>
                    <!-- /Register Content -->

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->


@endsection
