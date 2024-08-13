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
						</nav>

						<div class="col scroll-container mt-5">
							<div class="masonry-thumbs grid-container row row-cols-3 row-cols-md-1 masonry-gap-xl" data-lightbox="gallery">
								<a href="https://shoplineimg.com/5baaeb237afd880005c43ed5/62cbe15de264a300143378f3/800x.webp?source_format=jpg" id="item-1" data-lightbox="gallery-item" >
									<img src="https://shoplineimg.com/5baaeb237afd880005c43ed5/62cbe15de264a300143378f3/800x.webp?source_format=jpg" alt="#1 Image Caption">
								</a>
								<a href="https://img.shoplineapp.com/media/image_clips/64d0a4506240c00010c64ff3/original.jpg?1691395152" id="item-2" data-lightbox="gallery-item">
									<img src="https://img.shoplineapp.com/media/image_clips/64d0a4506240c00010c64ff3/original.jpg?1691395152" alt="#2 Image Caption">
								</a>
								
							</div>
						</div>
					</div>
				</div>
				<nav class="col-md-6 skincare-shop-desc">
					<div class="p-md-4 p-lg-5">

						<h2 class="fs-1 lh-sm">核桃木煙燻鮭魚｜星級餐酒館</h2>

						<div class="line my-4" style="border-color: var(--cnvs-color);"></div>

						<!-- Quantity & Cart Button
						============================================= -->
						<form class="cart cart-border cart-border-2 mb-0 d-flex flex-column flex-lg-row align-items-lg-center" method="post" enctype='multipart/form-data' >
							@csrf
							<div class="quantity mb-2 mb-lg-0 me-2 me-lg-4  justify-content-between">
								<button type="button" class="minus"><i class="uil uil-minus"></i></button>
								<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="qty border-0">
								<button type="button" class="plus"><i class="uil uil-plus"></i></button>
							</div>
							<button type="submit" class="add-to-cart button m-0 flex-fill text-white" style="--cnvs-btn-padding-y: 0.75rem">$390<i class="bi-circle-fill small mx-3"></i>加入購物車</button>
						</form><!-- Quantity & Cart Button End -->
						<div class="line my-4" style="border-color: var(--cnvs-color);"></div>

						<!-- Product Single - Short Description
						============================================= -->
						<div class="row mb-2">
							<span class="col-sm-3 fw-semibold">★開封即食</span>
						</div>

						<div class="row mb-2">
							<span class="col-sm-8 fw-semibold">★LA ONE 回購率100% 招牌菜</span>
						</div>

						<div class="row mb-2">
							<span class="col-sm-8 fw-semibold">★來自頂級鮭魚故鄉新鮮空運</span>
						</div>

						<div class="row mb-2">
							<span class="col-sm-8 fw-semibold">★法國 3 根煙囪高評價餐廳的煙燻技藝</span>
						</div>

						<div class="row mb-2">
							<span class="col-sm-8 fw-semibold">★富含Omega-3不飽和脂肪酸與維生素D</span>
						</div>
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

		document.addEventListener('DOMContentLoaded', function () {
			const minusButton = document.querySelector('.minus');
			const plusButton = document.querySelector('.plus');
			const quantityInput = document.querySelector('input[name="quantity"]');
			const priceInput = document.querySelector('input[name="price"]');
			const addToCartButton = document.querySelector('.add-to-cart');
			const basePrice = 390; // 基础价格

			let quantity = parseInt(quantityInput.value, 10);

			function updatePrice() {
				const totalPrice = basePrice * quantity;
				addToCartButton.innerHTML = `$${totalPrice}<i class="bi-circle-fill small mx-3"></i>加入购物车`;
				priceInput.value = basePrice; // 根据需要更新为 totalPrice
			}

			minusButton.addEventListener('click', function () {
				if (quantity > 1) {
					quantity--;
					quantityInput.value = quantity;
					updatePrice();
				}
			});

			plusButton.addEventListener('click', function () {
				quantity++;
				quantityInput.value = quantity;
				updatePrice();
			});

			updatePrice(); // 初始化价格
		});

	</script>

	

@endsection