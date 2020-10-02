@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>BM-H | DOMAINES</h3>
        </div>
    </div>
    <div class="row f-row">
        @if($categories)
            @foreach($categories as $category)
                <div class="col-md-4 col-sm-6">
                    <h3>{!! $category['ctitle'] !!}</h3>
                    <p><img width="350" src="{{ asset('images/' .$category['cimage']) }}" class="img-rounded"></p>
                    <p class="text-justify">{!! $category['carticle']!!}</p>
                    <p><a href="{{ url('invest/' .$category['curl'])}}" class="btn btn-success">View Investments</a></p>
                </div>
            @endforeach
        @else
            <div class="col-md-12">
                <p><i>No Investments available...</i></p>
            </div>
        @endif
    </div>
@endsection
