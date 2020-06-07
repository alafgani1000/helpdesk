<form id="form-attach-menu" action="{{ route('menus.attach', $menu->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="alert alert-success" role="alert" style="display:none;" id="edit_alert_success">
            You successfully read this important alert message.
        </div>
        <input type="hidden" class="form-control" id="id_menu" name="id_menu" value="{{ $menu->id }}" readonly>
        <div class="form-group">
            <label for="label" class="form-control-label">
                Name:
            </label>
            <input type="text" class="form-control" id="label" name="label" value="{{ $menu->label }}" readonly>
            <span class="m-form__help text-danger" id="help-label">
            
            </span>
        </div> 
        <div class="form-group">
            <label for="role" class="form-control-label">
                Role:
            </label>
            <select class="form-control" name="role_id">
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
            <span class="m-form__help text-danger" id="help-role">
            
            </span>
        </div> 
        
        <button type="submit" class="btn btn-primary">
            Add
        </button>      
        <div class="m-portlet__body">
            <!--begin: Search Form -->
            <div class="m-form m-form--label-align-right m--margin-top-5 m--margin-bottom-30">
                <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                        <div class="form-group m-form__group row align-items-center">
                            <div class="col-md-4">
                                <div class="m-input-icon m-input-icon--left">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end: Search Form -->
            <!--begin: Datatable -->
            <table class="table table-striped table-hover responsive" width="100%" id="dt_role">
                <thead>
                    <tr>
                        <th>
                            id
                        </th>
                        <th>
                            Role Name
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            <!--end: Datatable -->
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">
            Close
        </button>
    </div>
</form>
<script>
    $(function(){
        var menu_id = $("#id_menu").val();
        table_role = $("#dt_role").DataTable({
                processing:true,
                serverSide:true,
                ajax:{
                    url:"{{ url('menus/data/role/') }}/"+menu_id,
                    type:"GET",
                    dataType:"JSON",
                    data:{
                        "_token":"{{csrf_token()}}"
                    }
                },
                columns:[
                    {data:'id', name:'id'},
                    {data:'name', name:'name'},
                    {data:'id', render:function(data){
                            return '<div class="btn-group"><button type="button" class="btn btn-danger btn-sm deletedrole" dataid=\''+data+'\'><i class="fa fa-trash"></i></button></div>'
                        }
                    }
                ]
            });

        $("#form-attach-menu").submit(function(event){
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
                    $("#help-role").html(data.responseJSON.errors.kode);
                }
                $("#edit_alert_success").html('');
                $("#edit_alert_success").css({'display':'none'});                                    
            })
            .done(function(data){
                $("#edit_alert_success").html(data);
                $("#edit_alert_success").css({'display':'block'});
                table_role.ajax.reload();
            });
        });       

        $("body").on('click','.deletedrole',function(event){
            let id_request = $(this).attr('dataid');
            let url = "{{ url('menus/dettach/') }}/"+menu_id;
            if(confirm('Delete ?')){
                $.ajax({
                url:url,
                type:"POST",
                data:{
                    role_id:id_request,
                },
                headers:{
                    'X-CSRF-TOKEN':$('#token').attr('content')
                },
                })
                .fail(function(data){
                    $("#content-alert").html(data);
                    $("#head-alert").css({'display':'block'});
                })
                .done(function(data){
                    $("#content-alert").html(data);
                    $("#head-alert").css({'display':'block'});
                    table_role.ajax.reload();
                });
            }            
        });
    });
</script>