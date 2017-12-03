<div class="modal fade" id="diseaseDetele" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <!-- Modal content-->
                <h2 class="title-modal">Disease</h2>

                <form action="" class="formdelete" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <div class="modal-body">
                        Are you sure to delete this record ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Ok</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function($){
        $('.delete').on('click',function(event){
            event.preventDefault();
            $('.formdelete').show();
            data = $(this).attr('url');
            $('.formdelete').attr('action', data);
        });
        $('.cancelform').on('click',function(event){
            event.preventDefault();
            $('.formdelete').hide();
        });
    });
</script>
