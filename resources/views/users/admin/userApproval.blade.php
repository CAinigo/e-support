<div class="container-fluid py-5 px-4">
  <div class="container-fluid bg-white rounded p-0">
    <div class="w-100 bg-warning rounded-top d-flex justify-content-between p-2 official-header-cont">
      <h2 class="text-dark">PRE-REGISTERED ACCOUNT</h2>
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
            <th class="text-center">Full Name</th>
            <th class="text-center">Email Address</th>
            <th class="text-center">Phone Number</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($residents as $resident)
            <tr id="table-row">
              <td class="text-center"><img src="{{ asset('storage/images/brgyOfficials/' . $resident->display_picture) }}" alt="" style="height: 2rem; width: 2rem; border-radius: 50%;"></td>
              <td class="text-center">{{ $resident->fname }} {{ $resident->mname }} {{ $resident->lname }} {{ $resident->sname }}</td>
              <td class="text-center">{{ $resident->email }}</td>
              <td class="text-center">{{ $resident->contact }}</td>
              <td class="text-center">
                <i class="fa-solid fa-eye mx-1 view-btn" data-bs-toggle="modal" data-id="{{ $resident->id }}" data-bs-target="#viewOfficialModal"></i>
                <i class="fa-solid fa-pen mx-1 edit-btn" data-bs-toggle="modal" data-id="{{ $resident->id }}" data-bs-target="#editOfficialModal"></i>
                <i class="fa-solid fa-trash mx-1 delete-btn" data-bs-toggle="modal" data-id="{{ $resident->id }}" data-bs-target="#deleteOfficialModal"></i>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>

      {{ $residents->links() }}
    </div>
  </div>
</div>