@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($product)
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
                    <a href="{{ url('invest/checkout')}}" class="btn btn-primary">Check out</a>
                </p>
            @else
                <p><i>No details for this investments request....</i></p>
            @endif
        </div>
    </div>
@endsection
