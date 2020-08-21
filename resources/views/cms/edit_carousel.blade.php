@extends('cms.cms_master')
@section('cms_content')
    <h2>Edit Carousel Form</h2>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('cms/carousels/'. $item['id'])}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <input type="hidden" name="item_id" value="{{ $item['id']}}"> <!-- for unique -->
                <div class="form-group">
                    <label for="stitle">Title</label>
                    <input value="{{$item['stitle'] }}" name="stitle" type="text" class="form-control origin-text"
                           id="stitle" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="surl">Url</label>
                    <input value="{{$item['surl'] }}" name="surl" type="text" class="form-control target-text" id="surl"
                           placeholder="Url">
                </div>
                <div class="form-group">
                    <label for="sdescription">Description</label>
                    <textarea class="form-control" name="sdescription"
                              id="article">{{ $item['sdescription'] }}</textarea>
                </div>
                <div class="form-group">
                    <img width="70" src="{{ asset('images/' . $item['simage']) }}">
                    <br><br>
                    <label for="cimage">Change Carousel Image</label>
                    <input type="file" name="simage" id="cimage">
                </div>
                <input type="submit" name="submit" value="Update category" class="btn btn-secondary">
                <a class="btn btn-default" href="{{url('cms/carousels')}}">Cancel</a>
            </form>

        </div>
    </div>
@endsection
