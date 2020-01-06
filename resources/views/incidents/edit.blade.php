
<form id="formincident_edit" action="{{ route('incident.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="alert alert-success" role="alert" style="display:none;" id="alertSuccess">
            You successfully read this important alert message.
        </div>
        <div class="form-group">
            <label for="incident-text" class="form-control-label">
                Incident:
            </label>
            <textarea class="form-control" id="incident-text" name="incident">{{ $incident->text }}</textarea>
            <span class="m-form__help text-danger" id="helpIncident">
            
            </span>
        </div>
        <div class="form-group">
            <label for="location-name" class="form-control-label">
                Location:
            </label>
            <input type="text" class="form-control" id="location-name" name="location" value="{{ $incident->location }}">
            <span class="m-form__help text-danger" id="helpLocation">
                
            </span>
        </div>
        <div class="form-group">
            <label for="phone-name" class="form-control-label">
                Phone:
            </label>
            <input type="text" class="form-control" id="phone-name" name="phone" value="{{ $incident->phone }}">
            <span class="m-form__help text-danger" id="helpPhone">
                
            </span>
        </div>
        <div class="form-group">
            <table class="table">
                <thead>
                    <tr>
                        <th>File Attachment</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($incident->incidentAttachments as $item)
                        <tr>
                            <td>{{ $item->alias }}</td>
                            <td><button type="button" class="btn btn-sm btn-danger" onclick="delete_attachment(this,'{{ $item->id }}')"><i class="fa fa-trash"></i></button>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-primary" id="addAttachment_edit">
                + Add
            </button>
        </div>                        
        <div class="form-group m-form__group" id="detail_edit">
            <label for="location-name" class="form-control-label">
                Attachment:
            </label>
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
        $("#addAttachment_edit").click(function(){
            $("#detail_edit").append(
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
    });
    
</script>