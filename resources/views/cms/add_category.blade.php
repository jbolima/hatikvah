@extends('cms.cms_master')
@section('cms_content')
    <h2>Add new category form</h2>
    <div class="row">
        <div class="col-md-8">

            <form action="{{ url('cms/categories')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="ctitle">Title</label>
                    <input value="{{old('ctitle') }}" name="ctitle" type="text" class="form-control origin-text"
                           id="ctitle" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="curl">Url</label>
                    <input value="{{old('curl') }}" name="curl" type="text" class="form-control target-text" id="curl"
                           placeholder="Url">
                </div>
                <div class="form-group">
                    <label for="carticle">Article</label>
                    <textarea class="form-control" name="carticle" id="article">{{ old('carticle') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="cimage">Category image</label>
                    <input type="file" name="cimage" id="cimage">
                </div>
                <input type="submit" name="submit" value="Save category" class="btn btn-secondary">
                <a class="btn btn-default" href="{{url('cms/categories')}}">Cancel</a>
            </form>

        </div>
    </div>
@endsection
