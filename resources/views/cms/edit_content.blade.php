@extends('cms.cms_master')
@section('cms_content')
    <h2>Edit Content form</h2>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('cms/content/'. $item['id'])}}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="menu-id">Menu item</label>
                    <select class="form-control" name="menu_id" id="menu-id">
                        @foreach($menu as $row)
                            <option @if($row['id'] == $item['menu_id']) selected="selected"
                                    @endif value="{{ $row['id']}}">{{ $row['link']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input value="{{ $item['title'] }}" name="title" type="text" class="form-control" id="title"
                           placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="article">Article</label>
                    <textarea class="form-control" name="article" id="article">{{ $item['article'] }}</textarea>
                </div>
                <input type="submit" name="submit" value="Update Content" class="btn btn-secondary">
                <a class="btn btn-default" href="{{url('cms/content')}}">Cancel</a>
            </form>

        </div>
    </div>
@endsection
