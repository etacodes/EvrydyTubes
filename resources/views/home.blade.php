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
        <h2 class="featurette-heading fw-normal lh-1">Puma Bmw Motorsport. <span class="text-muted">Limited Edition.</span></h2>
        <p class="lead">creating exciting fanwear and street-ready collaborations as well as supplying the team with high performance engineered racewear, gloves, boots, and pre-race team uniforms.</p>
      </div>
      <div class="col-md-5">
        <img src="img/4.jpg" class="d-block w-100" alt="Responsive image" height="100%">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Nike SB. <span class="text-muted">Limited Edition.</span></h2>
        <p class="lead">The latest and greatest innovation to hit the streets, the Force 58 gives you the durability of a cupsole with the flexibility of vulcanised shoes. Made from canvas and suede and finished with perforations on the toe, the whole look is infused with heritage basketball DNA.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/5.jpg" class="d-block w-100" alt="Responsive image" height="100%">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Nike BRSB. <span class="text-muted">limited Edition.</span></h2>
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
            <span class="text-muted">Developed by EverydayShoes 2022</span>
        </div>
        <img src="" alt="" width="40" height="40">
  </div><!-- /.container -->

@endsection
