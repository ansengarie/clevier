<section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <div class="container-xxl mx-auto p-0  position-relative header-2-2" style="font-family: 'Poppins', sans-serif">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a href="/">
          <img style="margin-right: 0.75rem" src="img/logo/innerior-logo.png" alt=""  width="150"/>
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
              <a class="nav-link {{ ($active == "posts") ? 'active' : '' }}" href="/posts">Product</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active == "categories") ? 'active' : '' }}" href="/categories">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active == "about") ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link {{ ($active == "chart") ? 'active' : '' }}" href="/cart"><i class="bi bi-cart2"></i></a>
            </li>
          </ul>
          <div class="gap-3">
            <ul class="navbar-nav ms-auto">
            @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"> </i> {{ auth()->user()->name }}
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                      </form>
                    </li>
                  </ul>
                </li>
              @else
              <li class="nav-item">
                <a href="/login" class="nav-link btn btn-fill text-white {{ ($active == "login") ? 'active' : '' }}"> Login</a>
                {{-- <button class="btn btn-default btn-no-fill">Log In</button> --}}
              </li>
            @endauth
            </ul>
          </div>
        </div>
      </nav>

      <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
          aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-white border-0">
              <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                <a class="modal-title" id="targetModalLabel">
                  <div class="justify-content-center d-flex">
                    <img style="margin-left: auto; margin-right:auto;" src="img/logo/innerior-logo.png" alt=""  width="120"/>
                  </div>
                </a>
                <ul class="navbar-nav responsive me-auto mt-0 mt-lg-0">
                  <li class="nav-item">
                    <a class="nav-link {{ ($active == "home") ? 'active' : '' }}" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ ($active == "posts") ? 'active' : '' }}" href="/">Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ ($active == "about") ? 'active' : '' }}" href="/about">about</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ ($active == "chart") ? 'active' : '' }}" href="/cart">Cart</a>
                  </li>
                  <li class="nav-item pt-2">
                  @auth
                     {{ auth()->user()->name }} 
                  <li class="nav-item">
                    <a class="nav-link" href="/dashboard">My Dashboard</a>
                  </li>
                  <li class="nav-item ms-auto pb-3">
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" style="margin-left:auto; margin-right:auto;" class="btn btn-fill-logout text-white mb-3"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                  </li>
                  @else
                  <li class="nav-item">
                      <a href="/login" class="nav-link btn btn-fill text-white ms-auto mb-3 {{ ($active == "login") ? 'active' : '' }}"> Login</a>
                      {{-- <button class="btn btn-default btn-no-fill">Log In</button> --}}
                  </li>
                  @endauth
                </ul>
              </div>
            </div>
          </div>
        </div>
</section>

      



{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="/">WPU Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active == "home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active == "about") ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active == "posts") ? 'active' : '' }}" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active == "categories") ? 'active' : '' }}" href="/categories">Categories</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
      @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle"> </i> {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
        @else
        <li class="nav-item">
          <a href="/login" class="nav-link {{ ($active == "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
      </ul>
      @endauth
      
    </div>
  </div>
</nav> --}}