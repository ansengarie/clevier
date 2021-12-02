@extends('layouts/frontend')
@section('container')
<div class="container-xxl mx-auto p-0  position-relative header-2-2" style="font-family: 'Poppins', sans-serif">

        <!-- Header -->
        <div>
          <div class="mx-auto d-flex flex-lg-row flex-column hero">
            <!-- Left Column -->
            <div class="right-column text-center d-flex justify-content-center pe-0" sty>
              <img id="img-fluid" class="h-auto mw-100 shadow" style="border-radius: 6%;" src="https://source.unsplash.com/300x350?interior" alt="" />
            </div>

            
            
            <!-- Right Column -->
            <div class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center pt-5">
              <h1 class="story-aboutus text-center">ABOUT US-</h1>
              <p class="text-caption-about">Interior is a website that can make it <br> easier to find the best recommendations furniture for for you</p>
              <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
                <a class="btn d-inline-flex mb-md-0 btn-try text-white" href="/products">
                  See Furniture
                </a>
              </div>
            </div>
            
          </div>
        </div>
      </div>


<!-- Supported By -->
      <div class="bg text-secondary px-4 py-2 text-center" style="margin-top: 30px;">
        <div class="py-1">
          <h1 class="display-5 fw-bold mt-5 mb-5" style="color: #00b4b4; font-size: 30px;">Supported By</h1>
            <div class="row" style="margin: 0px; padding: 0px;">
              <div class="col"><img src="/img/bootstrap.png" alt="" style="width: 50px; "></div>
              <div class="col"><img src="/img/laravel.png" alt="" style="width: 50px; "></div>
              <div class="col"><img src="/img/pinterest.png" alt="" style="width: 100px; "></div>
              <div class="col"><img src="/img/google.png" alt="" style="width: 80px; "></div>
              <div class="col"><img src="/img/github.png" alt="" style="width: 50px; "></div>
              <div class="col"><img src="/img/spotify.png" alt="" style="width: 75px; "></div>
            </div>
        </div>
      </div>
@endsection