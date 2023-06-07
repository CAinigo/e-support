<div class="container-fluid py-5 px-4">
  <div class="container-fluid bg-white rounded p-0">
    <div class="w-100 bg-warning rounded-top d-flex justify-content-between p-2 official-header-cont">
      <h2 class="text-dark">Family Heads</h2>
      <button class="text-white border-0 add-btn" data-bs-toggle="modal" data-bs-target="#brgyOfficialRegModal">Add</button>
    </div>
    <div class="w-100 rounded-top d-flex justify-content-between p-3">
      <div class="d-flex align-items-center">
        <p class="mb-0">Show</p>
        <form action="">
          <input type="number" value="10" class="form-control form-control-sm mx-1 show-entries">
        </form>
        <p class="mb-0">entries</p>
      </div>
      <form action="">
        <div class="d-flex align-items-center">
          <label class="form-label mb-0 me-2" for="search">Search: </label>
          <input type="text" id="search" class="form-control form-control-sm" name="search">
        </div>
      </form>
    </div>
    <div class="px-3 pb-5">
      <table class="table border table-striped">
        <thead>
          <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Name</th>
            <th class="text-center">Zone</th>
            <th class="text-center">Birthplace</th>
            <th class="text-center">Birthdate</th>
            <th class="text-center">Contact</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>

          {{-- <livewire:show-brgy-official/> --}}
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
  </div>

  <!-- View Modal -->
  <div class="modal fade" id="viewOfficialModal" tabindex="-1" aria-labelledby="viewOfficialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable register-modal">
      <div class="modal-content register-content">
        <div class="modal-header py-2 bg-warning">
          <h1 class="modal-title fs-5" id="viewOfficialModalLabel">View Barangay Official</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-0 pb-5">
          <div class="container w-75 px-0 bg-white border rounded border-dark official-reg-cont">
              <h4 class="d-flex justify-content-center">Barangay Official</h4>
              <div class="col-11 mb-2 mx-auto">
                <div class="my-3 d-flex justify-content-center">
                  <img id="view-display-img" style="border-radius: 50%; height: 6rem; width: 6rem;" src="" alt="">
                </div>
                <div class="container my-3 py-2 border border-secondary rounded d-flex justify-content-start">
                  <p class="my-auto me-2 fw-bold">Full Name:</p>
                  <p id="view-full-name" class="my-auto"></p>
                </div>
                <div class="container my-3 py-2 border border-secondary rounded d-flex justify-content-start">
                  <p class="my-auto me-2 fw-bold">Position:</p>
                  <p id="view-position" class="my-auto"></p>
                </div>
                <div class="container my-3 py-2 border border-secondary rounded d-flex justify-content-start">
                  <p class="my-auto me-2 fw-bold">Zone:</p>
                  <p id="view-zone" class="my-auto"></p>
                </div>
                <div class="container my-3 py-2 border border-secondary rounded d-flex justify-content-start">
                  <p class="my-auto me-2 fw-bold">Gender:</p>
                  <p id="view-gender" class="my-auto"></p>
                </div>
                <div class="container my-3 py-2 border border-secondary rounded d-flex justify-content-start">
                  <p class="my-auto me-2 fw-bold">Phone No.:</p>
                  <p id="view-contact" class="my-auto"></p>
                </div>
                <div class="container my-3 py-2 border border-secondary rounded d-flex justify-content-start">
                  <p class="my-auto me-2 fw-bold">Email:</p>
                  <p id="view-email" class="my-auto"></p>
                </div>
                <div class="container my-3 py-2 border border-secondary rounded d-flex justify-content-start">
                  <p class="my-auto me-2 fw-bold">Birthday:</p>
                  <p id="view-bday" class="my-auto"></p>
                </div>
                <div class="container my-3 py-2 border border-secondary rounded d-flex justify-content-start">
                  <p class="my-auto me-2 fw-bold">Civil Status:</p>
                  <p id="view-c-status" class="my-auto"></p>
                </div>
              </div>
          </div>
        </div>
        {{-- <div class="modal-body">
          <div class="container w-75 px-0 bg-white border border-dark official-reg-cont">
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
        </div> --}}
      </div>
    </div>
  </div>

  <!-- Edit Modal -->
  <form id="edit-official-form" action="{{ route('edit-officials') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal fade" id="editOfficialModal" tabindex="-1" aria-labelledby="editOfficialModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable register-modal">
        <div class="modal-content register-content">
          <div class="modal-header py-2 bg-warning">
            <h1 class="modal-title fs-5" id="editOfficialModalLabel">Edit Barangay Official</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body px-0">
            <div class="container w-75 px-0 bg-white border rounded border-dark official-reg-cont">
              <div class="row">
                <h4 class="ms-3">Barangay Official</h4>
                <input type="hidden" name="official_id" id="official-id">
                <div class="col-11 mb-3 mx-auto">
                  <div class="col-4">
                    <label for="edit-display-picture" class="form-label fw-bold pt-0 my-0 display-img-label">Display Picture</label>
                    <input type="file" id="edit-display-picture" class="display-img @error('display_picture') is-invalid @enderror" name="display_picture" value="{{ old('display_picture') }}" autocomplete="display-picture" autofocus>
    
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mx-auto">
                  <label for="edit-lname" class="form-label fw-bold mb-0">Last Name</label>
                  <div class="col-md-12">
                    <input type="text" id="edit-lname" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" autocomplete="edit-lname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mx-auto">
                  <label for="edit-fname" class="form-label fw-bold mb-0">First Name</label>
                  <div class="col-md-12">
                    <input type="text" id="edit-fname" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" autocomplete="edit-fname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mx-auto">
                  <label for="edit-mname" class="form-label fw-bold mb-0">Middle Name</label>
                  <div class="col-md-12">
                    <input type="text" id="edit-mname" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" autocomplete="edit-mname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mx-auto">
                  <label for="edit-sname" class="form-label fw-bold mb-0">Suffix (Optional)</label>
                  <div class="col-md-12">
                    <input type="text" id="edit-sname" class="form-control @error('suffix_name') is-invalid @enderror" name="suffix_name" value="{{ old('suffix_name') }}" autocomplete="edit-sname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mb-4 mx-auto">
                  <label for="edit-zone" class="form-label fw-bold">Zone</label>
                  <div class="col-md-12">
                    <select id="edit-zone" class="form-select @error('zone') is-invalid @enderror" name="zone" value="{{ old('zone') }}" autocomplete="edit-zone" autofocus>
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
                <div class="col-11 mb-2 mx-auto">
                  <label for="edit-gender" class="form-label fw-bold">Gender</label>
                  <div class="col-md-12">
                    <select id="edit-gender" class="form-select @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" autocomplete="edit-gender" autofocus>
                      <option value="">Choose one...</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mx-auto">
                  <label for="edit-contact" class="form-label fw-bold mb-0">Phone No.</label>
                  <div class="col-md-12">
                    <input type="tel" id="edit-contact" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" autocomplete="edit-contact" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mx-auto">
                  <label for="edit-email" class="form-label fw-bold mb-0">Email</label>
                  <div class="col-md-12">
                    <input type="text" id="edit-email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="edit-email" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mx-auto">
                  <label for="edit-c-status" class="form-label fw-bold">Civil Status</label>
                  <div class="col-md-12">
                    <select id="edit-c-status" class="form-select @error('civil_status') is-invalid @enderror" name="civil_status" value="{{ old('civil_status') }}" autocomplete="edit-civil_status" autofocus>
                      <option value="">Choose one...</option>
                      <option value="single">Single</option>
                      <option value="married">Married</option>
                      <option value="divorced">Divorced</option>
                      <option value="separated">Separated</option>
                      <option value="widowed">Widowed</option>
                    </select>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-4 mx-auto">
                  <label for="edit-bday" class="form-label fw-bold">Birthday</label>
                  <div class="col-md-12">
                    <input type="date" id="edit-bday" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" autocomplete="edit-bday" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mb-4 mx-auto">
                  <label for="edit-position" class="form-label fw-bold">Position</label>
                  <div class="col-md-12">
                    <select id="edit-position" class="form-select @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" autocomplete="edit-position" autofocus>
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
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input id="update-officials-btn" value="Update" type="submit" class="btn btn-warning rounded mx-auto px-5">
          </div>
        </div>
      </div>
    </div>
  </form>

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

  <!-- Add Family Modal -->
  <form id="add-official-form" action="{{ route('add-officials') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="brgyOfficialRegModal" tabindex="-1" aria-labelledby="brgyOfficialRegModalLabel" aria-hidden="true">
      <div class="modal-dialog register-modal">
        <div class="modal-content register-content">
          <div class="modal-header py-2 bg-warning">
            <h1 class="modal-title fs-5" id="brgyOfficialRegModalLabel">Add New Resident</h1>
            <button type="button" id="add-close-btn" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body row">
            <div class="col-4 px-2 pt-2">
              <p id="head-btn" class="border-start border-2 border-dark ps-2 category-fs">Head of the Family</p>
              <p id="wife-btn" class="border-dark border-2 ps-2 category-fs">Wife</p>
              <p id="family-member-btn" class="border-dark border-2 ps-2 category-fs">Member of the Family</p>
              <p id="additional-btn" class="border-dark border-2 ps-2 category-fs">Additional Info.</p>
              <p id="member-btn" class="border-dark border-2 ps-2 category-fs">Member</p>
            </div>
            <div id="head" class="col-8 overflow-auto residents-reg-cont">
              <div class="col px-2 bg-white border rounded border-dark">
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-lname" class="form-label mb-0">Last Name</label>
                  <div class="col-md-12">
                    <input type="text" id="add-head-lname" class="form-control form-control-sm @error('head_last_name') is-invalid @enderror" name="head_last_name" value="{{ old('head_last_name') }}" autocomplete="add-head-lname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-fname" class="form-label mb-0">First Name</label>
                  <div class="col-md-12">
                    <input type="text" id="add-head-fname" class="form-control form-control-sm @error('head_first_name') is-invalid @enderror" name="head_first_name" value="{{ old('head_first_name') }}" autocomplete="add-head-fname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-mname" class="form-label mb-0">Middle Name</label>
                  <div class="col-md-12">
                    <input type="text" id="add-head-mname" class="form-control form-control-sm @error('head_middle_name') is-invalid @enderror" name="head_middle_name" value="{{ old('head_middle_name') }}" autocomplete="add-head-mname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-sname" class="form-label mb-0">Suffix (Optional)</label>
                  <div class="col-md-12">
                    <input type="text" id="add-head-sname" class="form-control form-control-sm @error('head_suffix_name') is-invalid @enderror" name="head_suffix_name" value="{{ old('head_suffix_name') }}" autocomplete="add-head-sname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-4 mx-auto">
                  <label for="add-head-bday" class="form-label">Birthday</label>
                  <div class="col-md-12">
                    <input type="date" id="add-head-bday" class="form-control form-control-sm @error('head_birthday') is-invalid @enderror" name="head_birthday" value="{{ old('head_birthday') }}" autocomplete="add-head-bday" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-bplace" class="form-label mb-0">Birthplace</label>
                  <div class="col-md-12">
                    <input type="text" id="add-head-bplace" class="form-control form-control-sm @error('head_birthplace') is-invalid @enderror" name="head_birthplace" value="{{ old('head_birthplace') }}" autocomplete="add-head-bplace" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-c-status" class="form-label">Status</label>
                  <div class="col-md-12">
                    <select id="add-head-c-status" class="form-select form-select-sm @error('head_civil_status') is-invalid @enderror" name="head_civil_status" value="{{ old('head_civil_status') }}" autocomplete="add-head-c-status" autofocus>
                      <option value="">Choose one...</option>
                      <option value="single">Single</option>
                      <option value="married">Married</option>
                      <option value="divorced">Divorced</option>
                      <option value="separated">Separated</option>
                      <option value="widowed">Widowed</option>
                    </select>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-educ-attainment" class="form-label mb-0">Educational Attainment</label>
                  <div class="col-md-12">
                    <input type="text" id="add-head-educ-attainment" class="form-control form-control-sm @error('head_educational_attainment') is-invalid @enderror" name="head_educational_attainment" value="{{ old('head_educational_attainment') }}" autocomplete="add-head-educ-attainment" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mb-4 mx-auto">
                  <label for="add-head-zone" class="form-label">Zone</label>
                  <div class="col-md-12">
                    <select id="add-head-zone" class="form-select form-select-sm @error('head_zone') is-invalid @enderror" name="head_zone" value="{{ old('head_zone') }}" autocomplete="add-head-zone" autofocus>
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
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-religion" class="form-label mb-0">Religion</label>
                  <div class="col-md-12">
                    <input type="text" id="add-head-religion" class="form-control form-control-sm @error('head_religion') is-invalid @enderror" name="head_religion" value="{{ old('head_religion') }}" autocomplete="add-head-religion" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-occupation" class="form-label mb-0">Occupation</label>
                  <div class="col-md-12">
                    <input type="text" id="add-head-occupation" class="form-control form-control-sm @error('head_occupation') is-invalid @enderror" name="head_occupation" value="{{ old('head_occupation') }}" autocomplete="add-head-occupation" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-contact" class="form-label mb-0">Contact</label>
                  <div class="col-md-12">
                    <input type="tel" id="add-head-contact" class="form-control form-control-sm @error('head_contact') is-invalid @enderror" name="head_contact" value="{{ old('head_contact') }}" autocomplete="add-head-contact" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-philhealth" class="form-label">Philhealth</label>
                  <div class="col-md-12">
                    <select id="add-head-philhealth" class="form-select form-select-sm @error('head_philhealth') is-invalid @enderror" name="head_philhealth" value="{{ old('head_philhealth') }}" autocomplete="add-head-philhealth" autofocus>
                      <option value="">Choose one...</option>
                      <option value="true">Yes</option>
                      <option value="false">No</option>
                    </select>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-total-member" class="form-label mb-0">Total Member of the Family</label>
                  <div class="col-md-12">
                    <input type="number" id="add-head-total-member" class="form-control form-control-sm @error('head_total_member') is-invalid @enderror" name="head_total_member" value="{{ old('head_total_member') }}" autocomplete="add-head-total-member" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-first-dose" class="form-label">1st Dose</label>
                  <div class="col-md-12">
                    <input type="date" id="add-head-first-dose" class="form-control form-control-sm @error('head_first_dose') is-invalid @enderror" name="head_first_dose" value="{{ old('head_first_dose') }}" autocomplete="add-head-first-dose" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-second-dose" class="form-label">2nd Dose</label>
                  <div class="col-md-12">
                    <input type="date" id="add-head-second-dose" class="form-control form-control-sm @error('head_second_dose') is-invalid @enderror" name="head_second_dose" value="{{ old('head_second_dose') }}" autocomplete="add-head-second-dose" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-brand" class="form-label mb-0">Brand</label>
                  <div class="col-md-12">
                    <input type="text" id="add-head-brand" class="form-control form-control-sm @error('head_brand') is-invalid @enderror" name="head_brand" value="{{ old('head_brand') }}" autocomplete="add-head-brand" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-booster" class="form-label">Booster</label>
                  <div class="col-md-12">
                    <input type="date" id="add-head-booster" class="form-control form-control-sm @error('head_booster') is-invalid @enderror" name="head_booster" value="{{ old('head_booster') }}" autocomplete="add-head-booster" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-head-booster-brand" class="form-label mb-0">Brand</label>
                  <div class="col-md-12">
                    <input type="text" id="add-head-booster-brand" class="form-control form-control-sm @error('head_booster_brand') is-invalid @enderror" name="head_booster_brand" value="{{ old('head_booster_brand') }}" autocomplete="add-head-booster-brand" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
              </div>
            </div>
            <div id="wife" class="col-8 overflow-auto d-none residents-reg-cont">
              <div class="col px-2 bg-dark border rounded border-dark">
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-lname" class="form-label mb-0">Last Name</label>
                  <div class="col-md-12">
                    <input type="text" id="add-wife-lname" class="form-control form-control-sm @error('wife_last_name') is-invalid @enderror" name="wife_last_name" value="{{ old('wife_last_name') }}" autocomplete="add-wife-lname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-fname" class="form-label mb-0">First Name</label>
                  <div class="col-md-12">
                    <input type="text" id="add-wife-fname" class="form-control form-control-sm @error('wife_first_name') is-invalid @enderror" name="wife_first_name" value="{{ old('wife_first_name') }}" autocomplete="add-wife-fname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-mname" class="form-label mb-0">Middle Name</label>
                  <div class="col-md-12">
                    <input type="text" id="add-wife-mname" class="form-control form-control-sm @error('wife_middle_name') is-invalid @enderror" name="wife_middle_name" value="{{ old('wife_middle_name') }}" autocomplete="add-wife-mname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-sname" class="form-label mb-0">Suffix (Optional)</label>
                  <div class="col-md-12">
                    <input type="text" id="add-wife-sname" class="form-control form-control-sm @error('wife_suffix_name') is-invalid @enderror" name="wife_suffix_name" value="{{ old('wife_suffix_name') }}" autocomplete="add-wife-sname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-4 mx-auto">
                  <label for="add-wife-bday" class="form-label">Birthday</label>
                  <div class="col-md-12">
                    <input type="date" id="add-wife-bday" class="form-control form-control-sm @error('wife_birthday') is-invalid @enderror" name="wife_birthday" value="{{ old('wife_birthday') }}" autocomplete="add-wife-bday" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-bplace" class="form-label mb-0">Birthplace</label>
                  <div class="col-md-12">
                    <input type="text" id="add-wife-bplace" class="form-control form-control-sm @error('wife_birthplace') is-invalid @enderror" name="wife_birthplace" value="{{ old('wife_birthplace') }}" autocomplete="add-wife-bplace" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-c-status" class="form-label">Status</label>
                  <div class="col-md-12">
                    <select id="add-wife-c-status" class="form-select form-select-sm @error('wife_civil_status') is-invalid @enderror" name="wife_civil_status" value="{{ old('wife_civil_status') }}" autocomplete="add-wife-c-status" autofocus>
                      <option value="">Choose one...</option>
                      <option value="single">Single</option>
                      <option value="married">Married</option>
                      <option value="divorced">Divorced</option>
                      <option value="separated">Separated</option>
                      <option value="widowed">Widowed</option>
                    </select>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-educ-attainment" class="form-label mb-0">Educational Attainment</label>
                  <div class="col-md-12">
                    <input type="text" id="add-wife-educ-attainment" class="form-control form-control-sm @error('wife_educational_attainment') is-invalid @enderror" name="wife_educational_attainment" value="{{ old('wife_educational_attainment') }}" autocomplete="add-wife-educ-attainment" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mb-4 mx-auto">
                  <label for="add-wife-zone" class="form-label">Zone</label>
                  <div class="col-md-12">
                    <select id="add-wife-zone" class="form-select form-select-sm @error('wife_zone') is-invalid @enderror" name="wife_zone" value="{{ old('wife_zone') }}" autocomplete="add-wife-zone" autofocus>
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
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-religion" class="form-label mb-0">Religion</label>
                  <div class="col-md-12">
                    <input type="text" id="add-wife-religion" class="form-control form-control-sm @error('wife_religion') is-invalid @enderror" name="wife_religion" value="{{ old('wife_religion') }}" autocomplete="add-wife-religion" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-occupation" class="form-label mb-0">Occupation</label>
                  <div class="col-md-12">
                    <input type="text" id="add-wife-occupation" class="form-control form-control-sm @error('wife_occupation') is-invalid @enderror" name="wife_occupation" value="{{ old('wife_occupation') }}" autocomplete="add-wife-occupation" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-contact" class="form-label mb-0">Contact</label>
                  <div class="col-md-12">
                    <input type="tel" id="add-wife-contact" class="form-control form-control-sm @error('wife_contact') is-invalid @enderror" name="wife_contact" value="{{ old('wife_contact') }}" autocomplete="add-wife-contact" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-philhealth" class="form-label">Philhealth</label>
                  <div class="col-md-12">
                    <select id="add-wife-philhealth" class="form-select form-select-sm @error('wife_philhealth') is-invalid @enderror" name="wife_philhealth" value="{{ old('wife_philhealth') }}" autocomplete="add-wife-philhealth" autofocus>
                      <option value="">Choose one...</option>
                      <option value="true">Yes</option>
                      <option value="false">No</option>
                    </select>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-total-member" class="form-label mb-0">Total Member of the Family</label>
                  <div class="col-md-12">
                    <input type="number" id="add-wife-total-member" class="form-control form-control-sm @error('wife_total_member') is-invalid @enderror" name="wife_total_member" value="{{ old('wife_total_member') }}" autocomplete="add-wife-total-member" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-first-dose" class="form-label">1st Dose</label>
                  <div class="col-md-12">
                    <input type="date" id="add-wife-first-dose" class="form-control form-control-sm @error('wife_first_dose') is-invalid @enderror" name="wife_first_dose" value="{{ old('wife_first_dose') }}" autocomplete="add-wife-first-dose" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-second-dose" class="form-label">2nd Dose</label>
                  <div class="col-md-12">
                    <input type="date" id="add-wife-second-dose" class="form-control form-control-sm @error('wife_second_dose') is-invalid @enderror" name="wife_second_dose" value="{{ old('wife_second_dose') }}" autocomplete="add-wife-second-dose" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-brand" class="form-label mb-0">Brand</label>
                  <div class="col-md-12">
                    <input type="text" id="add-wife-brand" class="form-control form-control-sm @error('wife_brand') is-invalid @enderror" name="wife_brand" value="{{ old('wife_brand') }}" autocomplete="add-wife-brand" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-booster" class="form-label">Booster</label>
                  <div class="col-md-12">
                    <input type="date" id="add-wife-booster" class="form-control form-control-sm @error('wife_booster') is-invalid @enderror" name="wife_booster" value="{{ old('wife_booster') }}" autocomplete="add-wife-booster" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-wife-booster-brand" class="form-label mb-0">Brand</label>
                  <div class="col-md-12">
                    <input type="text" id="add-wife-booster-brand" class="form-control form-control-sm @error('wife_booster_brand') is-invalid @enderror" name="wife_booster_brand" value="{{ old('wife_booster_brand') }}" autocomplete="add-wife-booster-brand" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
              </div>
            </div>
            <div id="family-member" class="col-8 overflow-auto d-none residents-reg-cont">
              <div class="d-flex justify-content-end">
                <button type="button" id="add-member-btn" class="btn btn-secondary">Add a member</button>
              </div>
              {{-- <div id="add-member-container" class="col px-2 bg-danger border rounded border-dark">
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-family-member-lname" class="form-label mb-0">Last Name</label>
                  <div class="col-md-12">
                    <input type="text" id="add-family-member-lname" class="form-control form-control-sm @error('family_member_last_name[]') is-invalid @enderror" name="family_member_last_name[]" value="{{ old('family_member_last_name[]') }}" autocomplete="add-family-member-lname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-family-member-fname" class="form-label mb-0">First Name</label>
                  <div class="col-md-12">
                    <input type="text" id="add-family-member-fname" class="form-control form-control-sm @error('family_member_first_name[]') is-invalid @enderror" name="family_member_first_name[]" value="{{ old('family_member_first_name[]') }}" autocomplete="add-family-member-fname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-family-member-mname" class="form-label mb-0">Middle Name</label>
                  <div class="col-md-12">
                    <input type="text" id="add-family-member-mname" class="form-control form-control-sm @error('family_member_middle_name[]') is-invalid @enderror" name="family_member_middle_name[]" value="{{ old('family_member_middle_name[]') }}" autocomplete="add-family-member-mname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-family-member-sname" class="form-label mb-0">Suffix (Optional)</label>
                  <div class="col-md-12">
                    <input type="text" id="add-family-member-sname" class="form-control form-control-sm @error('family_member_suffix_name[]') is-invalid @enderror" name="family_member_suffix_name[]" value="{{ old('family_member_suffix_name[]') }}" autocomplete="add-family-member-sname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-family-member-first-dose" class="form-label">1st Dose</label>
                  <div class="col-md-12">
                    <input type="date" id="add-family-member-first-dose" class="form-control form-control-sm @error('family_member_first_dose[]') is-invalid @enderror" name="family_member_first_dose[]" value="{{ old('family_member_first_dose[]') }}" autocomplete="add-family-member-first-dose" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-family-member-second-dose" class="form-label">2nd Dose</label>
                  <div class="col-md-12">
                    <input type="date" id="add-family-member-second-dose" class="form-control form-control-sm @error('family_member_second_dose[]') is-invalid @enderror" name="family_member_second_dose[]" value="{{ old('family_member_second_dose[]') }}" autocomplete="add-family-member-second-dose" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-family-member-brand" class="form-label mb-0">Brand</label>
                  <div class="col-md-12">
                    <input type="text" id="add-family-member-brand" class="form-control form-control-sm @error('family_member_brand[]') is-invalid @enderror" name="family_member_brand[]" value="{{ old('family_member_brand[]') }}" autocomplete="add-family-member-brand" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-family-member-booster" class="form-label">Booster</label>
                  <div class="col-md-12">
                    <input type="date" id="add-family-member-booster" class="form-control form-control-sm @error('family_member_booster[]') is-invalid @enderror" name="family_member_booster[]" value="{{ old('family_member_booster[]') }}" autocomplete="add-family-member-booster" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-family-member-booster-brand" class="form-label mb-0">Brand</label>
                  <div class="col-md-12">
                    <input type="text" id="add-family-member-booster-brand" class="form-control form-control-sm @error('family_member_booster_brand[]') is-invalid @enderror" name="family_member_booster_brand[]" value="{{ old('family_member_booster_brand[]') }}" autocomplete="add-family-member-booster-brand" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
              </div> --}}
            </div>
            <div id="additional" class="col-8 overflow-auto d-none residents-reg-cont">
              <div class="col px-2 bg-success border rounded border-dark">
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-lname" class="form-label mb-0">Last Name additional</label>
                  <div class="col-md-12">
                    <input type="text" id="add-lname" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" autocomplete="add-lname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-fname" class="form-label mb-0">First Name</label>
                  <div class="col-md-12">
                    <input type="text" id="add-fname" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" autocomplete="add-fname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-mname" class="form-label mb-0">Middle Name</label>
                  <div class="col-md-12">
                    <input type="text" id="add-mname" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" autocomplete="add-mname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-sname" class="form-label mb-0">Suffix (Optional)</label>
                  <div class="col-md-12">
                    <input type="text" id="add-sname" class="form-control @error('suffix_name') is-invalid @enderror" name="suffix_name" value="{{ old('suffix_name') }}" autocomplete="add-sname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mb-4 mx-auto">
                  <label for="add-zone" class="form-label">Zone</label>
                  <div class="col-md-12">
                    <select id="add-zone" class="form-select @error('zone') is-invalid @enderror" name="zone" value="{{ old('zone') }}" autocomplete="add-zone" autofocus>
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
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-gender" class="form-label">Gender</label>
                  <div class="col-md-12">
                    <select id="add-gender" class="form-select @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" autocomplete="add-gender" autofocus>
                      <option value="">Choose one...</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-contact" class="form-label mb-0">Phone No.</label>
                  <div class="col-md-12">
                    <input type="tel" id="add-contact" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" autocomplete="add-contact" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-email" class="form-label mb-0">Email</label>
                  <div class="col-md-12">
                    <input type="text" id="add-email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="add-email" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-c-status" class="form-label">Civil Status</label>
                  <div class="col-md-12">
                    <select id="add-c-status" class="form-select @error('civil_status') is-invalid @enderror" name="civil_status" value="{{ old('civil_status') }}" autocomplete="add-civil_status" autofocus>
                      <option value="">Choose one...</option>
                      <option value="single">Single</option>
                      <option value="married">Married</option>
                      <option value="divorced">Divorced</option>
                      <option value="separated">Separated</option>
                      <option value="widowed">Widowed</option>
                    </select>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-4 mx-auto">
                  <label for="add-bday" class="form-label">Birthday</label>
                  <div class="col-md-12">
                    <input type="date" id="add-bday" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" autocomplete="add-bday" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mb-4 mx-auto">
                  <label for="add-position" class="form-label">Position</label>
                  <div class="col-md-12">
                    <select id="add-position" class="form-select @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" autocomplete="add-position" autofocus>
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
              </div>
            </div>
            <div id="member" class="col-8 overflow-auto d-none residents-reg-cont">
              <div class="col px-2 bg-warning border rounded border-dark">
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-lname" class="form-label mb-0">Last Name member</label>
                  <div class="col-md-12">
                    <input type="text" id="add-lname" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" autocomplete="add-lname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-fname" class="form-label mb-0">First Name</label>
                  <div class="col-md-12">
                    <input type="text" id="add-fname" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" autocomplete="add-fname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-mname" class="form-label mb-0">Middle Name</label>
                  <div class="col-md-12">
                    <input type="text" id="add-mname" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" autocomplete="add-mname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-sname" class="form-label mb-0">Suffix (Optional)</label>
                  <div class="col-md-12">
                    <input type="text" id="add-sname" class="form-control @error('suffix_name') is-invalid @enderror" name="suffix_name" value="{{ old('suffix_name') }}" autocomplete="add-sname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mb-4 mx-auto">
                  <label for="add-zone" class="form-label">Zone</label>
                  <div class="col-md-12">
                    <select id="add-zone" class="form-select @error('zone') is-invalid @enderror" name="zone" value="{{ old('zone') }}" autocomplete="add-zone" autofocus>
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
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-gender" class="form-label">Gender</label>
                  <div class="col-md-12">
                    <select id="add-gender" class="form-select @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" autocomplete="add-gender" autofocus>
                      <option value="">Choose one...</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-contact" class="form-label mb-0">Phone No.</label>
                  <div class="col-md-12">
                    <input type="tel" id="add-contact" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" autocomplete="add-contact" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-email" class="form-label mb-0">Email</label>
                  <div class="col-md-12">
                    <input type="text" id="add-email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="add-email" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mx-auto">
                  <label for="add-c-status" class="form-label">Civil Status</label>
                  <div class="col-md-12">
                    <select id="add-c-status" class="form-select @error('civil_status') is-invalid @enderror" name="civil_status" value="{{ old('civil_status') }}" autocomplete="add-civil_status" autofocus>
                      <option value="">Choose one...</option>
                      <option value="single">Single</option>
                      <option value="married">Married</option>
                      <option value="divorced">Divorced</option>
                      <option value="separated">Separated</option>
                      <option value="widowed">Widowed</option>
                    </select>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-4 mx-auto">
                  <label for="add-bday" class="form-label">Birthday</label>
                  <div class="col-md-12">
                    <input type="date" id="add-bday" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" autocomplete="add-bday" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-12 mb-2 mb-4 mx-auto">
                  <label for="add-position" class="form-label">Position</label>
                  <div class="col-md-12">
                    <select id="add-position" class="form-select @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" autocomplete="add-position" autofocus>
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
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <input id="add-officials-btn" value="Add" type="submit" class="btn btn-warning rounded mx-auto px-5">
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

