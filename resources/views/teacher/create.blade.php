 <script>
    function openCreateModal(id, name = '', phone = '', cnic = '', department = '', date_of_birth = '', address = '', gender = '') {
    // Set form action
    document.getElementById('createForm').action = `/teacher/${id}`;

    // Set values in the form fields, or default to an empty string if undefined
    document.getElementById('createName').value = name || '';
    document.getElementById('createPhone').value = phone || '';
    document.getElementById('createCNIC').value = cnic || '';
    document.getElementById('createDateOfBirth').value = date_of_birth || '';
    document.getElementById('createAddress').value = address || '';

    // Set gender radio buttons
    document.getElementById('createMale').checked = gender === 'male';
    document.getElementById('createFemale').checked = gender === 'female';

    // Set the selected department
    const departmentSelect = document.getElementById('createDepartment');
    for (const option of departmentSelect.options) {
        option.selected = option.value === department;
    }

    // Show the modal
    var myModal = new bootstrap.Modal(document.getElementById('createModal'));
    myModal.show();
}
</script>
<!-- Modal for Create -->
 <div class="create-model">
 <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel">create teacher</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="createForm" method="POST" action="">
          @csrf
          @method('POST')
          <div class="mb-3">
            <label class="form-label">Name:
             @error('name')
                <span class="text-danger">*</span>
            @enderror</label>
            <input type="text" id="createName" class="form-control" name="name" placeholder="Enter_your_name_here">
            @error('name')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Phone:</label>
             @error('phone')
                <span class="text-danger">*</span>
            @enderror
            <input type="text" id="createPhone" class="form-control" name="phone" placeholder="Enter_your_phone_here">
            @error('phone')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">CNIC:</label>
             @error('cnic')
                <span class="text-danger">*</span>
            @enderror
            <input type="text" id="createCNIC" class="form-control" name="cnic" placeholder="Enter_your_cnic_here">
            @error('cnic')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Department: @error('department')
                <span class="text-danger">*</span>
            @enderror</label>
            <select class="form-control" id="createDepartment" name="department">
              <option value="">-- Please Select --</option>
              <option value="Software Engineering">Software Engineering</option>
              <option value="Computer Science">Computer Science</option>
              <option value="Artificial Intelligence">Artificial Intelligence</option>
              <option value="Business Sciences">Business Sciences</option>
              <option value="Social Sciences">Social Sciences</option>
              <option value="Accounting & Finance">Accounting & Finance</option>
              <option value="Psychology">Psychology</option>
            </select>
            @error('department')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">D.O.B:</label>
             @error('date_of_birth')
                <span class="text-danger">*</span>
            @enderror
            <input type="date" id="createDateOfBirth" class="form-control" name="date_of_birth">
            @error('date_of_birth')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Address:
            @error('address')
                <span class="text-danger">*</span>
            @enderror</label>
            <input type="text" id="createAddress" class="form-control" name="address" placeholder="Enter_your_address_here">
            @error('address')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Gender:
              @error('gender')
                <span class="text-danger">*</span>
            @enderror     
            @error('gender')
              <div class="error text-danger">{{ $message }}</div>
            @enderror</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="createMale" value="male">
              <label class="form-check-label" for="createMale">Male</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="createFemale" value="female">
              <label class="form-check-label" for="createFemale">Female</label>
            </div>
          </div>
           <button type="submit" value="Save" class="btn btn-primary">Save</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
 </div>   
<div>

