@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>Sign In</h3>
            <p>Use your account to sign in</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST" novalidate="novalidate">
            @csrf<!--<input type="hidden" name="_token" value="IRXAXHLv5uzv8v1bmSmHmm6mU9lQx7mVy0se97JQ">-->
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input value="{{old('email') }}" name="email" type="email" class="form-control" id="email"
                           placeholder="Email">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                </div>
                <input class="btn btn-success" type="submit" name="submit" value="Signin">
                @if( $errors->any())
                    @foreach($errors->all() as $error)
                        @if( $error == 'Wrong email and password')
                            <span class="text-danger">{{ $error }}</span>
                        @endif
                    @endforeach
                @endif
            </form>
        </div>
    </div>
@endsection
