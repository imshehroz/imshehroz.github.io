  <script>
    function openCreateModal(id, name = '', location = '') {
    // Set form action
    document.getElementById('createForm').action = `/department/${id}`;

    // Set values in the form fields, or default to an empty string if undefined
    document.getElementById('createName').value = name || '';
    document.getElementById('createLocation').value = location || '';
    
    // Show the modal
    var myModal = new bootstrap.Modal(document.getElementById('createModal'));
    myModal.show();
}

    function openEditModal(id, name = '', location = '') {
    // Set form action
    document.getElementById('editForm').action = `/department/${id}`;

    // Set values in the form fields, or default to an empty string if undefined
    document.getElementById('editName').value = name || '';
    document.getElementById('editLocation').value = location || '';
    
    // Show the modal
    var myModal = new bootstrap.Modal(document.getElementById('editModal'));
    myModal.show();
}

function openViewModal(name = '', location = '') {
    console.log("Opening View Modal with:", { name, location});
    // Set values in the modal fields
    document.getElementById('viewName').textContent = name || '';
    document.getElementById('viewLocation').textContent = location || '';
    
    // Show the modal
    var myModal = new bootstrap.Modal(document.getElementById('viewModal'));
    myModal.show();
}

function openDeleteModal(id) { 
    console.log("Opening Delete Modal for ID:", id);
    // Set the form action to the delete route
    document.getElementById('deleteForm').action = `/department/${id}`;
  
    // Show the modal
    var myModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    myModal.show();
}
</script>

<!-- Modal for Delete -->
<div class="delete-model">
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">DELETE!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to DELETE this record?</p>
      </div>
      <div class="modal-footer">
        <form id="deleteForm" method="POST" action="">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

 <!-- Modal for Viewing department Details -->
<div class="view-model">
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewModalLabel">View department Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label class="form-label">Name:</label>
          <input type="text" id="viewName" class="form-control" value="{{ $department->name }}" readonly>
        </div>
        <div class="mb-3">
          <label class="form-label">Location:</label>
          <input type="text" id="viewLocation" class="form-control" value="{{ $department->location }}" readonly>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<!--Model for Edit-->
<div class="edit-model">
 <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Department</h5>
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
  <input type="text" id="editName" class="form-control" name="name" value="{{ $department->name }}">
  @error('name')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
  <label for="name">Location:
  @error('location')
    <span class="text-danger">*</span>
  @enderror</label>
  <input type="text" id="editLocation" class="form-control" name="location" value="{{ $department->location }}">
  @error('location')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
        </div>
   <div>
          <button type="submit" class="btn btn-primary">Save</button>
           </div>
               </form>
               </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal for Create -->
 <div class="create-model">
 <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel">Create Department</h5>
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
            <label class="form-label">Location:</label>
             @error('location')
                <span class="text-danger">*</span>
            @enderror
            <input type="text" id="createLocation" class="form-control" name="location" placeholder="Enter_your_location_here">
            @error('location')
            <div class="error text-danger">{{ $message }}</div>
        @enderror
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
