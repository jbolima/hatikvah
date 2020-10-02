<!DOCTYPE html>
<html>
<head>
    <title>BM Holding Admin Panel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" type="text/css"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
    <script>var BASE_URL = "{{ url('') }}/";</script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top navbar-admin">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('cms/dashboard') }}">BMH CMS</b></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('user/profile') }}">{{ Session::get('user_name')}}</a></li>
                <li><a target="_blank" href="{{ url('')}}">Back To Site</a></li>
                <li><a href="{{ url('user/logout')}}">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="{{ url('cms/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('cms/menu') }}">Menu</a></li>
                <li><a href="{{ url('cms/content') }}">Content</a></li>
                <li><a href="{{ url('cms/categories') }}">Categories</a></li>
                <li><a href="{{ url('cms/products') }}">Products</a></li>
                <li><a href="{{ url('cms/orders') }}">Orders</a></li>
                <li><a href="{{ url('cms/users') }}">Users</a></li>
                <li><a href="{{ url('cms/carousels') }}">Carousels</a></li>
                <li><a href="{{ url('cms/contactus') }}">Contact us</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <!--Alert message after menu validation = "New menu link has saved"-->
            @if( Session::has('sm'))
                <div id="sm-box" class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            <p>{{ Session::get('sm') }}</p>
                        </div>
                    </div>
                </div>
            @endif
        <!--end of alert message -->
            <!-- Errors message while VALIDATIONS-->
            @if ($errors->any())
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        <!--End of validations errors messages-->
            @yield('cms_content')
        </div>
    </div>
</div>
<hr>
<footer>
    @include('inc.footer-content',[ 'cmsMode' => 1 ])
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
@yield('scripts')

</body>
</html>

