@extends('master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3>S'ENREGISTRER</h3>
            <p>Créez votre compte confidentiel que vous devez conserver pour vous permettre de garder contact avec BM
                Holding S.A.R.L</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST" novalidate="novalidate">
            @csrf<!--<input type="hidden" name="_token" value="IRXAXHLv5uzv8v1bmSmHmm6mU9lQx7mVy0se97JQ">-->

                <div class="form-group">
                    <label for="name">Votre Name:</label>
                    <input value="{{old('name') }}" name="name" type="text" class="form-control" id="name"
                           placeholder="Name">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>

                <div class="form-group">
                    <label for="email">Votre adresse email:</label>
                    <input value="{{old('email') }}" name="email" type="email" class="form-control" id="email"
                           placeholder="Email">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>

                <div class="form-group">
                    <label for="password">Votre mot de passe:</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                </div>

                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="form-control" id="confirm-password"
                           placeholder="Confirm Password">
                <!--span  class="text-danger">{{ $errors->first('password') }}</span-->
                </div>

                <input class="btn btn-success" type="submit" name="submit" value="Signup">

            </form>
        </div>
    </div>
@endsection
