@extends('cms.cms_master')
@section('cms_content')
    <h2>Products</h2>
    <div class="row">
        <div class="col-md-12">
            <p>
                <a class=" btn btn-success" href="{{url('cms/products/create')}}">
                    <span class="glyphicon glyphicon-plus"></span>
                    Add new product
                </a>
            </p>
            @if($products)
                <br><br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Products</th>
                        <th>Images</th>
                        <th>Updated at</th>
                        <th>Operations</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $item)
                        <tr>
                            <td>{{ $item['ptitle'] }}</td>
                            <td><img width="50" src="{{ asset('images/'. $item['pimage']) }}"></td>
                            <td>{{ date('d/m/Y', strtotime($item['updated_at'])) }}</td>
                            <td>
                                <a href="{{ url('cms/products/' .$item['id'] .'/edit')}}">
                                    <span class="glyphicon glyphicon-pencil text-success"></span>
                                    Edit
                                </a> |
                                <a href="{{ url('cms/products/' .$item['id']) }}">
                                    <span class=" text-succes glyphicon glyphicon-trash text-danger"></span>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

@endsection
