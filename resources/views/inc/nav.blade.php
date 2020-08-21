<div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-inverse navbar-fixed-top  navbar-custom">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/')}}"><i>B</i>-HCI</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('#about') }}"></a></li>
                        <li><a href="{{ url('aboutus') }}">About Us</a></li>
                        <li><a href="{{ url('contactus') }}">Contact Us</a></li>
                        <!-- the dynamic link for navbar-->
                        @foreach( $menu as $item)
                            <li><a href="{{ url($item['url'])}}">{{ $item['link']}}</a></li>
                        @endforeach

                        <li><a href="{{ url('invest') }}">Investments</a></li>
                    <!--li>
              <a href="{{ url('invest/checkout') }}">
                <div id="total-cart">{{ Cart::getTotalQuantity() }}</div>
                <img width="20" src="{{  asset('images/shopping-cart.png')}}">
              </a>
            </li-->
                    </ul>
                    <ul class="nav navbar-nav navbar-right ">
                        @if( ! Session::has('user_id'))
                            <li><a href="{{ url('user/signin') }}">Sign in</a></li>
                            <li><a href="{{ url('user/signup') }}">Sign up</a></li>
                        @else
                            <li><a href="{{ url('user/profile') }}">{{ Session::get('user_name')}}</a></li>
                            @if(Session::has('is_admin'))
                                <li><a href="{{ url('cms/dashboard') }}">CMS</a></li>
                            @endif
                            <li><a href="{{ url('user/logout') }}">Logout</a></li>
                        @endif
                        <li>
                            <a class="lang" data-lang="fr" href="{{ url('') }}"><img width="20"
                                                                                     src="{{ asset('images/frenchflag.jpg') }}">
                                Français</a>
                        </li>
                        <li>
                            <a class="lang" data-lang="en" href="{{ url('') }}"><img width="20"
                                                                                     src="{{ asset('images/englandflag.jpg') }}">
                                English</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</div>
