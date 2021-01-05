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
                @filter('my.hook')
                @test
                {{--
                @foreach($customerField->getFieldItem() as $data)
                    <div class="form-group">
                        <label for="Field Title">{{$data['field_label']}}</label>
                        <input type="{{$data['field_type']}}" name="{{$data['field_name']}}" class="form-control" >
                    </div>
                @endforeach
                --}}
            </div>
        </div>
    </div>
    @endif
@endcustom_field
