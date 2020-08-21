@extends('master')
@section('content')
    @if($contents)
        @foreach($contents as $content)
            <div class="row">
                <div class="col-md-12">
                    <h3>{{ $content->title}}</h3>
                    <p>{!! $content->article!!}</p>
                </div>
            </div>
        @endforeach
    @else
        <div class="row">
            <div class="col-md-12">
                <p><i>No content available for this menu link...</i></p>
            </div>
        </div>
    @endif
@endsection
