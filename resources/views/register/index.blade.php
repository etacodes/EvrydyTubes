@extends('layouts.main')

@section('container')

<div class="container mt-3">
    <div class="row p-3">
        <div class="col-md-7 col-sm-12">
            <div class="header text-center">
                <h1>Welcome Back</h1>
                <p>Welcome back! Please enter your details.</p>
            </div>
            <form action="/register" method="post">
                @csrf
                <div class="login-form">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required value="{{ old('name') }}">
                    @validation('name')

                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username" required value="{{ old('username') }}">
                    @validation('username')

                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    @validation('email')

                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                    @validation('password')

                    <button class="signin mt-3">Register</button>
                    <div class="text-center">
                        <span class="d-inline">Already Registered? <a href="/login" class="d-inline text-decoration-none">Login</a></span>
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