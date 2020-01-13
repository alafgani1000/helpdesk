<form id="edit_form_request" action="{{ route('request.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="alert alert-success" role="alert" style="display:none;" id="edit_alert_success">
            You successfully read this important alert message.
        </div>
        <div class="form-group">
            <label for="title" class="form-control-label">
                Title:
            </label>
            <textarea class="form-control" id="edit_title" name="edit_title">{{ $request->title }}</textarea>
            <span class="m-form__help text-danger" id="help_title">
            
            </span>
        </div>
        <div class="form-group">
            <label for="edit_business_need" class="form-control-label">
                Business Need:
            </label>
            <textarea class="form-control" id="edit_business_need" name="edit_business_need">{{ $request->business_need }}</textarea>
            <span class="m-form__help text-danger" id="help_edit_business_need">
            
            </span>
        </div>
        <div class="form-group">
            <label for="edit_business_requirment" class="form-control-label">
                Business Requirment:
            </label>
            <textarea class="form-control" id="edit_business_requirment" name="edit_business_requirment">{{ $request->business_requirment }}</textarea>
            <span class="m-form__help text-danger" id="help_edit_business_requirment">
            
            </span>
        </div>
        <div class="form-group">
            <label for="edit_business_value" class="form-control-label">
                Business Value:
            </label>
            <textarea class="form-control" id="edit_business_value" name="edit_business_value">{{ $request->business_value }}</textarea>
            <span class="m-form__help text-danger" id="help_edit_business_value">
            
            </span>
        </div>
        <div class="form-group">
            <label for="edit_location" class="form-control-label">
                Location:
            </label>
            <input type="text" class="form-control" id="edit_location" name="edit_location" value="{{ $request->location }}" />
            <span class="m-form__help text-danger" id="help_edit_location">
                
            </span>
        </div>
        <div class="form-group">
            <label for="edit_phone" class="form-control-label">
                Phone:
            </label>
            <input type="text" class="form-control" id="edit_phone" name="edit_phone" value="{{ $request->phone }}" />
            <span class="m-form__help text-danger" id="help_edit_phone">
                
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
                    @if($request->requestAttachments)
                        @foreach ($request->requestAttachments as $item)
                            <tr>
                                <td>{{ $item->alias }}</td>
                            <td><button type="button" class="btn btn-sm btn-danger delete-detail" dataid="{{$item->id}}"><i class="fa fa-trash"></i></button>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-primary" id="edit_addAttachment">
                + Add
            </button>
        </div>                        
        <div class="form-group m-form__group" id="edit_detail">
            <label for="location-name" class="form-control-label">
                Attachment:
            </label>
            <div class="form-group">
                <div class="input-group ">
                    <input type="file" id="edit_file2" class="form-control" name="files[]">
                    
                    <span class="input-group-btn">
                        <button class="btn btn-danger btn-lg" type="button">
                            -
                        </button>
                    </span>
                </div>
            </div>
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