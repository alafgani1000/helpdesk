@extends('layouts.app')

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Incident
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
                                Incident
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
        <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
            <div class="m-alert__icon">
                <i class="flaticon-exclamation m--font-brand"></i>
            </div>
            <div class="m-alert__text">
                the Datatable provides built-in support for operations over data such as sorting, filtering and paging performed in user browser(frontend).
            </div>
        </div>
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Datatable initilized from HTML table
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
                <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                    <div class="row align-items-center">
                        <div class="col-xl-8 order-2 order-xl-1">
                            <div class="form-group m-form__group row align-items-center">
                                <div class="col-md-4">
                                    <div class="m-input-icon m-input-icon--left">
                                        <input type="text" class="form-control m-input m-input--solid" placeholder="Search..." id="generalSearch">
                                        <span class="m-input-icon__icon m-input-icon__icon--left">
                                            <span>
                                                <i class="la la-search"></i>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                            <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill" data-toggle="modal" data-target="#m_modal_4" id="newIncident">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>
                                        New Incident
                                    </span>
                                </span>
                            </a>
                            <div class="m-separator m-separator--dashed d-xl-none"></div>
                        </div>
                    </div>
                </div>
                <!--end: Search Form -->
                <!--begin: Datatable -->
                <table class="" width="100%" id="dtincident">
                    <thead>
                        <tr>
                            <th title="Field #1">
                                Order ID
                            </th>
                            <th title="Field #2">
                                Owner
                            </th>
                            <th title="Field #3">
                                Contact
                            </th>
                            <th title="Field #4">
                                Car Make
                            </th>
                            <th title="Field #5">
                                Car Model
                            </th>
                            <th title="Field #6">
                                Color
                            </th>
                            <th title="Field #7">
                                Deposit Paid
                            </th>
                            <th title="Field #8">
                                Order Date
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                16590-107
                            </td>
                            <td>
                                Zandra Fisbburne
                            </td>
                            <td>
                                (916) 6137523
                            </td>
                            <td>
                                Pontiac
                            </td>
                            <td>
                                Grand Am
                            </td>
                            <td>
                                Puce
                            </td>
                            <td>
                                $75343.80
                            </td>
                            <td>
                                2016-09-08
                            </td>
                        </tr>
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
                        Form Incident
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            &times;
                        </span>
                    </button>
                </div>
                <form id="formincident" action="{{ route('incident.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="alert alert-success" role="alert" style="display:none;" id="alertSuccess">
                            You successfully read this important alert message.
                        </div>
                        <div class="form-group">
                            <label for="incident-text" class="form-control-label">
                                Incident:
                            </label>
                            <textarea class="form-control" id="incident-text" name="incident"></textarea>
                            <span class="m-form__help text-danger" id="helpIncident">
                               
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="location-name" class="form-control-label">
                                Location:
                            </label>
                            <input type="text" class="form-control" id="location-name" name="location">
                            <span class="m-form__help text-danger" id="helpLocation">
                                
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="phone-name" class="form-control-label">
                                Phone:
                            </label>
                            <input type="text" class="form-control" id="phone-name" name="phone">
                            <span class="m-form__help text-danger" id="helpPhone">
                                
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
                                    <input type="file" id="file2" class="form-control" name="files[]" id>
                                    
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
    <script>
        $("#dtincident").mDatatable({

        });
    </script>
</div>
@endsection
@push('scripts')
    <script>
        function resetForm(){
            $("#incident-text").val('');
            $("#location-name").val('');
            $("#phone-name").val('');
            $(".detach").detach();
            $("#file2").val('');
        }

        function resetMessage(){
            $("#helpIncident").html('');
            $("#helpLocation").html('');
            $("#helpPhone").html(''); 
        }

        function resetAll(){
            resetMessage();
            resetForm();
        }

        $(function(){
            $("#newIncident").click(function(){
                resetAll();
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

           $("#formincident").submit(function(event){
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
                    console.log(data.responseJSON.errors);
                    $("#helpIncident").html(data.responseJSON.errors.incident);
                    $("#helpLocation").html(data.responseJSON.errors.location);
                    $("#helpPhone").html(data.responseJSON.errors.phone);  
                    $("#alertSuccess").html('');
                    $("#alertSuccess").css({'display':'none'});                                    
                })
                .done(function(data){
                    $("#alertSuccess").html(data);
                    $("#alertSuccess").css({'display':'block'});
                    resetForm();  
                });
           });
        });
        
    </script>
@endpush