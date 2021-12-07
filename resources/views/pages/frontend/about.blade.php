@extends('layouts/frontend')
@section('container')

    <div class="container-xxl mx-auto p-0  position-relative header-2-2">
      <!-- Header -->
      <div>
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div class="right-column text-center d-flex justify-content-center pe-0" sty>
            <img id="img-fluid" class="h-auto mw-100 shadow" style="border-radius: 6%;" src="https://source.unsplash.com/300x350?interior" alt="" />
          </div>

          <!-- Right Column -->
          <div class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center pt-5">
            <h1 class="story-aboutus text-center">About Us</h1>
            <p class="text-caption-about">Innerior is a website that can make it <br> easier to find the best recommendations furniture for for you</p>
            <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
              <a class="btn d-inline-flex mb-md-0 btn-try text-white" href="/products">
                See Furniture
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

      <!--- Features -->
      <div class="content-2-2 container-xxl mx-auto p-0  position-relative">
      <div class="text-center title-text">
        <h1 class="story-aboutus">3 Keys Benefit</h1>
        <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
          You can easily find your best furniture with this website
        </p>
      </div>
      <div class="grid-padding text-center">
        <div class="row">
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-5.png"
                alt="" />
            </div>
            <h3 class="icon-title">Easy to Find</h3>
            <p class="icon-caption">
              This can easily help you to<br />
              find the best furniture recommendations
            </p>
          </div>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-6.png"
                alt="" />
            </div>
            <h3 class="icon-title">Real-Time Access</h3>
            <p class="icon-caption">
              With real-time access, you<br />
              can see all furniture on this website in real time
            </p>
          </div>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-7.png"
                alt="" />
            </div>
            <h3 class="icon-title">Free Join</h3>
            <p class="icon-caption">
              With real-time analytics, we<br />
              will guarantee your data
            </p>
          </div>
        </div>
      </div>

      <div class="card-block">
        <div class="card">
          <div class="d-flex flex-lg-row flex-column align-items-center">
            <div class="me-lg-3">
              <img
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-1%20(1).png"
                alt="" />
            </div>
            <div class="flex-grow-1 text-lg-start text-center card-text">
              <h3 class="card-title">
                Let's register and join with us!
              </h3>
              <p class="card-caption">
                You can participate in the development of this website  by making  <br class="d-none d-lg-block" />
                interesting furniture posts that you recommend
              </p>
            </div>
            <div class="card-btn-space">
              <a href="/register#scroll-register" class="btn btn-card text-white">Register</a>
              <a href="/login#scroll-login" class="btn btn-outline btn-login">Login</a>
            </div>
          </div>
        </div>
      </div>

      <!--- Team --->
      <div class="text-center title-text">
        <h1 class="story-aboutus">Our Team</h1>
      </div>
      <div class="row">
        <div class="col-lg-3 d-flex flex-column align-items-center text-center">
          <img class="bd-placeholder-img rounded-circle mb-2" width="170" src="/img/team/aji.png">
          <h4>Aji Nuansa Sengarie</h4>
          <h5 style="color:#00b4b4;">Leader</h5>
          <div class="social-links mb-5" style="font-size: 25px">
            <a href="https://github.com/ansengarie" class="github social-icon"><i class="bi bi-github"></i></a>
            <a href="https://www.instagram.com/ajins_/" class="instagram social-icon"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-3 d-flex flex-column align-items-center text-center">
          <img class="bd-placeholder-img rounded-circle mb-2" width="170" src="/img/team/fauzan.png">
          <h4>Fauzan Nursalma</h4>
          <h5 style="color:#00b4b4;">Frontend</h5>
          <div class="social-links mb-5" style="font-size: 25px">
            <a href="https://github.com/fauzannursalma" class="github social-icon"><i class="bi bi-github"></i></a>
            <a href="https://www.instagram.com/fauzannursalma/" class="instagram social-icon"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-3 d-flex flex-column align-items-center text-center">
          <img class="bd-placeholder-img rounded-circle mb-2" width="170" src="/img/team/rio.png">
          <h4>Rio Alifian Santoso</h4>
          <h5 style="color:#00b4b4;">Backend</h5>
          <div class="social-links mb-5" style="font-size: 25px">
            <a href="https://github.com/rioalifian12" class="github social-icon"><i class="bi bi-github"></i></a>
            <a href="https://www.instagram.com/rioalifian12/" class="instagram social-icon"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-3 d-flex flex-column align-items-center text-center">
          <img class="bd-placeholder-img rounded-circle mb-2" width="170" src="/img/team/salsa.png">
          <h4>Salsabila Nada Adzani</h4>
          <h5 style="color:#00b4b4;">Frontend</h5>
          <div class="social-links mb-5" style="font-size: 25px">
            <a href="https://github.com/salsabilanada16" class="github social-icon"><i class="bi bi-github"></i></a>
            <a href="https://www.instagram.com/salsnadaa/" class="instagram social-icon"><i class="bi bi-instagram"></i></a>
          </div>
        </div>  
      </div>  
      
      <!-- Contact Us-->
      <div class="row mt-5">
          <div class="col-md-1">
          </div>
          <div class="col-md-6">
            <h1 class="story-aboutus d-flex">Contact Us</h1>
              <form action="https://formsubmit.co/ansengarie@gmail.com" method="POST">
                <input type="hidden" name="_captcha" value="false" />
                <input type="hidden" name="_subject" value="New email has coming!" />
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" id="name" aria-describedby="name" required autocomplete="off" />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="example@mail.com" required autocomplete="off" />
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Message</label>
                  <textarea class="form-control" name="textarea" type id="pesan" rows="3" placeholder="Write your message here.." required></textarea>
                </div>
                <button onclick=success() type="submit" class="btn btn-contact" id="btnContact">Send</button>
              </form>
            </div>

            <div class="col-md-5 mt-2">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1978.5855106018976!2d24.876030815692566!3d60.27031284226152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468df7a32a7badb1%3A0xaab224ac557aae0b!2sTesla%20Store%20Helsinki-Vantaa!5e0!3m2!1sen!2sid!4v1576821767135!5m2!1sen!2sid" width="430" height="430"frameborder="0" style="border:0; border-radius:10px;" allowfullscreen=""></iframe>
            </div>
          </div>
      </div>

      <!-- Supported By -->
      <div class="bg text-secondary px-4 py-2 text-center" style="margin-top: 30px;">
        <div class="py-1">
          <h1 class="mt-5 mb-5" style="font: 600 1.525rem/1.625 Poppins, sans-serif;
          margin-bottom: 2rem; color: #00b4b4;">Supported By</h1>
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