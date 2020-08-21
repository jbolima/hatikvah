<?php $menu = App\Menu::all()->toArray(); ?>
@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>OOPS! Your request not found</h1>
            <p><a href="{{ url('') }}">Back to home page</a></p>
        </div>
    </div>
@endsection
