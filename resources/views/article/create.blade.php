<!DOCTYPE HTML>
<html>
<head>
    <title>Article</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- start slider -->
    <link href="css/camera.css" rel="stylesheet" type="text/css" media="all" />
    <script src="js/jquery.min.js"></script>
    <script type='text/javascript' src="js/jquery.mobile.customized.min.js"></script>
    <script type='text/javascript' src="js/jquery.easing.1.3.js"></script>
    <script type='text/javascript' src="js/camera.min.js"></script>
    <script>
        jQuery(function(){

            jQuery('#camera_wrap_2').camera({

                loader: 'bar',
                pagination: false,
                thumbnails: true
            });
        });
    </script>
    <!-- end slider -->
</head>
<body>
<!-- start header -->
<div class="header-bg">
    <div class="wrap">
        <div class="header">
            <div class="nav">
                <ul>
                    <li class="a"><a class="active" href="{{ route('home') }}">Home</a> </li>
                    <li><a href="#">Articles</a></li>
<!--                    <li><a href="#">Contact</a> </li>-->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li><a href="{{ route('create_article') }}">Post Articles</a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest

                </ul>
            </div>
            <div class="search">
                <input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                <input type="submit" value="Subscribe" id="submit" name="submit">
                <div id="response"> </div>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
</div>
<!-- end_header -->

</body>
</html>
