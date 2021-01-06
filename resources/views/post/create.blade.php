@extends('layouts.app')

@push('script')
<script src="https://cdn.tiny.cloud/1/1n5vmu7nzek25j0mvzd0di8pz3zsb84njeot137ma5mcsk32/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endpush

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('post.store')}}">
                @csrf
                <div id="content">
                    <div class="form-group">
                        <label for="Role Name">Title</label>
                        <input type="text" name="title" class="form-control" value='' required>
                    </div>
                    <div class="form-group">
                        <label for="Guard Name">Content</label>
                        <textarea type="text" name="content" class="form-control" value=''></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Guard Name">Status</label>
                        <select name="status" id="status-select">
                            <option value="0">Raw</option>
                            <option value="1">Public</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
