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
    @foreach ($categories as $category)
    <div class="col-md-3">
      <div class="card">
          <img src="img/{{ $category->name }}.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title">{{ $category->name }}</h3>
            <p class="card-text m-1">{{ $category->name }}</p>
            <p style="color: orange" class="m-1">
              
            </p>
            <a href="/reviews?category={{ $category->slug }}" class="btn btn-primary" class="text-light">Go To Review</a>
          </div>
      </div>
  </div>
    @endforeach
</div>

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top px-3 border-bottom">
    <div class="col-md-4 d-flex align-items-center ">
        <a class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1"></a>
        <span class="text-muted">&copy;EverydayShoes 2022</span>
    </div>
    <img src="" alt="" width="40" height="40">

@endsection

