@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{route('group.field.store')}}">
        @csrf
        <button type="submit" class="btn btn-primary">Create</button>
        <div class="card">
            <div class="card-header">
                <p>Group Title</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="text" name="group_title" class="form-control" value='' placeholder="Add title" required>
                </div>
            </div>
        </div>
        </br>
        <div class="card">
            <div class="card-header">
                <label for="Group Title">Item Field</label>
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Field Label</th>
                            <th>Field Name</th>
                            <th>Field Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="field_label[]"></td>
                            <td><input type="text" name="field_name[]"></td>
                            <td><input type="text" name="field_type[]"></td>
                        <tr>
                        <tr>
                            <td><input type="text" name="field_label[]"></td>
                            <td><input type="text" name="field_name[]"></td>
                            <td><input type="text" name="field_type[]"></td>
                        <tr>
                    </tbody>
                </table>
            </div>
        </div>
        </br>
        <div class="card">
            <div class="card-header">
                <label for="Group Title">Rule</label>
            </div>
            <div class="card-body">
                <table id="example" class="table" style="width:100%">
                    <tbody>
                        <tr>
                            <label for="exampleFormControlSelect1">Rule For Group Field</label>
                            <th>
                                <div class="form-group">
                                    <select class="form-control" id="custom-field-model" name="param[]">
                                        <option>Post</option>
                                        <option>Page</option>
                                    </select>
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <select class="form-control" id="custom-field-condition" name="operator[]">
                                        <option value="0">Is equal to</option>
                                        <option value="1">Is not equal to</option>
                                    </select>
                                  </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <select class="form-control" id="custom-field-content" name="content[]">
                                      <option value="post">Post</option>
                                    </select>
                                  </div>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
</div>
@endsection
