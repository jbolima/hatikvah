@extends('cms.cms_master')
@section('cms_content')
    <h2>{{ !$user->id ? 'Add new' : 'Edit'  }} user form</h2>
    <div class="row">
        <div class="col-md-8">

            <form action="{{ route($user->id ? 'users.update': 'users.store' ,['user' => $user->id ])}}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @isset($user->id)
                    {{ method_field('PATCH')}}
                    <input type="hidden" name="item_id" value="{{ $user->id }}">
                @endisset
                <br>
                <div class="form-group">
                    <label for="rid">User role</label>
                    <select class="form-control" name="rid" id="rid">
                        <option value="rid">Choose the new user role...</option>
                        @foreach(\App\Role::all() as $role)
                            <option @if($role->id == $user->role_id) selected
                                    @endif value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input value="{{ old('name',$user->name) }}" name="name" type="text" class="form-control" id="name"
                           placeholder="Name">
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input value="{{old('email' , $user->email) }}" name="email" type="email" class="form-control"
                           id="email"
                           placeholder="Email">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                @if(!$user->id)
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password"
                               placeholder="Password">
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="confirm-password"
                               placeholder="Confirm Password">
                    <!--span  class="text-danger">{{ $errors->first('password') }}</span-->
                    </div>
                @endif
                <input type="submit" name="submit" value="{{ $user->id ? 'Edit user' : 'Save new user' }}"
                       class="btn btn-secondary">
                <a class="btn btn-default" href="{{url('cms/users')}}">Cancel</a>
            </form>

        </div>
    </div>
@endsection
