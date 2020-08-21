@extends('cms.cms_master')
@section('cms_content')
    <h2>Add new Menu link form</h2>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('cms/menu')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="link">Link</label>
                    <input value="{{old('link') }}" name="link" type="text" class="form-control origin-text" id="link"
                           placeholder="Link">
                </div>
                <div class="form-group">
                    <label for="url">Url</label>
                    <input value="{{old('url') }}" name="url" type="text" class="form-control target-text" id="url"
                           placeholder="Url">
                </div>
                <div class="form-group">
                    <label for="mtitle">Title</label>
                    <input value="{{old('mtitle') }}" name="mtitle" type="text" class="form-control" id="mtitle"
                           placeholder="Title">
                </div>
                <input type="submit" name="submit" value="Save Menu" class="btn btn-secondary">
                <a class="btn btn-default" href="{{url('cms/menu')}}">Cancel</a>
            </form>

        </div>
    </div>
@endsection
