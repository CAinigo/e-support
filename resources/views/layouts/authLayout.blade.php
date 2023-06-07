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
  <div id="registered-complete" class="position-absolute top-25 start-50 translate-middle z-1"></div>
  @yield('login')

  <!-- Resident Modal -->
  <form id="register-form" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable register-modal">
        <div class="modal-content register-content">
          <div class="modal-header py-2 bg-warning">
            <h1 class="modal-title fs-5" id="registerModalLabel">Register</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="col-11 mb-4 mx-auto">
              <label class="form-label mb-0">Name</label>
              <div class="row mb-4">
                <div class="col-md-12 pt-2">
                  <input type="text" id="reg-lname" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" autocomplete="lname">

                      <span class="invalid-feedback" role="alert"></span>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12 pt-2">
                  <input type="text" id="reg-fname" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" autocomplete="fname">

                      <span class="invalid-feedback" role="alert"></span>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12 pt-2">
                  <input type="text" id="reg-mname" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" placeholder="Middle Name" autocomplete="mname">
    
                      <span class="invalid-feedback" role="alert"></span>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-6 pt-2">
                  <input type="text" id="reg-sname" class="form-control @error('suffix_name') is-invalid @enderror" name="suffix_name" value="{{ old('suffix_name') }}" placeholder="Suffix Name (Optional)" autocomplete="sname">
    
                      <span class="invalid-feedback" role="alert"></span>
                </div>
                <div class="col-4 pt-0">
                  <label for="display-pict" class="form-label pt-0 my-0 display-img-label">Display Picture</label>
                  <input type="file" accept="image/*" id="display-pict" class="display-img @error('display_picture') is-invalid @enderror" name="display_picture" value="{{ old('display_picture') }}" autocomplete="display_picture">
    
                      <span class="invalid-feedback" role="alert"></span>
                </div>
              </div>
            </div>
            <div class="col-11 mb-4 mx-auto">
              <label for="reg-bday" class="form-label">Birthday</label>
              <div class="col-md-12">
                <input type="date" id="reg-bday" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" autocomplete="bday">
  
                    <span class="invalid-feedback" role="alert"></span>
              </div>
            </div>
            <div class="col-11 mb-4 mx-auto">
              <label for="reg-email" class="form-label">Email</label>
              <div class="col-md-12">
                <input type="email" id="reg-email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
  
                    <span class="invalid-feedback" role="alert"></span>
              </div>
            </div>
            <div class="col-11 mb-4 mx-auto">
              <label for="reg-contact" class="form-label">Contact No.</label>
              <div class="col-md-12">
                <input type="tel" id="reg-contact" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" autocomplete="contact">
  
                    <span class="invalid-feedback" role="alert"></span>
              </div>
            </div>
            <div class="col-11 mb-4 mx-auto">
              <label for="reg-zone" class="form-label">Zone/Purok</label>
              <div class="col-md-12">
                <select id="reg-zone" class="form-select @error('zone') is-invalid @enderror" name="zone" value="{{ old('zone') }}" autocomplete="zone">
                  <option value="">Choose one...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
  
                    <span class="invalid-feedback" role="alert"></span>
              </div>
            </div>
            <div class="col-11 mb-4 mx-auto">
              <label for="reg-e-status" class="form-label">Employment Status</label>
              <div class="col-md-12">
                <select id="reg-e-status" class="form-select @error('e_status') is-invalid @enderror" name="e_status" value="{{ old('e_status') }}" autocomplete="e_status">
                  <option value="">Choose one...</option>
                  <option value="employed">Employed</option>
                  <option value="unemployed">Unemployed</option>
                </select>
  
                    <span class="invalid-feedback" role="alert"></span>
              </div>
            </div>
            <div class="col-11 mb-4 mx-auto">
              <label for="reg-gender" class="form-label">Gender</label>
              <div class="col-md-12">
                <select id="reg-gender" class="form-select @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" autocomplete="gender">
                  <option value="">Choose one...</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
  
                    <span class="invalid-feedback" role="alert"></span>
              </div>
            </div>
            <div class="col-11 mb-4 mx-auto">
              <label for="family-head" class="form-label">Head of the family</label>
              <div class="col-md-12">
                <input type="text" id="family-head" class="form-control @error('family_head') is-invalid @enderror" name="family_head" value="{{ old('family_head') }}" autocomplete="family_head">
  
                    <span class="invalid-feedback" role="alert"></span>
              </div>
            </div>
            <div class="col-11 mb-4 mx-auto">
              <label class="form-label">Login Credentials</label>
              <div class="row mb-4">
                <div class="col-md-12">
                  <input type="text" id="reg-username" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username">
    
                      <span class="invalid-feedback" role="alert"></span>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12">
                  <input type="password" id="reg-password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
    
                      <span class="invalid-feedback" role="alert"></span>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12">
                  <input id="reg-password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" autocomplete="new-password">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input id="reg-btn" value="Register" type="submit" class="btn btn-warning mx-auto">
          </div>
        </div>
      </div>
    </div>
  </form>

  <!-- Company Modal -->
  <form id="company-form" action="{{ route('register.company') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="companyModal" tabindex="-1" aria-labelledby="companyModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable register-modal">
        <div class="modal-content register-content">
          <div class="modal-header py-2 bg-warning">
            <h1 class="modal-title fs-5" id="companyModalLabel">Company Register</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="col-11 mb-4 mx-auto">
              <label for="business-name" class="form-label">Business Name</label>
              <div class="col-md-12">
                <input type="text" id="business-name" class="form-control @error('business_name') is-invalid @enderror" name="business_name" value="{{ old('business_name') }}" autocomplete="business-name">
  
                    <span class="invalid-feedback" role="alert"></span>
              </div>
            </div>
            <div class="col-11 mb-4 mx-auto">
              <label for="business-address" class="form-label">Business Address</label>
              <div class="col-md-12">
                <select id="business-address" class="form-select @error('business_address') is-invalid @enderror" name="business_address" value="{{ old('business_address') }}" autocomplete="business-address">
                  <option value="">Choose one...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
  
                    <span class="invalid-feedback" role="alert"></span>
              </div>
            </div>
            <div class="col-11 mb-4 mx-auto">
              <label for="business-nature" class="form-label">Nature of Business</label>
              <div class="col-md-12">
                <input type="text" id="business-nature" class="form-control @error('business_nature') is-invalid @enderror" name="business_nature" value="{{ old('business_nature') }}" autocomplete="b_nature">
  
                    <span class="invalid-feedback" role="alert"></span>
              </div>
            </div>
            <div class="col-11 mb-4 mx-auto">
              <label class="form-label mb-0">Name</label>
              <div class="row mb-4">
                <div class="col-md-12 pt-2">
                  <input type="text" id="com-lname" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" autocomplete="com-lname">

                      <span class="invalid-feedback" role="alert"></span>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12 pt-2">
                  <input type="text" id="com-fname" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" autocomplete="com-fname">

                      <span class="invalid-feedback" role="alert"></span>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12 pt-2">
                  <input type="text" id="com-mname" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" placeholder="Middle Name" autocomplete="com-mname">

                      <span class="invalid-feedback" role="alert"></span>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-6 pt-2">
                  <input type="text" id="com-sname" class="form-control @error('suffix_name') is-invalid @enderror" name="suffix_name" value="{{ old('suffix_name') }}" placeholder="Suffix Name (Optional)" autocomplete="com-sname">
    
                      <span class="invalid-feedback" role="alert"></span>
                </div>
                <div class="col-4 pt-0">
                  <label for="com-display-pict" class="form-label pt-0 my-0 display-img-label">Display Picture</label>
                  <input type="file" accept="image/*" id="com-display-pict" class="display-img @error('display_picture') is-invalid @enderror" name="display_picture" value="{{ old('display_picture') }}" autocomplete="display_picture">
    
                      <span class="invalid-feedback" role="alert"></span>
                </div>
              </div>
            </div>
            <div class="col-11 mb-4 mx-auto">
              <label for="com-email" class="form-label">Email</label>
              <div class="col-md-12">
                <input type="email" id="com-email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="com-email">
  
                    <span class="invalid-feedback" role="alert"></span>
              </div>
            </div>
            <div class="col-11 mb-4 mx-auto">
              <label for="com-contact" class="form-label">Contact No.</label>
              <div class="col-md-12">
                <input type="tel" id="com-contact" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" autocomplete="com-contact">
  
                    <span class="invalid-feedback" role="alert"></span>
              </div>
            </div>
            <div class="col-11 mb-4 mx-auto">
              <label class="form-label">Login Credentials</label>
              <div class="row mb-4">
                <div class="col-md-12">
                  <input type="text" id="com-username" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="com-username">
    
                      <span class="invalid-feedback" role="alert"></span>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12">
                  <input type="password" id="com-password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
    
                      <span class="invalid-feedback" role="alert"></span>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12">
                  <input id="com-password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" autocomplete="new-password">
                </div>
              </div>
            </div>
            <div class="col-11 mb-4 mx-auto">
              <div class="col-4">
                <label for="com-clearance" class="form-label pt-0 my-0 display-img-label">Business Clearance</label>
                <input type="file" id="com-clearance" class="display-img @error('business_clearance') is-invalid @enderror" name="business_clearance" value="{{ old('business_clearance') }}" autocomplete="com-clearance">

                    <span class="invalid-feedback" role="alert"></span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input id="com-btn" value="Register" type="submit" class="btn btn-warning mx-auto">
          </div>
        </div>
      </div>
    </div>
  </form>
</body>
</html>