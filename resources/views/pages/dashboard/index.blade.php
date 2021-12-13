@extends('layouts.backend')


@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{  $title  }}</h1>
    </div>
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="row content-d">
            <div class="col-xxl-6 col-md-6">
              <div class="card card-d-img">
                  <img src="https://source.unsplash.com/600x406?computer"  class="img-fluid rounded-start"  alt="...">
              </div>
            </div>
            <div class="col-xxl-6 col-md-6">
              <div class="card furniture-card card-d">
                <div class="row g-0">
                  <div class="col-md-12">
                    <div class="card-body mx-2">
                      <h2 class="card-title-welcome mt-1">Welcome back! {{ auth()->user()->name }}</h2>
                      <p class="card-text">
                        <?php
                          $data = "https://zenquotes.io/api/random";
                          $quotes = file_get_contents($data);
                          $quotes = json_decode($quotes, TRUE);
                        ?>
                          {{ $quotes[0]['q'] }} ~ {{ $quotes[0]['a'] }}
                        </p> 
                    </div>
                  </div>
                </div>
              </div>
            @if(auth()->user()->is_admin == false)
            <!-- Furniture -->
              <div class="card info-card furniture-card card-d">
                <div class="card-body mx-2">
                  <h5 class="card-title">My Furniture <span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-box-seam"></i>
                    </div>
                    <div class="ps-3 pt-1">
                      <h2><span data-purecounter-start="0" data-purecounter-end="{{ $product }}" data-purecounter-duration="0.6" class="purecounter"></span> </h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @elseif(auth()->user()->is_admin == true)
            <!-- Furniture -->
              <div class="card info-card product-card card-d">
                <div class="card-body mx-2">
                  <h5 class="card-title">My Furniture <span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-box-seam"></i>
                    </div>
                    <div class="ps-3 pt-1">
                      <h2><span data-purecounter-start="0" data-purecounter-end="{{ $product }}" data-purecounter-duration="0.6" class="purecounter"></span> </h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Category -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card category-card card-d">
                <div class="card-body mx-2">
                  <h5 class="card-title">All Furniture</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-card-list"></i>
                    </div>
                    <div class="ps-3 pt-1">
                      <h2><span data-purecounter-start="0" data-purecounter-end="{{ $products }}" data-purecounter-duration="0.6" class="purecounter"></span> </h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Category -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card category-card card-d">
                <div class="card-body mx-2">
                  <h5 class="card-title">Categories</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-grid"></i>
                    </div>
                    <div class="ps-3 pt-1">
                      <h2><span data-purecounter-start="0" data-purecounter-end="{{ $categories }}" data-purecounter-duration="0.6" class="purecounter"></span> </h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- User -->
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card user-card card-d">
                <div class="card-body mx-2">
                  <h5 class="card-title">Users</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3 pt-1">
                      <h2><span data-purecounter-start="0" data-purecounter-end="{{ auth()->user()->count() }}" data-purecounter-duration="0.6" class="purecounter"></span> </h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
    </section> 
@endsection