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
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

  <script defer src="{{ asset('js/registerValidation.js') }}"></script>

</head>
<body class="welcome-bg">
  <nav class="navbar sticky-top navbar-light navbar-expand-lg nav-bg">
      <a class="navbar-brand fs-3 fw-bold text-white ms-3" href="#">e-Support</a>
      <button class="navbar-toggler me-2 border-0 custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse ul-bg" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-white mx-3" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mx-3" href="#brgy-officials">Barangay Officials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mx-3" href="#programs">Programs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mx-3" href="#">Location</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mx-3" href="#spots">Tourism</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white mx-3" href="{{ route('login') }}">Login</a>
          </li>
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

<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> --}}

<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header row">
          <div class="col-3 d-flex justify-content-center cursor active" id="tab1">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tab 1</h1>
          </div>
          <div class="col-3 d-flex justify-content-center cursor" id="tab2">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tab 2</h1>
          </div>
          <div class="col-3 d-flex justify-content-center cursor" id="tab3">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Tab 3</h1>
          </div>
          <div class="col-3 d-flex justify-content-center">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
      </div>
      <form action="{{ route('sample') }}" method="POST">
        @csrf
        <div class="modal-body" id="tab1-modal">
          <div class="col">
            <div class="row">
              <label for="">Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="row">
              <label for="">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Name</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="modal-body d-none" id="tab2-modal">
          <div class="col">
            <div class="row">
              <label for="">address</label>
              <input type="text" name="address[]" class="form-control">
            </div>
            <div class="row">
              <label for="">address</label>
              <input type="text" name="address[]" class="form-control">
            </div>
            <div class="row">
              <label for="">address</label>
              <input type="text" name="address[]" class="form-control">
            </div>
            <div class="row">
              <label for="">Age</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Age</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Age</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Age</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Age</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Age</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Age</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="modal-body d-none" id="tab3-modal">
          <div class="col">
            <div class="row">
              <label for="">Address</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Address</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Address</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Address</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Address</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Address</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Address</label>
              <input type="text" class="form-control">
            </div>
            <div class="row">
              <label for="">Address</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div> --}}

    <div class="row my-5 pt-5">
      <div class="container w-50 mx-auto">
        @foreach ($brgyCaptains as $brgyCaptain)
        <div class="row my-2">
          <div class="col-6 d-flex flex-column align-items-center">
            <h1 class="fw-bold text-white">Barangay Nancayasan</h1>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro culpa sunt, suscipit in aliquid sed.</p>
          </div>
          <div class="col-6 d-flex justify-content-center">
            @if ($brgyCaptain->profile_img == null)
              <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1" alt="brgy-cpt" style="height: 15rem;">
            @else
              <img src="{{ asset('images/brgyOfficials/profiles/' . $brgyCaptain->profile_img) }}" alt="brgy-cpt" style="height: 15rem;">
            @endif
          </div>
        </div>
        <div class="row container bg-white rounded my-2">
          <h1 class="fw-bold text-dark text-center">{{ $brgyCaptain->fname }} {{ $brgyCaptain->mname }} {{ $brgyCaptain->lname }} {{ $brgyCaptain->sname }}</h1>
          <hr class="py-0 my-0">
          <p class="text-dark text-center py-0 my-0">
            @if ($brgyCaptain->position == '1')
              Barangay Captain
            @endif
          </p>
        </div>
        @endforeach
      </div>
    </div>

    {{-- Programs --}}
    <span id="programs" class="anchor"></span>
    <div class="row p-5">
      <div class="col-4">
        <div class="card">
          <img class="mx-auto" src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1" alt="" style="height: 10rem; width: 10rem;">
          <div class="card-body">
            <div class="card-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, pariatur.
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img class="mx-auto" src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1" alt="" style="height: 10rem; width: 10rem;">
          <div class="card-body">
            <div class="card-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, pariatur.
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img class="mx-auto" src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1" alt="" style="height: 10rem; width: 10rem;">
          <div class="card-body">
            <div class="card-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, pariatur.
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="d-flex justify-content-center">
          <a href="#" class="btn btn-dark bg-transparent text-dark">See more programs</a>
        </div>
      </div>
    </div>

    {{-- Spots --}}
    <span id="spots" class="anchor"></span>
    <div class="row p-5">
      <div class="col-4">
        <div class="card">
          <img class="mx-auto" src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1" alt="" style="height: 10rem; width: 10rem;">
          <div class="card-body">
            <div class="card-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, pariatur.
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img class="mx-auto" src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1" alt="" style="height: 10rem; width: 10rem;">
          <div class="card-body">
            <div class="card-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, pariatur.
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img class="mx-auto" src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1" alt="" style="height: 10rem; width: 10rem;">
          <div class="card-body">
            <div class="card-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, pariatur.
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="d-flex justify-content-center">
          <a href="#" class="btn btn-dark bg-transparent text-dark">See more spots</a>
        </div>
      </div>
    </div>

    {{-- Brgy Officials --}}
    <span id="brgy-officials" class="anchor"></span>
    <div class="row p-5">
      @foreach ($officials as $official)
        <div class="col-4">
          <div class="card">
            @if ($official->profile_img == null)
              <img class="mx-auto" src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1" alt="" style="height: 10rem; width: 10rem;">
            @else
              <img class="mx-auto" src="{{ asset('images/brgyOfficials/profiles/' . $brgyCaptain->profile_img) }}" alt="" style="height: 10rem; width: 10rem;">
            @endif
            <div class="card-body">
              <div class="card-text">
                <p class="fw-bold text-dark text-center">{{ $official->fname }} {{ $official->mname }} {{ $official->lname }} {{ $official->sname }}</p>
              </div>
            </div>
          </div>
        </div>
      @endforeach
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

    {{-- Contacts --}}
    <span id="contacts" class="anchor"></span>
    <div class="row p-5">
      <div class="col-4">
        <div class="card">
          <img class="mx-auto" src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1" alt="" style="height: 10rem; width: 10rem;">
          <div class="card-body">
            <div class="card-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, pariatur.
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img class="mx-auto" src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1" alt="" style="height: 10rem; width: 10rem;">
          <div class="card-body">
            <div class="card-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, pariatur.
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card">
          <img class="mx-auto" src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1" alt="" style="height: 10rem; width: 10rem;">
          <div class="card-body">
            <div class="card-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, pariatur.
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  {{-- <script>

    const tab1 = document.getElementById('tab1');
    const tab2 = document.getElementById('tab2');
    const tab3 = document.getElementById('tab3');
    const tab1Modal = document.getElementById('tab1-modal');
    const tab2Modal = document.getElementById('tab2-modal');
    const tab3Modal = document.getElementById('tab3-modal');

    tab1.addEventListener('click', function(){
      tab3.classList.remove('active');
      tab2.classList.remove('active');
      tab1.classList.add('active');
      tab1Modal.classList.remove("d-none");
      tab1Modal.classList.add("d-block");
      tab2Modal.classList.remove("d-block");
      tab2Modal.classList.add("d-none");
      tab3Modal.classList.remove("d-block");
      tab3Modal.classList.add("d-none");
    });

    tab2.addEventListener('click', function(){
      tab3.classList.remove('active');
      tab1.classList.remove('active');
      tab2.classList.add('active');
      tab2Modal.classList.remove("d-none");
      tab2Modal.classList.add("d-block");
      tab1Modal.classList.remove("d-block");
      tab1Modal.classList.add("d-none");
      tab3Modal.classList.remove("d-block");
      tab3Modal.classList.add("d-none");
    });

    tab3.addEventListener('click', function(){
      tab1.classList.remove('active');
      tab2.classList.remove('active');
      tab3.classList.add('active');
      tab3Modal.classList.remove("d-none");
      tab3Modal.classList.add("d-block");
      tab2Modal.classList.remove("d-block");
      tab2Modal.classList.add("d-none");
      tab1Modal.classList.remove("d-block");
      tab1Modal.classList.add("d-none");
    });
  </script> --}}
</body>
</html>