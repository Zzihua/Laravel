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
							</div>
							<br/>
							<div class="tabs">
								<a href="#" class="active" onclick="showSection(event, 'description')"><b>商品描述</b></a>
								<a href="#" onclick="showSection(event, 'shipping-payment')"><b>送貨及付款方式</b></a>
							</div>
							<div class="masonry-thumbs grid-container row row-cols-3 row-cols-md-1 masonry-gap-xl content-section active" data-lightbox="gallery" name="description" id="description">
								<a href="https://img.shoplineapp.com/media/image_clips/64d0a4506240c00010c64ff3/original.jpg?1691395152" id="item-2" data-lightbox="gallery-item">
									<img src="https://img.shoplineapp.com/media/image_clips/64d0a4506240c00010c64ff3/original.jpg?1691395152" alt="#2 Image Caption">
								</a>
							</div>

							<div id="shipping-payment" name="shipping-payment" class="content-section">
								<h3>送貨及付款方式</h3>
								<div style="display: flex; justify-content: space-between;">
									<div>
										<h4>送貨方式</h4>
										<p>黑貓·冷凍</p>
									</div>
									<div>
										<h4>付款方式</h4>
										<p>信用卡付款（VISA / Master / JCB）</p>
										<p>黑貓宅配（貨到付款）</p>
										<p>ATM 虛擬代碼繳費（需持代碼至實體ATM或網路銀行繳費）</p>
									</div>
								</div>
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
							<button type="submit" class="add-to-cart button m-0 flex-fill text-white" style="--cnvs-btn-padding-y: 0.75rem">$390<i class="bi-circle-fill small mx-3">加入購物車</i></button>
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

			.navbar {
				display: flex;
				justify-content: space-around;
				/* background-color: rgba(255, 255, 255, 0.7); */
				padding: 10px;
				/* position: absolute; */
				top: 0;
				width: 100%;
			}
			.navbar a {
				text-decoration: none;
				color: black;
				font-size: 16px;
				padding: 5px;
			} 
			.tabs {
            display: flex;
            border-bottom: 1px solid #ccc;
            /* background-color: #f8f8f8; */
			}
			.tabs a {
				padding: 10px 20px;
				cursor: pointer;
				text-decoration: none;
				color: black;
				font-size: 14px;
				border-bottom: 2px solid transparent;
			}
			.tabs a.active {
				border-bottom: 2px solid black;
			}
			.content-section {
				padding: 20px;
				display: none;
			}
			.content-section.active {
				display: block;
			}
			.content-section h3 {
				margin-top: 0;
			}
	</style>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			// 獲取加號和減號按鈕
			const minusButton = document.querySelector('.minus');
			const plusButton = document.querySelector('.plus');
			// 獲取數量輸入框
			const quantityInput = document.querySelector('input[name="quantity"]');
			// 獲取價格輸入框和加入購物車按鈕
			const priceInput = document.querySelector('input[name="price"]');
			const addToCartButton = document.querySelector('.add-to-cart');
			const basePrice = 390; // 基本價格
			const productId = 'product123'; // 替換為實際的產品ID
			const productName = '核桃木煙燻鮭魚｜星級餐酒館'; // 替換為實際的產品名稱
			const productImage = 'https://shoplineimg.com/5baaeb237afd880005c43ed5/62cbe15de264a300143378f3/800x.webp?source_format=jpg'; // 替換為實際的產品圖片URL

			let quantity = parseInt(quantityInput.value, 10);

			// 更新價格顯示
			function updatePrice() {
				const totalPrice = basePrice * quantity;
				addToCartButton.innerHTML = `$${totalPrice}<i class="bi-circle-fill small mx-3"></i>加入購物車`;
				priceInput.value = totalPrice; // 更新為 totalPrice
			}

			// 減少數量
			minusButton.addEventListener('click', function () {
				if (quantity > 1) {
					quantity--;
					quantityInput.value = quantity;
					updatePrice();
				}
			});

			// 增加數量
			plusButton.addEventListener('click', function () {
				quantity++;
				quantityInput.value = quantity;
				updatePrice();
			});

			// 點擊加入購物車按鈕時將商品添加到 localStorage
			addToCartButton.addEventListener('click', function () {
				const cartData = JSON.parse(localStorage.getItem('cart') || '{}');
				
				// 更新購物車數據
				if (cartData[productId]) {
					cartData[productId].quantity += quantity;
				} else {
					cartData[productId] = {
						name: productName,
						price: basePrice,
						quantity: quantity,
						image: productImage
					};
				}

				localStorage.setItem('cart', JSON.stringify(cartData));
				
			});

			// 初始化價格顯示
			updatePrice();
		});

		function showSection(event, sectionId) {
            const tabs = document.querySelectorAll('.tabs a');
            const sections = document.querySelectorAll('.content-section');

            tabs.forEach(tab => tab.classList.remove('active'));
            sections.forEach(section => section.classList.remove('active'));

            event.currentTarget.classList.add('active');
            document.getElementById(sectionId).classList.add('active');
        }


	</script>

	

@endsection