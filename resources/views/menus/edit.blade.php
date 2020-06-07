<form id="form-edit-menu" action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="alert alert-success" role="alert" style="display:none;" id="edit_alert_success">
            You successfully read this important alert message.
        </div>
        <div class="form-group">
            <label for="kode" class="form-control-label">
                Kode:
            </label>
            <input type="text" class="form-control" id="kode" name="kode" value="{{ $menu->kode }}">
            <span class="m-form__help text-danger" id="help-label">
            
            </span>
        </div>       
        <div class="form-group">
            <label for="label" class="form-control-label">
                Label:
            </label>
            <input type="text" class="form-control" id="label" name="label" value="{{ $menu->label }}">
            <span class="m-form__help text-danger" id="help-label">
            
            </span>
        </div>       
        <div class="form-group">
            <label for="url" class="form-control-label">
                Url:
            </label>
            <input type="text" class="form-control" id="url" name="url" value="{{ $menu->url }}">
            <span class="m-form__help text-danger" id="help-url">
            
            </span>
        </div>     
        <div class="form-group">
            <label for="name" class="form-control-label">
                Name:
            </label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $menu->name }}">
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
        $("#form-edit-menu").submit(function(event){
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
                if(data.responseJSON.errors.kode){
                    $("#help-kode").html(data.responseJSON.errors.kode);
                }
                if(data.responseJSON.errors.label){
                    $("#help-label").html(data.responseJSON.errors.label);
                }
                if(data.responseJSON.errors.url){
                    $("#help-label").html(data.responseJSON.errors.url);
                }
                if(data.responseJSON.errors.name){
                    $("#help-label").html(data.responseJSON.errors.name);
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