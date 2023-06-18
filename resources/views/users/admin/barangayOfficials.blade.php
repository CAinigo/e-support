<div class="container-fluid py-5 px-4">
  <div class="container-fluid bg-white rounded p-0">
    <div class="w-100 bg-warning rounded-top d-flex justify-content-between p-2 official-header-cont">
      <h2 class="text-dark">Official List</h2>
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
            <th class="text-center">Photo</th>
            <th class="text-center">Name</th>
            <th class="text-center">Zone</th>
            <th class="text-center">Gender</th>
            <th class="text-center">Birthdate</th>
            <th class="text-center">Position</th>
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
  <form id="delete-official-form" action="{{ route('delete-officials') }}" method="POST">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="deleteOfficialModal" tabindex="-1" aria-labelledby="deleteOfficialModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="deleteOfficialModalLabel">Delete Barangay Official</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="d-flex flex-column align-items-center">
              <input type="hidden" id="delete-official-id" name="id">
            </div>
            <p>Are you sure you want to delete <span id="delete-name"></span>?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            <input id="delete-officials-btn" value="Yes" type="submit" class="btn btn-warning">
          </div>
        </div>
      </div>
    </div>
  </form>

  <!-- Add Brgy Official Modal -->
  <form id="add-official-form" action="{{ route('add-officials') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="brgyOfficialRegModal" tabindex="-1" aria-labelledby="brgyOfficialRegModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable register-modal">
        <div class="modal-content register-content">
          <div class="modal-header py-2 bg-warning">
            <h1 class="modal-title fs-5" id="brgyOfficialRegModalLabel">Add Barangay Official</h1>
            <button type="button" id="add-close-btn" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body px-0">
            <div class="container w-75 px-0 bg-white border rounded border-dark official-reg-cont">
              <div class="row">
                <h4 class="ms-3">Barangay Official</h4>
                <div class="col-11 mb-3 mx-auto">
                  <div class="col-4">
                    <label for="add-display-picture" class="form-label fw-bold pt-0 my-0 display-img-label">Display Picture</label>
                    <input type="file" accept="image/*" id="add-display-picture" class="display-img @error('display_picture') is-invalid @enderror" name="display_picture" value="{{ old('display_picture') }}" autocomplete="display-picture" autofocus>
    
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mx-auto">
                  <label for="add-lname" class="form-label fw-bold mb-0">Last Name</label>
                  <div class="col-md-12">
                    <input type="text" id="add-lname" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" autocomplete="add-lname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mx-auto">
                  <label for="add-fname" class="form-label fw-bold mb-0">First Name</label>
                  <div class="col-md-12">
                    <input type="text" id="add-fname" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" autocomplete="add-fname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mx-auto">
                  <label for="add-mname" class="form-label fw-bold mb-0">Middle Name</label>
                  <div class="col-md-12">
                    <input type="text" id="add-mname" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" autocomplete="add-mname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mx-auto">
                  <label for="add-sname" class="form-label fw-bold mb-0">Suffix (Optional)</label>
                  <div class="col-md-12">
                    <input type="text" id="add-sname" class="form-control @error('suffix_name') is-invalid @enderror" name="suffix_name" value="{{ old('suffix_name') }}" autocomplete="add-sname" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mb-4 mx-auto">
                  <label for="add-zone" class="form-label fw-bold">Zone</label>
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
                <div class="col-11 mb-2 mx-auto">
                  <label for="add-gender" class="form-label fw-bold">Gender</label>
                  <div class="col-md-12">
                    <select id="add-gender" class="form-select @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" autocomplete="add-gender" autofocus>
                      <option value="">Choose one...</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mx-auto">
                  <label for="add-contact" class="form-label fw-bold mb-0">Phone No.</label>
                  <div class="col-md-12">
                    <input type="tel" id="add-contact" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" autocomplete="add-contact" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mx-auto">
                  <label for="add-email" class="form-label fw-bold mb-0">Email</label>
                  <div class="col-md-12">
                    <input type="text" id="add-email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="add-email" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mx-auto">
                  <label for="add-c-status" class="form-label fw-bold">Civil Status</label>
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
                <div class="col-11 mb-4 mx-auto">
                  <label for="add-bday" class="form-label fw-bold">Birthday</label>
                  <div class="col-md-12">
                    <input type="date" id="add-bday" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" autocomplete="add-bday" autofocus>
      
                        <span class="invalid-feedback" role="alert"></span>
                  </div>
                </div>
                <div class="col-11 mb-2 mb-4 mx-auto">
                  <label for="add-position" class="form-label fw-bold">Position</label>
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
                  <td id="brgy-official-id" class="text-center align-middle"><img style="height: 2rem; width: 2rem; border-radius: 50%;" src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1"></td>
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
                  <td id="brgy-official-id" class="text-center align-middle"><img style="height: 2rem; width: 2rem; border-radius: 50%;" src="https://cdn-icons-png.flaticon.com/512/149/149071.png?w=740&t=st=1682225191~exp=1682225791~hmac=35847e176c9e88801c133b577ecf852825415d5b2b3c23f9d76d6c47a5a1e5b1"></td>
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
                  <td id="brgy-official-id" class="text-center align-middle"><img src="images/brgyOfficials/profiles/${official.profile_img}" style="height: 2rem; width: 2rem; border-radius: 50%;"></td>
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
                  <td id="brgy-official-id" class="text-center align-middle"><img src="images/brgyOfficials/profiles/${official.profile_img}" style="height: 2rem; width: 2rem; border-radius: 50%;"></td>
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
            $('#delete-officials-btn').val('Yes');
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
            // document.getElementById('view-display-img').src = `{{ asset('storage/images/brgyOfficials/${data.profile_img}') }}`;
            document.getElementById('view-display-img').src = `{{ asset('images/brgyOfficials/profiles/${data.profile_img}') }}`;
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
      const deleteId = document.getElementById('delete-official-id');

      $.ajax({
        url: '/admin/view-officials/' + id,
        type: 'GET',
        data: {
          'id': id
        },
        beforeSend: function(){
          deleteId.value = "";
          deleteName.innerText = "";
        },
        success: function(data){
          deleteId.value = data.id;
          deleteName.innerText = data.fname;
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