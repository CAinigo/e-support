<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>e-Support</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,1,0" />

  <link rel="stylesheet" href="{{ asset('css/admin/adminLayout.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/adminDashboard.css') }}">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

  <script defer src="{{ asset('js/navigate.js') }}"></script>
  <script defer src="{{ asset('js/sidebar.js') }}"></script>
  
</head>
<body>
  <div class="main-container">
    <div id="side-bar" class="sidebar">
      <h2 class="text-center text-white mt-3 mb-4">e-Support<span id="sb-close" class="sidebar-close">&times;</span></h2>
      <hr class="mx-auto text-white border-2 horizontal-line">
      <ul id="sidebar-list" class="navbar-nav">
        <li class="nav-item text-white sidebar-list">
          <a href="#" data-target="{{ route('dashboard') }}" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list navigate-active ajax-navigate">
            <div class="container-fluid row p-0 ps-2 m-0">
              <span class="material-symbols-outlined col-3 text-center">dashboard</span>
              <p class="col-9 m-0 ps-0">Dashboard</p>
            </div>
          </a>
        </li>
        <li class="nav-item text-white sidebar-list">
          <a id="p-submenu-toggle" class="nav-link p-0 d-flex align-items-center sidebar-navigate">
            <div class="container-fluid row p-0 ps-2 m-0">
              <span class="material-symbols-outlined col-3 text-center">badge</span>
              <p class="col-7 m-0 ps-0">Profiles</p>
              <span id="p-submenu-arrow" class="material-symbols-outlined col-2 arrow1">chevron_left</span>
            </div>
          </a>
          <ul id="p-sub-menu" class="navbar-nav text-white p-submenu">
            <li class="nav-item">
              <a href="#" data-target="{{ route('officials') }}" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
                <div class="container-fluid row p-0 ps-2 m-0">
                  <p class="col-12 m-0 ms-3 ps-5">Barangay Officials</p>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" data-target="{{ route('residents') }}" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
                <div class="container-fluid row p-0 ps-2 m-0">
                  <p class="col-12 m-0 ms-3 ps-5">Residents</p>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" data-target="{{ route('establishments') }}" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
                <div class="container-fluid row p-0 ps-2 m-0">
                  <p class="col-12 m-0 ms-3 ps-5">Business Establishments</p>
                </div>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item text-white sidebar-list">
          <a id="u-submenu-toggle" class="nav-link p-0 d-flex align-items-center sidebar-navigate">
            <div class="container-fluid row p-0 ps-2 m-0">
              <span class="material-symbols-outlined col-3 text-center">groups</span>
              <p class="col-7 m-0 ps-0">Users Management</p>
              <span id="u-submenu-arrow" class="material-symbols-outlined col-2 arrow2">chevron_left</span>
            </div>
          </a>
          <ul id="u-sub-menu" class="navbar-nav text-white u-submenu">
            <li class="nav-item">
              <a href="#" data-target="{{ route('users') }}" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
                <div class="container-fluid row p-0 ps-2 m-0">
                  <p class="col-12 m-0 ms-3 ps-5">Users</p>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" data-target="{{ route('approval') }}" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
                <div class="container-fluid row p-0 ps-2 m-0">
                  <p class="col-12 m-0 ms-3 ps-5">User Approval</p>
                </div>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item text-white sidebar-list">
          <a href="#" data-target="{{ route('message') }}" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
            <div class="container-fluid row p-0 ps-2 m-0">
              <span class="material-symbols-outlined col-3 text-center">chat</span>
              <p class="col-9 m-0 ps-0">Message</p>
            </div>
          </a>
        </li>
        <li class="nav-item text-white sidebar-list">
          <a href="#" data-target="{{ route('accounts') }}" class="nav-link p-0 d-flex align-items-center sidebar-navigate nav-list ajax-navigate">
            <div class="container-fluid row p-0 ps-2 m-0">
              <span class="material-symbols-outlined col-3 text-center">manage_accounts</span>
              <p class="col-9 m-0 ps-0">Accounts</p>
            </div>
          </a>
        </li>
      </ul>
    </div>
    <div id="b-sidebar" class="block-sidebar"></div>
    <div class="right-content">
      <nav class="navbar navbar-dark navbar-expand-lg nav-bg">
        <div class="container-fluid">
          <button id="toggle-sidebar" class="navbar-brand bg-transparent border-0">
            <span class="material-symbols-outlined">menu</span>
          </button>
          <button id="toggle-sidebar2" class="navbar-brand bg-transparent border-0">
            <span class="material-symbols-outlined">menu</span>
          </button>
          <div class="btn-group">
            <button type="button" class="btn btn-dark bg-transparent border-0 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="username">{{ auth()->user()->username }}</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li class="dropdown-item p-0">
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="bg-transparent border-0 w-100 logout-btn">Logout</button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <main>
        <div id="content">
          @include('users.admin.dashboard')
        </div>
      </main>
    </div>
  </div>
</body>
</html>