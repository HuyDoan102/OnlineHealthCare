<div class="modal fade" id="modalShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!-- Modal content-->
                <h2 class="title-modal">Post</h2>
                <form action="" method="post">
                    <input type="hidden" class="form-control" id="id" name="id">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="title" name="title" disabled></input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="content" name="content" disabled></input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Source</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="source" name="source" disabled></input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Time</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="created_at" name="created_at" disabled></input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="status" name="status" disabled></input>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">View</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="view" name="view" disabled></input>
                            </div>
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
  var title = button.data('title');
  var content = button.data('content');
  var source = button.data('source');
  var created_at = button.data('created_at');
  var status = button.data('status');
  var view = button.data('view');

  $('#id').val(id);
  $('#title').val(title);
  $('#content').val(content);
  $('#source').val(source);
  $('#created_at').val(created_at);
  $('#status').val(status);
  $('#view').val(view);
})
</script>



