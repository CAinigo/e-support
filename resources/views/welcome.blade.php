<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>e-Support</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="stylesheet" href="{{ asset('css/welcome/welcome.css') }}">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>
<body class="welcome-bg">
  <nav class="navbar navbar-light navbar-expand-lg nav-bg">
      <a class="navbar-brand fs-3 fw-bold text-white ms-3" href="#">e-Support</a>
      <button class="navbar-toggler me-2 border-0 custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ul-bg" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          @guest
            @if (Route::has('login'))
              <li class="nav-item">
                <a class="nav-link text-white mx-3" href="#">Barangay Officials</a>
              </li>
              <li class="nav-item">
                <!-- Button trigger modal -->
                <button id="sign-up" type="button" class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#locationModal">
                  Location
                </button>

                <!-- Modal -->
                <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="locationModalLabel">Location</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3836.141076750114!2d120.57392377412579!3d15.954007442514202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33913efd2b8ba2b1%3A0xac2ed57018278646!2sNancayasan%20Barangay%20Hall!5e0!3m2!1sen!2sph!4v1683989815917!5m2!1sen!2sph" width="465" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                      {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </li>
            @endif
            @else
              <li class="nav-item">
                <a class="nav-link text-white mx-3" href="#">Barangay Officials</a>
              </li>
              <li class="nav-item">
                <!-- Button trigger modal -->
                <button id="sign-up" type="button" class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#locationModal">
                  Location
                </button>

                <!-- Modal -->
                <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="locationModalLabel">Location</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3836.141076750114!2d120.57392377412579!3d15.954007442514202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33913efd2b8ba2b1%3A0xac2ed57018278646!2sNancayasan%20Barangay%20Hall!5e0!3m2!1sen!2sph!4v1683989815917!5m2!1sen!2sph" width="465" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                      {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                @if (auth()->user()->role == 0)
                  <a class="nav-link text-white mx-3" href="{{ route('admin') }}">Dashboard</a>
                @elseif (auth()->user()->role == 1)
                  <a class="nav-link text-white mx-3" href="{{ route('sub-admin') }}">Dashboard</a>
                @elseif (auth()->user()->role == 2)
                  <a class="nav-link text-white mx-3" href="{{ route('bhw') }}">Dashboard</a>
                @elseif (auth()->user()->role == 3)
                  <a class="nav-link text-white mx-3" href="{{ route('resident') }}">Dashboard</a>
                @elseif (auth()->user()->role == 4)
                  <a class="nav-link text-white mx-3" href="{{ route('company') }}">Dashboard</a>
                @else
                  <a class="nav-link text-white mx-3" href="{{ route('for-approval') }}">Dashboard</a>
                @endif
              </li>
          @endguest
        </ul>
      </div>
  </nav>

  <main class="py-5">

    @if ($message = Session::get('success'))
      <div id="logout-flash" class="alert alert-success alert-dismissible fade show position-absolute top-25 start-50 translate-middle z-1" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if ($message = Session::get('registered'))
      <div id="logout-flash" class="alert alert-success alert-dismissible fade show position-absolute top-25 start-50 translate-middle z-1" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="container-fluid my-5">
      @guest
        @if (Route::has('login'))
          <div class="row">
            <div class="col mb-5 d-flex flex-column gap-5 justify-content-center align-items-center">
              <h1 class="display-1 fw-bold text-center text-white">Barangay Nancayasan</h1>
              <a href="#read-more" class="btn btn-warning">Read More</a>
            </div>
            <div class="col mb-5">
              <div class="card bg-white bg-opacity-50 py-4 mx-auto login-card">
                <div class="card-body d-flex flex-column align-items-center">
                  <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1" alt="logo" style="height: 6rem">
                  <h4>e-Support</h4>
                  <form action="{{ route('login') }}" method="POST" class="mt-3">
                    @csrf
  
                    @if ($message = Session::get('error'))
                      <div class="alert alert-danger alert-dismissible fade show d-flex justify-content-center" role="alert">
                        <p class="mb-0">{{ $message }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                    @if ($message = Session::get('for-approval'))
                      <div class="alert alert-warning alert-dismissible fade show d-flex justify-content-center" role="alert">
                        <p class="mb-0">{{ $message }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
  
                    <div class="row mb-3">
                      <label for="username" class="">Username</label>
                      <div class="col-md-12">
                        <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" autofocus>
  
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="row mb-4">
                      <label for="password" class="">Password</label>
                      <div class="col-md-12">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
  
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="row">
                      <div class="d-flex flex-column align-items-center">
                        <button type="submit" class="btn btn-warning rounded-pill w-50 mb-3">Login</button>
                      </div>
                    </div>
                  </form>
                  <div class="d-flex justify-content-around w-75 my-3">
                    <a href="#" class="text-decoration-none text-color">Forgot Password?</a>
                    <a href="{{ route('toRegister') }}" class="text-decoration-none text-color">Create an Account</a>
                  </div>
                </div>
              </div>
            </div>
          @endif
          @else
            <div class="row">
              <div class="col mb-5 d-flex flex-column gap-5 justify-content-center align-items-center">
                <h1 class="display-1 fw-bold text-center text-white">Barangay Nancayasan</h1>
                <a href="#read-more" class="btn btn-warning">Read More</a>
              </div>
            </div>
        @endguest
      </div>
    </div>
    <div class="container-fluid my-5" id="read-more">
      <div class="row">
        <div class="col">
          <div class="card p-4">
            <div class="card-title">
              <h2 class="text-center">History</h2>
            </div>
            <div class="card-body">
              <p class="text-center">
                A big tree with wide spreading branches grew in the 
                central part of the locality that people who had something to do work under its shade. Even herders of horse, carabao, and cows grouped under the tree to play and rest, people  split and planned rough pieces of lumber. At last bamboo shaving piled higher under the tree and left to be blown the wind. It was therefore referred to as NAGCAYASAN which was later change
                to NANCAYASAN. As Pangasinan word equivalent. It was founded In 1890. The first settlers were those of the Cuadro, Jacob, Goroza, Estrella, Andres, Bravo, Umipig, Cabacungan, Gutierrez, Ramos, Malbog, 
                Estrada and Antolin Clans. Ambrosio Catubig was the first Teniente del Barrio. The three divisions of the barrio are Narvacan, Bantog and Casantacruzan, named after the towns where the first inhabitants came from Ilocos Sur.
                <br>
                <br>
                It raises rice, corn, Mango, vegetables and other products like bamboo and coconuts. The people also raises chickens and pigs. Some are engaged in milking rice, carpentry, waving of barac-barac, traveling bag and slippers white some are good auto mechanics.
                <br>
                <br>
                The establishments of Rural High School in the place in 1965 is a great boon to education in the community.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="row-md-10">
            <div class="card p-4">
              <div class="card-title">
                <h2 class="text-center">Vision</h2>
              </div>
              <div class="card-body">
                <p class="text-center">
                  ANG TAPAT NA PANGLILINGKOD SA BARANGAY AT PAGKAKAISA NG MAMAMAYAN AY POSIBLENG MARATING NATIN ANG HINAHANGAD NA GINHAWA NG BUHAY
                </p>
              </div>
            </div>
          </div>
          <div class="row-md-10">
            <div class="card">
              <div class="card-title">
                <h2 class="text-center">Mission</h2>
              </div>
              <div class="card-body">
                <p class="text-center">
                  BUONG PUSONG GAGAWIN ANG AMING SINUMPAANG TUNGKULIN NA MAGHANDOG NG MAKATOTOHANAN AT MAKA DIYOS NA SERBISYO SA PAMAMAGITAN NG PAGLAPIT SA MAMAMAYAN NG KANILANG PANGUNAHING PANGANGAILANGAN, SA KALUSUGAN, EDUKASYON, KALINISAN, SEGURIDAD, KAAYUSAN AT MARAMING PROGRAMANG PANGKABUHAYAN TUNGO SA PAGSUGPO NG KAHIRAPAN
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>