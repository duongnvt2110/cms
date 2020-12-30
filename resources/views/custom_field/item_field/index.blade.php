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
        @if(auth()->user()->hasRole('user'))
            <a href="{{route('loan.create')}}" class="btn btn-primary float-left">Create</a>
        @endif
    </div>

    <form class="form-inline" action="{{route('custom.field.store')}}" action="POST">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Submit</button>

    </form>

    </div>
</div>
@endsection
