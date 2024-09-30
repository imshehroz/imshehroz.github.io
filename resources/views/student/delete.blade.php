<script>
function openDeleteModal(id) { 
    console.log("Opening Delete Modal for ID:", id);
    // Set the form action to the delete route
    document.getElementById('deleteForm').action = `/student/${id}`;
  
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
</div>