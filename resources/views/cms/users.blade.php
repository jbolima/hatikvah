@extends('cms.cms_master')
@section('cms_content')
    <h2>Users details</h2>
    <div class="row">
        <div class="col-md-12">
            <p>
                <a class=" btn btn-success" href="{{url('cms/users/create')}}">
                    <span class="glyphicon glyphicon-plus"></span>
                    Add new user
                </a>
            </p>
            @if($users)
                <br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>User name</th>
                        <th>Email</th>
                        <th>Created at</th>
                        <th>Last update</th>
                        <th>Operations</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['email'] }}</td>
                            <td>{{ date('d/m/Y', strtotime($item['created_at'])) }}</td>
                            <td>{{ date('d/m/Y', strtotime($item['updated_at'])) }}</td>
                            <td>
                                <a href="{{ url('cms/users/' .$item['id'] .'/edit')}}">
                                    <span class="glyphicon glyphicon-pencil text-success"></span>
                                    Edit
                                </a> |
                                <a href="{{ url('cms/users/' .$item['id']) }}">
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
