@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('user.update',['id'=> $user->id])}}">
                @csrf
                <div class="form-group">
                    <label for="Role Name">User Name</label>
                <input type="text" name="name" class="form-control" value='{{ $user->name }}' readonly>
                </div>
                <div class="form-group">
                    <label for="Guard Name">Role Name</label>
                    <div class="container">
                        <div class="row">
                            @foreach ($roles as $role)
                            <div class="col-md-1 col-xs-3">
                            <input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->name}}" id="role_{{$role->id}}"
                                {{ $user->hasRole($role->name)?'checked':''}}>
                                <label class="form-check-label" for="exampleCheck1">{{ $role->name}}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- <div class="form-group">
                    <label for="Guard Name">Permission Name</label>
                    <div class="container">
                        <div class="row">
                            @foreach ($permissions as $permission)
                            <div class="col-md-2 col-xs-3">
                            <input type="checkbox" class="form-check-input" name="permissions[]" value ="{{$permission->name}}" id="permission_{{$role->id}}"
                                {{ $user->hasPermissionTo($permission->name)?'checked':''}}>
                                <label class="form-check-label" for="exampleCheck1">{{ $permission->name}}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div> --}}
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
