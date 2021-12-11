@extends('layouts/frontend')
@section('container')

<!-- Carousel -->
<div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
  <div class="me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner" style="width: 100%;">
        <div class="carousel-item active overflow-hidden shadow p-3 bg-body">
          <img src="/img/carousel1.jpg" style="height: 450px; opacity: 50%; border-radius: 1%" class="bd-placeholder-img shadow" width="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <div class="container">
            <div class="carousel-caption justify-content-left my-5">
              <h3 style="color: rgb(0, 0, 0);">“Your Home should tell the story of who you are, and be a Collection of what you Love.”</h3>
              <h6 style="color: #00b4b4;">― Nate Berkus, The Things That Matter</h6>
              <a class="btn mt-4" style="margin-bottom: -15px;" href="#products">Let's Explore!</a>
            </div>
          </div>
        </div>
        <div class="carousel-item overflow-hidden shadow p-3 bg-body">
          <img src="/img/carousel.jpg" style="height: 450px; opacity: 50%; border-radius: 1%" class="bd-placeholder-img" width="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <div class="container">
            <div class="carousel-caption justify-content-left my-5">
              <h3 style="color: rgb(0, 0, 0);">“Our interiors are an insight into our brains. It is a collaboration of design, art, humor, irony, functionality, and the street.”</h3>
              <h6 style="color: #00b4b4;">― Amanda Talbot, Rethink: The Way You Live</h6>
              <a class="btn mt-4" style="margin-bottom: -15px;" href="#products">Let's Explore!</a>
            </div>
          </div>
        </div>
        <div class="carousel-item overflow-hidden shadow p-3 bg-body">
          <img src="/img/carousel2.jpg" style="height: 450px; opacity: 50%; border-radius: 1%" class="bd-placeholder-img" width="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
          <div class="container">
            <div class="carousel-caption justify-content-right my-5">
              <h3 style="color: rgb(0, 0, 0);">“Clever design converts and changes according to need.”</h3>
              <h6 style="color: rgb(0, 0, 0);">― Amanda Talbot, Rethink: The Way You Live</h6>
              <a class="btn mt-4" style="margin-bottom: -15px;" href="#products">Let's Explore!</a>
            </div>
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
  </div>
</div>
<!-- Carousel -->

<!-- All Products -->
@if ($products->count())
<div class="album py-3">
  <div class="container">
    <div class="content-2-2 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="text-center title-text">
        <h1 class="text-title story" id="products">{{ $title }}</h1>
        <p class="primary-header" id="categories">
          Choose Your Type!
        </p>
      </div>
    </div>

    <div class="grid text-center">
      <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4 mt-3">
          <div class="card shadow-sm">
            <img src="https://source.unsplash.com/300x225?{{ $product->category->slug }}" class="bd-placeholder-img card-img-top" width="100%" height="225" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>

            <div class="card-body">
              <h5 class="card-title">{{ $product->name }}</h5>
              <p class="card-text">IDR {{ number_format($product->price) }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group mx-auto">
                  <a href="/details/{{ $product->slug }}" style="padding-right: 5px;"><button type="button" class="btn btn-sm">View</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    @else
    <p class="text-center fs-4">No posts found.</p>
   @endif

    <div class="d-flex justify-content-end mt-4">
      {{ $products->links() }}
    </div>
  </div>
</div>
<!-- End All Products -->
@endsection