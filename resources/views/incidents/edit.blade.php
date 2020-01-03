
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