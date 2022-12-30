@extends('layouts.main')

@section('container')

<div class="container mt-5">
    <div class="row p-3">
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="col-md-7 col-sm-12">
            <div class="header text-center">
                <h1>LOGIN</h1>
                <p>Welcome back! Please enter your details.</p>
            </div>
            <form action="">
                <div class="login-form">
                    <label for="floatinginput" class="form-label">Email</label>
                    <input type="email" class="form-control" id="floatinginput" placeholder="name@example.com">

                    <label for="floatingPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Enter your Password">

                    <button class="signin mt-3">Sign In</button>
                    <div class="text-center">
                        <span class="d-inline">Don't have an account? <a href="/register" class="d-inline text-decoration-none">Register now!</a></span>
                    </div>
                </div>
            </form>
            <p class="mt-3 mb-3 text-muted text-center">EverydayShoes 2022&copy;</p>
        </div>
        <div class="col-md-5">
            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/adidaslogo.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/pumalogo.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/NIKElogo.jfif" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/NBLOGO.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>


@endsection