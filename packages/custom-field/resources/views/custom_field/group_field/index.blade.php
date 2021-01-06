@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-group">
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
      </div>
    @endif
    <div class="pb-2">
        <a href="{{route('group.field.create')}}" class="btn btn-primary float-left">Create</a>
        <form class="form-inline float-right">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
    </div>

    </div>
    <table id="example" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Fields</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($groupFields as $groupField)
            <tr>
                <td>{{ $groupField->id }}</td>
                <td>{{ $groupField->group_title }}</td>
                <td>{{ $groupField->items->count() }}</td>
                <td>
                    <div class="d-flex justify-content-center">
                        <div class="pr-2">
                            <a href="{{ route('group.field.edit',['id'=> $groupField->id ])}}" class="btn btn-primary">Edit</a>
                        </div>
                        <form method="POST" action="{{ route('group.field.delete',['id'=> $groupField->id ])}}" style="display: inline-flex;">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>.
    </table>
</div>
@endsection
