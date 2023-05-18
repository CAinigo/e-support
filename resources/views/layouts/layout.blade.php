<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>e-Support</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('css/admin/adminDashboard.css') }}">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
</head>
<body>
  <div class="main-container">
    <div class="sidebar">
      <h2 class="text-center text-white mt-3 mb-4">e-Support</h2>
      <hr class="mx-auto text-white border-2 horizontal-line">
      <ul class="navbar-nav">
        <li class="nav-item text-white row align-items-center my-2">
          <img class="d-icon col-4" src="{{ asset('images/icons/dashboard-icon.svg') }}" alt="logo">
          <a href="#" class="nav-link col-8">Dashboard</a>
        </li>
        <li class="nav-item text-white row align-items-center my-2">
          <img class="p-icon col-4" src="{{ asset('images/icons/profile-icon.svg') }}" alt="logo">
          <a href="#" class="nav-link col-8">Profile</a>
        </li>
        <li class="nav-item text-white row align-items-center my-2">
          <img class="u-icon col-4" src="{{ asset('images/icons/users-management-icon.svg') }}" alt="logo">
          <a href="#" class="nav-link col-8">User Management</a>
        </li>
        <li class="nav-item text-white row align-items-center my-2">
          <img class="m-icon col-4" src="{{ asset('images/icons/message-icon.svg') }}" alt="logo">
          <a href="#" class="nav-link col-8">Message</a>
        </li>
      </ul>
    </div>
    <div class="right-content">
      <nav class="navbar navbar-dark navbar-expand-lg nav-bg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <main>
        @yield('content')
      </main>
    </div>
  </div>


</body>
</html>