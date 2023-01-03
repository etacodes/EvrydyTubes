@extends('layouts.main')

@section('container')
  <div id="myCarousel" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" >
          <img src="img/adidaskarou.jpg" class="d-block w-100"  alt="Responsive image">
          <div class="carousel-caption d-none d-md-block text-white">
            <h3>ADIDAS NEW COLLECTIONS</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/nikecarou.jpg" class="d-block w-100"  alt="Responsive image">
          <div class="carousel-caption d-none d-md-block">
            <h3>NIKE NEW COLLECTIONS</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pumacarou.jpg" class="d-block w-100"  alt="Responsive image">
          <div class="carousel-caption d-none d-md-block">
            <h3>PUMA NEW COLLECTIONS</h5>
          </div>
        </div>
      </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h1 class="featurette-heading fw-normal lh-1">PUMA SMASH V2 </h1>
        <p class="lead">The PUMA Smash v2, a part of the classic Smash icons, stuns with its elegant suede upper. 
          It comes in a trove of colorways that can match a variety of outfits. This sporty offering is also an exemplary 
          shoe in the areas of comfort and fit. And to sweeten the deal, it's been given an ultra-low asking price, making it 
          among the cheapest sneakers available on the market.</p>
      </div>
      <div class="col-md-5">
        <img src="img/pumasmash.jpg" class="d-block w-100" alt="Responsive image" height="100%">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h1 class="featurette-heading fw-normal lh-1">NIKE KYRIE 7 EP BLACK </h1>
        <p class="lead">The initial idea for making Nike Kyrie 7 shoes stems from the weight loss of NBA players including Kyrie Irving 
          during the Covid-19 quarantine period due to their hard and heavy portion of training. The Kyrie 7 shoe is claimed to be 2.5 
          ounces lighter than the previous model, and gives the Irving one of the lightest models without sacrificing support.
          This signature shoe from the Brooklyn Nets point guard always gives off an eccentric impression of the colorway he chooses. 
          Kyrie also decided to give a relatively cheap price tag among NBA player signature shoes in general.</p><p class="lead">
          The mesh material on the forefoot of this shoe makes it lighter and more comfortable. What distinguishes this series from the 
          previous one is the removal of the mid-foot strap as found on the Kyrie 6, and replaced with wings on this Kyrie 7. Not a few 
          people talk about the placement of these wings, according to them these wings represent Kyrie's number</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/nikeair.jpg" class="d-block w-100" alt="Responsive image" height="100%">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h1 class="featurette-heading fw-normal lh-1">NIKE BRSB </h1>
        <p class="lead">A familiar favourite is reborn in the Nike BRSB. Almost every detail, from the colour-blocking to the sawtooth pattern on the sole, was inspired by the original Nike Cortez. But, because this shoe is built for skate, we added extras where they're needed—like the rubber from the sole that wraps up and over the heel and toe for durability. It also wraps the sides, adding an extra layer to high-use areas, like the ollie zone.</p>
      </div>
      <div class="col-md-5">
        <img src="img/6.jpg" class="d-block w-100" alt="Responsive image" height="100%">

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top px-3 border-bottom">
        <div class="col-md-4 d-flex align-items-center ">
            <a class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1"></a>
            <span class="text-muted">EverydayShoes 2022 Developed by BJIRKA</span>
        </div>
        <img src="img/logo.png" alt="" width="60" height="60">
  </div><!-- /.container -->

@endsection
