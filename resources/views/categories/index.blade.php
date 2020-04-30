@extends('layouts.app')

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Master Data
                </h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="#" class="m-nav__link m-nav__link--icon">
                            <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Categories
                            </span>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <div>
                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                        <i class="la la-plus m--hide"></i>
                        <i class="la la-ellipsis-h"></i>
                    </a>
                    <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                            <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                    <ul class="m-nav">
                                        <li class="m-nav__section m-nav__section--first m--hide">
                                            <span class="m-nav__section-text">
                                                Quick Actions
                                            </span>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                <span class="m-nav__link-text">
                                                    Activity
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                <span class="m-nav__link-text">
                                                    Messages
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                <span class="m-nav__link-text">
                                                    FAQ
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                <span class="m-nav__link-text">
                                                    Support
                                                </span>
                                            </a>
                                        </li>
                                        <li class="m-nav__separator m-nav__separator--fit"></li>
                                        <li class="m-nav__item">
                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                Submit
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-20 alert-success" role="alert" id="head-alert" style="display:none;">
            <div class="m-alert__icon">
                <i class="flaticon-exclamation m--font-brand"></i>
            </div>
            <div class="m-alert__text" id="content-alert">
                
            </div>
        </div>
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Master Data Category
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">
                                                            Quick Actions
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">
                                                                Create Post
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">
                                                                Send Messages
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                            <span class="m-nav__link-text">
                                                                Upload File
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__section">
                                                        <span class="m-nav__section-text">
                                                            Useful Links
                                                        </span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">
                                                                FAQ
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">
                                                                Support
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit m--hide"></li>
                                                    <li class="m-nav__item m--hide">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                            Submit
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
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
                        <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                            <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" data-toggle="modal" data-target="#m_modal_4" id="new-category">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>
                                        New Category
                                    </span>
                                </span>
                            </a>
                            <div class="m-separator m-separator--dashed d-xl-none"></div>
                        </div>
                    </div>
                </div>
                <!--end: Search Form -->
                <!--begin: Datatable -->
                <table class="table table-striped table-hover responsive" width="100%" id="dtcategory">
                    <thead>
                        <tr>
                            <th title="Field #1">
                                Name
                            </th>
                            <th>
                                Time Interval
                            </th>
                            <th>
                                Start Date
                            </th>
                            <th>
                                End Date
                            </th>
                            <th title="Field #3">
                                Created At
                            </th>
                            <th title="Field #4">
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
    </div>
    <div class="modal fade" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header btn-primary">
                    <h5 class="modal-title text-white" id="exampleModalLabel">
                        Form create category
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            &times;
                        </span>
                    </button>
                </div>
                <div id="idmodal-content">
                    <form id="form-create-category" action="{{ route('cat.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="alert alert-success" role="alert" style="display:none;" id="alert-success">
                                You successfully read this important alert message.
                            </div>
                            <div class="form-group">
                                <label for="cat-name" class="form-control-label">
                                    Name:
                                </label>
                                <input type="text" class="form-control" id="name" name="name">
                                <span class="m-form__help text-danger" id="help-name">
                                
                                </span>
                            </div>  
                            <div class="form-group">
                                <label for="cat-time-interval" class="form-control-label">
                                    Time interval:
                                </label>
                                <input type="text" class="form-control" id="time_interval" name="time_interval">
                                <span class="m-form__help text-danger" id="help-time-interval">
                                
                                </span>
                            </div>     
                            <div class="form-group">
                                <label for="cat-start-date" class="form-control-label">
                                    Start date:
                                </label>
                                <div class='input-group date' id='m_datepicker_2'>
                                    <input type='text' class="form-control m-input" readonly  placeholder="Select date" name="start_date" id="start_date" autocomplete="off"/>
                                    <span class="input-group-addon">
                                        <i class="la la-calendar-check-o"></i>
                                    </span>
                                </div>
                                <span class="m-form__help text-danger" id="help-start-date">
                                
                                </span>
                            </div>       
                            <div class="form-group">
                                <label for="cat-start-date" class="form-control-label">
                                    End Date:
                                </label>
                                <div class='input-group date' id='m_datepicker_1'>
                                    <input type='text' class="form-control m-input" readonly  placeholder="Select date" name="end_date" id="end_date" autocomplete="off"/>
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
                                Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="m_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="alert alert-success" role="alert" style="display:none;" id="edit-alert-success">
                You successfully read this important alert message.
            </div>
            <div class="modal-content">
                <div class="modal-header btn-primary">
                    <h5 class="modal-title text-white" id="exampleModalLabel">
                        Form edit team
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            &times;
                        </span>
                    </button>
                </div>
                <div id="idmodal_edit">
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script>
        var table ='';
        function resetAlert(){
            $("#help-name").html('');
            $("#help-time-interval").html('');
            $("#help-start-date").html('');
            $("#help-end-date").html('');
        }

        function resetForm(){
            $("#name").val('');
            $("#time_interval").val('');
            $("#start_date").val('');
            $("#end_date").val('');
        }

        function resetAll()
        {
            resetAlert();
            resetForm();
        }

        $(function(){
            table = $("#dtcategory").DataTable({
                processing:true,
                serverSide:true,
                ajax:{
                    url:"{{ route('cat.data') }}",
                    type:"GET",
                    dataType:"JSON",
                    data:{
                        "_token":"{{csrf_token()}}"
                    }
                },
                columns:[
                    {data:'name', name:'name'},
                    {data:'time_interval', name:'time_interval'},
                    {data:'name', name:'name'},
                    {data:'start_date', name:'start_date'},
                    {data:'end_date', name:'end_date'},
                    {data:'id', render:function(data){ 
                        return'<div class="btn-group"><button class="btn btn-warning btn-sm edited" dataid=\''+data+'\'><i class="fa fa-edit text-white"></i></button>'+
                        '<button class="btn btn-danger btn-sm deleted" dataid=\''+data+'\'><i class="fa fa-trash"></i></button></div>'
                        }
                    }
                ]
            });

            $("#new-category").click(function(){
                $("#alert-success").css({'display':'none'});
            });

            $("body").on('click','.edited',function(event){
                let id = $(this).attr('dataid');
                let url = "{{ route('team.edit') }}";
                $.ajax({
                    url:url,
                    type:"GET",
                    cache:false,
                    data: {
                        id:id,
                        _token:"{{csrf_token()}}"
                    }
                })
                .done(function(data){
                    $("#idmodal_edit").html(data);
                    $("#m_modal_5").modal();
                });
            });

            $("#form-create-category").submit(function(event){
                event.preventDefault();
                let url = $(this).attr('action');
                let type = $(this).attr('method');
                let enctype = $(this).attr('enctype');
                let data = new FormData(this);

                $.ajax({
                    url:url,
                    type:type,
                    enctype:enctype,
                    processData:false,
                    contentType:false,
                    cache:false,
                    data:data,
                    headers: {
                        'X-CSRF-TOKEN':$('#token').attr('token')
                    }
                })
                .fail(function(data){
                    console.log(data);
                    if(data.responseJSON.errors.name){
                        $("#help-name").html(data.responseJSON.errors.name);
                    }
                    if(data.responseJSON.errors.time_interval){
                        $("#help-time-interval").html(data.responseJSON.errors.time_interval);
                    }
                    if(data.responseJSON.errors.start_date){
                        $("#help-name").html(data.responseJSON.errors.start_date);
                    }
                    if(data.responseJSON.errors.end_date){
                        $("#help-name").html(data.responseJSON.errors.end_date);
                    }
            
                })
                .done(function(data){
                    $("#alert-success").html(data);
                    $("#alert-success").css({'display':'block'});
                    resetAll();
                    table.ajax.reload();
                });
            });

            $("body").on('click','.deleted',function(event){
                let id_request = $(this).attr('dataid');
                let url = "{{ route('team.delete') }}";
                if(confirm('Delete ?')){
                    $.ajax({
                    url:url,
                    type:"POST",
                    data:{
                        id:id_request,
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
                        table.ajax.reload();
                    });
                }            
            });

            $("#repassword").keyup(function(){
                let password = $("#password").val();
                let repassword = $("#repassword").val();
                if(password != repassword){
                    $("#help-repassword").html('password tidak sama');
                    $("#help-repassword").removeClass('text-success').addClass('text-danger');
                }else{
                    $("#help-repassword").html('password sudah sama');
                    $("#help-repassword").removeClass('text-danger').addClass('text-success');
                }
            });
        });
    </script>
@endpush