@extends('cms.cms_master')
@section('cms_content')
    <h2>Add new Content form</h2>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('cms/content')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="menu-id">Menu item</label>
                    <select class="form-control" name="menu_id" id="menu-id">
                        <option value="">Chose menu item...</option>
                        @foreach($menu as $item)
                            <option @if(old('menu_id') == $item['id']) selected="selected"
                                    @endif value="{{ $item['id']}}">{{ $item['link']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input value="{{old('title') }}" name="title" type="text" class="form-control" id="title"
                           placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="article">Article</label>
                    <textarea class="form-control" name="article" id="article">{{ old('article') }}</textarea>
                </div>
                <input type="submit" name="submit" value="Save Content" class="btn btn-secondary">
                <a class="btn btn-default" href="{{url('cms/content')}}">Cancel</a>
            </form>

        </div>
    </div>
@endsection
