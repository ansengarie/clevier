<section class="h-100 w-100 bg-white" style="box-sizing: border-box">
  <div class="container-xxl mx-auto p-0  position-relative header-2-2" style="font-family: 'Poppins', sans-serif">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a href="/">
        <img style="margin-right: 0.75rem" src="img/logo/innerior-logo.png" alt="" width="150" />
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ms-auto" id="navbarTogglerDemo">
        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($active == "home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == "products") ? 'active' : '' }}" href="/products">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == "categories") ? 'active' : '' }}" href="/categories">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active == "about") ? 'active' : '' }}" href="/about">About</a>
          </li>
        </ul>
        <div class="d-flex">
            <ul class="navbar-nav ms-auto">
                @auth
                <div class="nav-item dropdown pe-3 ms-auto">
                  <a class="nav-link nav-profile d-flex align-items-center pe-0" style="color:black" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle"></i>
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header" style="text-align:center;">
                      <i class="bi bi-person-circle" style="font-size: 3rem;" ></i>
                      <h6>{{ auth()->user()->name }}</h6>
                      <span>User</span> <!--Ini kalo bisa otomatis sesuai rolem, admin atau user -->
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center" href="/dashboard">
                        <i class="bi bi-grid"></i>
                        <span class="px-2"> Dashboard</span>
                      </a>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li>
                      <a class="dropdown-item d-flex align-items-center" href="/">
                        <form action="/logout" method="post">
                          @csrf
                          <button type="submit" style="background-color: #ee2105;" class="btn btn-default text-white">
                            <i class="bi bi-box-arrow-right"></i>
                            <span class="px-2">Logout</span>
                          </button>
                        </form>
                      </a>
                    </li>
                  </ul>
                </div>
                @else
                <li class="nav-item">
                  <a href="/login#scroll" class="nav-link btn-sm btn-fill text-white {{ ($active == "login") ? 'active' : '' }}"> Login</a>
                  {{-- <button class="btn btn-default btn-no-fill">Log In</button> --}}
                </li>
                @endauth
            </ul>
        </div>
      </div>
    </nav>

    <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content bg-white border-0">
          <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
            <a class="modal-title" id="targetModalLabel">
              <div class="justify-content-center d-flex">
                <img style="margin-left: auto; margin-right:auto;" src="img/logo/innerior-logo.png" alt="" width="120" />
              </div>
            </a>
            <ul class="navbar-nav responsive me-auto mt-0 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ ($active == "home") ? 'active' : '' }}" style="color: #008585;" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($active == "products") ? 'active' : '' }}" style="color: #008585;" href="/products">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($active == "categories") ? 'active' : '' }}" style="color: #008585;" href="/categories">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($active == "about") ? 'active' : '' }}" style="color: #008585;" href="/about">About</a>
              </li>
              <li class="nav-item pt-2">
                @auth
                <i class="bi bi-person-circle"> </i>  {{ auth()->user()->name }}
              <li class="nav-item">
                <a class="nav-link" href="/dashboard" style="color: #008585;">My Dashboard</a>
              </li>
              <li class="nav-item ms-auto pb-3">
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" style="margin-left:auto; margin-right:auto; background-color: #ee2105;" class="btn btn-fill text-white mb-3"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
              @else
              <li class="nav-item">
                <a href="/login#scroll" class="nav-link btn btn-fill text-white ms-auto mb-3 {{ ($active == "login") ? 'active' : '' }}"> Login</a>
              </li>
              @endauth
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>