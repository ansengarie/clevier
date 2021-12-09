@extends('layouts.backend')


@section('container')

    <div class="pagetitle mb-4" id="scroll">
      <h1>{{  $title  }}</h1>
    </div>
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="row content-d">
            <!-- Furniture -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card furniture-card card-d">
                <div class="card-body mx-2">
                  <h5 class="card-title">Furniture <span></span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-house"></i>
                    </div>
                    <div class="ps-3 pt-1">
                      <h2><span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="0.6" class="purecounter"></span> </h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Category -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card category-card card-d">
                <div class="card-body mx-2">
                  <h5 class="card-title">Category</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-grid"></i>
                    </div>
                    <div class="ps-3 pt-1">
                      <h2><span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="0.6" class="purecounter"></span> </h2>
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
          </div>
        </div>
      </div>
    </section> 
@endsection