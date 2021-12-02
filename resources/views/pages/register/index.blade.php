@extends('layouts.frontend')

@section('container')
    <div class="content-3-5 d-flex flex-column align-items-center h-100 flex-lg-row"  
      style="font-family: 'Poppins', sans-serif">
      <div class="position-relative d-none d-lg-block h-100 width-left" >
        <img class="position-absolute img-fluid centered"
          src="/img/registrasi.png"
          alt="" />
      </div>
      
      <div class="d-flex mx-auto align-items-left justify-content-left width-right mx-lg-0">
        <div class="right mx-lg-0 mx-auto">
          <div class="align-items-center justify-content-center d-lg-none d-flex">
            <img class="img-fluid"
              src="/img/registrasi.png" 
              alt="" />
          </div>
          <!--Form-->
          <h3 class="title-text" id="scroll-register">Registration Form</h3>
          <main class="form-signin">

          <form style="margin-top: 1.5rem" action="" class="/register" method="post">
            @csrf
            <div style="margin-bottom: 1.75rem">
              <label for="name" class="d-block input-label-registration">Name</label>
              <div class="w-100 div-input">
                <input  type="text" name="name" class="input-field border-0 @error('name') is-invalid @enderror" id="name" placeholder="Your name" required value="{{ old('name') }}" />
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
              </div>
            </div>

            <div style="margin-bottom: 1.75rem">
              <label for="username" class="d-block input-label-registration">Username</label>
              <div class="w-100 div-input">
                <input type="text" name="username" class="input-field border-0 @error('name') is-invalid @enderror" id="username" placeholder="Enter your username" required value="{{ old('username') }}" />
                  @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
              </div>
            </div>

            <div style="margin-bottom: 1.75rem">
              <label for="email" class="d-block input-label-registration">Email</label>
              <div class="w-100 div-input">
                <input type="email" name="email" class="input-field border-0  @error('email') is-invalid @enderror" id="email" placeholder="Your Email" required value="{{ old('email') }}" />
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
              </div>
            </div>

            <div style="margin-bottom: 1.75rem">
              <label for="password" class="d-block input-label-registration">Password</label>
              <div class="d-flex w-100 div-input">
                <input type="password" name="password" class="input-field border-0  @error('password') is-invalid @enderror" id="password" placeholder="Your Password" required/>
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                  <div onclick="togglePassword()">
                  <svg style="margin-left: 0.75rem; cursor: pointer" width="20" height="14" viewBox="0 0 20 14"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="icon-toggle" fill-rule="evenodd" clip-rule="evenodd"
                      d="M0 7C0.555556 4.66667 3.33333 0 10 0C16.6667 0 19.4444 4.66667 20 7C19.4444 9.52778 16.6667 14 10 14C3.31853 14 0.555556 9.13889 0 7ZM10 5C8.89543 5 8 5.89543 8 7C8 8.10457 8.89543 9 10 9C11.1046 9 12 8.10457 12 7C12 6.90536 11.9934 6.81226 11.9807 6.72113C12.2792 6.89828 12.6277 7 13 7C13.3608 7 13.6993 6.90447 13.9915 6.73732C13.9971 6.82415 14 6.91174 14 7C14 9.20914 12.2091 11 10 11C7.79086 11 6 9.20914 6 7C6 4.79086 7.79086 3 10 3C10.6389 3 11.2428 3.14979 11.7786 3.41618C11.305 3.78193 11 4.35535 11 5C11 5.09464 11.0066 5.18773 11.0193 5.27887C10.7208 5.10171 10.3723 5 10 5Z"
                      fill="#CACBCE" />
                  </svg>
                </div>
              </div>
            </div>
            <button class="btn btn-fill text-white d-block w-100" type="submit">
              Register 
            </button>
          </form>
          <p class="text-center bottom-caption">
            Already registered yet?
            <a href="/login#scroll-login" class="green-bottom-caption">Login Here</a>
          </p>
        </div>
      </div>
    </div>
    </section>

    <!-- Password toggle -->
    <script>
      function togglePassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
          document
            .getElementById("icon-toggle")
            .setAttribute("fill", "#2ec49c");
        } else {
          x.type = "password";
          document
            .getElementById("icon-toggle")
            .setAttribute("fill", "#CACBCE");
        }
      }
    </script>

    


@endsection