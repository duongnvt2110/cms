@custom_field
    </br>
    @inject('customerField','Demo\CustomField\Services\CustomFieldService')
    @if(request()->is(strtolower($customerField->getAllowCustomField()[0]).'/create') ||
        request()->is(strtolower($customerField->getAllowCustomField()[0]).'/edit/*'))
        <script>
            var app = @test;
            $(document).ready(function(){
                $("#content").append('test');
            });
        </script>
    @endif
@endcustom_field
