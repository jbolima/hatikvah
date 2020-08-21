@extends('cms.cms_master')
@section('cms_content')
    <h2>Categories</h2>
    <div class="row">
        <div class="col-md-12">
            <p>
                <a class=" btn btn-success" href="{{url('cms/categories/create')}}">
                    <span class="glyphicon glyphicon-plus"></span>
                    Add new category
                </a>
            </p>
            @if($categories)
                <br><br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Categories</th>
                        <th>Images</th>
                        <th>Updated at</th>
                        <th><b>Operations</b></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $item)
                        <tr>
                            <td>{{ $item['ctitle'] }}</td>
                            <td><img width="50" src="{{ asset('images/'. $item['cimage']) }}"></td>
                            <td>{{ date('d/m/Y', strtotime($item['updated_at'])) }}</td>
                            <td>
                                <a href="{{ url('cms/categories/' .$item['id'] .'/edit')}}">
                                    <span class="glyphicon glyphicon-pencil text-success"></span>
                                    Edit
                                </a> |
                                <a href="{{ url('cms/categories/' .$item['id']) }}">
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
