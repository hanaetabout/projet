@extends('layouts.banner_view')

@section('image-url')
    {{ asset('images/login/header-aboutus-login-checkout.jpg') }}
@endsection

@section('image-alt')
    Register Header
@endsection

@section('image-desc')
    Tranquil Luxury is Waiting
@endsection

@section('page-content')
    <div class="login-container-box">

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="container mt-5 mb-5" >
            <div class="row">
                <div class="col p-5 " style="background-color: #e5d3b3" >
                    <form action="/login" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label"><h5>Email Address</h5></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ Cookie::get('is_remember') ? Cookie::get('email') : '' }}">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label"><h5>Password</h5></label>
                            <input type="password" class="form-control" id="password" name="password" value="{{ Cookie::get('is_remember') ? Cookie::get('password') : '' }}">
                        </div>
                        
                        <div class="form-check mb-5">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name = "remember" {{ Cookie::get('is_remember') ? "checked" : ""}}>
                            <label class="form-check-label" for="flexCheckChecked" >
                                Remember Me
                            </label>
                        </div>
                        
                        <div class="mb-3 d-flex justify-content-center" >
                            <button type="submit" class="btn btn-primary" style="width:30% ; background-color:#987554 ; border:2px solid #987554 ">Login</button>
                        </div>
                        
                        <div class="mb-3 d-flex justify-content-center">
                            <p>Don't have an account? <span><a href="/register">Register!</a></span></p>
                        </div>
                        
                    </form>
                </div>

                <!-- <div class="col p-0 ms-3">
                    <img src="{{ asset('images/home/card-home-ourspecialities.jpg') }}" alt="" style="width:100%; height:100%; padding:0; margin:0">
                </div> -->
            </div>
        </div>
    </div>
@endsection