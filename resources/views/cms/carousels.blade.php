@extends('cms.cms_master')
@section('cms_content')
    <h2>Carousels Details</h2>
    <div class="row">
        <div class="col-md-12">
            <p>
                <a class=" btn btn-success" href="{{url('cms/carousels/create')}}">
                    <span class="glyphicon glyphicon-plus"></span>
                    Add New Carousel
                </a>
            </p>
            @if($carousels)
                <br><br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Caousels</th>
                        <th>Images</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th><b>Operations</b></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($carousels as $item)
                        <tr>
                            <td>{{ $item['stitle'] }}</td>
                            <td><img width="50" src="{{ asset('images/'. $item['simage']) }}"></td>
                            <td>{{ date('d/m/Y', strtotime($item['created_at'])) }}</td>
                            <td>{{ date('d/m/Y', strtotime($item['updated_at'])) }}</td>
                            <td>
                                <a href="{{ url('cms/carousels/' .$item['id'] .'/edit')}}">
                                    <span class="glyphicon glyphicon-pencil text-success"></span>
                                    Edit
                                </a> |
                                <a href="{{ url('cms/carousels/' .$item['id']) }}">
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
