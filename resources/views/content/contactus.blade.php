@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Contact Us</h3>
            <hr>
            <p>Leave your details and messages. We will come back to you as soon as possible</p>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-8">
            @include('inc.contactus-form')
        </div>
    </div>
@endsection
