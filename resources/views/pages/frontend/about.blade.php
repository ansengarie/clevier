@extends('layouts/frontend')
@section('container')
    <div class="container-xxl mx-auto p-0  position-relative header-2-2">
        <!-- Header -->
        <div>
          <div class="mx-auto d-flex flex-lg-row flex-column hero">
            <!-- Left Column -->
            <div class="right-column text-center d-flex justify-content-center pe-0">
              <img id="img-fluid" class="h-auto mw-100 shadow" style="border-radius: 6%;" src="https://source.unsplash.com/300x350?interior" alt="" />
            </div>

            <!-- Right Column -->
            <div class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center pt-5">
              <h4 class="fw-bold mb-2" style="color: #00b4b4; font-size:25px;">ABOUT US -</h4>
              <p class="text-caption-about"><span style="color:#00b4b4;">Innerior</span> is a website that can make it <br> easier to find the best recommendations furniture for you</p>
              <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
                <a class="btn d-inline-flex mb-md-0 btn-try text-white" href="/products">
                  See Furniture
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--- Benefits -->
      <div class="content-2-2 container-xxl mx-auto p-0  position-relative">
        <div class="text-center title-text">
          <h4 class="fw-bold mb-2" style="color: #00b4b4; font-size:25px;">3 KEY BENEFITS</h4>
          <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
            You can easily find your best furniture with this website
          </p>
        </div>
        <div class="grid-padding text-center">
          <div class="row">
            <div class="col-lg-4 column">
              <div class="icon">
                <img src="/img/about/find.png" width="100px"/>
              </div>
              <h3 class="icon-title">Easy to Find</h3>
              <p class="icon-caption">
                This can easily help you to
                find the best furniture recommendations
              </p>
            </div>
            <div class="col-lg-4 column">
              <div class="icon">
                <img src="/img/about/verified.png" width="100px"/>
              </div>
              <h3 class="icon-title">Best Quality</h3>
              <p class="icon-caption">
                Recommend the best quality and comfortable furniture
              </p>
            </div>
            <div class="col-lg-4 column">
              <div class="icon">
                <img src="/img/about/join.png" width="100px"/>
              </div>
              <h3 class="icon-title">Free Join with Us</h3>
              <p class="icon-caption">
                You can participate in the development of this website by your furniture posts
              </p>
            </div>
          </div>
        </div>

        <div class="card-block">
          <div class="card">
            <div class="d-flex flex-lg-row flex-column align-items-center">
              <div class="me-lg-3">
                <img src="/img/about/daftar.png" width="150px" />
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
      </div>

      <!--- Our Team --->
      <div class="content-2-2 container-xxl mx-auto p-0  position-relative" id="ourteam">
        <div class="text-center title-text">
          <h4 class="fw-bold mb-2" style="color: #00b4b4; font-size:27px;">OUR TEAM</h4>
        </div>
        <div class="row mb-5">
          <div class="col-lg-3 d-flex flex-column align-items-center text-center">
            <img class="bd-placeholder-img rounded-circle mb-3" width="160" src="/img/team/aji.png">
            <h5>Aji Nuansa Sengarie</h5>
            <h5 style="color:#00b4b4;">Leader</h5>
            <div class="social-links mb-5" style="font-size: 25px">
              <a href="https://www.instagram.com/ajins_/" target="_blank" class="instagram social-icon"><i class="bi bi-instagram"></i></a>
              <a href="https://github.com/ansengarie" target="_blank" class="github social-icon"><i class="bi bi-github"></i></a>
            </div>
          </div>
          <div class="col-lg-3 d-flex flex-column align-items-center text-center">
            <img class="bd-placeholder-img rounded-circle mb-3" width="160" src="/img/team/fauzan.png">
            <h5>Fauzan Nursalma</h5>
            <h5 style="color:#00b4b4;">Frontend</h5>
            <div class="social-links mb-5" style="font-size: 25px">
              <a href="https://www.instagram.com/fauzannursalma/" target="_blank" class="instagram social-icon"><i class="bi bi-instagram"></i></a>
              <a href="https://github.com/fauzannursalma" target="_blank" class="github social-icon"><i class="bi bi-github"></i></a>
            </div>
          </div>
          <div class="col-lg-3 d-flex flex-column align-items-center text-center">
            <img class="bd-placeholder-img rounded-circle mb-3" target="_blank" width="160" src="/img/team/salsa.png">
            <h5>Salsabila Nada</h5>
            <h5 style="color:#00b4b4;">Frontend</h5>
            <div class="social-links mb-5" style="font-size: 25px">
              <a href="https://www.instagram.com/salsnadaa/" target="_blank" class="instagram social-icon"><i class="bi bi-instagram"></i></a>
              <a href="https://github.com/salsabilanada16" target="_blank" class="github social-icon"><i class="bi bi-github"></i></a>
            </div>
          </div>
          <div class="col-lg-3 d-flex flex-column align-items-center text-center">
            <img class="bd-placeholder-img rounded-circle mb-3" width="160" src="/img/team/rio.png">
            <h5>Rio Alifian Santoso</h5>
            <h5 style="color:#00b4b4;">Backend</h5>
            <div class="social-links mb-5" style="font-size: 25px">
              <a href="https://www.instagram.com/rioalifian12/" target="_blank" class="instagram social-icon"><i class="bi bi-instagram"></i></a>
              <a href="https://github.com/rioalifian12" target="_blank" class="github social-icon"><i class="bi bi-github"></i></a>
            </div>
          </div>
        </div>
      </div>
          
      <!-- Contact Us-->
      <div class="content-2-2 container-xxl mx-auto p-0  position-relative" id="contact-us">
        <div class="row mt-5 py-3">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <h4 class="fw-bold mb-4" style="color: #00b4b4; font-size:25px;" id="contactus">CONTACT US-</h4>
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

            <div class="col-md-6 mt-2">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2015785998983!2d107.59059581533354!3d-6.866431369090791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6be3e8a0c49%3A0x730028bf4627def4!2sUniversitas%20Pasundan!5e0!3m2!1sid!2sid!4v1638906234439!5m2!1sid!2sid"width="520" height="430"frameborder="0" style="border:0; border-radius:10px;" allowfullscreen=""></iframe>
            </div>
        </div>
      </div>
@endsection