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
                                    <li class="menu-item"><a class="menu-link" href="#"><div><b>熱門</b></div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="#"><div><b>關於</b></div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="{{route('user.auth.shop')}}"><div><b>商城</b></div></a></li>
                              </ul>
                        </nav>
                        <nav class="primary-menu col-lg-4 order-lg-3">
                              <ul class="menu-container justify-content-lg-end">
                                    <li class="menu-item"><a class="menu-link" href="#"><div>Gallery</div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="#"><div>Blog</div></a></li>
                                    <li class="menu-item"><a class="menu-link color" href="{{route('user.auth.signout')}}"><div>signout</div></a></li>
                              </ul>
                        </nav>
                  @else
                        <nav class="primary-menu col-lg-4 order-lg-1">
                              <ul class="menu-container">
                                    <li class="menu-item"><a class="menu-link" href="#"><div><b>熱門</b></div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="#"><div><b>關於</b></div></a></li>
                                    <li class="menu-item"><a class="menu-link" href="{{route('user.auth.shop')}}"><div><b>商城</b></div></a></li>
                              </ul>
                        </nav>
                        <nav class="primary-menu col-lg-4 order-lg-3">
                              <ul class="menu-container justify-content-lg-end">
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


     	<!-- Slider
      ============================================= -->
      <section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100 include-header" data-effect="fade" data-loop="true" data-autoplay="6000" data-speed="1400" style="">
            <div class="slider-inner">

                  <div class="swiper-container swiper-parent swiper-fade swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden">
                        <div class="swiper-wrapper" style="cursor: grab; transition-duration: 0ms;" id="swiper-wrapper-24db123e459134d3" aria-live="off">
                              

                              

                              
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="1 / 3" data-swiper-slide-index="0" style="width: 366px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="container dark" data-bs-theme="dark">
                                          <div class="slider-caption">
                                                <div>
                                                      <h2 class="font-secondary ls-0 fw-normal text-transform-none not-animated" data-animate="fadeIn">Taste from Italy.</h2>
                                                      <p class="d-none d-sm-block font-primary not-animated" data-animate="fadeIn" data-delay="400">Who Needs a Boyfriend if there Pizza And WiFi are both available.</p>
                                                      <div class="static-content position-relative d-flex justify-content-start mt-5 not-animated" data-animate="fadeIn" data-delay="800">
                                                            <img src="demos/restaurant/images/icons/bowl-white.svg" width="42" height="42" alt="Image">
                                                            <img class="ms-4" src="{{asset('assets/demos/restaurant/images/icons/spoon-white.svg')}}" width="42" height="42" alt="Image">
                                                            <img class="ms-4" src="{{asset('assets/demos/restaurant/images/icons/glass-white.svg')}}" width="42" height="42" alt="Image">
                                                            <img class="ms-4" src="{{asset('assets/demos/restaurant/images/icons/wifi-white.svg')}}" width="42" height="42" alt="Image">
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide-bg" style="background-image: url({{asset('assets/demos/restaurant/images/slider/1.jpg')}});"></div>
                              </div><div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 3" data-swiper-slide-index="1" style="width: 366px; opacity: 1; transform: translate3d(-366px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="container dark" data-bs-theme="dark">
                                          <div class="slider-caption slider-caption-center" style="margin-top: -30px;">
                                                <div>
                                                      <img data-animate="fadeIn" src="{{asset('assets/demos/restaurant/images/slider-logo.png')}}" alt="Image" style="width: 120px; margin-bottom: 10px;" class="not-animated">
                                                      <h2 class="font-secondary ls-0 fw-normal text-transform-none not-animated" data-animate="fadeIn" data-delay="400">Make your Chocolate.</h2>
                                                      <p class="d-none d-sm-block font-primary not-animated" data-animate="fadeIn" data-delay="800">You'll be surprised to see the Final Results of your<br>Creation &amp; would crave for more.</p>
                                                      <div class="static-content position-relative d-flex justify-content-center mt-5 not-animated" data-animate="fadeIn" data-delay="1000">
                                                            <img src="{{asset('assets/demos/restaurant/images/icons/bowl-white.svg')}}" width="42" height="42" alt="Image">
                                                            <img class="ms-4" src="{{asset('assets/demos/restaurant/images/icons/spoon-white.svg')}}" width="42" height="42" alt="Image">
                                                            <img class="ms-4" src="{{asset('assets/demos/restaurant/images/icons/glass-white.svg')}}" width="42" height="42" alt="Image">
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide-bg" style="background-image: url({{asset('assets/demos/restaurant/images/slider/3.jpg')}});"></div>
                              </div><div class="swiper-slide swiper-slide-visible swiper-slide-active" role="group" aria-label="3 / 3" data-swiper-slide-index="2" style="width: 366px; opacity: 1; transform: translate3d(-732px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="container dark" data-bs-theme="dark">
                                          <div class="slider-caption slider-caption-right">
                                                <div>
                                                      <h2 class="font-secondary ls-0 fw-normal text-transform-none fadeIn animated" data-animate="fadeIn">Hello &amp; Welcome.</h2>
                                                      <p class="d-none d-sm-block font-primary fadeIn animated" data-animate="fadeIn" data-delay="400">Coffee drinkers make better Lovers. Everything starts with a great Coffee.</p>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide-bg" style="background-image: url({{asset('assets/demos/restaurant/images/slider/2.jpg')}}); background-position: center bottom;"></div>
                              </div></div>

                        <div class="slider-arrow-left" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-24db123e459134d3"><i class="uil uil-angle-left-b"></i></div>
                        <div class="slider-arrow-right" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-24db123e459134d3"><i class="uil uil-angle-right-b"></i></div>

                  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

            </div>
      </section>


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




