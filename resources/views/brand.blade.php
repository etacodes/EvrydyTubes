@extends('layouts.main')

@section('container')

{{-- jumbotron --}}
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">EXPLORE YOUR SHOES<br>WITH EVERYDAY SHOES</h1>
      <p class="fs-4">Make sure your steps are with quality shoes. Find your favourite brand now!.</p>
    </div>
  </div>

{{-- card brand --}}
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <img src="img/nblogo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title text-center">NEW BALANCE</h3>
              <p class="card-text m-1">New Balance</p>
              <p style="color: orange" class="m-1">
                <i class="bi bi-star-fill"></i> 
                <i class="bi bi-star-fill"></i> 
                <i class="bi bi-star-fill"></i> 
                <i class="bi bi-star-half"></i> 
                <i class="bi bi-star"></i>
              </p>
              <a href="#" class="btn btn-primary">Go To Review</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <img src="img/adidaslogo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title text-center">ADIDAS</h3>
              <p class="card-text m-1">Adidas</p>
              <p style="color: orange" class="m-1">
                <i class="bi bi-star-fill"></i> 
                <i class="bi bi-star-fill"></i> 
                <i class="bi bi-star-fill"></i> 
                <i class="bi bi-star-fill"></i> 
                <i class="bi bi-star-half"></i>
              </p>
              <a href="#" class="btn btn-primary">Go To Review</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <img src="img/nikelogo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title text-center">NIKE</h3>
              <p class="card-text m-1">Nike</p>
              <p style="color: orange" class="m-1">
                <i class="bi bi-star-fill"></i> 
                <i class="bi bi-star-fill"></i> 
                <i class="bi bi-star-fill"></i> 
                <i class="bi bi-star-fill"></i> 
                <i class="bi bi-star-half"></i>
              </p>
              <a href="#" class="btn btn-primary">Go To Review</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <img src="img/pumalogo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title text-center">PUMA</h3>
              <p class="card-text m-1">Puma</p>
              <p style="color: orange" class="m-1">
                <i class="bi bi-star-fill"></i> 
                <i class="bi bi-star-fill"></i> 
                <i class="bi bi-star-fill"></i> 
                <i class="bi bi-star-fill"></i> 
                <i class="bi bi-star"></i>
              </p>
              <a href="#" class="btn btn-primary">Go To Review</a>
            </div>
        </div>
    </div>
</div>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top px-3 border-bottom">
    <div class="col-md-4 d-flex align-items-center ">
        <a class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1"></a>
        <span class="text-muted">&copy;EverydayShoes 2022</span>
    </div>
    <img src="img/B.jpg" alt="" width="40" height="40">

@endsection

