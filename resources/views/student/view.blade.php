<script>
function openViewModal(name = '', phone = '', cnic = '', department = '', date_of_birth = '', address = '', gender = '') {
    console.log("Opening View Modal with:", { name, phone, cnic, department, date_of_birth, address, gender });
    // Set values in the modal fields
    document.getElementById('viewName').textContent = name || '';
    document.getElementById('viewPhone').textContent = phone || '';
    document.getElementById('viewCNIC').textContent = cnic || '';
    document.getElementById('viewDepartment').textContent = department || '';
    document.getElementById('viewDateOfBirth').textContent = date_of_birth || '';
    document.getElementById('viewAddress').textContent = address || '';
    document.getElementById('viewGender').textContent = gender || '';

    // Show the modal
    var myModal = new bootstrap.Modal(document.getElementById('viewModal'));
    myModal.show();
}
</script>
 <!-- Modal for Viewing Student Details -->
<div class="view-model">
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewModalLabel">View Student Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Name:</label>
          <input type="text" id="viewName" class="form-control" value="{{ $student->name }}" readonly>
        </div>
        <div class="mb-3">
          <label class="form-label">Phone:</label>
          <input type="text" id="viewPhone" class="form-control" value="{{ $student->phone }}" readonly>
        </div>
          <div class="mb-3">
          <label class="form-label">CNIC:</label>
          <input type="text" id="viewCNIC" class="form-control" value="{{ $student->cnic }}" readonly>
        </div>
        <div class="mb-3">
          <label class="form-label">Department:</label>
          <input type="text" id="viewDepartment" class="form-control" value="{{ $student->department }}" readonly>
        </div>
        <div class="mb-3">
          <label class="form-label">D.O.B:</label>
          <input type="text" id="viewDateOfBirth" class="form-control" value="{{ $student->date_of_birth }}" readonly>
        </div>
        <div class="mb-3">
          <label class="form-label">Address:</label>
          <input id="viewAddress" class="form-control" value="{{ $student->address }}" readonly>
        </div>
        <div class="mb-3">
          <label class="form-label">Gender:</label>
          <input id="viewGender" class="form-control" value="{{ $student->gender }}" readonly>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>

