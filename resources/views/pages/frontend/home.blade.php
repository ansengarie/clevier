@extends('layouts/frontend')
@section('container')
<section class="h-100 w-100 bg-white" style="box-sizing: border-box">
  <div class="container-xxl mx-auto p-0  position-relative header-2-2">
    <!-- Header -->
    <div>
      <div class="mx-auto d-flex flex-lg-row flex-column hero">
        <!-- Left Column -->
        <div class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
          <p class="text-caption">Welcome!</p>
          <h1 class="title-text-big">
            Let's Explore<br class="d-lg-block d-none" />
            Your <span class="text-field">Interiors</span> Dream
          </h1>
          <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
            <a class="btn d-inline-flex mb-md-0 btn-try text-white" href="#just-arrived">
              Explore Now
            </a>
            <button class="btn btn-outline">
              <div class="d-flex align-items-center">
                <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.9293 7.99988L6.66668 5.15788V10.8419L10.9293 7.99988ZM12.9173 8.27722L5.85134 12.9879C5.80115 13.0213 5.74283 13.0404 5.6826 13.0433C5.62238 13.0462 5.5625 13.0327 5.50934 13.0042C5.45619 12.9758 5.41175 12.9334 5.38075 12.8817C5.34976 12.83 5.33337 12.7708 5.33334 12.7105V3.28922C5.33337 3.22892 5.34976 3.16976 5.38075 3.11804C5.41175 3.06633 5.45619 3.02398 5.50934 2.99552C5.5625 2.96706 5.62238 2.95355 5.6826 2.95644C5.74283 2.95932 5.80115 2.97848 5.85134 3.01188L12.9173 7.72255C12.963 7.75299 13.0004 7.79423 13.0263 7.84261C13.0522 7.89099 13.0658 7.94501 13.0658 7.99988C13.0658 8.05475 13.0522 8.10878 13.0263 8.15716C13.0004 8.20553 12.963 8.24678 12.9173 8.27722Z" fill="#555B61" />
                </svg>
                Watch the video
              </div>
            </button>
          </div>
        </div>
        <!-- Right Column -->
        <div class="right-column text-center d-flex justify-content-center pe-0">
          <img id="img-fluid" class="h-auto mw-100 shadow" style="border-radius: 6%" src="/img/heroes.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- End Header -->

  <!-- Just Arrived -->
  <section class="flex py-16 px-4 scrollspy" id="just-arrived">
    <div class="content-2-2 container-xxl mx-auto p-0  position-relative">
      <div class="text-center title-text">
        <h1 class="text-title story">JUST ARRIVED -</h1>
        <p class="primary-header">
          This summer for you
        </p>
      </div>
    </div>
  </section>
  <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <div class="grid text-center">
      <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4 mt-3">
          <div class="card">
            <a href="{{ route('details', $product->slug) }}">
              <img src="https://source.unsplash.com/300x200?{{ $product->category->name }}" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title">{{ $product->name }}</h5>
              <p class="card-text">IDR {{ number_format($product->price) }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Just Arrived -->

  <!-- Highlight -->
  <section class="products">
    <section class="porto">
      <div class="row d-flex align-content-center">
        <div class="col-sm-12">
          <h3 class="headline">
            HIGHLIGHTS -
          </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10">
          <p class="sub-headline">
            Our platform specialize on helping our clients work process and communication. <br>
            Below are the products produced using our platform.
          </p>
        </div>
        <div class="col-sm-2 d-flex">
          <a href="/products" class="link btn btn-fill text-white">
            See More
          </a>
        </div>
      </div>
      <div class="row porto-img">
        <div class="col-md-4">
          <img src="https://source.unsplash.com/400x600?furniture" style="border-radius: 5%;" class="img-fluid mb-3" />
        </div>
        <div class="col-md-4 d-flex align-items-end flex-column">
          <img src="https://source.unsplash.com/400x280?interior" style="border-radius: 5%;" class="img-fluid mb-3">
          <img src="https://source.unsplash.com/400x280?designInterior" style="border-radius: 5%;" class="img-fluid mt-auto mb-3" />
        </div>
        <div class="col-md-4">
          <img src="https://source.unsplash.com/400x600?interiorDesign" style="border-radius: 5%;" class="img-fluid mb-3" />
        </div>
      </div>
    </section>
  </section>
  <!-- End Highlights -->

  <!--Testimonial-->
  <?php
  $faker = Faker\Factory::create();  /// For random names & countries of testimonials
  ?>
  <section class="h-100 w-100" style="box-sizing: border-box;">
    <div class="content-3-7 overflow-hidden container-xxl mx-auto position-relative">
      <div class="container mx-auto">
        <div class="text-center title-text">
          <h4 class="fw-bold mb-4" style="color: #00b4b4; font-size:23px;">TESTIMONIALS</h4>
        </div>
        <div class="d-flex flex-wrap">
          <div class="mx-auto card-item position-relative">
            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100 text-center">
              <img class="bd-placeholder-img rounded-circle mb-3" width="170" src="https://fakeface.rest/thumb/view?minimum_age=30" alt="alt text" title="Dynamically generated image" style="margin-top:0.2rem; margin-left:auto; margin-right:auto">
              <h2 class="text-title mb-1">{{ $faker->name }}</h2>
              <p class="caption-text mx-auto mb-2">
                <i class="bi bi-geo-alt-fill"></i>{{ $faker-> country }}
              </p>
              <p class="text-caption">
                <?php
                $rand = strval(rand(1, 10));
                $testi = "https://testimonialapi.toolcarton.com/api/" . $rand;
                $testi = file_get_contents($testi);
                $testi = json_decode($testi, TRUE);
                ?>
                {{ $testi['message'] }}
              </p>
            </div>
          </div>
          <div class="mx-auto card-item position-relative">
            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100 text-center">
              <img class="bd-placeholder-img rounded-circle mb-3" width="170" src="https://fakeface.rest/face/view?gender=female&minimum_age=18" alt="alt text" title="Dynamically generated image" style="margin-top:0.2rem; margin-left:auto; margin-right:auto">
              <h2 class="text-title mb-1">{{ $faker->name }}</h2>
              <p class="caption-text mx-auto mb-2">
                <i class="bi bi-geo-alt-fill"></i>{{ $faker-> country }}
              </p>
              <p class="text-caption">
                <?php
                $rand = strval(rand(1, 10));
                $testi = "https://testimonialapi.toolcarton.com/api/" . $rand;
                $testi = file_get_contents($testi);
                $testi = json_decode($testi, TRUE);
                ?>
                {{ $testi['message'] }}
              </p>
            </div>
          </div>
          <div class="mx-auto card-item position-relative">
            <div class="card-item-outline bg-white d-flex flex-column position-relative overflow-hidden h-100 text-center">
              <img class="bd-placeholder-img rounded-circle mb-3" width="170" src="https://fakeface.rest/thumb/view/20?minimum_age=16" alt="alt text" title="Dynamically generated image" style="margin-top:0.2rem; margin-left:auto; margin-right:auto">
              <h2 class="text-title mb-1">{{ $faker->name }}</h2>
              <p class="caption-text mx-auto mb-2">
                <i class="bi bi-geo-alt-fill"></i>{{ $faker-> country }}
              </p>
              <p class="text-caption">
                <?php
                $rand = strval(rand(1, 10));
                $testi = "https://testimonialapi.toolcarton.com/api/" . $rand;
                $testi = file_get_contents($testi);
                $testi = json_decode($testi, TRUE);
                ?>
                {{ $testi['message'] }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Testimonial -->

  <!-- OUR PARTNER -->
  <div class="bg text-secondary px-4 py-2 text-center">
    <div class="py-1">
      <h4 class="fw-bold mb-4" style="color: #00b4b4; font-size:23px;">OUR PARTNER</h4>
      <div class="row" style="margin: 0px; padding: 0px;">
        <div class="col-md-2 mb-4">
          <img src="//logo.clearbit.com/laravel.com?size=100" style="filter: opacity(60%);">
        </div>
        <div class="col-md-2 mb-4">
          <img src="//logo.clearbit.com/google.com?size=100" style="filter: opacity(60%);">
        </div>
        <div class="col-md-2 mb-4">
          <img src="//logo.clearbit.com/github.com?size=100" style="filter: opacity(60%);">
        </div>
        <div class="col-md-2 mb-4">
          <img src="//logo.clearbit.com/unsplash.com?size=120" style="filter: opacity(60%);">
        </div>
        <div class="col-md-2 mb-4">
          <img src="//logo.clearbit.com/php.net?size=120" style="filter: opacity(60%);">
        </div>
        <div class="col-md-2 mb-4">
          <img src="//logo.clearbit.com/getbootstrap.com?size=90" style="filter: opacity(60%);">
        </div>
      </div>
    </div>
  </div>
  <!-- End OUR PARTNER -->
</section>
@endsection