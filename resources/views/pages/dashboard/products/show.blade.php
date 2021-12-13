@extends('layouts.backend')

@section('container')
<div class="container">
  <a href="/dashboard/products" class="btn btn-fill mb-3">< Back to All Products</a>
  <div class="row featurette mt-3">
    <div class="col-md-5 order-md-2">
      <p></p>
      <a href="/dashboard/categories" style="color: gray;">{{ $product->category->name }}</a>
      <h2 class="featurette-heading" style="color: #00b4b4; margin-top: 30px;">{{ $product->name }}
        <p class="lead" style="padding-top: 30px; font-size: 30px; color: grey;">Rp. {{ number_format($product->price) }}</p>
        <hr class="featurette-divider">
        <h6 class="mt-5" style="font-size: 15px;">{!! $product->description !!}</h6>
    </div>
    <div class="col-md-5 order-md-1">
      <img src="https://source.unsplash.com/200x200?{{ $product->category->name }}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto shadow" style="border-radius: 6%" width="500px" height="500px" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
    </div>
  </div>
  <div class="col-md-1 order-md-1 mt-4 mb-5">
    <img src="https://source.unsplash.com/95x80?{{ $product->category->name }}" style="border-radius: 0.75em;">
  </div>
</div>
@endsection