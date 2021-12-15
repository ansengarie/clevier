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
          <a href="{{ route('details', $product->slug) }}" class="text-decoration-none" style="color: black;">
            <div class="card" style="border-radius: 12px">
              @if ($product->image)
                <div style="max-height: 400px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" style="border-radius: 12px 12px 0px 0px;">
                </div>   
              @else
              <img src="https://source.unsplash.com/300x200?{{ $product->category->name }}" class="card-img-top" style="border-radius: 12px 12px 0px 0px;">
              @endif
              
              <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">IDR {{ number_format($product->price) }}</p>
              </div>
            </div>
          </a>
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
            Helping you to find your furniture dreams. <br>
            Below are the category products produced from our platform.
          </p>
        </div>
        <div class="col-sm-2 d-flex">
          <a href="/categories" class="link btn btn-fill text-white">
            See More
          </a>
        </div>
      </div>
      <div class="row porto-img" style="overflow: hidden;">
        <div class="col-md-4">
          <img src="https://source.unsplash.com/400x600?livingroom" style="border-radius: 5%;" class="img-fluid mb-3" />
        </div>
        <div class="col-md-4 d-flex align-items-end flex-column">
          <img src="https://source.unsplash.com/400x280?bedroom" style="border-radius: 5%;" class="img-fluid mb-4">
          <img src="https://source.unsplash.com/400x280?bathroom" style="border-radius: 5%;" class="img-fluid mt-3 mb-3" />
        </div>
        <div class="col-md-4">
          <img src="https://source.unsplash.com/400x600?kitchen" style="border-radius: 5%;" class="img-fluid mb-3" />
        </div>
      </div>
    </section>
  </section>
  <!-- End Highlights -->

  <!--Testimonial-->
  <?php
  $faker = Faker\Factory::create();  /// For random names & countries of testimonials
  ?>
  <section class="h-100 w-100" style="box-sizing: border-box;" id="testimonial">
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

    <!-- Back to top button -->
    <button type="button" class="btn btn-fill btn-floating btn-lg" id="btn-back-to-top">
      <i class="bi bi-arrow-up-circle"></i>
    </button>
</section>
@endsection