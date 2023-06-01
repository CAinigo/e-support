<div class="container-fluid">
  <h1 class="text-center my-4">Barangay Council</h1>
  <div class="container-fluid bg-white rounded p-4">
    <div class="d-flex align-items-center pt-3 pb-5">
      <span class="material-symbols-outlined add-icon fs-2 me-3">groups</span>
      <button class="bg-transparent border-1 rounded px-3" data-bs-toggle="modal" data-bs-target="#brgyOfficialRegModal">Add</button>
    </div>
    <table class="table border table-striped">
      <thead>
        <tr>
          <th class="text-center">ID</th>
          <th class="text-center">Name</th>
          <th class="text-center">Zone</th>
          <th class="text-center">Gender</th>
          <th class="text-center">Birthdate</th>
          <th class="text-center">Position</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach ($officials as $official)
          <tr id="table-row">
            <td id="brgy-official-id" class="text-center">{{ $official->id }}</td>
            <td id="brgy-official-name" class="text-center">{{ $official->fname }} {{ $official->mname }} {{ $official->lname }} {{ $official->sname }}</td>
            <td id="brgy-official-zone" class="text-center">{{ $official->zone }}</td>
            <td id="brgy-official-gender" class="text-center">{{ $official->gender }}</td>
            <td id="brgy-official-bday" class="text-center">{{ $official->bday }}</td>
            <td id="brgy-official-position" class="text-center">{{ $official->position }}</td>
            <td class="text-center">
              <i class="fa-solid fa-eye mx-1 view-btn" data-bs-toggle="modal" data-id="{{ $official->id }}" data-bs-target="#viewOfficialModal"></i>
              <i class="fa-solid fa-pen mx-1 edit-btn" data-bs-toggle="modal" data-id="{{ $official->id }}" data-bs-target="#editOfficialModal"></i>
              <i class="fa-solid fa-trash mx-1 delete-btn" data-bs-toggle="modal" data-id="{{ $official->id }}" data-bs-target="#deleteOfficialModal"></i>
            </td>
          </tr>
        @endforeach --}}
      </tbody>
    </table>
  </div>

  <!-- View Modal -->
  <div class="modal fade" id="viewOfficialModal" tabindex="-1" aria-labelledby="viewOfficialModalLabel" aria-hidden="true">
    <div class="modal-dialog register-modal">
      <div class="modal-content register-content">
        <div class="modal-header py-2">
          <h1 class="modal-title fs-5" id="viewOfficialModalLabel">View Barangay Official</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container px-0 bg-white border border-dark official-reg-cont">
            <div class="official-reg-header1"></div>
            <div class="container pt-4 pb-5">
              <div class="row">
                <div class="col-3 d-flex justify-content-center align-items-center">
                  <img id="view-profile-img" class="rounded default-img" alt="">
                </div>
                <div class="col-9">
                  <div class="row mb-2">
                    <div class="col-3">
                      <label for="view-lname" class="fw-bold">Last Name</label>
                      <div class="col-md-12">
                        <input type="text" id="view-lname" disabled class="form-control">
                      </div>
                    </div>
                    <div class="col-3">
                      <label for="view-fname" class="fw-bold">First Name</label>
                      <div class="col-md-12">
                        <input type="text" id="view-fname" disabled class="form-control">
                      </div>
                    </div>
                    <div class="col-3">
                      <label for="view-mname" class="fw-bold">Middle Name</label>
                      <div class="col-md-12">
                        <input type="text" id="view-mname" disabled class="form-control">
                      </div>
                    </div>
                    <div class="col-3">
                      <label for="view-sname" class="fw-bold">Suffix (optional)</label>
                      <div class="col-md-12">
                        <input type="text" id="view-sname" disabled class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-4">
                      <label for="view-zone" class="fw-bold">Zone</label>
                      <div class="col-md-12">
                        <input type="text" id="view-zone" disabled class="form-control">
                      </div>
                    </div>
                    <div class="col-4">
                      <label for="view-gender" class="fw-bold">Gender</label>
                      <div class="col-md-12">
                        <input id="view-gender" disabled class="form-control">
                      </div>
                    </div>
                    <div class="col-4">
                      <label for="view-contact" class="fw-bold">Contact No.</label>
                      <div class="col-md-12">
                        <input type="tel" id="view-contact" disabled class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row mb-2">
                    <div class="col-7">
                      <label for="view-email" class="fw-bold">Email</label>
                      <div class="col-md-12">
                        <input type="email" id="view-email" disabled class="form-control">
                      </div>
                    </div>
                    <div class="col-5">
                      <label for="view-c-status" class="fw-bold">Civil Status</label>
                      <div class="col-md-12">
                        <input type="text" id="view-c-status" disabled class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <label for="view-bday" class="fw-bold">Birthday</label>
                      <div class="col-md-12">
                        <input type="text" id="view-bday" disabled class="form-control">
                      </div>
                    </div>
                    <div class="col-6">
                      <label for="view-position" class="fw-bold">Position</label>
                      <div class="col-md-12">
                        <input type="text" id="view-position" disabled class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Modal -->
  <div class="modal fade" id="editOfficialModal" tabindex="-1" aria-labelledby="editOfficialModalLabel" aria-hidden="true">
    <div class="modal-dialog register-modal">
      <div class="modal-content register-content">
        <div class="modal-header py-2">
          <h1 class="modal-title fs-5" id="editOfficialModalLabel">Edit Barangay Official</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="edit-official-form" action="{{ route('edit-officials') }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="modal-body">
            <div class="container px-0 bg-white border border-dark official-reg-cont">
              <div class="official-reg-header1"></div>
              <div class="container pt-4 pb-2">
                <div class="row">
                  <div class="col-3 d-flex align-items-center">
                    <div class="d-flex flex-column align-items-center">
                      {{-- <div id="profile-container">

                      </div> --}}
                      <img id="edit-profile-img" class="default-img" alt="">
                      <label for="edit-profile-img-name" class="py-2 fw-bold">Official Image</label>
                      <div class="col-md-12">
                        <input type="file" id="edit-profile-img-name" accept="image/*" class="form-control @error('profile_img') is-invalid @enderror" name="profile_img" value="hello.png" autocomplete="profile_img" autofocus>
      
                            <span class="invalid-feedback" role="alert"></span>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" id="official-id" name="id">
                  <div class="col-9">
                    <div class="row mb-2">
                      <div class="col-3">
                        <label for="edit-lname" class="fw-bold">Last Name</label>
                        <div class="col-md-12">
                          <input type="text" id="edit-lname" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" autocomplete="lname" autofocus>
        
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                      <div class="col-3">
                        <label for="edit-fname" class="fw-bold">First Name</label>
                        <div class="col-md-12">
                          <input type="text" id="edit-fname" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" autocomplete="fname" autofocus>
        
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                      <div class="col-3">
                        <label for="edit-mname" class="fw-bold">Middle Name</label>
                        <div class="col-md-12">
                          <input type="text" id="edit-mname" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" autocomplete="mname" autofocus>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                      <div class="col-3">
                        <label for="edit-sname" class="fw-bold">Suffix (optional)</label>
                        <div class="col-md-12">
                          <input type="text" id="edit-sname" class="form-control @error('suffix_name') is-invalid @enderror" name="suffix_name" value="{{ old('suffix_name') }}" autocomplete="sname" autofocus>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-4">
                        <label for="edit-zone" class="fw-bold">Zone</label>
                        <div class="col-md-12">
                          <select id="edit-zone" class="form-select @error('zone') is-invalid @enderror" name="zone" value="{{ old('zone') }}" autocomplete="zone" autofocus>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                      <div class="col-4">
                        <label for="edit-gender" class="fw-bold">Gender</label>
                        <div class="col-md-12">
                          <select id="edit-gender" class="form-select @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" autocomplete="gender" autofocus>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                          </select>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                      <div class="col-4">
                        <label for="edit-contact" class="fw-bold">Contact No.</label>
                        <div class="col-md-12">
                          <input type="tel" id="edit-contact" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" autocomplete="contact" autofocus>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-7">
                        <label for="edit-email" class="fw-bold">Email</label>
                        <div class="col-md-12">
                          <input type="email" id="edit-email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                      <div class="col-5">
                        <label for="edit-c-status" class="fw-bold">Civil Status</label>
                        <div class="col-md-12">
                          <select id="edit-c-status" class="form-select @error('c_status') is-invalid @enderror" name="c_status" value="{{ old('c_status') }}" autocomplete="c_status" autofocus>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="separated">Separated</option>
                            <option value="widowed">Widowed</option>
                          </select>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <label for="edit-bday" class="fw-bold">Birthday</label>
                        <div class="col-md-12">
                          <input type="date" id="edit-bday" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" autocomplete="bday" autofocus>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                      <div class="col-6">
                        <label for="edit-position" class="fw-bold">Position</label>
                        <div class="col-md-12">
                          <select id="edit-position" class="form-select @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" autocomplete="position" autofocus>
                            <option value="1">Position 1</option>
                            <option value="2">Position 2</option>
                            <option value="3">Position 3</option>
                            <option value="4">Position 4</option>
                            <option value="5">Position 5</option>
                          </select>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="my-4 d-flex justify-content-center">
                <input id="update-officials-btn" value="Update" type="submit" class="btn btn-warning rounded-pill px-5">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Delete Modal -->
  <div class="modal fade" id="deleteOfficialModal" tabindex="-1" aria-labelledby="deleteOfficialModalLabel" aria-hidden="true">
    <div class="modal-dialog register-modal">
      <div class="modal-content w-50 mx-auto register-content">
        <div class="modal-header py-2">
          <h1 class="modal-title fs-5" id="deleteOfficialModalLabel">Delete Barangay Official</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="delete-official-form" action="{{ route('delete-officials') }}" method="POST">
          @csrf
          @method('DELETE')
          <div class="modal-body">
            <div class="container px-0 bg-white border border-dark official-reg-cont">
              <div class="official-reg-header1"></div>
              <div class="d-flex flex-column align-items-center">
                <input type="hidden" id="delete-official-id" name="id">
                <img id="delete-profile-img" class="py-3 default-img" alt="">
                <div id="delete-info-cont" class="d-flex flex-column align-items-center"></div>
              </div>
              <div class="my-4 d-flex justify-content-center">
                <input id="delete-officials-btn" value="Delete" type="submit" class="btn btn-warning rounded-pill px-5">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Add Brgy Official Modal -->
  <div class="modal fade" id="brgyOfficialRegModal" tabindex="-1" aria-labelledby="brgyOfficialRegModalLabel" aria-hidden="true">
    <div class="modal-dialog register-modal">
      <div class="modal-content register-content">
        <div class="modal-header py-2">
          <h1 class="modal-title fs-5" id="brgyOfficialRegModalLabel">Add Barangay Official</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="add-official-form" action="{{ route('add-officials') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="container px-0 bg-white border border-dark official-reg-cont">
              <div class="official-reg-header1"></div>
              <div class="container pt-4 pb-2">
                <div class="row">
                  <div class="col-3 d-flex align-items-center">
                    <div class="d-flex flex-column align-items-center">
                      <div id="profile-container">

                      </div>
                      {{-- <img id="profile-container" class="default-img" src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1" alt=""> --}}
                      <label for="profile-img" class="py-2 fw-bold">Official Image</label>
                      <div class="col-md-12">
                        <input type="file" id="profile-img" accept="image/*" class="form-control @error('profile_img') is-invalid @enderror" name="profile_img" value="{{ old('profile_img') }}" autocomplete="profile_img" autofocus>
      
                            <span class="invalid-feedback" role="alert"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-9">
                    <div class="row mb-2">
                      <div class="col-3">
                        <label for="lname" class="fw-bold">Last Name</label>
                        <div class="col-md-12">
                          <input type="text" id="lname" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" autocomplete="lname" autofocus>
        
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                      <div class="col-3">
                        <label for="fname" class="fw-bold">First Name</label>
                        <div class="col-md-12">
                          <input type="text" id="fname" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" autocomplete="fname" autofocus>
        
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                      <div class="col-3">
                        <label for="mname" class="fw-bold">Middle Name</label>
                        <div class="col-md-12">
                          <input type="text" id="mname" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" autocomplete="mname" autofocus>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                      <div class="col-3">
                        <label for="sname" class="fw-bold">Suffix (optional)</label>
                        <div class="col-md-12">
                          <input type="text" id="sname" class="form-control @error('suffix_name') is-invalid @enderror" name="suffix_name" value="{{ old('suffix_name') }}" autocomplete="sname" autofocus>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-4">
                        <label for="zone" class="fw-bold">Zone</label>
                        <div class="col-md-12">
                          <select id="zone" class="form-select @error('zone') is-invalid @enderror" name="zone" value="{{ old('zone') }}" autocomplete="zone" autofocus>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                      <div class="col-4">
                        <label for="gender" class="fw-bold">Gender</label>
                        <div class="col-md-12">
                          <select id="gender" class="form-select @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" autocomplete="gender" autofocus>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                          </select>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                      <div class="col-4">
                        <label for="contact" class="fw-bold">Contact No.</label>
                        <div class="col-md-12">
                          <input type="tel" id="contact" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" autocomplete="contact" autofocus>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-7">
                        <label for="email" class="fw-bold">Email</label>
                        <div class="col-md-12">
                          <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                      <div class="col-5">
                        <label for="c-status" class="fw-bold">Civil Status</label>
                        <div class="col-md-12">
                          <select id="c-status" class="form-select @error('c_status') is-invalid @enderror" name="c_status" value="{{ old('c_status') }}" autocomplete="c_status" autofocus>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="separated">Separated</option>
                            <option value="widowed">Widowed</option>
                          </select>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <label for="bday" class="fw-bold">Birthday</label>
                        <div class="col-md-12">
                          <input type="date" id="bday" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" autocomplete="bday" autofocus>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                      <div class="col-6">
                        <label for="position" class="fw-bold">Position</label>
                        <div class="col-md-12">
                          <select id="position" class="form-select @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" autocomplete="position" autofocus>
                            <option value="1">Position 1</option>
                            <option value="2">Position 2</option>
                            <option value="3">Position 3</option>
                            <option value="4">Position 4</option>
                            <option value="5">Position 5</option>
                          </select>
            
                              <span class="invalid-feedback" role="alert"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="my-4 d-flex justify-content-center">
                <input id="add-officials-btn" value="Add" type="submit" class="btn btn-warning rounded-pill px-5">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

{{-- <script defer src="{{ asset('js/profilingValidation.js') }}"></script> --}}

<script>
  $(document).ready(function(){
    fetchData();

    function fetchData(){
      $.ajax({
        url: '/admin/get-officials',
        type: 'GET',
        dataType: 'json',
        success: function(response){
          $('tbody').html('');
          $.each(response.officials, function(key, official){
            if(official.sname == null){
              $('tbody').append(`<tr>
                <td id="brgy-official-id" class="text-center">${official.id}</td>
                <td id="brgy-official-name" class="text-center">${official.fname} ${official.mname} ${official.lname}</td>
                <td id="brgy-official-zone" class="text-center">${official.zone}</td>
                <td id="brgy-official-gender" class="text-center">${official.gender}</td>
                <td id="brgy-official-bday" class="text-center">${official.bday}</td>
                <td id="brgy-official-position" class="text-center">${official.position}</td>
                <td class="text-center">
                  <i class="fa-solid fa-eye mx-1 view-btn" data-bs-toggle="modal" data-id="${official.id}" data-bs-target="#viewOfficialModal"></i>
                  <i class="fa-solid fa-pen mx-1 edit-btn" data-bs-toggle="modal" data-id="${official.id}" data-bs-target="#editOfficialModal"></i>
                  <i class="fa-solid fa-trash mx-1 delete-btn" data-bs-toggle="modal" data-id="${official.id}" data-bs-target="#deleteOfficialModal"></i>
                </td>
              </tr>`);
            }else{
              $('tbody').append(`<tr>
                <td id="brgy-official-id" class="text-center">${official.id}</td>
                <td id="brgy-official-name" class="text-center">${official.fname} ${official.mname} ${official.lname} ${official.sname}</td>
                <td id="brgy-official-zone" class="text-center">${official.zone}</td>
                <td id="brgy-official-gender" class="text-center">${official.gender}</td>
                <td id="brgy-official-bday" class="text-center">${official.bday}</td>
                <td id="brgy-official-position" class="text-center">${official.position}</td>
                <td class="text-center">
                  <i class="fa-solid fa-eye mx-1 view-btn" data-bs-toggle="modal" value="${official.id}" data-id="${official.id}" data-bs-target="#viewOfficialModal"></i>
                  <i class="fa-solid fa-pen mx-1 edit-btn" data-bs-toggle="modal" value="${official.id}" data-id="${official.id}" data-bs-target="#editOfficialModal"></i>
                  <i class="fa-solid fa-trash mx-1 delete-btn" data-bs-toggle="modal" value="${official.id}" data-id="${official.id}" data-bs-target="#deleteOfficialModal"></i>
                </td>
              </tr>`);
            }
          });
          // view modal
          $('.view-btn').click(viewModal);
          // edit modal
          $('.edit-btn').click(editModal);
          // delete modal
          $('.delete-btn').click(deleteModal);
        }
      });
    }
    
    // adding officials
    $('#add-official-form').submit(function(e){
      e.preventDefault();
  
      const addOfficialModal = bootstrap.Modal.getOrCreateInstance('#brgyOfficialRegModal');
      
      $.ajax({
        url:  $(this).attr('action'),
        method: 'post',
        data: new FormData(this),
        dataType: 'json',
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function(){
          $('#add-officials-btn').val('Please Wait...');
          $('#add-officials-btn').attr('disabled', 'disabled');
        },
        success: function(res){
          if(res.status == 400){
            showError('profile-img', res.messages.profile_img);
            showError('lname', res.messages.last_name);
            showError('fname', res.messages.first_name);
            showError('mname', res.messages.middle_name);
            showError('sname', res.messages.suffix_name);
            showError('zone', res.messages.zone);
            showError('gender', res.messages.gender);
            showError('contact', res.messages.contact);
            showError('email', res.messages.email);
            showError('c-status', res.messages.c_status);
            showError('bday', res.messages.birthday);
            showError('position', res.messages.position);
            $('#add-officials-btn').val('Add');
            $('#add-officials-btn').removeAttr('disabled');
          }else if(res.status == 200){
            $('#registered-complete').html(showMessage('success', res.messages));
            $('#add-official-form')[0].reset();
            // document.getElementById('profile-img').addEventListener('change', profileReader);
            // document.getElementById('profile-container').style.backgroundImage = "url('https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1')";
            removeValidationClasses('#add-official-form');
            $('#add-officials-btn').val('Add');
            $('#add-officials-btn').removeAttr('disabled');
            addOfficialModal.hide();
            fetchData();
          }
        },
        error: function (xhr, status, error) {
        alert (error.responseTextss);
        }
      });
    });
  
  
    // udating officials
    $('#edit-official-form').submit(function(e){
      e.preventDefault();
  
      const editOfficialModal = bootstrap.Modal.getOrCreateInstance('#editOfficialModal');

      $.ajax({
        url:  $(this).attr('action'),
        method: $(this).attr('method'),
        data: new FormData(this),
        dataType: 'json',
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function(){
          $('#update-officials-btn').val('Please Wait...');
          $('#update-officials-btn').attr('disabled', 'disabled');
        },
        success: function(res){
          if(res.status == 400){
            showError('edit-profile-img', res.messages.profile_img);
            showError('edit-lname', res.messages.last_name);
            showError('edit-fname', res.messages.first_name);
            showError('edit-mname', res.messages.middle_name);
            showError('edit-sname', res.messages.suffix_name);
            showError('edit-zone', res.messages.zone);
            showError('edit-gender', res.messages.gender);
            showError('edit-contact', res.messages.contact);
            showError('edit-email', res.messages.email);
            showError('edit-c-status', res.messages.c_status);
            showError('edit-bday', res.messages.birthday);
            showError('edit-position', res.messages.position);
            $('#update-officials-btn').val('Update');
            $('#update-officials-btn').removeAttr('disabled');
          }else if(res.status == 200){
            $('#registered-complete').html(showMessage('success', res.messages));
            $('#edit-official-form')[0].reset();
            // document.getElementById('profile-img').editEventListener('change', profileReader);
            // document.getElementById('profile-container').style.backgroundImage = "url('https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1')";
            removeValidationClasses('#edit-official-form');
            $('#update-officials-btn').val('Update');
            $('#update-officials-btn').removeAttr('disabled');
            editOfficialModal.hide();
            fetchData();
          }
        }
      });
    });


    // deleting officials
    $('#delete-official-form').submit(function(e){
      e.preventDefault();
  
      const deleteOfficialModal = bootstrap.Modal.getOrCreateInstance('#deleteOfficialModal');

      $.ajax({
        url:  $(this).attr('action'),
        method: $(this).attr('method'),
        data: new FormData(this),
        dataType: 'json',
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function(){
          $('#delete-officials-btn').val('Please Wait...');
          $('#delete-officials-btn').attr('disabled', 'disabled');
        },
        success: function(res){
          if(res.status == 200){
            $('#registered-complete').html(showMessage('success', res.messages));
            $('#delete-official-form')[0].reset();
            // document.getElementById('profile-img').editEventListener('change', profileReader);
            // document.getElementById('profile-container').style.backgroundImage = "url('https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1')";
            removeValidationClasses('#delete-official-form');
            $('#delete-officials-btn').val('Delete');
            $('#delete-officials-btn').removeAttr('disabled');
            deleteOfficialModal.hide();
            fetchData();
          }
        }
      });
    });
  
    
    function showError(field, message){
      if(!message){
        $('#' + field).addClass('is-valid').removeClass('is-invalid').siblings('.invalid-feedback').text('');
      }else{
        $('#' + field).addClass('is-invalid').removeClass('is-valid').siblings('.invalid-feedback').text(message);
      }
    }
    
    function removeValidationClasses(form){
      $(form).each(function(){
        $(form).find(':input').removeClass('is-valid is-invalid');
      });
    }
    
    function showMessage(type, message){
      return `<div class="alert alert-${type} alert-dismissible fade show" role="alert">
      <strong>${message}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>`
    }


    // view function modal
    function viewModal(){
      const id = $(this).attr('data-id');

      $.ajax({
        url: '/admin/view-officials/' + id,
        type: 'GET',
        data: {
          'id': id
        },
        beforeSend: function(){
          document.getElementById('view-profile-img').src = "https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1";
          document.getElementById('view-lname').value = "loading...";
          document.getElementById('view-fname').value = "loading...";
          document.getElementById('view-mname').value = "loading...";
          document.getElementById('view-sname').value = "loading...";
          document.getElementById('view-zone').value = "loading...";
          document.getElementById('view-gender').value = "loading...";
          document.getElementById('view-contact').value = "loading...";
          document.getElementById('view-email').value = "loading...";
          document.getElementById('view-c-status').value = "loading...";
          document.getElementById('view-bday').value = "loading...";
          document.getElementById('view-position').value = "loading...";
        },
        success: function(data){
          document.getElementById('view-profile-img').src = `{{ asset('storage/images/brgyOfficials/${data.profile_img}') }}`;
          document.getElementById('view-lname').value = data.lname;
          document.getElementById('view-fname').value = data.fname;
          document.getElementById('view-mname').value = data.mname;
          document.getElementById('view-sname').value = data.sname;
          document.getElementById('view-zone').value = data.zone;
          document.getElementById('view-gender').value = data.gender;
          document.getElementById('view-contact').value = data.contact;
          document.getElementById('view-email').value = data.email;
          document.getElementById('view-c-status').value = data.c_status;
          document.getElementById('view-bday').value = data.bday;
          document.getElementById('view-position').value = data.position;
          fetchData();
        }
      });
    }


    // edit function modal
    function editModal(){
      const id = $(this).attr('data-id');

      const editLname = document.getElementById('edit-lname');
      const editFname = document.getElementById('edit-fname');
      const editMname = document.getElementById('edit-mname');
      const editSname = document.getElementById('edit-sname');
      const editZone = document.getElementById('edit-zone');
      const editGender = document.getElementById('edit-gender');
      const editContact = document.getElementById('edit-contact');
      const editEmail = document.getElementById('edit-email');
      const editCstatus = document.getElementById('edit-c-status');
      const editBday = document.getElementById('edit-bday');
      const editPosition = document.getElementById('edit-position');

      $.ajax({
        url: '/admin/view-officials/' + id,
        type: 'GET',
        data: {
          'id': id
        },
        beforeSend: function(){
          document.getElementById('edit-profile-img').src = "https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1";
          editLname.value = "loading...";
          editLname.setAttribute('readOnly', 'readOnly');
          editFname.value = "loading...";
          editFname.setAttribute('readOnly', 'readOnly');
          editMname.value = "loading...";
          editMname.setAttribute('readOnly', 'readOnly');
          editSname.value = "loading...";
          editSname.setAttribute('readOnly', 'readOnly');
          editZone.value = "loading...";
          editZone.setAttribute('readOnly', 'readOnly');
          editGender.value = "loading...";
          editGender.setAttribute('readOnly', 'readOnly');
          editContact.value = "loading...";
          editContact.setAttribute('readOnly', 'readOnly');
          editEmail.value = "loading...";
          editEmail.setAttribute('readOnly', 'readOnly');
          editCstatus.value = "loading...";
          editCstatus.setAttribute('readOnly', 'readOnly');
          editBday.value = "loading...";
          editBday.setAttribute('readOnly', 'readOnly');
          editPosition.value = "loading...";
          editPosition.setAttribute('readOnly', 'readOnly');
        },
        success: function(data){
          document.getElementById('official-id').value = data.id;
          document.getElementById('edit-profile-img').src = `{{ asset('storage/images/brgyOfficials/${data.profile_img}') }}`;
          editLname.value = data.lname;
          editLname.removeAttribute('readOnly');
          editFname.value = data.fname;
          editFname.removeAttribute('readOnly');
          editMname.value = data.mname;
          editMname.removeAttribute('readOnly');
          editSname.value = data.sname;
          editSname.removeAttribute('readOnly');
          editZone.value = data.zone;
          editZone.removeAttribute('readOnly');
          editGender.value = data.gender;
          editGender.removeAttribute('readOnly');
          editContact.value = data.contact;
          editContact.removeAttribute('readOnly');
          editEmail.value = data.email;
          editEmail.removeAttribute('readOnly');
          editCstatus.value = data.c_status;
          editCstatus.removeAttribute('readOnly');
          editBday.value = data.bday;
          editBday.removeAttribute('readOnly');
          editPosition.value = data.position;
          editPosition.removeAttribute('readOnly');
          fetchData();
        }
      });
    }


    // delete function modal
    function deleteModal(){
      const id = $(this).attr('data-id');

      const deleteName = document.getElementById('delete-name');
      const deletePosition = document.getElementById('delete-position');

      $.ajax({
        url: '/admin/view-officials/' + id,
        type: 'GET',
        data: {
          'id': id
        },
        // beforeSend: function(){
        //   document.getElementById('delete-profile-img').src = "https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1";

        //   $('#delete-info-cont').append(`
        //     <h3>${loading}</h3>
        //   `);
        //   deleteLname.value = "loading...";
        //   deleteFname.value = "loading...";
        //   deleteMname.value = "loading...";
        //   deleteSname.value = "loading...";
        //   deletePosition.value = "loading...";
        // },
        success: function(data){
          $('#delete-info-cont').html('');
          if(data.sname == null){
            document.getElementById('delete-official-id').value = data.id;
            document.getElementById('delete-profile-img').src = `{{ asset('storage/images/brgyOfficials/${data.profile_img}') }}`;

            $('#delete-info-cont').append(`
            <h3>${data.fname} ${data.mname} ${data.lname}</h3>
            <h4>${data.position}</h4>
            `);
          }else{
            document.getElementById('delete-official-id').value = data.id;
            document.getElementById('delete-profile-img').src = `{{ asset('storage/images/brgyOfficials/${data.profile_img}') }}`;

            $('#delete-info-cont').append(`
            <h3>${data.fname} ${data.mname} ${data.lname} ${data.sname}</h3>
            <h4>${data.position}</h4>
            `);
          }
        }
      });
    }
  });



  // const profileImg = document.getElementById('profile-img');
  // // const profileContainer = document.getElementById('profile-container');
  // let uploadedProfileImg = "";

  // profileImg.addEventListener('change', profileReader);

  // function profileReader(){
  //   const reader = new FileReader();
  //   reader.addEventListener('load', () => {
  //     uploadedProfileImg = reader.result;
  //     // profileContainer.src = uploadedProfileImg;
  //     document.getElementById('profile-container').style.backgroundImage = `url(${uploadedProfileImg})`;
  //   });
  //   reader.readAsDataURL(this.files[0]);
  // }
</script>