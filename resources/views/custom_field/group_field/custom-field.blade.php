@custom_field
    </br>
    @inject('customerField','App\Services\CustomFieldService');
    @if(request()->is(strtolower($customerField->getAllowCustomField()[0]).'/create') ||
        request()->is(strtolower($customerField->getAllowCustomField()[0]).'/edit/*'))
    <div class="container">
        <div class="card">
            <div class="card-header">
                <label for="Field Title">Field</label>
            </div>
            <div class="card-body">
                Custom Field
            </div>
        </div>
    </div>
    @endif
@endcustom_field
