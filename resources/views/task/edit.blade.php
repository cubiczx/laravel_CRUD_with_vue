<form method="POST" v-on:submit.prevent="updateKeep(fillKeep.id)">
  <div class="modal" tabindex="-1" role="dialog" id="edit">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label for="keep">Update task</label>
          <input type="text" name="keep" id="" class="form-control" v-model="fillKeep.keep">
          <span v-for="error in errors" class="text-danger">@{{ error }}</span>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Update changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</form>