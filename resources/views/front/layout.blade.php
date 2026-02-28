<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zenna | Home 1</title>

  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  
  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,400i,600,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="{{ asset('front/assets/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('front/assets/css/magnific-popup.css')}}" />
  <link rel="stylesheet" href="{{ asset('front/assets/css/font-icons.css')}}" />
  <link rel="stylesheet" href="{{ asset('front/assets/css/sliders.css')}}" />
  <link rel="stylesheet" href="{{ asset('front/assets/css/style.css')}}" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body class="relative">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
      <div></div>
    </div>
  </div>

  <main class="main-wrapper">

    <header class="nav-type-1">


      <!-- Top Bar -->
      <div class="top-bar hidden-xs">
        <div class="container">
          <div class="top-bar-links flex-parent">
            <ul class="top-bar-acc"> 
            @guest
              <li class="top-bar-link">
                <a href="{{ route('user.register.show') }}">Register</a>
              </li>                 
              <li class="top-bar-link">
                <a href="{{ route('login.show') }}">Login</a>
              </li>                 
            @endguest

            @auth
              <li class="top-bar-link">
                <a href="{{ route('logout') }}">Logout</a>
              </li>
            @endauth                
            </ul>
          </div>
        </div>
      </div> <!-- end top bar -->

      <nav class="navbar navbar-static-top">
        <div class="navigation" id="sticky-nav">
          <div class="container relative">

            <div class="row flex-parent">

              <div class="navbar-header flex-child">
                <!-- Logo -->
                <div class="logo-container">
                  <div class="logo-wrap">
                    <a href="{{route('home')}}">
                      <img class="logo-dark" src="{{asset('front/assets/img/logo_dark.png')}}" alt="logo">
                    </a>
                  </div>
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- Mobile cart -->
                <div class="nav-cart mobile-cart hidden-lg hidden-md">
                  <div class="nav-cart-outer">
                    <div class="nav-cart-inner">
                      <a href="#" class="nav-cart-icon">
                        <span class="nav-cart-badge">2</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div> <!-- end navbar-header -->

              <div class="nav-wrap flex-child">
                <div class="collapse navbar-collapse text-center" id="navbar-collapse">
                  
                  <ul class="nav navbar-nav">

                    <li class="dropdown">
                      <a href="{{ route('home') }}">Home</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>

                    </li>

                    <li class="dropdown">
                      <a href="#">Pages</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('cart') }}">Cart</a></li>
                        <li><a href="{{ route('checkout') }}">Checkout</a></li>
                        <li><a href="404.html">404</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="{{route('shop')}}">Shop</a>
                      <i class="fa fa-angle-down dropdown-trigger"></i>
                      <ul class="dropdown-menu megamenu-wide">
                        <li>
                          <div class="megamenu-wrap container">
                            <div class="row">

                              <div class="col-md-3 megamenu-item">
                                <ul class="menu-list">
                                  <li>
                                    <span>Shop Pages</span>
                                  </li>
                                  <li><a href="{{ route('cart') }}">Cart</a></li>
                                  <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                </ul>
                              </div>

                              <div class="col-md-3 megamenu-item">
                                <ul class="menu-list">
                                  <li>
                                    <span>For Her</span>
                                  </li>
                                  <li><a href="catalog.html">Dresses</a></li>
                                  <li><a href="catalog.html">Watches</a></li>
                                  <li><a href="catalog.html">Belts</a></li>
                                  <li><a href="catalog.html">Jackets</a></li>
                                  <li><a href="catalog.html">Scarfs</a></li>
                                </ul>
                              </div>

                              <div class="col-md-3 megamenu-item">
                                <ul class="menu-list">
                                  <li>
                                    <span>Accessories</span>
                                  </li>
                                  <li><a href="catalog.html">Wallets</a></li>
                                  <li><a href="catalog.html">Watches</a></li>
                                  <li><a href="catalog.html">Belts</a></li>
                                  <li><a href="catalog.html">Shoes</a></li>
                                  <li><a href="catalog.html">Scarfs</a></li>
                                </ul>
                              </div>

                              <div class="col-md-3 megamenu-item">
                                <ul class="menu-list">
                                  <li>
                                    <span>For Him</span>
                                  </li>
                                  <li><a href="catalog.html">T-shirts</a></li>
                                  <li><a href="catalog.html">Watches</a></li>
                                  <li><a href="catalog.html">Belts</a></li>
                                  <li><a href="catalog.html">Jeans</a></li>
                                  <li><a href="catalog.html">Scarfs</a></li>
                                </ul>
                              </div>

                            </div> 
                          </div>
                        </li>
                      </ul>
                    </li>

      

                  </ul> <!-- end menu -->
                </div> <!-- end collapse -->
              </div> <!-- end col -->

              <div class="flex-child flex-right nav-right hidden-sm hidden-xs">
                <ul>
                  <li class="nav-cart">
                    <div class="nav-cart-outer">
                      <div class="nav-cart-inner">
                        <a href="{{ route('cart') }}" class="nav-cart-icon">
                          0
                        </a>
                      </div>
                    </div>
                    <div class="nav-cart-container">
                      <div class="nav-cart-items">

                        <div class="nav-cart-item clearfix">
                          <div class="nav-cart-img">
                            <a href="#">
                              <img src="img/shop/shop_item_1.jpg" alt="">
                            </a>
                          </div>
                          <div class="nav-cart-title">
                            <a href="#">
                              Ladies Bag
                            </a>
                            <div class="nav-cart-price">
                              <span>1 x</span>
                              <span>1250.00</span>
                            </div>
                          </div>
                          <div class="nav-cart-remove">
                            <a href="#" class="remove"><i class="ui-close"></i></a>
                          </div>
                        </div>

                        <div class="nav-cart-item clearfix">
                          <div class="nav-cart-img">
                            <a href="#">
                              <img src="img/shop/shop_item_2.jpg" alt="">
                            </a>
                          </div>
                          <div class="nav-cart-title">
                            <a href="#">
                              Sequin Suit longer title
                            </a>
                            <div class="nav-cart-price">
                              <span>1 x</span>
                              <span>1250.00</span>
                            </div>
                          </div>
                          <div class="nav-cart-remove">
                            <a href="#" class="remove"><i class="ui-close"></i></a>
                          </div>
                        </div>

                      </div> <!-- end cart items -->

                      <div class="nav-cart-summary">
                        <span>Cart Subtotal</span>
                        <span class="total-price">$1799.00</span>
                      </div>

                      <div class="nav-cart-actions mt-20">
                        <a href="{{ route('cart') }}" class="btn btn-md btn-dark"><span>View Cart</span></a>
                        <a href="{{ route('checkout') }}" class="btn btn-md btn-color mt-10"><span>Proceed to Checkout</span></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
          
            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
    </header>

    <div class="content-wrapper oh">

      @yield('content')

            <!-- Footer Type-1 -->
      <footer class="footer footer-type-1">
        <div class="container">
          <div class="footer-widgets">
            <div class="row">

              <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="widget footer-about-us">
                  <img src="img/logo_dark.png" alt="" class="logo">
                  <p class="mb-30">Zenna Shop is a very slick and clean eCommerce template.</p>
                </div>
              </div> <!-- end about us -->

              <div class="col-md-2 col-md-offset-1 col-sm-6 col-xs-12">
                <div class="widget footer-links">
                  <h5 class="widget-title bottom-line left-align grey">Information</h5>
                  <ul class="list-no-dividers">
                    <li><a href="#">Our stores</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Business with us</a></li>
                    <li><a href="#">Delivery information</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="widget footer-links">
                  <h5 class="widget-title bottom-line left-align grey">Account</h5>
                  <ul class="list-no-dividers">                  
                    <li><a href="#">My account</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Order history</a></li>
                    <li><a href="#">Specials</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="widget footer-links">
                  <h5 class="widget-title bottom-line left-align grey">Useful Links</h5>
                  <ul class="list-no-dividers">
                    <li><a href="#">Shipping Policy</a></li>
                    <li><a href="#">Stores</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="widget footer-links">
                  <h5 class="widget-title bottom-line left-align grey">Service</h5>
                  <ul class="list-no-dividers">
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Warranty</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>    
        </div> <!-- end container -->

        <div class="bottom-footer">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 copyright sm-text-center">
                <span>
                  Copyright © {{ date('Y') }} Haidy Eed.
                </span>
              </div>
            </div>
          </div>
        </div> <!-- end bottom footer -->
      </footer> <!-- end footer -->

      <div id="back-to-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
      </div>

    </div> <!-- end content wrapper -->

  </main> <!-- end main wrapper -->

  <!-- jQuery Scripts -->
  <script type="text/javascript" src="{{ asset('front/assets/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('front/assets/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{ asset('front/assets/js/plugins.js')}}"></script>  
  <script type="text/javascript" src="{{ asset('front/assets/js/scripts.js')}}"></script>
    
</body>
</html>