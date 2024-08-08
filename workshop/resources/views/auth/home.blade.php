<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.master') 

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('slider') 
@section('content') 

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
                                                      <h2 class="font-secondary ls-0 fw-normal text-transform-none not-animated" data-animate="fadeIn">Make your Chocolate.</h2>
                                                      <p class="d-none d-sm-block font-primary not-animated" data-animate="fadeIn" data-delay="400">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                                                      <div class="static-content position-relative d-flex justify-content-start mt-5 not-animated" data-animate="fadeIn" data-delay="800">
                                                            <img src="{{asset('assets/demos/restaurant/images/icons/bowl-white.svg')}}" width="42" height="42" alt="Image">
                                                            <img class="ms-4" src="{{asset('assets/demos/restaurant/images/icons/spoon-white.svg')}}" width="42" height="42" alt="Image">
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide-bg" style="background-image: url({{asset('assets/images/chocolate.png')}});"></div>
                              </div><div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 3" data-swiper-slide-index="1" style="width: 366px; opacity: 1; transform: translate3d(-366px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="container dark" data-bs-theme="dark">
                                          <div class="slider-caption slider-caption-center" style="margin-top: -30px;">
                                                <div>
                                                      <h2 class="font-secondary ls-0 fw-normal text-transform-none not-animated " data-animate="fadeIn" data-delay="400">Bread</h2>
                                                      <p class="d-none d-sm-block font-primary not-animated" data-animate="fadeIn" data-delay="800">We have a variety of breads  for you to choose from</p>
                                                      <div class="static-content position-relative d-flex justify-content-center mt-5 not-animated" data-animate="fadeIn" data-delay="1000">
                                                            <img class="ms-4" src="{{asset('assets/demos/restaurant/images/icons/spoon-white.svg')}}" width="42" height="42" alt="Image">
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide-bg" style="background-image: url({{asset('assets/images/bread.png')}});"></div>
                              </div><div class="swiper-slide swiper-slide-visible swiper-slide-active" role="group" aria-label="3 / 3" data-swiper-slide-index="2" style="width: 366px; opacity: 1; transform: translate3d(-732px, 0px, 0px); transition-duration: 0ms;">
                                    <div class="container dark" data-bs-theme="dark">
                                          <div class="slider-caption slider-caption-right">
                                                <div>
                                  
                                                      <h2 class="font-secondary ls-0 fw-normal text-transform-none fadeIn animated" data-animate="fadeIn"><img class="ms-4" src="{{asset('assets/demos/restaurant/images/icons/glass-white.svg')}}" width="42" height="42" alt="Image"> Coffee</h2>
                                                      <p class="d-none d-sm-block font-primary fadeIn animated" data-animate="fadeIn" data-delay="400">Coffee drinkers make better Lovers. Everything starts with a great Coffee.</p>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="swiper-slide-bg" style="background-image: url({{asset('assets/images/coffee.png')}}); background-position: center bottom;"></div>
                              </div></div>

                        <div class="slider-arrow-left" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-24db123e459134d3"><i class="uil uil-angle-left-b"></i></div>
                        <div class="slider-arrow-right" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-24db123e459134d3"><i class="uil uil-angle-right-b"></i></div>

                  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

            </div>
      </section>
















	<section id="content">

	<div style="position: absolute; top: 0; left: 0; width: 100%; z-index: 3; background: url({{asset('assets/demos/restaurant/images/sketch.png')}}) repeat center bottom; background-size: auto 100%; height: 40px; margin-top: -40px;"></div>

	<div class="content-wrap" style="overflow: visible;">

		<div class="section m-0" style="padding: 40px 0; background: url({{asset('assets/demos/restaurant/images/sections/4.jpg')}}) center center no-repeat; background-size: 100% auto">
			<div class="container">

				<div class="heading-block border-bottom-0 mb-4">
					<h2 class="font-secondary color text-transform-none" style="font-size: 52px;">What do we have?</h2>
				</div>

				<div class="row col-mb-50">
					<div class="col-lg-3">
						<div class="feature-box media-box" style="max-width: 400px;">
							<div class="fbox-media" style="width: 70px; height: auto;">
								<img src="{{asset('assets/demos/restaurant/images/icons/bowl.svg')}}" alt="Image">
							</div>
							<div class="fbox-content px-0">
								<h3>Food Served Hot</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas omnis nam molestias minus ipsa, placeat!</p>
							</div>
						</div>
					</div>

					<div class="col-lg-3">
						<div class="feature-box media-box" style="max-width: 400px;">
							<div class="fbox-media" style="width: 70px; height: auto;">
								<img src="{{asset('assets/demos/restaurant/images/icons/spoon.svg')}}" alt="Image">
							</div>
							<div class="fbox-content px-0">
								<h3>Ample Options</h3>
								<p>Facere aliquam itaque quia recusandae, corporis fugit fugiat eaque, accusamus officiis reprehenderit.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-3">
						<div class="feature-box media-box" style="max-width: 400px;">
							<div class="fbox-media" style="width: 70px; height: auto;">
								<img src="{{asset('assets/demos/restaurant/images/icons/glass.svg')}}" alt="Image">
							</div>
							<div class="fbox-content px-0">
								<h3>In-House Brewery</h3>
								<p>Velit id facilis odit aliquid laudantium. Tempore, sequi. Harum nesciunt, magni aperiam est?</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- <div class="section mb-0" style="background: #FFF url({{asset('assets/demos/restaurant/images/sections/5.jpg')}}) no-repeat top left / cover; padding: 60px 0; border-top: 1px solid #EEE;">
			<div class="container">
				<div class="heading-block text-center mb-0 border-bottom-0">
					<span class="font-primary" style="font-size: 16px; color: #888">Tasty &amp; Healthy</span>
					<h3 class="text-transform-none font-secondary ls-0" style="font-size: 60px;">Our Food Menu</h3>
				</div>
			</div>
		</div>

		<div class="section food-menu mt-0 p-0">
			<div class="container-fluid">
				<div class="row align-items-stretch">
					<div class="col-lg-7">
						<div class="vertical-middle">
							<div class="col-padding">
								<div><div id="item-thumb" class="item-thumb"></div></div>
							</div>
						</div>
					</div>
					<div class="col-lg-5" style="background-color: #FFF; padding: 0; box-shadow: -4px 1px 15px 3px rgba(0,0,0,0.07);">
						<div id="food-menu-carousel" class="menu-carousel owl-carousel image-carousel food-menu-carousel carousel-widget customjs">

							<div class="oc-item">
								<img class="mt-4" src="{{asset('assets/demos/restaurant/images/items/food/1.jpg')}}" alt="Image 1">
								<div class="food-content">
									<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
										<div class="heading-block border-bottom-0 mb-0">
											<h3 class="font-secondary text-transform-none">Multigrain Toast.</h3>
											<div class="food-info">Corn, Bacon, Tomato, Cheese, Onlion</div>
										</div>
										<div class="food-price color font-primary mt-3">&dollar;19.99</div>
									</div>
									<p class="mb-0">Efficiently syndicate cross functional web-readiness before business niches. Uniquely reinvent ethical testing procedures before ethical leadership skills.<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
									<a href="{{asset('assets/demos/restaurant/menu.html')}}" class="more-link">See More Details <i class="bi-arrow-right"></i></a>
								</div>
							</div>
							<div class="oc-item">
								<img class="mt-4" src="{{asset('assets/demos/restaurant/images/items/food/2.jpg')}}" alt="Image 2">
								<div class="food-content">
									<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
										<div class="heading-block border-bottom-0 mb-0">
											<h3 class="font-secondary text-transform-none">Prawn Mussels Plate.</h3>
											<div class="food-info">Prawn, Tomato, Noodles</div>
										</div>
										<div class="food-price color font-primary mt-3">&dollar;11.59</div>
									</div>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
									<a href="{{asset('assets/demos/restaurant/menu.html')}}" class="more-link">See More Details <i class="bi-arrow-right"></i></a>
								</div>
							</div>
							<div class="oc-item">
								<img class="mt-4" src="{{asset('assets/demos/restaurant/images/items/food/3.jpg')}}" alt="Image 3">
								<div class="food-content">
									<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
										<div class="heading-block border-bottom-0 mb-0">
											<h3 class="font-secondary text-transform-none">Black Jumbo Burger.</h3>
											<div class="food-info">Chicken Patty, Bean Bread</div>
										</div>
										<div class="food-price color font-primary mt-3">&dollar;8.99</div>
									</div>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
									<a href="{{asset('assets/demos/restaurant/menu.html')}}" class="more-link">See More Details <i class="bi-arrow-right"></i></a>
								</div>
							</div>
							<div class="oc-item">
								<img class="mt-4" src="{{asset('assets/demos/restaurant/images/items/food/4.jpg')}}" alt="Image 4">
								<div class="food-content">
									<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
										<div class="heading-block border-bottom-0 mb-0">
											<h3 class="font-secondary text-transform-none">Fried Chicken.</h3>
											<div class="food-info">Chicken, Olive Oil</div>
										</div>
										<div class="food-price color font-primary mt-3">&dollar;22.99</div>
									</div>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
									<a href="{{asset('assets/demos/restaurant/menu.html')}}" class="more-link">See More Details <i class="bi-arrow-right"></i></a>
								</div>
							</div>
							<div class="oc-item">
								<img class="mt-4" src="{{asset('assets/demos/restaurant/images/items/food/5.jpg')}}" alt="Image 1">
								<div class="food-content">
									<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
										<div class="heading-block border-bottom-0 mb-0">
											<h3 class="font-secondary text-transform-none">Smoothie Fruit Bowl.</h3>
											<div class="food-info">Raspberries, Strawberries, Granola, Banana</div>
										</div>
										<div class="food-price color font-primary mt-3">&dollar;19.99</div>
									</div>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur. Holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
									<a href="{{asset('assets/demos/restaurant/menu.html')}}" class="more-link">See More Details <i class="bi-arrow-right"></i></a>
								</div>
							</div>
							<div class="oc-item">
								<img class="mt-4" src="{{asset('assets/demos/restaurant/images/items/food/6.jpg')}}" alt="Image 2">
								<div class="food-content">
									<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
										<div class="heading-block border-bottom-0 mb-0">
											<h3 class="font-secondary text-transform-none">Margarita Pizza.</h3>
											<div class="food-info">Wheat Flour, Cheese, Tomato, Onion</div>
										</div>
										<div class="food-price color font-primary mt-3">&dollar;14.99</div>
									</div>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
									<div class="food-price color font-primary mt-3">&dollar;14.99</div>
									<a href="{{asset('assets/demos/restaurant/menu.html')}}" class="more-link">See More Details <i class="bi-arrow-right"></i></a>
								</div>
							</div>
							<div class="oc-item">
								<img class="mt-4" src="{{asset('assets/demos/restaurant/images/items/food/7.jpg')}}" alt="Image 3">
								<div class="food-content">
									<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
										<div class="heading-block border-bottom-0 mb-0">
											<h3 class="font-secondary text-transform-none">Macaroni Pasta.</h3>
										</div>
										<div class="food-price color font-primary mt-3">&dollar;11.99</div>
									</div>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
									<a href="{{asset('assets/demos/restaurant/menu.html')}}" class="more-link">See More Details <i class="bi-arrow-right"></i></a>
								</div>
							</div>
							<div class="oc-item">
								<img class="mt-4" src="{{asset('assets/demos/restaurant/images/items/food/8.jpg')}}" alt="Image 4">
								<div class="food-content">
									<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
										<div class="heading-block border-bottom-0 mb-0">
											<h3 class="font-secondary text-transform-none">Chicken with Fries.</h3>
											<div class="food-info">Chicken, Potatoes, Broccolies</div>
										</div>
										<div class="food-price color font-primary mt-3">&dollar;33.99</div>
									</div>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
									<a href="{{asset('assets/demos/restaurant/menu.html')}}" class="more-link">See More Details <i class="bi-arrow-right"></i></a>
								</div>
							</div>
							<div class="oc-item">
								<img class="mt-4" src="{{asset('assets/demos/restaurant/images/items/food/9.jpg')}}" alt="Image 4">
								<div class="food-content">
									<div class="d-flex flex-column flex-sm-row justify-content-sm-between mb-4">
										<div class="heading-block border-bottom-0 mb-0">
											<h3 class="font-secondary text-transform-none">Chinese Noodle.</h3>
											<div class="food-info">Noodles, Cornflower, Prawn</div>
										</div>
										<div class="food-price color font-primary mt-3">&dollar;7.99</div>
									</div>
									<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam eveniet cum explicabo iure quasi impedit commodi nobis doloremque quas consequuntur!<br><br>Credibly maximize orthogonal e-services and technically sound communities. Seamlessly procrastinate holistic partnerships. Distinctively disseminate stand-alone process improvements after efficient total linkage. Efficiently syndicate.</p>
									<a href="{{asset('assets/demos/restaurant/menu.html')}}" class="more-link">See More Details <i class="bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<!-- <div class="section mb-0 bg-transparent">
			<div class="container">

				<div class="row col-mb-50">
					<div class="col-sm-6 col-lg-4">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<a href="{{asset('assets/demos/restaurant/reservation.html')}}" ><img style="border-radius: 2px;" src="{{asset('assets/demos/restaurant/images/featured/1.jpg')}}" alt="Why choose Us?"></a>
							</div>
							<div class="fbox-content px-0">
								<h3>Beautiful Location.<span class="subtitle ls-1" style="color:#BBB">Food Tastes Better when you are in Good Location.</span></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus eaque perspiciatis mollitia.</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-lg-4">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<a href="{{asset('assets/demos/restaurant/gallery.html')}}" ><img style="border-radius: 2px;" src="{{asset('assets/demos/restaurant/images/featured/2.jpg')}}" alt="Effective Planning"></a>
							</div>
							<div class="fbox-content px-0">
								<h3>Feel the Taste.<span class="subtitle ls-1" style="color:#BBB">Nothing Brings people together like Good Food.</span></h3>
								<p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse.</p>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-lg-4">
						<div class="feature-box media-box">
							<div class="fbox-media">
								<a href="{{asset('assets/demos/restaurant/about-us.html')}}" ><img style="border-radius: 2px;" src="{{asset('assets/demos/restaurant/images/featured/3.jpg')}}" alt="Why choose Us?"></a>
							</div>
							<div class="fbox-content px-0">
								<h3>Delicious Desserts.<span class="subtitle ls-1" style="color:#BBB">The Best things in life are Sweet.</span></h3>
								<p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum quo. , labore totam. Accusamus perspiciatis asperiores.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div> -->


		<div class="clear"></div>

		<div style="background: #FFF  no-repeat top right; background-size: 100% auto; padding-top: 50px">
			<div class="container">

				<div class="heading-block text-center border-bottom-0">
					<span class="font-primary ls-1" style="font-size: 14px; color: #AAA">Hot</span>
					<h3 class="font-primary ls-1" style="font-size: 50px; line-height: 1.2;">熱門商品</h3>
				</div>

				<div class="row posts-md col-mb-30 mb-0">

					<div class="col-lg-4 col-md-6">
						<div class="entry">
							<div class="entry-image mb-0">
								<a href="{{asset('assets/demos/restaurant/images/blogs/1.jpg')}}" data-lightbox="image"><img src="{{asset('assets/demos/restaurant/images/blogs/1.jpg')}}" alt="Image 1"></a>
							</div>
							<div class="entry-title mt-0 p-4 title-xs text-transform-none">
								<div class="entry-meta mt-0 mb-2">
									<ul>
										<li><a href="#">08th Apr 2021</a></li>
										<li><a href="#">Video</a></li>
									</ul>
								</div>

								<h2 class="mb-0"><a href="{{asset('assets/demos/restaurant/blog.html')}}">Make Ahead Super Green Vegan Quinoa Sandwich.</a></h2>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="entry">
							<div class="entry-image mb-0">
								<a href="{{asset('assets/demos/restaurant/images/blogs/2.jpg')}}" data-lightbox="image"><img src="{{asset('assets/demos/restaurant/images/blogs/2.jpg')}}" alt="Image 2"></a>
							</div>
							<div class="entry-title mt-0 p-4 title-xs text-transform-none">
								<div class="entry-meta mt-0 mb-2">
									<ul>
										<li><a href="#">21th Mar 2021</a></li>
										<li><a href="#">Book</a></li>
									</ul>
								</div>

								<h2 class="mb-0"><a href="{{asset('assets/demos/restaurant/blog.html')}}">We Delivered Heart Shape Cornbread Waffles.</a></h2>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="entry">
							<div class="entry-image mb-0">
								<a href="{{asset('assets/demos/restaurant/images/blogs/3.jpg')}}" data-lightbox="image"><img src="{{asset('assets/demos/restaurant/images/blogs/3.jpg')}}" alt="Image 3"></a>
							</div>
							<div class="entry-title mt-0 p-4 title-xs text-transform-none">
								<div class="entry-meta mt-0 mb-2">
									<ul>
										<li><a href="#">10th Feb 2021</a></li>
										<li><a href="#">Recipe</a></li>
									</ul>
								</div>

								<h2 class="mb-0"><a href="{{asset('assets/demos/restaurant/blog.html')}}">Top Delicious Recipes from world's Best Chefs.</a></h2>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>




		<div class="clear"></div>


		<div class="section mb-0" style="padding: 80px 0; background: #F5F5F5 url({{asset('assets/demos/restaurant/images/food-pattern.png')}}) repeat center center;">
			<div class="container">

				<div class="heading-block text-center border-bottom-0">
					<h3 class="text-transform-none font-secondary ls-0" style="font-size: 60px; line-height: 1.3;">Our Team						
					</h3>
				</div>

				<div class="row">

					<div class="col-lg-4 col-md-6">
						<div class="team">
							<div class="team-image imagescalein">
								<img src="{{asset('assets/images/1.png')}}" alt="Xuyun">
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="team">
							<div class="team-image imagescalein">
								<img src="{{asset('assets/images/3.png')}}" alt="Zihua">
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="team">
							<div class="team-image imagescalein">
								<img src="{{asset('assets/images/2.png')}}" alt="Chinlin">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		

		<div class="line clear"></div>

		<div class="container section-contact mt-6">
			<div class="row g-5">

				<div class="col-lg-3 col-md-6 text-center">
					<i class="i-plain i-xlarge mx-auto mb-0 icon-et-map"></i>
					<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Contact</h3>
					<span class="font-primary">795 Folsom Ave, Suite 600<br>San Francisco, CA 94107</span>
				</div>

				<div class="col-lg-3 col-md-6 text-center">
					<i class="i-plain i-xlarge mx-auto mb-0 icon-et-clock"></i>
					<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Opening Time</h3>
					<span class="font-primary">Sun - Thu | 07:00 - 23:00 Hours<br>
					Fri - Sat | 08:00 - 01:00 Hours</span>
				</div>

				<div class="col-lg-3 col-md-6 text-center">
					<i class="i-plain i-xlarge mx-auto mb-0 icon-et-clipboard"></i>
					<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Reservation</h3>
					<span class="font-primary"><strong>Mobile: </strong>+62-111-222-333<br>
					<strong>Fax: </strong>(+62)-11-4752-1433</span>
				</div>

				<div class="col-lg-3 col-md-6 text-center">
					<i class="i-plain i-xlarge mx-auto mb-0 icon-et-heart"></i>
					<h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Social Contact</h3>
					<div class="d-flex justify-content-center">
						<a href="#" class="social-icon border-transparent h-bg-facebook">
							<i class="fa-brands fa-facebook-f"></i>
							<i class="fa-brands fa-facebook-f"></i>
						</a>
						<a href="#" class="social-icon border-transparent h-bg-twitter">
							<i class="fa-brands fa-twitter"></i>
							<i class="fa-brands fa-twitter"></i>
						</a>
						<a href="#" class="social-icon border-transparent si-youtube">
							<i class="fa-brands fa-youtube"></i>
							<i class="fa-brands fa-youtube"></i>
						</a>
						<a href="#" class="social-icon border-transparent h-bg-email3">
							<i class="bi-envelope"></i>
							<i class="bi-envelope"></i>
						</a>
					</div>
				</div>

			</div>
		</div>

	</div>

	<div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url({{asset('assets/demos/restaurant/images/sketch-header.png')}}) repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>
	</section>

@endsection 