@extends('layouts/frontend')
@section('container')
    

    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
      <div class="container-xxl mx-auto p-0  position-relative header-2-2" style="font-family: 'Poppins', sans-serif">

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
                <a class="btn d-inline-flex mb-md-0 btn-try text-white" href="#browse-the-room">
                  Explore Now
                </a>
                <button class="btn btn-outline">
                  <div class="d-flex align-items-center">
                    <svg class="me-2" width="13" height="12" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.9293 7.99988L6.66668 5.15788V10.8419L10.9293 7.99988ZM12.9173 8.27722L5.85134 12.9879C5.80115 13.0213 5.74283 13.0404 5.6826 13.0433C5.62238 13.0462 5.5625 13.0327 5.50934 13.0042C5.45619 12.9758 5.41175 12.9334 5.38075 12.8817C5.34976 12.83 5.33337 12.7708 5.33334 12.7105V3.28922C5.33337 3.22892 5.34976 3.16976 5.38075 3.11804C5.41175 3.06633 5.45619 3.02398 5.50934 2.99552C5.5625 2.96706 5.62238 2.95355 5.6826 2.95644C5.74283 2.95932 5.80115 2.97848 5.85134 3.01188L12.9173 7.72255C12.963 7.75299 13.0004 7.79423 13.0263 7.84261C13.0522 7.89099 13.0658 7.94501 13.0658 7.99988C13.0658 8.05475 13.0522 8.10878 13.0263 8.15716C13.0004 8.20553 12.963 8.24678 12.9173 8.27722Z" fill="#555B61" />
                    </svg>
                    Watch the video
                  </div>
                </button>
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

      <!-- Category -->
      <section class="flex py-16 px-4 scrollspy">
        <div class="content-2-2 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
          <div class="text-center title-text" >
            <h1 class="text-title story" id="categories">BROWSE THE ROOM -</h1>
            <p class="primary-header">
              That we designed just for you
            </p>
          </div>
        </div>
      </section>
      <div class="container">
        <div class="row">
          <!-- foreach ($categories as $category) -->
          <div class="col-sm-8">
            <a>
            <div class="card text-white" style="margin-bottom: 5px;">
              <img src="/img/catalog 1.png" class="card-img" alt="" style="height: 250px; opacity: 60%;">
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-2 fs-3" style="background-color: rgba(43, 248, 255, 0.555)">Living Room</h5>
              </div>
            </div>
            </a>
          </div>
          <div class="col-sm-4">
            <a>
            <div class="card text-white" style="color: #00b4b4; margin-bottom: 5px;">
              <img src="/img/catalog 2.jpg" class="card-img" alt="" style="height: 250px; opacity: 60%;">
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-2 fs-3" style="background-color: rgba(43, 248, 255, 0.555)">Kitchen</h5>
              </div>
            </div>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm">
            <a>
            <div class="card text-white" style="margin-top: 5px; margin-left: 0; padding: 0;">
              <img src="/img/catalog 3.jpg" class="card-img" alt="" style="height: 250px; opacity: 60%;">
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-2 fs-3" style="background-color: rgba(43, 248, 255, 0.555)">Bathroom</h5>
              </div>
            </div>
            </a>
          </div>
          <div class="col-sm">
            <a>
            <div class="card text-white" style="margin-top: 5px; margin-left: 0; padding: 0;">
              <img src="/img/catalog 1.png" class="card-img" alt="" style="height: 250px; opacity: 60%;">
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-2 fs-3" style="background-color: rgba(43, 248, 255, 0.555)">BedRoom</h5>
              </div>
            </div>
            </a>
          </div>
          <div class="col-sm">
            <a>
            <div class="card text-white" style="margin-top: 5px; padding: 0px;">
              <img src="/img/catalog 1.png" class="card-img" alt="" style="height: 250px; opacity: 60%;">
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-2 fs-3" style="background-color: rgba(43, 248, 255, 0.555)">Family Room</h5>
              </div>
            </div>
            </a>
          </div>
          <!-- endforeach -->
        </div>
      </div>
      <!-- End Category -->


      <!-- Just Arrived -->
      <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <div class="content-2-2 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
          <div class="text-center title-text">
            <h1 class="text-title story">JUST ARRIVED -</h1>
            <p class="primary-header">
              This summer for you
            </p>
          </div>
    
          <div class="grid text-center">
            <div class="row">
              <div class="col">
                <div class="card">
                  <img src="https://source.unsplash.com/300x200?cupboard" style="border-radius: 5%;" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Cupboard</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="https://source.unsplash.com/300x200?desk" style="border-radius: 5%;" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Desk</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="https://source.unsplash.com/300x200?bed" style="border-radius: 5%;" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Bed</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="https://source.unsplash.com/300x200?table" style="border-radius: 5%;" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Table</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="https://source.unsplash.com/300x200?sofa" style="border-radius: 5%;" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Sofa</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 
      <!-- End Just Arrived -->
          
        
      <!-- Supported By -->
      <div class="bg text-secondary px-4 py-2 text-center" style="margin-top: 30px;">
        <div class="py-1">
          <h1 class="display-5 fw-bold mt-5 mb-5" style="color: #00b4b4; font-size: 30px;">Our Partner</h1>
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
      <!-- End Supported By -->

      <!-- Highlight -->
      <section class="products">
        <section class="porto">
            <div class="row d-flex align-items-center">
                <div class="col-md-12">
                    <h4 class="headline">
                        HIGHLIGHTS -
                    </h4>
                </div>
                
            </div>
            <div class="row">
                <div class="col">
                    <p class="sub-headline">
                        Our platform specialize on helping our clients work process and communication. <br>
                        Below are the products produced using our platform.
                    </p>
                </div>
                <div class="col-md-2 text-md-right">
                  <a href="/products" class="link btn d-inline-flex mb-md-0 btn-try text-white">
                      See More
                  </a>
              </div>
            </div>
            <div class="row porto-img">
                <div class="col-4">
                    <img src="https://source.unsplash.com/400x600?interior" style="border-radius: 5%;"
                        class="img-fluid" />
                </div>
                <div class="col-4 d-flex align-items-end flex-column">
                    <img src="https://source.unsplash.com/400x280?interior" style="border-radius: 5%;"
                        class="img-fluid">
                    <img src="https://source.unsplash.com/400x280?designInterior" style="border-radius: 5%;"
                        class="img-fluid mt-auto" />
                </div>
                <div class="col-4">
                    <img src="https://source.unsplash.com/400x600?interiorDesign" style="border-radius: 5%;"
                        class="img-fluid" />
                </div>
            </div>
        </section>
      </section>
      <!-- End Highlights -->
    </section> 

@endsection