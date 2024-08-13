@extends('layout.shopmaster')

@section('content')

    <!-- Content -->
    <section id="content">
		<div class="container">
			<div class="row g-0 col-mb-50 swiper-container-vertical">
				<div class="col-md-6">
					<div class="row">
						<nav id="sticky-dots" class="d-none d-md-flex flex-column align-items-center col-auto">
							<a class="nav-link sticky-dot active" href="#item-1"><i class="bi-circle"></i></a>
							<a class="nav-link sticky-dot" href="#item-2"><i class="bi-circle"></i></a>
							<a class="nav-link sticky-dot" href="#item-3"><i class="bi-circle"></i></a>
							<a class="nav-link sticky-dot" href="#item-4"><i class="bi-circle"></i></a>
							<a class="nav-link sticky-dot" href="#item-5"><i class="bi-circle"></i></a>
							<a class="nav-link sticky-dot" href="#item-6"><i class="bi-play"></i></a>
						</nav>

						<div class="col scroll-container mt-5">
							<div class="masonry-thumbs grid-container row row-cols-3 row-cols-md-1 masonry-gap-xl" data-lightbox="gallery">
								<a href="{{asset('assets/demos/skincare/images/single/gallery/1.jpg')}}" id="item-1" data-lightbox="gallery-item" title="#1 Image Caption">
									<img src="{{asset('assets/demos/skincare/images/single/gallery/1.jpg')}}" alt="#1 Image Caption">
								</a>
								<a href="{{asset('assets/demos/skincare/images/single/gallery/2.jpg')}}" id="item-2" data-lightbox="gallery-item" title="#2 Image Caption">
									<img src="{{asset('assets/demos/skincare/images/single/gallery/2.jpg')}}" alt="#2 Image Caption">
								</a>
								<a href="{{asset('assets/demos/skincare/images/single/gallery/5.jpg')}}" id="item-3" data-lightbox="gallery-item" title="#3 Image Caption">
									<img src="{{asset('assets/demos/skincare/images/single/gallery/5.jpg')}}" alt="#3 Image Caption">
								</a>
								<a href="{{asset('assets/demos/skincare/images/single/gallery/4.jpg')}}" id="item-4" data-lightbox="gallery-item" title="#4 Image Caption">
									<img src="{{asset('assets/demos/skincare/images/single/gallery/4.jpg')}}" alt="#4 Image Caption">
								</a>
								<a href="{{asset('assets/demos/skincare/images/single/gallery/3.jpg')}}" id="item-5" data-lightbox="gallery-item" title="#5 Image Caption">
									<img src="{{asset('assets/demos/skincare/images/single/gallery/3.jpg')}}" alt="#5 Image Caption">
								</a>
								<a href="{{asset('assets/demos/skincare/images/slider/1.mp4')}}" data-lightbox="iframe" id="item-6">
									<div class="video-wrap no-placeholder position-relative">
										<video poster="{{asset('assets/demos/skincare/images/slider/1.jpg')}}" preload="auto" loop autoplay muted playsinline>
											<source src='{{asset('assets/demos/skincare/images/slider/1.mp4')}}' type='video/mp4'>
										</video>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<nav class="col-md-6 skincare-shop-desc">
					<div class="p-md-4 p-lg-5">

						<div class="d-flex align-items-center justify-content-between">

							<p class="color text-uppercase ls-2 mb-3 small">Serum <span class="mx-2">/</span> <span class="op-07 ls-1">1.7fl oz - 50ml</span></p>

						</div>

						<h2 class="fs-1 lh-sm">Stochkholm Skincare & Moisture</h2>

						<div class="line my-4" style="border-color: var(--cnvs-color);"></div>

						<!-- Quantity & Cart Button
						============================================= -->
						<form class="cart cart-border cart-border-2 mb-0 d-flex flex-column flex-lg-row align-items-lg-center" method="post" enctype='multipart/form-data'>
							<div class="quantity mb-2 mb-lg-0 me-2 me-lg-4  justify-content-between">
								<button type="button" class="minus"><i class="uil uil-minus"></i></button>
								<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty border-0">
								<button type="button" class="plus"><i class="uil uil-plus"></i></button>
							</div>
							<button type="submit" class="add-to-cart button m-0 flex-fill text-white" style="--cnvs-btn-padding-y: 0.75rem">$24.99<i class="bi-circle-fill small mx-3"></i>Add to Cart</button>
						</form><!-- Quantity & Cart Button End -->

						<div class="lh-sm small mt-3 op-06">Free US shipping. International flat-rate. &middot; Skip or cancel any time.</div>

						<div class="line my-4" style="border-color: var(--cnvs-color);"></div>

						<!-- Product Single - Short Description
						============================================= -->
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque, perferendis at nisi optio dolor!</p>
						<div class="row mb-2">
							<span class="col-sm-3 fw-semibold">Skin Moisture:</span>
							<span class="col-sm-9">Cleansed, Smooth, Refreshing</span>
						</div>

						<div class="row mb-2">
							<span class="col-sm-3 fw-semibold">Ingredients:</span>
							<span class="col-sm-9">Avobenzone, 3%, Homosalate 8%, Octisalate 5%, Octocrylene 4%</span>
						</div>

						<div class="row mb-4">
							<span class="col-sm-3 fw-semibold">How to Apply:</span>
							<span class="col-sm-9">Apply generously and evenly as the last step in your skincare routine and before makeup.</span>
						</div>
						<p class="mb-0">Perspiciatis ad eveniet ea quasi debitis quos laborum eum reprehenderit eaque explicabo assumenda rem modi.</p>
					</div>
				</nav>
			</div>
		</div>
    </section><!-- #content end -->


	<style>
		@media (prefers-reduced-motion: no-preference) {
				:root {
					scroll-behavior: smooth;
				}
			}

			.device-touch .section-single-features {
				background-attachment: scroll !important;
			}
	</style>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			// 获取加号和减号按钮
			const minusButton = document.querySelector('.minus');
			const plusButton = document.querySelector('.plus');
			// 获取数量输入框
			const quantityInput = document.querySelector('input[name="quantity"]');

			// 初始化数量为1
			let quantity = parseInt(quantityInput.value, 10);

			// 减少数量
			minusButton.addEventListener('click', function () {
				if (quantity > 1) {
					quantity--;
					quantityInput.value = quantity;
				}
			});

			// 增加数量
			plusButton.addEventListener('click', function () {
				quantity++;
				quantityInput.value = quantity;
			});
		});
	</script>

	

@endsection