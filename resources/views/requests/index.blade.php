@extends('layouts.app')

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Request
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
                                Request
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
        <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-20 alert-success" role="alert" id="head-alert" style="display:none">
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
                            Data Request
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
                            <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" data-toggle="modal" data-target="#m_modal_4" id="newIncident">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>
                                        New Request
                                    </span>
                                </span>
                            </a>
                            <div class="m-separator m-separator--dashed d-xl-none"></div>
                        </div>
                    </div>
                </div>
                <!--end: Search Form -->
                <!--begin: Datatable -->
                <table class="table table-striped table-hover" width="100%" id="dtrequest">
                    <thead>
                        <tr>
                            <th title="Field #1">
                                Request ID
                            </th>
                            <th title="Field #2">
                                Title
                            </th>
                            <th title="Field #3">
                                Business Need
                            </th>
                            <th title="Field #8">
                                Actions
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
                        Form Request Application
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            &times;
                        </span>
                    </button>
                </div>
                <div id="idmodal-content">
                    <form id="form_request" action="{{ route('request.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="alert alert-success" role="alert" style="display:none;" id="alert_success">
                                You successfully read this important alert message.
                            </div>
                            <div class="form-group">
                                <label for="title" class="form-control-label">
                                    Title:
                                </label>
                                <textarea class="form-control" id="title" name="title"></textarea>
                                <span class="m-form__help text-danger" id="help_title">
                                
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="business_need" class="form-control-label">
                                    Business Need:
                                </label>
                                <textarea class="form-control" id="business_need" name="business_need"></textarea>
                                <span class="m-form__help text-danger" id="help_business_need">
                                
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="business_requirment" class="form-control-label">
                                    Business Requirment:
                                </label>
                                <textarea class="form-control" id="business_requirment" name="business_requirment"></textarea>
                                <span class="m-form__help text-danger" id="help_business_requirment">
                                
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="business_value" class="form-control-label">
                                    Business Value:
                                </label>
                                <textarea class="form-control" id="business_value" name="business_value"></textarea>
                                <span class="m-form__help text-danger" id="help_business_value">
                                
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="location-name" class="form-control-label">
                                    Location:
                                </label>
                                <input type="text" class="form-control" id="location-name" name="location">
                                <span class="m-form__help text-danger" id="help_ocation">
                                    
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="phone-name" class="form-control-label">
                                    Phone:
                                </label>
                                <input type="text" class="form-control" id="phone-name" name="phone">
                                <span class="m-form__help text-danger" id="help_phone">
                                    
                                </span>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary" id="addAttachment">
                                    + Add
                                </button>
                            </div>                        
                            <div class="form-group m-form__group" id="detail">
                                <label for="location-name" class="form-control-label">
                                    Attachment:
                                </label>
                                <div class="form-group">
                                    <div class="input-group ">
                                        <input type="file" id="file2" class="form-control" name="files[]">
                                        
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
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="m_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header btn-primary">
                    <h5 class="modal-title text-white" id="exampleModalLabel">
                        Form Incident
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
        var table='';
        function resetAlert(){
            $("#help_title").('');
            $("#help_business_need").('');
            $("#help_business_requirment").('');
            $("#help_business_value").('');
            $("#help_location").('');
            $("#help_phone").('');
        }

        function resetForm(){
            $("#title").val('');
            $("#business_need").val('');
            $("#business_requirment").val('');
            $("#business_value").val('');
            $("#location").val('');
            $("#phone").val('');
            $(".detach").detach();
            $("#file2").val('');
        }

        function resetAll()
        {
            resetAlert();
            resetForm();
        }

        $(function(){
            $("#dtrequest").DataTable({
                processing:true,
                serverSide:true,
                ajax:{
                    url:"{{ route('request.data') }}",
                    type:"POST",
                    dataType:"JSON",
                    data:{
                        "_token":"{{csrf_token()}}"
                    }
                },
                columns:[
                    {data:'id', name:'id'},
                    {data:'title', name:'title'},
                    {data:'business_need', name:'business_need'},
                    {data:'id', render:function(data){
                            '<button class="btn btn-danger btn-sm"></button>'
                        }
                    }
                ]
            });

            $("#addAttachment").click(function(){
                $("#detail").append(
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

            $("#form_request").submit(function(event){
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
                .fail(function(){
                    if(data.responseJSON.errors.title){
                        $("#help_title").html(data.responseJSON.errors.title);
                    }
                    if(data.responseJSON.errors.business_need){
                        $("#help_business_need").html(data.responseJSON.errors.business_need)
                    }
                    if(data.responseJSON.errors.business_requirment){
                        $("#help_business_requirment").html(data.responseJSON.errors.business_requirment)
                    }
                    if(data.responseJSON.errors.business_value){
                        $("#help_business_value").html(data.responseJSON.errors.business_value);
                    }
                    if(data.responseJSON.errors.location){
                        $("#help_location").html(data.responseJSON.errors.location);
                    }
                    if(data.responseJSON.errors.phone){
                        $("#help_phone").html(data.responseJSON.errors.phone);
                    }
                    $("#alert_success").html('');
                    $("#alert_success").css({'display':'none'});
                })
                .done(function(){
                    $("#alert_success").html('');
                    $("#alert_success").css({'display':'block'});
                    resetAll();
                });
            });
        });
    </script>
@endpush