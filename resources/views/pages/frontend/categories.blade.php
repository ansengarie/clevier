@extends('layouts/frontend')
@section('container')

<div class="content-2-2 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif; margin-top: -60px;">
  <div class="text-center title-text">
    <h1 class="text-title story" id="categories">BROWSE THE ROOM -</h1>
    <p class="primary-header">
      That we designed just for you!
    </p>
  </div>
</div>
<div class="container">
  <div class="row mb-5" style="margin-top: 70px;">
    {{-- Foreach --}}
    @foreach ($categories as $category)
      <div class="col-sm-6">
        <a href="/products?category={{ $category->slug }}">
          <div class="card text-white" style="color: #00b4b4; margin-bottom: 5px; border-radius: 0.75em;">
            <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="" style="height: 300px; opacity: 60%; border-radius: 0.75em;">
            <div class="card-img-overlay d-flex align-items-center p-0">
              <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(16, 199, 206, 0.76)">
                {{ $category->name }}
              </h5>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>

@endsection