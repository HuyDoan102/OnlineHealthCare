<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!-- Modal content-->
                <h2 class="title-modal">Role</h2>
                <form action="{{ route("admin.roles.update", $role->id) }}" method="post">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <input type="hidden" class="form-control" id="id" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <input class="form-control" id="name" name="name"></input>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
  $('#modalEdit').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id');
  var name = button.data('name');

  $('#id').val(id);
  $('#name').val(name);
})
</script>

