<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>eCommerce</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet"/>
        <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
       <!-- <link rel="stylesheet" href="css/normalize.css">-->
       <!-- <link rel="stylesheet" href="css/main.css">-->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="wrapper">
            <header>
                <section id="top-area">
                    <p>Phone orders: 1-800-0000 | Email us: <a href="mailto:office@shop.com">office@shop.com</a></p>
                </section><!-- end top-area -->
                <section id="action-bar">
                    <div id="logo">
                        <a href="/"><span id="logo-accent">e</span>Commerce</a>
                    </div><!-- end logo -->

                    <nav class="dropdown">
                        <ul>
                            <li>
                                <a href="#">Shop by Category <img src="{{asset("img/down-arrow.gif")}}" alt="Shop by Category" /></a>
                                <ul>

                                    <?php
                                        $categories=\App\Category::all()
                                    ?>
                                    @foreach($categories as $category)
                                        <li><a href="store/category">{{$category->name}}</a></li>
                                    @endforeach

                                </ul>
                            </li>
                        </ul>
                    </nav>

                    <div id="search-form">
                        {!! Form::open(array('class' => 'form-inline', 'method' => 'get', 'url'=>'search')) !!}
                         {!!Form::text('keyword',null, array('placeholder'=>'Search by keyword', 'class'=>'search'))!!}
                        {!!Form::submit('Search', array('class'=>'search submit'))!!}
                        {!!Form::close()!!}
                            <!--<input type="search" name="search" placeholder="Search by keyword" class="search">
                            <input type="submit" value="Search" class="search submit">-->

                    </div><!-- end search-form -->

                    <div id="user-menu">
                    @if(Auth::check())

                                                   <nav class="dropdown">
                                                       <ul>
                                                           <li>
                                                               <a href="#"><img src="{{asset('img/user-icon.gif')}}"/> shima <img src="{{asset("img/down-arrow.gif")}}" alt="shima" /></a>
                                                               <ul>
                                                                   <li><a href="#">Order History</a></li>
                                                                   <li><a href="users/signout">Sign Out</a></li>
                                                               </ul>
                                                           </li>
                                                       </ul>
                                                   </nav>
                    @else
                         <nav id="signin" class="dropdown">
                                                    <ul>
                                                        <li>
                                                            <a href="#"><img src="{{asset("img/user-icon.gif")}}" alt="Sign In" /> Sign In <img src="{{asset("img/down-arrow.gif")}}" alt="Sign In" /></a>
                                                            <ul>

                                                                <li><a href="login">Sign In</a></li>

                                                                <li><a href="users">Sign Up</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </nav>
                    @endif




                    </div><!-- end user-menu -->

                    <div id="view-cart">
                        <a href="store/cart"><img src="{{asset("img/blue-cart.gif")}}" alt="View Cart"> View Cart</a>
                    </div><!-- end view-cart -->
                </section><!-- end action-bar -->
            </header>
                    @yield('promo')
            <hr />

            <section id="main-content" class="clearfix">
                    @if(Session::has('message'))
                        <p class="alert">{{Session::get('message')}}</p>
                    @endif
                    @yield('search-keyword')
                    @yield('view')
                    @yield('content')

            </section><!-- end main-content -->

            <hr />

            <footer>
                <section id="contact">
                    <h3>For phone orders please call 1-800-000. You<br>can also email us at <a href="mailto:office@shop.com">office@shop.com</a></h3>
                </section><!-- end contact -->

                <hr />

                <section id="links">
                    <div id="my-account">
                        <h4>MY ACCOUNT</h4>
                        <ul>
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">Sign Up</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="store/cart">Shopping Cart</a></li>
                        </ul>
                    </div><!-- end my-account -->
                    <div id="info">
                        <h4>INFORMATION</h4>
                        <ul>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div><!-- end info -->
                    <div id="extras">
                        <h4>EXTRAS</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="contact">Contact Us</a></li>
                        </ul>
                    </div><!-- end extras -->
                </section><!-- end links -->

                <hr />

                <section class="clearfix">
                    <div id="copyright">
                        <div id="logo">
                            <a href="#"><span id="logo-accent">e</span>Commerce</a>
                        </div><!-- end logo -->
                        <p id="store-desc">This is a short description of the store.</p>
                        <p id="store-copy">&copy; 2013 eCommerce. Theme designed by Adi Purdila.</p>
                    </div><!-- end copyright -->
                    <div id="connect">
                        <h4>CONNECT WITH US</h4>
                        <ul>
                            <li class="twitter"><a href="#">Twitter</a></li>
                            <li class="fb"><a href="#">Facebook</a></li>
                        </ul>
                    </div><!-- end connect -->
                    <div id="payments">
                        <h4>SUPPORTED PAYMENT METHODS</h4>
                        <img src="{{asset("img/payment-methods.gif")}}" alt="Supported Payment Methods">
                    </div><!-- end payments -->
                </section>
            </footer>
        </div><!-- end wrapper -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
