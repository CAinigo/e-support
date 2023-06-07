@include('livewire.view-official-modal')

@foreach ($officials as $official)
  <tr id="table-row">
  <td id="brgy-official-id" class="text-center">{{ $official->id }}</td>
  <td id="brgy-official-name" class="text-center">{{ $official->fname }} {{ $official->mname }} {{ $official->lname }} {{ $official->sname }}</td>
  <td id="brgy-official-zone" class="text-center">{{ $official->zone }}</td>
  <td id="brgy-official-gender" class="text-center">{{ $official->gender }}</td>
  <td id="brgy-official-bday" class="text-center">{{ $official->bday }}</td>
  <td id="brgy-official-position" class="text-center">{{ $official->position }}</td>
  <td class="text-center">
      <i wire:click="viewOfficial({{ $official->id }})" class="fa-solid fa-eye mx-1 view-btn" data-bs-toggle="modal" data-id="{{ $official->id }}" data-bs-target="#viewOfficialModal"></i>
      <i class="fa-solid fa-pen mx-1 edit-btn" data-bs-toggle="modal" data-id="{{ $official->id }}" data-bs-target="#editOfficialModal"></i>
      <i class="fa-solid fa-trash mx-1 delete-btn" data-bs-toggle="modal" data-id="{{ $official->id }}" data-bs-target="#deleteOfficialModal"></i>
  </td>
  </tr>
@endforeach

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
