<div class="modal fade" id="modalShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!-- Modal content-->
                <h2 class="title-modal">User</h2>
                <form action="" method="post">
                    <input type="hidden" class="form-control" id="id" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <input class="form-control" id="name" name="name" disabled></input>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" name="email" disabled></input>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="address" name="address" disabled></input>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="phone" name="phone" disabled></input>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="role" name="role" disabled></input>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
  $('#modalShow').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id');
  var name = button.data('name');
  var email = button.data('email');
  var address = button.data('address');
  var phone = button.data('phone');
  var role = button.data('role');

  $('#id').val(id);
  $('#name').val(name);
  $('#email').val(email);
  $('#address').val(address);
  $('#phone').val(phone);
  $('#role').val(role);
})
</script>



