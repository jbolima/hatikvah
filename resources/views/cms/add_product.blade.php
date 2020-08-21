@extends('cms.cms_master')
@section('cms_content')
    <h2>Add new product form</h2>
    <div class="row">
        <div class="col-md-8">

            <form action="{{ url('cms/products')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="categorie-id">Category</label>
                    <select class="form-control" name="categorie_id" id="categorie-id">
                        <option value="">Chose category item...</option>
                        @foreach($categories as $item)
                            <option @if(old('categorie_id') == $item['id']) selected="selected"
                                    @endif value="{{ $item['id']}}">{{ $item['ctitle']}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="ptitle">Title</label>
                    <input value="{{old('ptitle') }}" name="ptitle" type="text" class="form-control origin-text"
                           id="ptitle" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="purl">Url</label>
                    <input value="{{old('purl') }}" name="purl" type="text" class="form-control target-text" id="purl"
                           placeholder="Url">
                </div>
                <div class="form-group">
                    <label for="particle">Article</label>
                    <textarea class="form-control" name="particle" id="article">{{ old('particle') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input value="{{old('price') }}" name="price" type="text" class="form-control" id="price"
                           placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="pimage">Product image</label>
                    <input type="file" name="pimage" id="pimage">
                </div>
                <input type="submit" name="submit" value="Save new product" class="btn btn-secondary">
                <a class="btn btn-default" href="{{url('cms/products')}}">Cancel</a>
            </form>

        </div>
    </div>
@endsection
