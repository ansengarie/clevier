@extends('layouts/frontend')
@section('container')

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">Fortuna Sofa L Pajero productnation
    <p class="lead">Rp 13.995.000</p>
    <a class="btn d-inline-flex mb-md-0 btn-try text-white" href="" style="border-radius: 0.75rem;">
      Add to Cart
    </a>
    <h6 class="mt-5 d-inline-flex" style="font-size: 20px;">2 Seat Sofa. Kabusa Dark Grey</h6>
  </div>
  <div class="col-md-5 order-md-1">
    <img src="https://source.unsplash.com/300x225?sofa" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto shadow-sm" style="border-radius: 6%" width="500px" height="500px" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">

  </div>
</div>


<!-- Another Products -->
<section class="h-100 w-100 bg-white" style="box-sizing: border-box; margin-top: 5%; margin-bottom: 5%;">
  <div class="content-2-2 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
    <div class="text-center title-text">
      <h1 class="text-title story">ANOTHER PRODUCTS -</h1>
    </div>

    <div class="grid text-center" style="margin-bottom: 50px;">
      <div class="row">
        <div class="col">
          <div class="card">
            <img src="https://source.unsplash.com/300x200?cupboard" style="border-radius: 5%;" class="card-img-top">
            <div class="card-body" style="margin-bottom: -15%;">
              <h5 class="card-title">Vase</h5>
              <p class="card-text" style="margin-top: -5%;">Rp 129.000</p>
              <div class="d-flex justify-content-between align-items-center" style="margin-top: -20%">
                <div class="btn-group mx-auto">
                  <a href="/details" style="padding-right: 5px;"><button type="button" class="btn btn-sm">View</button></a>
                  <a href="/details"><button type="button" class="btn btn-sm">Add</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://source.unsplash.com/300x200?desk" style="border-radius: 5%;" class="card-img-top">
            <div class="card-body" style="margin-bottom: -15%;">
              <h5 class="card-title">Wardrobe</h5>
              <p class="card-text" style="margin-top: -5%;">Rp 3.999.000</p>
              <div class="d-flex justify-content-between align-items-center" style="margin-top: -20%">
                <div class="btn-group mx-auto">
                  <a href="/details" style="padding-right: 5px;"><button type="button" class="btn btn-sm">View</button></a>
                  <a href="/details"><button type="button" class="btn btn-sm">Add</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://source.unsplash.com/300x200?bed" style="border-radius: 5%;" class="card-img-top">
            <div class="card-body" style="margin-bottom: -15%;">
              <h5 class="card-title">Bed Frame</h5>
              <p class="card-text" style="margin-top: -5%;">Rp 3.499.000</p>
              <div class="d-flex justify-content-between align-items-center" style="margin-top: -20%">
                <div class="btn-group mx-auto">
                  <a href="/details" style="padding-right: 5px;"><button type="button" class="btn btn-sm">View</button></a>
                  <a href="/details"><button type="button" class="btn btn-sm">Add</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://source.unsplash.com/300x200?table" style="border-radius: 5%;" class="card-img-top">
            <div class="card-body" style="margin-bottom: -15%;">
              <h5 class="card-title">Desk</h5>
              <p class="card-text" style="margin-top: -5%;">Rp 549.000</p>
              <div class="d-flex justify-content-between align-items-center" style="margin-top: -20%">
                <div class="btn-group mx-auto">
                  <a href="/details" style="padding-right: 5px;"><button type="button" class="btn btn-sm">View</button></a>
                  <a href="/details"><button type="button" class="btn btn-sm">Add</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="https://source.unsplash.com/300x200?sofa" style="border-radius: 5%;" class="card-img-top">
            <div class="card-body" style="margin-bottom: -15%;">
              <h5 class="card-title">Mirror</h5>
              <p class="card-text" style="margin-top: -5%;">Rp 4.999.000</p>
              <div class="d-flex justify-content-between align-items-center" style="margin-top: -20%">
                <div class="btn-group mx-auto">
                  <a href="/details" style="padding-right: 5px;"><button type="button" class="btn btn-sm">View</button></a>
                  <a href="/details"><button type="button" class="btn btn-sm">Add</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
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