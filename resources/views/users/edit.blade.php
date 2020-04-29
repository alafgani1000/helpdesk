<form id="form-edit-user" action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="alert alert-success" role="alert" style="display:none;" id="edit_alert_success">
            You successfully read this important alert message.
        </div>
        <div class="form-group">
            <label for="user-name" class="form-control-label">
                Name:
            </label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
            <span class="m-form__help text-danger" id="help-name">
            
            </span>
        </div>
        <div class="form-group">
            <label for="user-email" class="form-control-label">
                Email:
            </label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
            <span class="m-form__help text-danger" id="help-email">
                
            </span>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Close
        </button>
        <button type="submit" class="btn btn-primary">
            Send
        </button>
    </div>
</form>
<script>
    $(function(){
        $("#edit_addAttachment").click(function(){
            $("#edit_detail").append(
                '<div class="form-group attachment detach">'+
                    '<div class="input-group">'+
                        '<input type="file" class="form-control" name="files[]">'+                                        
                        '<span class="input-group-btn">'+
                            '<button class="btn btn-danger btn-lg remove" type="button">-</button>'+
                        '</span>'+
                    '</div>'+
                '</div>'
            );
        });

        $("#formincident_edit").submit(function(event){
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
                    resetMessage();
                }
            })
            .fail(function(data){
                if(data.responseJSON.errors.incident){
                    $("#helpIncident").html(data.responseJSON.errors.incident);
                }
                if(data.responseJSON.errors.location){
                    $("#helpLocation").html(data.responseJSON.errors.location);
                }
                if(data.responseJSON.errors.phone){
                    $("#helpPhone").html(data.responseJSON.errors.phone); 
                } 
                $("#alertSuccess").html('');
                $("#alertSuccess").css({'display':'none'});                                    
            })
            .done(function(data){
                $("#alertSuccess").html(data);
                $("#alertSuccess").css({'display':'block'});
                resetForm();  
                table.ajax.reload();
            });
        });

        $("body").on("click",".remove",function(){
            $(this).parents(".attachment").remove();
        });
    });
</script>