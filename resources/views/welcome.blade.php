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
                    <li><a href="{{ route('create_article') }}">Post</a></li>
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
<div class="wrap">
    <div class="logo">
        <a href="index.html"><img src="images/logo.png" alt=""></a>
    </div>
    <div class="grid">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
    </div>
    <div class="clear"> </div>
</div>
<!-- start slider -->
<div class="slider">
    <div class="fluid_container">
        <div class="camera_wrap camera_magenta_skin" id="camera_wrap_2">
            <div data-src="images/slider1.jpg">
                <div class="camera_caption fadeFromBottom">
                    <p><a href="index.html">VISTA</a></p>
                    <h2>palce your description text here.great spot to tell about deals Lorem Ipsum has been the industry's standard dummy text.</h2>
                </div>
            </div>
            <div data-src="images/slider2.jpg">
                <div class="camera_caption fadeFromBottom">
                    <p><a href="index.html">GREAT</a></p>
                    <h2> It uses a light version of jQuery mobile, navigate the slides by swiping with your fingers Lorem Ipsum has been the industry's standard dummy text</h2>
                </div>
            </div>
            <div data-src="images/slider4.jpg">
                <div class="camera_caption fadeFromBottom">
                    <p><a href="index.html">LIGHT</a></p>
                    <h2> It uses a light version of jQuery mobile, navigate the slides by swiping with your fingers Lorem Ipsum has been the industry's standard dummy text</h2>
                </div>
            </div>
        </div><!-- #camera_wrap_2 -->
    </div><!-- fluid_container -->
    <div class="clear"></div>
</div>
<!--start-grids-->
<div class="top-bg">
    <div class="wrap">
        <div class="top-cont">
            <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h2>
            <div class="f_nav1">
                <ul>
                    <li><p><i class="icon1"> </i><span>4 Jan 24</span><p></li>
                    <li ><a href="#"> <i class="icon2"> </i> <span>Text</span></a></li>
                    <li ><a href="#"> <i class="icon3"> </i><span>3 Comments</span></a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
            <h6><a href="#">READ MORE</a></h6>
        </div>
    </div>
</div>
<div class="middle-bg">
    <div class="wrap">
        <div class="middle-cont">

            <div class="f_nav2">
                <ul>
                    <li><p> <i class="icon1"> </i><span>4 Jan 24</span></p></li>
                    <li ><a href="#"> <i class="icon2"> </i> <span>Quote</span></a></li>
                    <li ><a href="#"> <i class="icon3"> </i><span>3 Comments</span></a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <h6><a href="#">Haruki Murakami</a></h6>
        </div>
    </div>
</div>
<div class="bottom-bg">
    <div class="wrap">
        <div class="bottom-cont">
            <div class="f_nav3">
                <ul>
                    <li><p> <i class="icon1"> </i><span>4 Jan 24</span></p></li>
                    <li ><a href="#"> <i class="icon2"> </i> <span>Video</span></a></li>
                    <li ><a href="#"> <i class="icon3"> </i><span>3 Comments</span></a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <iframe src="//player.vimeo.com/video/83907617?title=0&amp;byline=0&amp;portrait=0&amp;badge=0" width="950" height="475" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
            </iframe>
        </div>
    </div>
</div>
<div class="footer-top-bg">
    <div class="wrap">
        <div class="footer-top">
            <div class="f_nav4">
                <ul>
                    <li><p> <i class="icon1"> </i><span>4 Jan 24</span></p></li>
                    <li ><a href="#"> <i class="icon2"> </i> <span>Image</span></a></li>
                    <li ><a href="#"> <i class="icon3"> </i><span>3 Comments</span></a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <img src="images/img.jpg"  alt=""/>
        </div>
    </div>
</div>
<div class="footer-middle-bg">
    <div class="wrap">
        <div class="footer-middle">
            <div class="f_nav5">
                <ul>
                    <li><p> <i class="icon1"> </i><span>4 Jan 24</span></p></li>
                    <li ><a href="#"> <i class="icon2"> </i> <span>Music</span></a></li>
                    <li ><a href="#"> <i class="icon3"> </i><span>3 Comments</span></a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <iframe src="//player.vimeo.com/video/24894937" width="950" height="180" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </div>
</div>
<!-- footer-bottom -->
<div class="footer-bottom">
    <div class="wrap">
        <div class="copy-right">
            <p>Swiss Theme by Niall Mac Farlane Template <a href="http://w3layouts.com/">  w3layouts.com</a></p>
        </div>
        <div class="social-icons">
            <ul>
                <li class="icon1"><a href="#" target="_blank"> </a></li>
                <li class="icon2"><a href="#" target="_blank"> </a></li>
                <li class="icon3"><a href="#" target="_blank"> </a></li>
                <li class="icon4"><a href="#" target="_blank"> </a></li>
                <li class="icon5"><a href="#" target="_blank"> </a></li>
                <div class="clear"></div>
            </ul>
        </div>
    </div>
    <div class="clear"> </div>
</div>
</body>
</html>
