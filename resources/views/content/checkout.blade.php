@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3><i>B</i>-Hatikvah Checkout</h3>
            @if($cart)
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">Product</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Sub-total</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cart as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td class="text-center">
                                <input class="update-cart-item" data-id="{{ $item['id']}}" data-op="minus" type="button"
                                       value="-">
                                <input class="text-center" size="1" type="text" value="{{ $item['quantity'] }}">
                                <input class="update-cart-item" data-id="{{ $item['id']}}" data-op="plus" type="button"
                                       value="+">
                            </td>
                            <td class="text-right">${{ $item['price'] }}</td>
                            <td class="text-right">${{ $item['quantity'] * $item['price'] }}</td>
                            <td class="text-center">
                                <a href="{{ url('invest/remove-item?id=' .$item['id']) }}" class="text-danger"><span
                                        class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <p>
                    <b>Total in Cart: </b> ${{ Cart::getTotal()}}
                    <span class="pull-right">
          <a href="{{ url('invest/clear-cart')}}" class="btn btn-default">Clear cart</a>
        </span>
                </p>
                <p>
                    <a href="{{ url('invest/order')}}" class="btn btn-primary">ORDER NOW!</a>
                </p>
            @else
                <p><i>No investment in the Cart...</i></p>
            @endif

        </div>
    </div>
@endsection
