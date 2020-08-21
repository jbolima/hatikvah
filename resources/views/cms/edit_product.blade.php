@extends('cms.cms_master')
@section('cms_content')
    <h2>Edit product form</h2>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('cms/products/'. $item['id'])}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                <input type="hidden" name="item_id" value="{{ $item['id']}}"> <!-- for unique from edit_category-->
                <div class="form-group">
                    <label for="categorie-id">Category</label>
                    <select class="form-control" name="categorie_id" id="categorie-id">
                        @foreach($categories as $row)
                            <option @if($row['id'] == $item['categorie_id']) selected="selected"
                                    @endif value="{{ $row['id']}}">{{ $row['ctitle']}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="ptitle">Title</label>
                    <input value="{{ $item['ptitle'] }}" name="ptitle" type="text" class="form-control origin-text"
                           id="ptitle" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="purl">Url</label>
                    <input value="{{ $item['purl'] }}" name="purl" type="text" class="form-control target-text"
                           id="purl" placeholder="Url">
                </div>
                <div class="form-group">
                    <label for="particle">Article</label>
                    <textarea class="form-control" name="particle" id="article">{{ $item['particle'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input value="{{ $item['price'] }}" name="price" type="text" class="form-control" id="price"
                           placeholder="Price">
                </div>
                <div class="form-group">
                    <img width="70" src="{{ asset('images/' . $item['pimage']) }}">
                    <br><br>
                    <label for="pimage">Change product image</label>
                    <input type="file" name="pimage" id="pimage">
                </div>
                <input type="submit" name="submit" value="Update product" class="btn btn-secondary">
                <a class="btn btn-default" href="{{url('cms/products')}}">Cancel</a>
            </form>

        </div>
    </div>
@endsection
