<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gameverse Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon"href="{{asset('frontEnd')}}/assets/img/favicon.ico">
    <!-- CSS ========================= -->
    <!-- Plugins CSS -->
    <link rel="stylesheet"href="{{asset('frontEnd')}}/assets/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet"href="{{asset('frontEnd')}}/assets/css/style.css">
</head>
<body>
<!-- Main Wrapper Start -->
<!--header sidebar area start-->
<div class="header_sidebar_area sidebar_black_version">
    <div class="sidebar_logo">
        <a href="index.html"><img src="{{asset('frontEnd')}}/assets/img/logo/logo-3.png" alt=""></a>
    </div>
    <div class="header_sidebar_menu">
        <div class="main_menu">
            <nav>
                <ul>
                    <li class="active"><a href="{{route('/')}}">Home</a>
                    </li>
                    <li><a href="shop.html">shop <i class="fa fa-angle-down"></i></a>
                        <ul class="mega_menu">
                            <li><a href="#">Shop Layouts</a>
                                <ul>
                                    <li><a href="shop-fullwidth.html">Full Width</a></li>
                                    <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                    <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                    <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                    <li><a href="shop-list.html">List View</a></li>
                                </ul>
                            </li>
                            <li><a href="#">other Pages</a>
                                <ul>
                                    <li><a href="portfolio.html">portfolio</a></li>
                                    <li><a href="portfolio-details.html">portfolio details</a></li>
                                    <li><a href="cart.html">cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="my-account.html">my account</a></li>


                                </ul>
                            </li>
                            <li><a href="#">Product Types</a>
                                <ul>
                                    <li><a href="product-details.html">product details</a></li>
                                    <li><a href="product-sidebar.html">product sidebar</a></li>
                                    <li><a href="product-gallery.html">product gallery</a></li>
                                    <li><a href="product-grouped.html">product grouped</a></li>
                                    <li><a href="variable-product.html">product variable</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html">blog <i class="fa fa-angle-down"></i></a>
                        <ul class="sub_menu pages">
                            <li><a href="blog-details.html">blog details</a></li>
                            <li><a href="blog-sidebar.html">blog  Sidebar</a></li>
                            <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                        </ul>
                    </li>
                    <li><a href="portfolio.html">portfolio</a></li>
                    <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                        <ul class="sub_menu pages">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="services.html">services</a></li>
                            <li><a href="faq.html">Frequently Questions</a></li>
                            <li><a href="login.html">login</a></li>
                            <li><a href="my-account.html">my account</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="404.html">Error 404</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="sidebar_newsletter">
        <h3>Newsletter</h3>
        <p>Sign up for our newsletter.</p>
    </div>
    <div class="sidebar_form">
        <form action="#">
            <input placeholder="Email address.." type="text">
            <button type="submit"><i class="ion-android-send"></i></button>
        </form>
    </div>
    <div class="social_icone">
        <ul>
            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="ion-social-youtube"></i></a></li>
        </ul>
    </div>
    <div class="sidebar_footer">
        <p>&copy; 2021 <a href="index.html" class="text-uppercase">MONSTA</a>. Made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://www.hasthemes.com/">HasThemes</a></p>
    </div>
</div>
<!--header sidebar area end-->
<div class="home_black_version version_3">
    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>
  @include('frontEnd.include.header')
  @yield('contents')
   @include('frontEnd.include.footer')
</div>
<!-- JS ============================================ -->
<!-- Plugins JS -->
<script src="{{asset('frontEnd')}}/assets/js/plugins.js"></script>
<!-- Main JS -->
<script src="{{asset('frontEnd')}}/assets/js/main.js"></script>
</body>
</html>
