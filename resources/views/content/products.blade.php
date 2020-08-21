@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if( $title != 'B-Hatikvah | ')
                <h3>{{ $title}}</h3>
            @endif
        </div>
    </div>
    <div class="row f-row">
        @if($products)
            @foreach( $products as $product)
                <div class="col-md-6">
                    <h3>{{ $product->ptitle }}</h3>
                    <p><img class="img-rounded" width="500" src="{{ asset('images/' .$product->pimage) }}"></p>
                    <p class="text-justify">{!! $product->particle !!}</p>
                    <p><b>Price on site: </b>${{ $product->price }}</p>
                    <p>
                        @if(! Cart::get($product->id))
                            <input data-id="{{ $product->id }}" type="button" value="+ Add to Cart"
                                   class="btn btn-success add-to-cart">
                        @else
                            <input disabled="disabled" data-id="{{ $product->id }}" type="button" value="! In Cart"
                                   class="btn btn-success add-to-cart">
                        @endif
                        <a href="{{ url('invest/' .$product->curl .'/' .$product->purl) }}" class="btn btn-primary">View
                            Investments Details</a>
                    </p>
                </div>
            @endforeach
        @else
            <div class="col-md-12">
                <p><i>No Investments for this request...</i></p>
            </div>
        @endif
    </div>
@endsection
