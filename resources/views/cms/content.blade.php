@extends('cms.cms_master')
@section('cms_content')
    <h2>Content link</h2>
    <div class="row">
        <div class="col-md-8">
            <p>
                <a class=" btn btn-success" href="{{url('cms/content/create')}}">
                    <span class="glyphicon glyphicon-plus"></span>
                    Add new content
                </a>
            </p>
            @if($contents)
                <br><br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Content title</th>
                        <th>Updated at</th>
                        <th><b>Operations</b></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contents as $item)
                        <tr>
                            <td>{{ $item['title'] }}</td>
                            <td>{{ date('d/m/Y', strtotime($item['updated_at'])) }}</td>
                            <td>
                                <a href="{{ url('cms/content/' .$item['id'] .'/edit')}}">
                                    <span class="glyphicon glyphicon-pencil text-success"></span>
                                    Edit
                                </a> |
                                <a href="{{ url('cms/content/' .$item['id']) }}">
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