{{-- <script defer src="{{ asset('js/profilingValidation.js') }}"></script> --}}

<script>
  $(document).ready(function(){

    const head = document.getElementById('head');
    const headBtn = document.getElementById('head-btn');
    const wife = document.getElementById('wife');
    const wifeBtn = document.getElementById('wife-btn');
    const familyMember = document.getElementById('family-member');
    const familyMemberBtn = document.getElementById('family-member-btn');
    const additional = document.getElementById('additional');
    const additionalBtn = document.getElementById('additional-btn');
    const member = document.getElementById('member');
    const memberBtn = document.getElementById('member-btn');

    headBtn.addEventListener('click', function(){
      headBtn.classList.add('border-start');
      wifeBtn.classList.remove('border-start');
      familyMemberBtn.classList.remove('border-start');
      additionalBtn.classList.remove('border-start');
      memberBtn.classList.remove('border-start');
      head.classList.remove('d-none');
      head.classList.add('d-block');
      wife.classList.remove('d-block');
      wife.classList.add('d-none');
      familyMember.classList.remove('d-block');
      familyMember.classList.add('d-none');
      additional.classList.remove('d-block');
      additional.classList.add('d-none');
      member.classList.remove('d-block');
      member.classList.add('d-none');
    });

    wifeBtn.addEventListener('click', function(){
      wifeBtn.classList.add('border-start');
      headBtn.classList.remove('border-start');
      familyMemberBtn.classList.remove('border-start');
      additionalBtn.classList.remove('border-start');
      memberBtn.classList.remove('border-start');
      wife.classList.remove('d-none');
      wife.classList.add('d-block');
      head.classList.remove('d-block');
      head.classList.add('d-none');
      familyMember.classList.remove('d-block');
      familyMember.classList.add('d-none');
      additional.classList.remove('d-block');
      additional.classList.add('d-none');
      member.classList.remove('d-block');
      member.classList.add('d-none');
    });

    familyMemberBtn.addEventListener('click', function(){
      familyMemberBtn.classList.add('border-start');
      headBtn.classList.remove('border-start');
      wifeBtn.classList.remove('border-start');
      additionalBtn.classList.remove('border-start');
      memberBtn.classList.remove('border-start');
      familyMember.classList.remove('d-none');
      familyMember.classList.add('d-block');
      wife.classList.remove('d-block');
      wife.classList.add('d-none');
      head.classList.remove('d-block');
      head.classList.add('d-none');
      additional.classList.remove('d-block');
      additional.classList.add('d-none');
      member.classList.remove('d-block');
      member.classList.add('d-none');
    });

    additionalBtn.addEventListener('click', function(){
      additionalBtn.classList.add('border-start');
      headBtn.classList.remove('border-start');
      wifeBtn.classList.remove('border-start');
      familyMemberBtn.classList.remove('border-start');
      memberBtn.classList.remove('border-start');
      additional.classList.remove('d-none');
      additional.classList.add('d-block');
      wife.classList.remove('d-block');
      wife.classList.add('d-none');
      head.classList.remove('d-block');
      head.classList.add('d-none');
      familyMember.classList.remove('d-block');
      familyMember.classList.add('d-none');
      member.classList.remove('d-block');
      member.classList.add('d-none');
    });

    memberBtn.addEventListener('click', function(){
      memberBtn.classList.add('border-start');
      headBtn.classList.remove('border-start');
      wifeBtn.classList.remove('border-start');
      familyMemberBtn.classList.remove('border-start');
      additionalBtn.classList.remove('border-start');
      member.classList.remove('d-none');
      member.classList.add('d-block');
      wife.classList.remove('d-block');
      wife.classList.add('d-none');
      head.classList.remove('d-block');
      head.classList.add('d-none');
      familyMember.classList.remove('d-block');
      familyMember.classList.add('d-none');
      additional.classList.remove('d-block');
      additional.classList.add('d-none');
    });


    const addMember = document.getElementById('add-member-btn');
    let memberCount = 0;

    addMember.addEventListener('click', function(){
      memberCount++;
      $('#family-member').append(`
      <div class="col px-2 bg-white border rounded border-dark my-2 member-container-${memberCount}">
        <div class="d-flex justify-content-between px-1 py-2">
          <p class="my-0 member-name">Member ${memberCount}</p>
          <span data-member="${memberCount}" style="cursor: pointer;" class="text-dark member-close-btn">&times;</span>
        </div>
        <div class="col-12 mb-2 mx-auto">
          <label for="add-family-member-lname" class="form-label mb-0">Last Name</label>
          <div class="col-md-12">
            <input type="text" id="add-family-member-lname" class="form-control form-control-sm @error('family_member_last_name[]') is-invalid @enderror" name="family_member_last_name[]" value="{{ old('family_member_last_name[]') }}" autocomplete="add-family-member-lname" autofocus>

                <span class="invalid-feedback" role="alert"></span>
          </div>
        </div>
        <div class="col-12 mb-2 mx-auto">
          <label for="add-family-member-fname" class="form-label mb-0">First Name</label>
          <div class="col-md-12">
            <input type="text" id="add-family-member-fname" class="form-control form-control-sm @error('family_member_first_name[]') is-invalid @enderror" name="family_member_first_name[]" value="{{ old('family_member_first_name[]') }}" autocomplete="add-family-member-fname" autofocus>

                <span class="invalid-feedback" role="alert"></span>
          </div>
        </div>
        <div class="col-12 mb-2 mx-auto">
          <label for="add-family-member-mname" class="form-label mb-0">Middle Name</label>
          <div class="col-md-12">
            <input type="text" id="add-family-member-mname" class="form-control form-control-sm @error('family_member_middle_name[]') is-invalid @enderror" name="family_member_middle_name[]" value="{{ old('family_member_middle_name[]') }}" autocomplete="add-family-member-mname" autofocus>

                <span class="invalid-feedback" role="alert"></span>
          </div>
        </div>
        <div class="col-12 mb-2 mx-auto">
          <label for="add-family-member-sname" class="form-label mb-0">Suffix (Optional)</label>
          <div class="col-md-12">
            <input type="text" id="add-family-member-sname" class="form-control form-control-sm @error('family_member_suffix_name[]') is-invalid @enderror" name="family_member_suffix_name[]" value="{{ old('family_member_suffix_name[]') }}" autocomplete="add-family-member-sname" autofocus>

                <span class="invalid-feedback" role="alert"></span>
          </div>
        </div>
        <div class="col-12 mb-2 mx-auto">
          <label for="add-family-member-first-dose" class="form-label">1st Dose</label>
          <div class="col-md-12">
            <input type="date" id="add-family-member-first-dose" class="form-control form-control-sm @error('family_member_first_dose[]') is-invalid @enderror" name="family_member_first_dose[]" value="{{ old('family_member_first_dose[]') }}" autocomplete="add-family-member-first-dose" autofocus>

                <span class="invalid-feedback" role="alert"></span>
          </div>
        </div>
        <div class="col-12 mb-2 mx-auto">
          <label for="add-family-member-second-dose" class="form-label">2nd Dose</label>
          <div class="col-md-12">
            <input type="date" id="add-family-member-second-dose" class="form-control form-control-sm @error('family_member_second_dose[]') is-invalid @enderror" name="family_member_second_dose[]" value="{{ old('family_member_second_dose[]') }}" autocomplete="add-family-member-second-dose" autofocus>

                <span class="invalid-feedback" role="alert"></span>
          </div>
        </div>
        <div class="col-12 mb-2 mx-auto">
          <label for="add-family-member-brand" class="form-label mb-0">Brand</label>
          <div class="col-md-12">
            <input type="text" id="add-family-member-brand" class="form-control form-control-sm @error('family_member_brand[]') is-invalid @enderror" name="family_member_brand[]" value="{{ old('family_member_brand[]') }}" autocomplete="add-family-member-brand" autofocus>

                <span class="invalid-feedback" role="alert"></span>
          </div>
        </div>
        <div class="col-12 mb-2 mx-auto">
          <label for="add-family-member-booster" class="form-label">Booster</label>
          <div class="col-md-12">
            <input type="date" id="add-family-member-booster" class="form-control form-control-sm @error('family_member_booster[]') is-invalid @enderror" name="family_member_booster[]" value="{{ old('family_member_booster[]') }}" autocomplete="add-family-member-booster" autofocus>

                <span class="invalid-feedback" role="alert"></span>
          </div>
        </div>
        <div class="col-12 mb-2 mx-auto">
          <label for="add-family-member-booster-brand" class="form-label mb-0">Brand</label>
          <div class="col-md-12">
            <input type="text" id="add-family-member-booster-brand" class="form-control form-control-sm @error('family_member_booster_brand[]') is-invalid @enderror" name="family_member_booster_brand[]" value="{{ old('family_member_booster_brand[]') }}" autocomplete="add-family-member-booster-brand" autofocus>

                <span class="invalid-feedback" role="alert"></span>
          </div>
        </div>
      </div>`);
      $('.member-close-btn').click(function(){
        const memberNum = $(this).attr('data-member');
        // if($('.member-name').text() == `Member ${memberCount}`){

        // }
        $('.member-container-' + memberNum).remove();
      });
    });
    memberCount = 0;

    // const memberCloseBtn = document.getElementById('member-close-btn');
    // memberCloseBtn.addEventListener('click', function(){
    //   console.log(memberCount);
    //   $('.member-container').remove();
    // })

    fetchData();

    function fetchData(){
      $.ajax({
        url: '/admin/get-officials',
        type: 'GET',
        dataType: 'json',
        success: function(response){
          $('tbody').html('');
          $.each(response.officials, function(key, official){
            if(official.profile_img == null){
              if(official.sname == null){
                $('tbody').append(`<tr>
                  <td id="brgy-official-id" class="text-center align-middle"><img style="height: 2rem; width: 2rem;" src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1"></td>
                  <td id="brgy-official-name" class="text-center align-middle">${official.fname} ${official.mname} ${official.lname}</td>
                  <td id="brgy-official-zone" class="text-center align-middle">${official.zone}</td>
                  <td id="brgy-official-gender" class="text-center align-middle">${official.gender}</td>
                  <td id="brgy-official-bday" class="text-center align-middle">${official.bday}</td>
                  <td id="brgy-official-position" class="text-center align-middle">${official.position}</td>
                  <td class="text-center align-middle">
                    <i class="fa-solid fa-eye mx-1 view-btn" data-bs-toggle="modal" data-id="${official.id}" data-bs-target="#viewOfficialModal"></i>
                    <i class="fa-solid fa-pen mx-1 edit-btn" data-bs-toggle="modal" data-id="${official.id}" data-bs-target="#editOfficialModal"></i>
                    <i class="fa-solid fa-trash mx-1 delete-btn" data-bs-toggle="modal" data-id="${official.id}" data-bs-target="#deleteOfficialModal"></i>
                  </td>
                </tr>`);
              }else{
                $('tbody').append(`<tr>
                  <td id="brgy-official-id" class="text-center align-middle"><img style="height: 2rem; width: 2rem;" src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1"></td>
                  <td id="brgy-official-name" class="text-center align-middle">${official.fname} ${official.mname} ${official.lname} ${official.sname}</td>
                  <td id="brgy-official-zone" class="text-center align-middle">${official.zone}</td>
                  <td id="brgy-official-gender" class="text-center align-middle">${official.gender}</td>
                  <td id="brgy-official-bday" class="text-center align-middle">${official.bday}</td>
                  <td id="brgy-official-position" class="text-center align-middle">${official.position}</td>
                  <td class="text-center align-middle">
                    <i class="fa-solid fa-eye mx-1 view-btn" data-bs-toggle="modal" value="${official.id}" data-id="${official.id}" data-bs-target="#viewOfficialModal"></i>
                    <i class="fa-solid fa-pen mx-1 edit-btn" data-bs-toggle="modal" value="${official.id}" data-id="${official.id}" data-bs-target="#editOfficialModal"></i>
                    <i class="fa-solid fa-trash mx-1 delete-btn" data-bs-toggle="modal" value="${official.id}" data-id="${official.id}" data-bs-target="#deleteOfficialModal"></i>
                  </td>
                </tr>`);
              }
            }else{
              if(official.sname == null){
                $('tbody').append(`<tr>
                  <td id="brgy-official-id" class="text-center align-middle"><img src="" style="height: 2rem; width: 2rem;"></td>
                  <td id="brgy-official-name" class="text-center align-middle">${official.fname} ${official.mname} ${official.lname}</td>
                  <td id="brgy-official-zone" class="text-center align-middle">${official.zone}</td>
                  <td id="brgy-official-gender" class="text-center align-middle">${official.gender}</td>
                  <td id="brgy-official-bday" class="text-center align-middle">${official.bday}</td>
                  <td id="brgy-official-position" class="text-center align-middle">${official.position}</td>
                  <td class="text-center align-middle">
                    <i class="fa-solid fa-eye mx-1 view-btn" data-bs-toggle="modal" data-id="${official.id}" data-bs-target="#viewOfficialModal"></i>
                    <i class="fa-solid fa-pen mx-1 edit-btn" data-bs-toggle="modal" data-id="${official.id}" data-bs-target="#editOfficialModal"></i>
                    <i class="fa-solid fa-trash mx-1 delete-btn" data-bs-toggle="modal" data-id="${official.id}" data-bs-target="#deleteOfficialModal"></i>
                  </td>
                </tr>`);
              }else{
                $('tbody').append(`<tr>
                  <td id="brgy-official-id" class="text-center align-middle"><img src="{{ asset('storage/images/brgyOfficials/${data.profile_img}') }}" style="height: 2rem; width: 2rem;"></td>
                  <td id="brgy-official-name" class="text-center align-middle">${official.fname} ${official.mname} ${official.lname} ${official.sname}</td>
                  <td id="brgy-official-zone" class="text-center align-middle">${official.zone}</td>
                  <td id="brgy-official-gender" class="text-center align-middle">${official.gender}</td>
                  <td id="brgy-official-bday" class="text-center align-middle">${official.bday}</td>
                  <td id="brgy-official-position" class="text-center align-middle">${official.position}</td>
                  <td class="text-center align-middle">
                    <i class="fa-solid fa-eye mx-1 view-btn" data-bs-toggle="modal" value="${official.id}" data-id="${official.id}" data-bs-target="#viewOfficialModal"></i>
                    <i class="fa-solid fa-pen mx-1 edit-btn" data-bs-toggle="modal" value="${official.id}" data-id="${official.id}" data-bs-target="#editOfficialModal"></i>
                    <i class="fa-solid fa-trash mx-1 delete-btn" data-bs-toggle="modal" value="${official.id}" data-id="${official.id}" data-bs-target="#deleteOfficialModal"></i>
                  </td>
                </tr>`);
              }
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
            showError('add-display-picture', res.messages.display_picture);
            showError('add-lname', res.messages.last_name);
            showError('add-fname', res.messages.first_name);
            showError('add-mname', res.messages.middle_name);
            showError('add-sname', res.messages.suffix_name);
            showError('add-zone', res.messages.zone);
            showError('add-gender', res.messages.gender);
            showError('add-contact', res.messages.contact);
            showError('add-email', res.messages.email);
            showError('add-c-status', res.messages.civil_status);
            showError('add-bday', res.messages.birthday);
            showError('add-position', res.messages.position);
            $('#add-officials-btn').val('Add');
            $('#add-officials-btn').removeAttr('disabled');
            $('#add-close-btn').click(function(){
              removeValidationClasses('#add-official-form');
              $('#add-official-form')[0].reset();
            });
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
            showError('edit-display-picture', res.messages.display_picture);
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
          document.getElementById('view-display-img').src = "https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1";
          document.getElementById('view-full-name').innerText = 'loading...';
            document.getElementById('view-position').innerText = 'loading...';
            document.getElementById('view-zone').innerText = 'loading...';
            document.getElementById('view-gender').innerText = 'loading...';
            document.getElementById('view-contact').innerText = 'loading...';
            document.getElementById('view-email').innerText = 'loading...';
            document.getElementById('view-bday').innerText = 'loading...';
            document.getElementById('view-c-status').innerText = 'loading...';
        },
        success: function(data){
          if(data.profile_img == null){
            document.getElementById('view-display-img').src = "https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1";
          }else{
            document.getElementById('view-display-img').src = `{{ asset('storage/images/brgyOfficials/${data.profile_img}') }}`;
          }

          if(data.sname != null){
            document.getElementById('view-full-name').innerText = `${data.fname} ${data.mname} ${data.lname} ${data.sname}`;
            document.getElementById('view-position').innerText = data.position;
            document.getElementById('view-zone').innerText = data.zone;
            document.getElementById('view-gender').innerText = data.gender;
            document.getElementById('view-contact').innerText = data.contact;
            document.getElementById('view-email').innerText = data.email;
            document.getElementById('view-bday').innerText = data.bday;
            document.getElementById('view-c-status').innerText = data.c_status;
          }else{
            document.getElementById('view-full-name').innerText = `${data.fname} ${data.mname} ${data.lname}`;
            document.getElementById('view-position').innerText = data.position;
            document.getElementById('view-zone').innerText = data.zone;
            document.getElementById('view-gender').innerText = data.gender;
            document.getElementById('view-contact').innerText = data.contact;
            document.getElementById('view-email').innerText = data.email;
            document.getElementById('view-bday').innerText = data.bday;
            document.getElementById('view-c-status').innerText = data.c_status;
          }
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
          // document.getElementById('edit-profile-img').src = "https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1";
          editLname.value = "loading...";
          editLname.setAttribute('readOnly', 'readOnly');
          editFname.value = "loading...";
          editFname.setAttribute('readOnly', 'readOnly');
          editMname.value = "loading...";
          editMname.setAttribute('readOnly', 'readOnly');
          editSname.value = "loading...";
          editSname.setAttribute('readOnly', 'readOnly');
          editZone.value = "";
          editZone.setAttribute('readOnly', 'readOnly');
          editGender.value = "";
          editGender.setAttribute('readOnly', 'readOnly');
          editContact.value = "loading...";
          editContact.setAttribute('readOnly', 'readOnly');
          editEmail.value = "loading...";
          editEmail.setAttribute('readOnly', 'readOnly');
          editCstatus.value = "";
          editCstatus.setAttribute('readOnly', 'readOnly');
          editBday.value = "loading...";
          editBday.setAttribute('readOnly', 'readOnly');
          editPosition.value = "";
          editPosition.setAttribute('readOnly', 'readOnly');
        },
        success: function(data){
          document.getElementById('official-id').value = data.id;
          // document.getElementById('edit-profile-img').src = `{{ asset('storage/images/brgyOfficials/${data.profile_img}') }}`;
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