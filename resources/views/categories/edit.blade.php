<form id="form-edit-category" action="{{ route('cat.update', $category->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="alert alert-success" role="alert" style="display:none;" id="edit_alert_success">
            You successfully read this important alert message.
        </div>
        <div class="form-group">
            <label for="cat-name" class="form-control-label">
                Name:
            </label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
            <span class="m-form__help text-danger" id="help-name">
            
            </span>
        </div>
        <div class="form-group">
            <label for="cat-time-interval" class="form-control-label">
                Time interval:
            </label>
            <input type="text" class="form-control" id="time_interval" name="time_interval" value={{ $category->time_interval }}>
            <span class="m-form__help text-danger" id="help-time-interval">
            
            </span>
        </div>     
        <div class="form-group">
            <label for="cat-start-date" class="form-control-label">
                Start date:
            </label>
            <div class='input-group date' id='m_datepicker_2'>
                <input type='text' class="form-control m-input" readonly name="start_date" id="start_date" autocomplete="off" value="{{ $category->start_date }}"/>
                <span class="input-group-addon">
                    <i class="la la-calendar-check-o"></i>
                </span>
            </div>
            <span class="m-form__help text-danger" id="help-start-date">
            
            </span>
        </div>       
        <div class="form-group">
            <label for="cat-end-date" class="form-control-label">
                End Date:
            </label>
            <div class='input-group date' id='m_datepicker_1'>
                <input type='text' class="form-control m-input" readonly name="end_date" id="end_date" autocomplete="off" value="{{ $category->end_date }}"/>
                <span class="input-group-addon">
                    <i class="la la-calendar-check-o"></i>
                </span>
            </div>
            <span class="m-form__help text-danger" id="help-end-date">
            
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
        $("#form-edit-category").submit(function(event){
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
                if(data.responseJSON.errors.name){
                    $("#help-name").html(data.responseJSON.errors.name);
                }
                if(data.responseJSON.errors.time_interval){
                    $("#help-time-interval").html(data.responseJSON.errors.time_interval);
                }
                if(data.responseJSON.errors.start_date){
                    $("#help-start-date").html(data.responseJSON.errors.start_date);
                }
                if(data.responseJSON.errors.end_date){
                    $("#help-end_date").html(data.responseJSON.errors.end_date);
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