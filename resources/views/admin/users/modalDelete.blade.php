
<!-- delete -->
<div class="modal fade" id="modalDelete" tabindex="-10" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title">Do you want to delete this user ?</h5>
                <form action="{{ route("admin.users.destroy", $user->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field("DELETE") }}
                    <input type="hidden" class="form-control" id="delete_id" name="id">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <input type="submit" class="btn btn-primary" value="Yes">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#modalDelete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id');
    $('#delete_id').val(id);

})
</script>
