<div class="modal fade" id="typeofdiseaseShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!-- Modal content-->
                <h2 class="title-modal">Type of disease</h2>
                <form action="" method="post">
                    <input type="hidden" class="form-control" id="id" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <input class="form-control" id="name" name="name" disabled></input>
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
  $('#typeofdiseaseShow').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id');
  var name = button.data('name');

  $('#id').val(id);
  $('#name').val(name);
})
</script>



