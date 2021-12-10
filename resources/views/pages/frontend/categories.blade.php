@extends('layouts/frontend')
@section('container')

<div class="content-2-2 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
  <div class="text-center title-text">
    <h1 class="text-title story" id="categories">BROWSE THE ROOM -</h1>
    <p class="primary-header">
      That we designed just for you!
    </p>
  </div>
</div>
<div class="container">
  <div class="row mb-5" style="margin-top: 70px;">
      <div class="col-sm-6">
        <a>
          <div class="card text-white" style="color: #00b4b4; margin-bottom: 5px; border-radius: 0.75em;">
            <img src="https://source.unsplash.com/500x500?livingRoom" class="card-img" alt="" style="height: 300px; opacity: 60%; border-radius: 0.75em;">
            <div class="card-img-overlay d-flex align-items-center p-0">
              <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(43, 248, 255, 0.555)">Living Room</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-6">
        <a>
          <div class="card text-white" style="color: #00b4b4; margin-bottom: 5px; border-radius: 0.75em;">
            <img src="https://source.unsplash.com/500x500?kitchen" class="card-img" alt="" style="height: 300px; opacity: 60%; border-radius: 0.75em;">
            <div class="card-img-overlay d-flex align-items-center p-0">
              <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(43, 248, 255, 0.555)">Kitchen</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-4">
        <a>
          <div class="card text-white" style="margin-top: 10px; margin-left: 0; padding: 0; border-radius: 0.75em;">
            <img src="https://source.unsplash.com/500x500?bathroom" class="card-img" alt="" style="height: 300px; opacity: 60%; border-radius: 0.75em;">
            <div class="card-img-overlay d-flex align-items-center p-0">
              <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(43, 248, 255, 0.555)">Bathroom</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-4">
        <a>
          <div class="card text-white" style="margin-top: 10px; margin-left: 0; padding: 0; border-radius: 0.75em;">
            <img src="https://source.unsplash.com/500x500?bedroom" class="card-img" alt="" style="height: 300px; opacity: 60%; border-radius: 0.75em;">
            <div class="card-img-overlay d-flex align-items-center p-0">
              <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(43, 248, 255, 0.555)">Bedroom</h5>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-4">
        <a>
          <div class="card text-white" style="margin-top: 10px; margin-left: 0; padding: 0; border-radius: 0.75em;">
            <img src="https://source.unsplash.com/500x500?family" class="card-img" alt="" style="height: 300px; opacity: 60%; border-radius: 0.75em;">
            <div class="card-img-overlay d-flex align-items-center p-0">
              <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(43, 248, 255, 0.555)">Family Room</h5>
            </div>
          </div>
        </a>
      </div>
  </div>
</div>

@endsection