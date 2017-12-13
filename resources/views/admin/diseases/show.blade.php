<div class="modal fade" id="diseaseShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!-- Modal content-->
                <h2 class="title-modal">Disease</h2>
                <form action="" method="post">
                    <input type="hidden" class="form-control" id="id" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <input class="form-control" id="name" name="name" disabled></input>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="symptom" name="symptom" disabled></input>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="type_of_disease" name="type_of_disease" disabled></input>
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
  $('#diseaseShow').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id');
  var name = button.data('name');
  var symptom = button.data('symptom');
  var type_of_disease = button.data('type_of_disease');

  $('#id').val(id);
  $('#name').val(name);
  $('#symptom').val(symptom);
  $('#type_of_disease').val(type_of_disease);
})
</script>



