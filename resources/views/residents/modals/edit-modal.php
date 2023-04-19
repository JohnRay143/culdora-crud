<div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UPDATE RESIDENT INFORMATION</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" id="edit-form">
                  @csrf
                  @method('put')
              <div class="form-group">
                  <label for="edit-name">Name</label>
                  <input type="text" name="name" class="form-control" id="edit-name" aria-describedby="emailHelp" placeholder="John Wick">
              </div>
              <div class="form-group">
                  <label for="edit-address">Address</label>
                  <input type="text" name="address" class="form-control" id="edit-address" aria-describedby="emailHelp" placeholder="San Francisco California">
              </div>
              <div class="form-group">
                  <label for="edit-mobile">Mobile Number</label>
                  <input type="text" name="mobile" class="form-control" id="edit-mobile" aria-describedby="emailHelp" placeholder="09154548798">
              </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="update-button">Save changes</button>
      </div>
    </div>
  </div>
</div>