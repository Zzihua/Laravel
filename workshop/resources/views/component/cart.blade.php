<!-- Top Cart
============================================= -->
<div id="top-cart" class="header-misc-icon me-lg-4">
    <a href="#" id="top-cart-trigger"><i class="bi-basket"></i></a>
    <div class="top-cart-content">
        <div class="top-cart-title">
            <h4 class="ls-0 text-transform-none">購物車</h4>
        </div>
        <div class="top-cart-items">
            <div class="top-cart-item">
                <div class="top-cart-item-image position-relative">
                    <a href="{{asset('assets/demo-skincare-single.html')}}"><img src="{{asset('assets/demos/skincare/images/products/13.jpg')}}" alt="Blue Shoulder Bag"></a>
                    <span class="position-absolute top-0 start-0 translate-middle bg-danger rounded-circle lh-1 border border-white text-white square square-xs text-center">
                        <span class="visually-hidden">Remove Product</span>×
                    </span>
                </div>
                <div class="top-cart-item-desc">
                    <div class="top-cart-item-desc-title">
                        <a href="{{asset('assets/demo-skincare-single.html')}}" class="fw-normal">Âimtze Cream &amp; Lotions</a>
                        <span class="top-cart-item-price d-block">$29.99</span>
                    </div>
                    <div class="top-cart-item-quantity">x 1</div>
                </div>
            </div>
            <div class="top-cart-item border-default">
                <div class="top-cart-item-image position-relative">
                    <a href="{{asset('assets/demo-skincare-single.html')}}"><img src="{{asset('assets/demos/skincare/images/products/11.jpg')}}" alt="Blue Shoulder Bag"></a>
                    <span class="position-absolute top-0 start-0 translate-middle bg-danger rounded-circle lh-1 border border-white text-white square square-xs text-center">
                        <span class="visually-hidden">Remove Product</span>×
                    </span>
                </div>
                <div class="top-cart-item-desc">
                    <div class="top-cart-item-desc-title">
                        <a href="{{asset('assets/demo-skincare-single.html')}}" class="fw-normal">Clove Super Serum</a>
                        <span class="top-cart-item-price d-block">$12.49</span>
                    </div>
                    <div class="top-cart-item-quantity">x 2</div>
                </div>
            </div>
        </div>
        <div class="top-cart-action border-default">
            <a href="{{route('user.auth.cart1')}}" class="button button-small m-0">檢視購物車</a>
            <span class="top-checkout-price">$54.97</span>
        </div>
    </div>
</div><!-- #top-cart end -->

<script>
   function updateCartDisplay(cart) {
    const cartContainer = document.querySelector('#top-cart .top-cart-items');
    cartContainer.innerHTML = '';

    // 遍历购物车并更新内容
    for (const [productId, { name, price, quantity }] of Object.entries(cart)) {
        const cartItem = document.createElement('div');
        cartItem.classList.add('top-cart-item');

        // 示例内容，你可以根据实际数据生成
        cartItem.innerHTML = `
            <div class="top-cart-item-image position-relative">
                <a href="/product/${productId}"><img src="/images/products/${productId}.jpg" alt="${name}"></a>
                <span class="position-absolute top-0 start-0 translate-middle bg-danger rounded-circle lh-1 border border-white text-white square square-xs text-center" 
                    onclick="removeFromCart('${productId}')">
                    <span class="visually-hidden">Remove Product</span>×
                </span>
            </div>
            <div class="top-cart-item-desc">
                <div class="top-cart-item-desc-title">
                    <a href="/product/${productId}" class="fw-normal">${name}</a>
                    <span class="top-cart-item-price d-block">$${price}</span>
                </div>
                <div class="top-cart-item-quantity">x ${quantity}</div>
            </div>
        `;

        cartContainer.appendChild(cartItem);
    }
}

function removeFromCart(productId) {
    // 发送请求到后台以从购物车中移除商品
    fetch('/remove-from-cart', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Laravel CSRF token
        },
        body: JSON.stringify({ productId: productId })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // 更新购物车内容
            updateCartDisplay(data.cart);
        } else {
            alert('移除商品失败');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}


</script>