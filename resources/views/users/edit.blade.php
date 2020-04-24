<form id="form-edit-user" action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="alert alert-success" role="alert" style="display:none;" id="edit_alert_success">
            You successfully read this important alert message.
        </div>
        <div class="form-group">
            <label for="user-name" class="form-control-label">
                Name:
            </label>
            <input type="text" class="form-control" id="name" name="name">
            <span class="m-form__help text-danger" id="help-name">
            
            </span>
        </div>
        <div class="form-group">
            <label for="user-email" class="form-control-label">
                Email:
            </label>
            <input type="email" class="form-control" id="email" name="email">
            <span class="m-form__help text-danger" id="help-email">
                
            </span>
        </div>
        <div class="form-group">
            <label for="user-password" class="form-control-label">
                Password:
            </label>
            <input type="password" class="form-control" id="password" name="password">
            <span class="m-form__help text-danger" id="help-password">
                
            </span>
        </div>
        <div class="form-group">
            <label for="user-repassword" class="form-control-label">
                Re password:
            </label>
            <input type="password" class="form-control" id="repassword" name="repassword">
            <span class="m-form__help text-danger" id="help-repassword">
                
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
        $("body").on('click','.delete-detail',function(event){
            let id = $(this).attr('dataid');
            let url = "{{ route('request.delete_detail') }}";
            if(confirm('Delete ?')){
                $.ajax({
                    url:url,
                    type:"POST",
                    dataType:"JSON",
                    data:{
                        id:id,
                        _token:"{{csrf_token()}}"
                    }
                })
                .done(function(data){
                    $("#edit_alert_success").html(data);
                    $(this).parents().parents().remove();
                });
            }
        });

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

        $("body").on("click",".remove",function(){
            $(this).parents(".attachment").remove();
        });
    });
</script>