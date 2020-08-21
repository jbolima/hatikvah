@extends('cms.cms_master')
@section('cms_content')
    <h2>Add new user form</h2>
    <div class="row">
        <div class="col-md-8">

            <form action="{{ url('cms/users')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <br>
                <div class="form-group">
                    <label for="rid">User rule</label>
                    <select class="form-control" name="rid" id="rid">
                        <option value="rid">Chose the new user rule...</option>
                        <option value="6">Administrator</option>
                        <option value="7">Regular user</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input value="{{old('name') }}" name="name" type="text" class="form-control" id="name"
                           placeholder="Name">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
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
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="form-control" id="confirm-password"
                           placeholder="Confirm Password">
                <!--span  class="text-danger">{{ $errors->first('password') }}</span-->
                </div>
                <input type="submit" name="submit" value="Save new user" class="btn btn-secondary">
                <a class="btn btn-default" href="{{url('cms/users')}}">Cancel</a>
            </form>

        </div>
    </div>
@endsection
