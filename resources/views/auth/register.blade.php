<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>
<body style="background-color: #E7EEFB">
  <div class="container d-flex justify-content-center p-5">
    <div class="card bg-white w-50">
      <div class="card-body">
        <div class="card-title">
          <h1>Create an Account</h1>
        </div>
        <form action="{{ route('register') }}" method="POST">
          @csrf
          <div class="row mb-3">
            <label for="lname" class="">Last Name</label>
            <div class="col-md-12">
              <input type="text" id="lname" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" autocomplete="lname" autofocus>

              @error('lname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="fname" class="">First Name</label>
            <div class="col-md-12">
              <input type="text" id="fname" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" autocomplete="fname" autofocus>

              @error('fname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="mname" class="">Middle Name</label>
            <div class="col-md-12">
              <input type="text" id="mname" class="form-control @error('mname') is-invalid @enderror" name="mname" value="{{ old('mname') }}" autocomplete="mname" autofocus>

              @error('mname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="sname" class="">Suffix</label>
            <div class="col-md-12">
              <input type="text" id="sname" class="form-control @error('sname') is-invalid @enderror" name="sname" value="{{ old('sname') }}" autocomplete="sname" autofocus>

              @error('sname')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="bday" class="">Birthday</label>
            <div class="col-md-12">
              <input type="date" id="bday" class="form-control @error('bday') is-invalid @enderror" name="bday" value="{{ old('bday') }}" autocomplete="bday" autofocus>

              @error('bday')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="c_status" class="">Civil Status</label>
            <div class="col-md-12">
              <select id="c_status" class="form-select @error('c_status') is-invalid @enderror" name="c_status" value="{{ old('c_status') }}" autocomplete="c_status" autofocus>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divorced">Divorced</option>
                <option value="separated">Separated</option>
                <option value="widowed">Widowed</option>
              </select>

              @error('c_status')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="gender" class="">Gender</label>
            <div class="col-md-12">
              <select id="gender" class="form-select @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" autocomplete="gender" autofocus>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>

              @error('gender')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="zone" class="">Zone</label>
            <div class="col-md-12">
              <select id="zone" class="form-select @error('zone') is-invalid @enderror" name="zone" value="{{ old('zone') }}" autocomplete="zone" autofocus>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>

              @error('zone')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="row mb-3">
            <label for="e_status" class="">Employment Status</label>
            <div class="col-md-12">
              <select id="e_status" class="form-select @error('e_status') is-invalid @enderror" name="e_status" value="{{ old('e_status') }}" autocomplete="e_status" autofocus>
                <option value="employed">Employed</option>
                <option value="unemployed">Unemployed</option>
              </select>

              @error('e_status')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="row mb-4">
            <label for="contact" class="">Contact No.</label>
            <div class="col-md-12">
              <input type="tel" id="contact" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" autocomplete="contact" autofocus>

              @error('contact')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="row mb-4">
            <label for="email" class="">Email</label>
            <div class="col-md-12">
              <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="row mb-4">
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
              <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
          </div>
          <div class="row mb-4">
            <label for="password" class="">Confirm Password</label>
            <div class="col-md-12">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
            </div>
          </div>
          <div class="row">
            <div class="d-flex flex-column align-items-center">
              <button type="submit" class="btn btn-warning rounded-pill w-25 mb-3">Create</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>