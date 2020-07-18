<form id="form_incident_resolve" action="{{ route('incident.resolve') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="alert alert-success" role="alert" style="display:none;" id="resolve_head_alert">
            You successfully read this important alert message.
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" id="id_incident" name="id_incident" value="{{ $incident->id }}">
            <label for="resolve_text" class="form-control-label">
                Resolve Text:
            </label>
            <textarea class="form-control" id="resolve_text" rows="4" name="resolve_text">{{ $incident->resolve_text }}</textarea>
            <span class="m-form__help text-danger" id="help_resolve_text">
            
            </span>
        </div>
        {{-- <div class="form-group">
            <label for="resolve_date" class="form-control-label">
                Resolve date:
            </label>
            <input type="date" class="form-control" id="resolve_date" name="resolve_date" value="{{ $incident->resolve_date }}">
            <span class="m-form__help text-danger" id="help_resolve_date">
                
            </span>
        </div>               --}}
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
    function resetMessage(){
        $("#help_resolve_text").html('');
        $("#help_resolve_date").html('');
    }

    $(function(){
        $("#form_incident_resolve").submit(function(event){
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
                data:data,
                headers:{
                    'X-CSRF-TOKEN':$('#token').attr('content')
                },
                beforeSend:function() {
                    
                }
            })
            .fail(function(data){
                if(data.responseJSON.errors.resolve_text){
                    $("#help_resolve_text").html(data.responseJSON.errors.resolve_text);
                }
                if(data.responseJSON.errors.resolve_date){
                    $("#help_resolve_date").html(data.responseJSON.errors.resolve_date);
                }
                $("#resolve_head_alert").html('');
                $("#resolve_head_alert").css({'display':'none'});                                    
            })
            .done(function(data){
                $("#content-alert").html(data);
                $("#head-alert").css({'display':'block'});
                table.ajax.reload();
                $("#m_modal_resolve").modal('toggle');
            });
        });
    });
    
</script>