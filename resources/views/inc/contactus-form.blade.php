<form action="" method="POST" novalidate="novalidate">
    @csrf
    @if(!empty($admin) || !Session::get('user_id'))
        @if(empty($admin))
            <div class="form-group">
                <label for="name">Your Name</label>
                <input value="{{old('name') }}" name="name" type="text" class="form-control" id="text"
                       placeholder="Name">
                <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
        @endif
        <div class="form-group">
            <label for="email">
                @if(empty($admin))
                    Your Email address
                @else
                    To Email address
                @endif
            </label>
            <input value="{{old('email_from') }}" name="email_from" type="email" class="form-control" id="email"
                   placeholder="Email">
            <span class="text-danger">{{ $errors->first('email_from') }}</span>
        </div>
    @endif
    <div class="form-group">
        <label for="message">Your message</label>
        <textarea class="form-control" name="message" id="article">{{ old('message') }}</textarea>
    </div>
    <input class="btn btn-success" type="submit" name="submit" value="Send">
</form>
