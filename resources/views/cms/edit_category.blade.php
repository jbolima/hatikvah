@extends('cms.cms_master')
@section('cms_content')
    <h2>Edit category form</h2>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('cms/categories/'. $item['id'])}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <input type="hidden" name="item_id" value="{{ $item['id']}}"> <!-- for unique -->
                <div class="form-group">
                    <label for="ctitle">Title</label>
                    <input value="{{$item['ctitle'] }}" name="ctitle" type="text" class="form-control origin-text"
                           id="ctitle" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="curl">Url</label>
                    <input value="{{$item['curl'] }}" name="curl" type="text" class="form-control target-text" id="curl"
                           placeholder="Url">
                </div>
                <div class="form-group">
                    <label for="carticle">Article</label>
                    <textarea class="form-control" name="carticle" id="article">{{ $item['carticle'] }}</textarea>
                </div>
                <div class="form-group">
                    <img width="70" src="{{ asset('images/' . $item['cimage']) }}">
                    <br><br>
                    <label for="cimage">Change Category image</label>
                    <input type="file" name="cimage" id="cimage">
                </div>
                <input type="submit" name="submit" value="Update category" class="btn btn-secondary">
                <a class="btn btn-default" href="{{url('cms/categories')}}">Cancel</a>
            </form>

        </div>
    </div>
@endsection
