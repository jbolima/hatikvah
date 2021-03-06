@extends('cms.cms_master')
@section('cms_content')
    <h2>Delete Product</h2>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('cms/products/' .$item_id)}}" method="POST">
            @csrf
            <!-- http protocol for deleting
        <input type="hidden" name="_method" value="DELETE">
        <!--end http protocol for delete-->
                <!-- Laravel elete method-->
                {{ method_field('DELETE')}}
                <h3>Are you sure you want to delete this product?</h3>
                <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                <a class="btn btn-default" href="{{url('cms/products')}}">Cancel</a>
            </form>
        </div>
    </div>
@endsection
