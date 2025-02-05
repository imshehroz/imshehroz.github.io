<script>
function openEditModal(id, name = '', phone = '',cnic = '', department = '', date_of_birth = '', address = '', gender = '') {
    // Set form action
    document.getElementById('editForm').action = `/teacher/${id}`;

    // Set values in the form fields, or default to an empty string if undefined
    document.getElementById('editName').value = name || '';
    document.getElementById('editCNIC').value = cnic || '';
    document.getElementById('editPhone').value = phone || '';
    document.getElementById('editDateOfBirth').value = date_of_birth || '';
    document.getElementById('editAddress').value = address || '';

    // Set gender radio buttons
    document.getElementById('editMale').checked = gender === 'male';
    document.getElementById('editFemale').checked = gender === 'female';

    // Set the selected department
    const departmentSelect = document.getElementById('editDepartment');
    for (const option of departmentSelect.options) {
        option.selected = option.value === department;
    }

    // Show the modal
    var myModal = new bootstrap.Modal(document.getElementById('editModal'));
    myModal.show();
}
</script>
<!--Model for Edit-->
<div class="edit-model">
 <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit teacher</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="editForm" method="POST" action="">
          @csrf
          @method('PUT') <!-- Change this to PUT for updates -->
          <div class="mb-3">
    <label for="name">Name:
    @error('name')
      <span class="text-danger">*</span>
    @enderror</label>
  <input type="text" id="editName" class="form-control" name="name" value="{{ $teacher->name }}">
  @error('name')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
  <label for="name">CNIC:
  @error('cnic')
    <span class="text-danger">*</span>
  @enderror</label>
  <input type="text" id="editCNIC" class="form-control" name="cnic" value="{{ $teacher->cnic }}">
  @error('cnic')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
  <label for="name">Phone:
  @error('phone')
    <span class="text-danger">*</span>
  @enderror</label>
  <input type="text" id="editPhone" class="form-control" name="phone" value="{{ $teacher->phone }}">
  @error('phone')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
  <label for="name">Department:
  @error('department')
    <span class="text-danger">*</span>
  @enderror</label>
  <select class="form-control" id="editDepartment" name="department">
    <option value="{{ $teacher->department }}" selected>{{ $teacher->department }}</option>
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
  <label for="name">Date_of_Birth:
  @error('date_of_birth')
    <span class="text-danger">*</span>
  @enderror</label>
  <input type="date" id="editDateOfBirth" class="form-control" name="date_of_birth" value="{{ $teacher->date_of_birth }}">
  @error('date_of_birth')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
  <label for="name">Address:
  @error('address')
    <span class="text-danger">*</span>
  @enderror</label>
  <input type="text" id="editAddress" class="form-control" name="address" value="{{ $teacher->address }}">@error('address')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
  <div class="form-check">
  </div>
  <div class="mb-3">
  <label for="name">Gender:&nbsp&nbsp
   @error('gender')
                <span class="text-danger">*</span>
            @enderror     
            @error('gender')
              <div class="error text-danger">{{ $message }}</div>
            @enderror</label>
    <input class="form-check-input" type="radio" name="gender" id="editMale" value="male" {{ $teacher->gender == 'male' ? 'checked' : '' }}>
    <label class="form-check-label" for="editMale">Male</label>
    &nbsp
    <input class="form-check-input" type="radio" name="gender" id="editFemale" value="female" {{ $teacher->gender == 'female' ? 'checked' : '' }}>
    <label class="form-check-label" for="editFemale">Female</label>
</div>
</div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

