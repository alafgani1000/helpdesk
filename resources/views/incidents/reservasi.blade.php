
<form id="formincident_reservasi" action="{{ route('incident.reservasi.store', $incident->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="alert alert-success" role="alert" style="display:none;" id="alert-success">
            You successfully read this important alert message.
        </div>
        <div class="form-group">
            <label for="incident-text" class="form-control-label">
                Incident:
            </label>
            <textarea class="form-control" id="incident-text" name="incident" readonly>{{ $incident->text }}</textarea>
            <span class="m-form__help text-danger" id="helpIncident">
            
            </span>
        </div>
        <div class="form-group">
            <label for="location-name" class="form-control-label">
                Location:
            </label>
            <input type="text" class="form-control" id="location-name" name="location" value="{{ $incident->location }}" readonly>
            <span class="m-form__help text-danger" id="helpLocation">
                
            </span>
        </div>
        <div class="form-group">
            <label for="phone-name" class="form-control-label">
                Phone:
            </label>
            <input type="text" class="form-control" id="phone-name" name="phone" value="{{ $incident->phone }}" readonly>
            <span class="m-form__help text-danger" id="helpPhone">
                
            </span>
        </div>
        <div class="form-group">
            <table class="table">
                <thead>
                    <tr>
                        <th>File Attachment</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($incident->incidentAttachments as $item)
                        <tr>
                            <td>{{ $item->alias }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>     
        <div class="form-group">
            <label for="team" class="form-control-label">
                Team:
            </label>
            <select name="team" class="form-control">
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>                
                @endforeach
            </select>
            <span class="m-form__help text-danger" id="help_team">
                
            </span>
        </div>     
        <div class="form-group">
            <label for="category" class="form-control-label">
                Category:
            </label>
            <select name="category" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>                
                @endforeach
            </select>
            <span class="m-form__help text-danger" id="help_category">
                
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

        $("#formincident_reservasi").submit(function(event){
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
                if(data.responseJSON.errors.team){
                    $("#help_team").html(data.responseJSON.errors.team);
                }
                if(data.responseJSON.errors.category){
                    $("#help_category").html(data.responseJSON.errors.category);
                }
                $("#alert-success").html('');
                $("#alert-success").css({'display':'none'});                                    
            })
            .done(function(data){
                $("#alert-success").html(data);
                $("#alert-success").css({'display':'block'});
                table.ajax.reload();
            });
        });
    });
    
</script>