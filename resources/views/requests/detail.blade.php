<div class="modal-body">
    <div class="form-group">
        <label for="title" class="form-control-label">
            Title:
        </label>
        <p>{{ $request->title }}</p>
    </div>
    <div class="form-group">
        <label for="edit_business_need" class="form-control-label">
            Business Need:
        </label>
        <p>{{ $request->business_need }}</p>
    </div>
    <div class="form-group">
        <label for="edit_business_requirment" class="form-control-label">
            Business Requirment:
        </label>
        <p>{{ $request->business_requirment }}</p>
    </div>
    <div class="form-group">
        <label for="edit_business_value" class="form-control-label">
            Business Value:
        </label>
        <p>{{ $request->business_value }}</p>
    </div>
    <div class="form-group">
        <label for="edit_location" class="form-control-label">
            Location:
        </label>
        <p>{{ $request->location }}</p>
    </div>
    <div class="form-group">
        <label for="edit_phone" class="form-control-label">
            Phone:
        </label>
        <p>{{ $request->phone }}</p>
    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>File Attachment</th>
                </tr>
            </thead>
            <tbody>
                @if($request->requestAttachments)
                    @foreach ($request->requestAttachments as $item)
                        <tr>
                            <td>{{ $item->alias }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>                
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">
        Close
    </button>
</div>