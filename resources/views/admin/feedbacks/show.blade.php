<div class="modal fade" id="feedbackShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!-- Modal content-->
                <h2 class="title-modal">Feedback</h2>
                <form action="" method="post">
                    <input type="hidden" class="form-control" id="id" name="id">
                    <div class="modal-body">
                      <div class="form-group">
                        <input class="form-control" id="email" name="email" disabled></input>
                      </div>
                        <div class="form-group">
                            <input class="form-control" id="title" name="title" disabled></input>
                        </div>
                            <input class="form-control" id="content" name="content" disabled></input>
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
  $('#feedbackShow').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id');
  var email = button.data('email');
  var title = button.data('title');
  var content = button.data('content');

  $('#id').val(id);
  $('#email').val(email);
  $('#title').val(title);
  $('#content').val(content);
})
</script>



