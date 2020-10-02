@extends('cms.cms_master')
@section('cms_content')
    <h2>Delete User</h2>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('cms/users/' .$item_id)}}" method="POST">
                @csrf
                {{ method_field('DELETE')}}
                <h3>Are you sure you want to delete this user?</h3>
                <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                <a class="btn btn-default" href="{{url('cms/users')}}">Cancel</a>
            </form>
        </div>
    </div>
@endsection
