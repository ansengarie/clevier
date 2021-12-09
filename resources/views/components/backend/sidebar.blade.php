<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-house"></i><span>My Furniture</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/dashboard/products">
              <i class="bi bi-box-seam"></i><span>All Products</span>
            </a>
          </li>
          <li>
            <a href="/products/create">
              <i class="bi bi-plus-square"></i><span>Create Products</span>
            </a>
          </li>
        </ul>
      </li>

       @can('admin')
      <li class="nav-heading">ADMINISTRATOR</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-box-seam"></i>
          <span>All Furniture</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-grid"></i>
          <span>Categories</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-people"></i>
          <span>Users</span>
        </a>
      </li>
      @endcan

      <li class="nav-item mt-5">
        @auth
          <form action="/logout" method="post">
            @csrf
            <button type="submit" style="background-color: #ee2105;" class="btn text-white">
              <i class="bi bi-box-arrow-right px-1"></i>
              <span class="mt-2 mb-2" style="margin-right:150px;">Logout</span>
            </button>
          </form>
        @endauth
      </li>
    </ul>
  </aside>