<form id="form-edit-role" action="{{ route('role.update', $role->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="alert alert-success" role="alert" style="display:none;" id="edit_alert_success">
            You successfully read this important alert message.
        </div>
        <div class="form-group">
            <label for="user-name" class="form-control-label">
                Name:
            </label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}">
            <span class="m-form__help text-danger" id="help-name">
            
            </span>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Close
        </button>
        <button type="submit" class="btn btn-primary">
            Update
        </button>
    </div>
</form>
<script>
    $(function(){
        $("#form-edit-role").submit(function(event){
            event.preventDefault();
            let url = $(this).attr('action');
            let method = $(this).attr('method');
            let enctype = $(this).attr('enctype');
            let data = new FormData(this);

            $.ajax({
                type:method,
                url:url,
                enctype:enctype,
                processData:false,
                contentType:false,
                cache:false,
                data:data,
                headers:{
                    'X-CSRF-TOKEN':$('#token').attr('content')
                },
                beforeSend:function() {
                 
                }
            })
            .fail(function(data){
                if(data.responseJSON.errors.incident){
                    $("#help-name").html(data.responseJSON.errors.incident);
                }
                $("#edit_alert_success").html('');
                $("#edit_alert_success").css({'display':'none'});                                    
            })
            .done(function(data){
                $("#edit_alert_success").html(data);
                $("#edit_alert_success").css({'display':'block'});
                table.ajax.reload();
            });
        });       
    });
</script>