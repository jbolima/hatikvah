@extends('cms.cms_master')
@section('cms_content')
    <h2>Add New Carousel Form</h2>
    <div class="row">
        <div class="col-md-8">

            <form action="{{ url('cms/carousels')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="stitle">Title</label>
                    <input value="{{old('stitle') }}" name="stitle" type="text" class="form-control origin-text"
                           id="stitle" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="surl">Url</label>
                    <input value="{{old('surl') }}" name="surl" type="text" class="form-control target-text" id="surl"
                           placeholder="Url">
                </div>
                <div class="form-group">
                    <label for="sdescription">Description</label>
                    <textarea class="form-control" name="sdescription" id="article">{{ old('sdescription') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="simage">Carousel image</label>
                    <input type="file" name="simage" id="cimage">
                </div>
                <input type="submit" name="submit" value="Save New Carousel" class="btn btn-secondary">
                <a class="btn btn-default" href="{{url('cms/carousels')}}">Cancel</a>
            </form>

        </div>
    </div>
@endsection
