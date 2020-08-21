@extends('cms.cms_master')
@section('cms_content')
    <h2>Delete Menu link</h2>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('cms/menu/' .$item_id)}}" method="POST">
            @csrf
            <!-- http protocol for deleting
        <input type="hidden" name="_method" value="DELETE">
        <!--end http protocol for delete-->
                <!-- Laravel elete method-->
                {{ method_field('DELETE')}}
                <h3>Are you sure you want to delete this item?</h3>
                <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                <a class="btn btn-default" href="{{url('cms/menu')}}">Cancel</a>
            </form>
        </div>
    </div>
@endsection
