<!-- View Modal -->
<h1 wire:model="lname"></h1>
<div wire:ignore.self class="modal fade" id="viewOfficialModal" tabindex="-1" aria-labelledby="viewOfficialModalLabel" aria-hidden="true">
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
                      <input wire:model="lname" type="text" id="view-lname" disabled class="form-control">
                    </div>
                  </div>
                  <div class="col-3">
                    <label for="view-fname" class="fw-bold">First Name</label>
                    <div class="col-md-12">
                      <input wire:model="fname" type="text" id="view-fname" disabled class="form-control">
                    </div>
                  </div>
                  <div class="col-3">
                    <label for="view-mname" class="fw-bold">Middle Name</label>
                    <div class="col-md-12">
                      <input wire:model="mname" type="text" id="view-mname" disabled class="form-control">
                    </div>
                  </div>
                  <div class="col-3">
                    <label for="view-sname" class="fw-bold">Suffix (optional)</label>
                    <div class="col-md-12">
                      <input  wire:model="sname"type="text" id="view-sname" disabled class="form-control">
                    </div>
                  </div>
                </div>
                <div class="row mb-2">
                  <div class="col-4">
                    <label for="view-zone" class="fw-bold">Zone</label>
                    <div class="col-md-12">
                      <input wire:model="sname" type="text" id="view-zone" disabled class="form-control">
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