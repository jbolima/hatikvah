@extends('cms.cms_master')
@section('cms_content')
    <h2>Users Oders </h2>
    <div class="row">
        <div class="col-md-12">
            @if(!$orders->isEmpty() )
                <br><br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>User</th>
                        <th>Total</th>
                        <th>Order details</th>
                        <th>Order date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>${{ $item->total }}</td>
                            <td>
                                <ul>
                                    @foreach(unserialize($item->data) as $row)
                                        <li>{{ $row['name'] }}, Price: ${{ $row['price'] }},
                                            Quantity: {{ $row['quantity'] }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
