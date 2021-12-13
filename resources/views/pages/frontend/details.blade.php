@extends('layouts/frontend')
@section('container')

<div class="row featurette">
  <div class="col-md-6 order-md-3">
    <p></p>
    <a href="/categories" style="color: gray;" class="text-decoration-none">{{ $product->category->name }}</a>
    <h2 class="featurette-heading" style="color: #00b4b4; margin-top: 30px;">{{ $product->name }}
      <p class="lead" style="padding-top: 15px; font-size: 30px; color: gray;">Rp. {{ number_format($product->price) }}</p>
      <h6 class="mt-5" style="font-size: 15px;">{!! $product->description !!}</h6>
  </div>
  <div class="col-md-5 order-md-2">
    <img src="https://source.unsplash.com/300x230?{{ $product->category->name }}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto shadow-sm" style="border-radius: 6%" width="500px" height="500px" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
  </div>
  <div class="col-md-1 order-md-1 mt-2">
    <img src="https://source.unsplash.com/95x80?{{ $product->category->name }}" style="border-radius: 0.75em">
  </div>
</div>


<!-- Another Products -->
<section class="h-100 w-100 bg-white" style="box-sizing: border-box; margin-top: 5%; margin-bottom: 5%;">
  <div class="content-2-2 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
    <div class="text-center title-text">
      <h1 class="text-title story">ANOTHER PRODUCTS -</h1>
      <p class="primary-header" style="font-size: 30px;">
        Where is Your Best?
      </p>
    </div>

    <div class="grid text-center" style="margin-bottom: 50px;">
      <div class="row">
        @foreach ($recommendations as $recommend)
        <div class="col">
          <div class="card">
            <img src="https://source.unsplash.com/300x200?{{ $recommend->category->name }}" style="border-radius: 0.75em;" class="card-img-top">
            <div class="card-body" style="margin-bottom: -15%;">
              <h5 class="card-title" style="font-size: 20px;">{{ $recommend->name }}</h5>
              <p class="card-text" style="margin-top: -5%;">Rp. {{ number_format($recommend->price) }}</p>
              <div class="d-flex justify-content-between align-items-center" style="margin-top: -20%">
                <div class="btn-group mx-auto">
                  <a href="/details/{{ $recommend->slug }}" class="link btn btn-fill text-white" style="margin-top: 20px; border-radius: 0.75em;"><button type="button" class="btn btn-sm" style="font-size: 16px;">View</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <p>
        <a href="/products" class="link btn d-inline-flex mb-md-0 btn-try text-white mt-5" style="border-radius: 0.75em;">
          See More
        </a>
      </p>
    </div>
  </div>
</section>
<!-- End Another Products -->
@endsection