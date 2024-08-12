<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

      <meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Open+Sans:wght@400;600;700;800;900&family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,900;1,400;1,700&display=swap" rel="stylesheet">

      <!-- Core Style -->
      <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

      <!-- Font Icons -->
      <link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}">
      <link rel="stylesheet" href="{{asset('assets/one-page/css/et-line.css')}}">

      <!-- Custom CSS
      <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
      <meta name="viewport" content="width=device-width, initial-scale=1"> -->

      <!-- Plugins/Components CSS -->
      <!-- <link rel="stylesheet" href="css/components/ion.rangeslider.css"> -->
      <!-- <link rel="stylesheet" href="{{asset('assets/css/components/ion.rangeslider.css')}}"> -->

      <!-- Plugins/Components CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/swiper.css')}}">

      <!-- Niche Demos -->
      <link rel="stylesheet" href="{{asset('assets/demos/restaurant/restaurant.css')}}">

      <!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
      

      <!-- Document Title
      ============================================= -->
      <title>Restaurant | Canvas</title>
      

</head>

<body class="stretched sticky-footer device-up-xs has-plugin-pagetransition has-plugin-animations has-plugin-bootstrap has-plugin-lightbox has-plugin-swiper has-plugin-carousel device-down-xxl device-down-xl device-down-lg device-down-md device-xs device-down-sm" data-loader-html="<span class='pizza'> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> <span class='slice'></span> </span>">

 <!-- Document Wrapper
 ============================================= -->
 <div id="wrapper">

 <!-- Header
      ============================================= -->
      <header id="header" class="transparent-header" data-sticky-shrink="false">
            <div id="header-wrap">
                  <div class="container">
                        <div class="header-row justify-content-lg-between">

                              <!-- Logo
                              ============================================= -->
                              <div id="logo" class="col-auto me-lg-0 order-lg-2">
                                    <a href="{{route('user.auth.home')}}">
                                          <img class="logo-default"  src="{{asset('assets/images/bakery_logo.png')}}" alt="Canvas Logo">
                                    </a>
                              </div><!-- #logo end -->

                              <div class="primary-menu-trigger">
                                    <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                                          <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                                    </button>
                              </div>

                              

                  <!-- Primary Navigation
                  ============================================= -->
                  @if (session()->has('user_id'))
                        <nav class="primary-menu col-lg-4 order-lg-1">
                              <ul class="menu-container">
                                    <li class="menu-item"><a class="menu-link" href="{{route('user.auth.home')}}#hot" target="_self"><div><b>熱門</b></div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="{{route('user.auth.home')}}#team"><div><b>關於</b></div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="{{route('user.auth.shop')}}"><div><b>商城</b></div></a></li>
                              </ul>
                        </nav>
                        @if ( old('type')=='G')
                              <nav class="primary-menu col-lg-4 order-lg-3">
                                    <ul class="menu-container justify-content-lg-end">
                                          @include('component.cart')
                                          <li class="menu-item"><a class="menu-link color" href="{{route('user.auth.signout')}}"><div><b>登出</b></div></a></li>
                                    </ul>
                              </nav>
                        @else
                              <nav class="primary-menu col-lg-4 order-lg-3">
                                    <ul class="menu-container justify-content-lg-end">
                                          <li class="menu-item"><a class="menu-link" href="{{route('merchandise.manage')}}"><div><b>商品管理</b></div></a></li>
                                          <li class="menu-item"><a class="menu-link color" href="{{route('user.auth.signout')}}"><div><b>登出</b></div></a></li>
                                    </ul>
                              </nav>
                        @endif
                  @else
                        <nav class="primary-menu col-lg-4 order-lg-1">
                              <ul class="menu-container">
                                    <li class="menu-item"><a class="menu-link" href="{{route('user.auth.home')}}#hot" target="_self"><div><b>熱門</b></div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="{{route('user.auth.home')}}#team"><div><b>關於</b></div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="{{route('user.auth.shop')}}"><div><b>商城</b></div></a></li>
                              </ul>
                        </nav>
                        <nav class="primary-menu col-lg-4 order-lg-3">                            
                              <ul class="menu-container justify-content-lg-end">
                                    @include('component.cart')
                                    <li class="menu-item"><a class="menu-link color" href="{{route('user.auth.login')}}"><div><b>登入</b></div></a></li>
                                    <li class="menu-item"><a class="menu-link color" href="{{route('user.auth.signup')}}"><div><b>註冊</b></div></a></li>
                              </ul>
                        </nav>
                  @endif
            </div>
                  </div>
            </div>
            <div class="header-wrap-clone"></div>
      </header><!-- #header end -->


      @yield('slider') 

      @yield('content') 
      
 
      <!-- Footer
      ============================================= -->
      <footer id="footer" class="dark" style="background: url({{asset('assets/demos/restaurant/images/footer-bg.jpg')}})  repeat center center / cover; background-size: auto 100%;; padding: 20px 0 22px">
            <!-- Copyrights
            ============================================= -->
            <div id="copyrights" class="bg-transparent pb-4">
                  <div class="container">

                        <div class="row justify-content-between col-mb-30">
                              <div class="col-12 col-md-auto text-center text-md-start">
                                    <span class="font-primary">&copy; Canvas Inc. 2021. All Rights Reserved.</span>
                              </div>

                              <div class="col-12 col-md-auto text-center text-md-end">
                                    <div class="copyrights-menu copyright-links">
                                          <a href="#">熱門</a>/<a href="#">關於我們</a>/<a href="#">聯繫</a>
                                    </div>
                              </div>
                        </div>

                  </div>
            </div><!-- #copyrights end -->
      </footer><!-- #footer end -->

   <!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="bi-arrow-up"></div>

      <!-- JavaScripts
      ============================================= -->
      <!-- <script src="/js/functions.js"></script> -->
      <script src="{{asset('assets/js/functions.js')}}"></script>
      <script src="{{asset('assets/js/jquery.js')}}"></script>
      <!-- Custom Carousel JS File -->
      <script>
            var carouselRTL = false;

            if( jQuery('body').hasClass('rtl') ) {
                  carouselRTL = true;
            }

            jQuery(window).on( 'pluginCarouselReady', function(){
                  jQuery('#food-menu-carousel').owlCarousel({
                        animateIn: 'fadeIn',
                        animateOut: 'fadeOut',
                        items: 1,
                        mouseDrag: false,
                        dotsContainer: '#item-thumb',
                        rtl: carouselRTL
                  });

                  jQuery('#dessert-menu-carousel').owlCarousel({
                        animateIn: 'fadeIn',
                        animateOut: 'fadeOut',
                        items: 1,
                        mouseDrag: false,
                        dotsContainer: '#item-thumb1',
                        rtl: carouselRTL
                  });
            });
      </script>
      <script id="canvas-gototop-fn" src="{{asset('assets/js/modules/gototop.js')}}" async="" defer=""></script><script id="canvas-stickfooteronsmall-fn" src="{{asset('assets/js/modules/stickfooteronsmall.js')}}" async="" defer=""></script><script id="canvas-logo-fn" src="{{asset('assets/js/modules/logo.js')}}" async="" defer=""></script><script id="canvas-headers-fn" src="{{asset('assets/js/modules/headers.js')}}" async="" defer=""></script><script id="canvas-menus-fn" src="{{asset('assets/js/modules/menus.js')}}" async="" defer=""></script><script id="canvas-sliderdimensions-fn" src="{{asset('assets/js/modules/sliderdimensions.js')}}" async="" defer=""></script><script id="canvas-slidermenuclass-fn" src="{{asset('assets/js/modules/slidermenuclass.js')}}" async="" defer=""></script><script id="canvas-bootstrap-fn" src="{{asset('assets/js/modules/bootstrap.js')}}" async="" defer=""></script><script id="canvas-pagetransition-fn" src="{{asset('assets/js/modules/pagetransition.js')}}" async="" defer=""></script><script id="canvas-lightbox-fn" src="{{asset('assets/js/modules/lightbox.js')}}" async="" defer=""></script><script id="canvas-animations-fn" src="{{asset('assets/js/modules/animations.js')}}" async="" defer=""></script><script id="canvas-canvasslider-fn" src="{{asset('assets/js/modules/canvasslider.js')}}" async="" defer=""></script><script id="canvas-carousel-fn" src="{{asset('assets/js/modules/carousel.js')}}" async="" defer=""></script><script id="canvas-bootstrap-js" src="{{asset('assets/js/plugins.bootstrap.js')}}" async="" defer=""></script><script id="canvas-lightbox-js" src="{{asset('assets/js/plugins.lightbox.js')}}" async="" defer=""></script><script id="canvas-swiper-js" src="{{asset('assets/js/plugins.swiper.js')}}" async="" defer=""></script><script id="canvas-carousel-js" src="{{asset('assets/js/plugins.carousel.js')}}" async="" defer=""></script></body>

</body>
</html>




