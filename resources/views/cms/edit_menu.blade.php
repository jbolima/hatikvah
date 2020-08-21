@extends('cms.cms_master')
@section('cms_content')
    <h2>Edit Menu link form</h2>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('cms/menu/'. $item['id'])}}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <input type="hidden" name="item_id" value="{{ $item['id']}}">
                <div class="form-group">
                    <label for="link">Link</label>
                    <input value="{{ $item['link'] }}" name="link" type="text" class="form-control origin-text"
                           id="link" placeholder="Link">
                </div>
                <div class="form-group">
                    <label for="url">Url</label>
                    <input value="{{ $item['url'] }}" name="url" type="text" class="form-control target-text" id="url"
                           placeholder="Url">
                </div>
                <div class="form-group">
                    <label for="mtitle">Title</label>
                    <input value="{{ $item['mtitle'] }}" name="mtitle" type="text" class="form-control" id="mtitle"
                           placeholder="Title">
                </div>
                <input type="submit" name="submit" value="Update Menu" class="btn btn-secondary">
                <a class="btn btn-default" href="{{url('cms/menu')}}">Cancel</a>
            </form>

        </div>
    </div>
@endsection
