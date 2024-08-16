<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.master') 

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('slider') 
@section('content') 
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


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

                  <div class="section m-0" style="padding: 40px 0; background: url({{asset('assets/images/we_have.png')}}) center center no-repeat; background-size: 100% auto">
                        <div class="container">

                              <div class="heading-block border-bottom-0 mb-4">
                                    <h2 class="font-secondary color text-transform-none" style="font-size: 52px;">What do we have?</h2>
                              </div>

                              <div class="row col-mb-50">
                                    <div class="col-lg-3">
                                          <div class="feature-box media-box" style="max-width: 400px;">
                                                <div class="fbox-media" style="width: 70px; height: auto;">
                                                      <img src="{{asset('assets/images/bread_icon.png')}}" alt="Image">
                                                </div>
                                                <div class="fbox-content px-0">
                                                      <h3>Bread</h3>
                                                      <p>Bread is baked on the same day.</p>
                                                </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-3">
                                          <div class="feature-box media-box" style="max-width: 400px;">
                                                <div class="fbox-media" style="width: 70px; height: auto;">
                                                      <img src="{{asset('assets/images/cake_icon.png')}}" alt="Image">
                                                </div>
                                                <div class="fbox-content px-0">
                                                      <h3>Cake</h3>
                                                      <p>Cakes can be ordered in advance.</p>
                                                </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-3">
                                          <div class="feature-box media-box" style="max-width: 400px;">
                                                <div class="fbox-media" style="width: 70px; height: auto;">
                                                      <img src="{{asset('assets/images/pizza_icon.png')}}" alt="Image">
                                                </div>
                                                <div class="fbox-content px-0">
                                                      <h3>Pizza</h3>
                                                      <p>There are up to 10 pizza flavors, with a maximum of 3 flavors to choose from.</p>
                                                </div>
                                          </div>
                                    </div>
                              </div>

                        </div>
                  </div>


                  <div class="clear"></div>

                  <div style="background: #FFF  no-repeat top right; background-size: 100% auto; padding-top: 50px"  id="hot">
                        <div class="container">

                              <div class="heading-block text-center border-bottom-0">
                                    <span class="font-primary ls-1" style="font-size: 14px; color: #AAA">New</span>
                                    <h3 class="font-primary ls-1" style="font-size: 50px; line-height: 1.2;">最新消息</h3>
                              </div>

                              <div class="row posts-md col-mb-30 mb-0" id="oc-images" data-items-xs="2" data-items-sm="3" data-items-lg="4" data-items-xl="5">

                                    <div class="col-lg-4 col-md-6">
                                          <div class="entry">
                                                <div class="entry-image mb-0">
                                                      <a href="#" onclick="openCustomModal()"><img src="https://www.laone.com.tw/news/image/pics/K_%E4%B8%83%E5%A4%95%E6%83%85%E4%BA%BA%E7%AF%80%E5%AE%98%E7%B6%B2%E6%96%B0%E8%A8%8A-1200x700_0.jpg" alt="Image 1"></a>                                               </div>
                                                <div class="entry-title mt-0 p-4 title-xs text-transform-none">
                                                      <div class="entry-meta mt-0 mb-2">
                                                            <ul>
                                                                  <li  onclick="openCustomModal(event)">LA ONE Kitchen 歐陸廚房</li>
                                                                  <li><a href="#"  onclick="openCustomModal(event)">七夕情人節限定：8/10 </a></li>
                                                            </ul>
                                                      </div>

                                                      <h2 class="mb-0"><a href="#"  onclick="openCustomModal(event)">LA ONE Kitchen 2024 七夕浪漫晚宴</a></h2>
                                                      
                                                </div>
                                          </div>
                                    </div>
                                   

                                    <div class="col-lg-4 col-md-6">
                                          <div class="entry">
                                                <div class="entry-image mb-0">
                                                      <a href="https://www.laone.com.tw/news/image/pics/%E7%88%B6%E8%A6%AA%E7%AF%80_%E5%AE%98%E7%B6%B2_1200x700.jpg" data-lightbox="image"><img src="https://www.laone.com.tw/news/image/pics/%E7%88%B6%E8%A6%AA%E7%AF%80_%E5%AE%98%E7%B6%B2_1200x700.jpg" alt="Image 2"></a>
                                                </div>
                                                <div class="entry-title mt-0 p-4 title-xs text-transform-none">
                                                      <div class="entry-meta mt-0 mb-2">
                                                            <ul>
                                                                  <li><a href="#">偶爸最暖！</a></li>
                                                                  <li><a href="#"> 88 折</a></li>
                                                            </ul>
                                                      </div>

                                                      <h2 class="mb-0"><a href="#">2024 偶爸最暖！父親節蛋糕 88 折</a></h2>
                                                </div>
                                          </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                          <div class="entry">
                                                <div class="entry-image mb-0">
                                                      <a href="https://www.laone.com.tw/news/image/pics/%E4%B8%AD%E7%A7%8B_%E5%AE%98%E7%B6%B2_1200x700.jpg" data-lightbox="image"><img src="https://www.laone.com.tw/news/image/pics/%E4%B8%AD%E7%A7%8B_%E5%AE%98%E7%B6%B2_1200x700.jpg" alt="Image 3"></a>
                                                </div>
                                                <div class="entry-title mt-0 p-4 title-xs text-transform-none">
                                                      <div class="entry-meta mt-0 mb-2">
                                                            <ul>
                                                                  <li><a href="#">中秋禮盒預購起跑</a></li>
                                                                  <li><a href="#">即日起 - 7/15 超早鳥</a></li>
                                                            </ul>
                                                      </div>

                                                      <h2 class="mb-0"><a href="https://www.laone.com.tw/news/image/pics/%E4%B8%AD%E7%A7%8B_%E5%AE%98%E7%B6%B2_1200x700.jpg">2024中秋獻禮 預購優惠起跑</a></h2>
                                                </div>
                                          </div>
                                    </div>

                              </div>

                        </div>
                  </div>




                  <div class="clear"></div>


                  <div class="section mb-0"  id="team" style="padding: 80px 0; background: #F5F5F5 url({{asset('assets/demos/restaurant/images/food-pattern.png')}}) repeat center center;">
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
                                    <a href="{{route('user.auth.store')}}"><i class="i-plain i-xlarge mx-auto mb-0 icon-et-map"></i></a>
                                    <h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">Store</h3>
                                    <span class="font-primary">博愛店  LA ONE 烘焙坊<br>文衡店  LA ONE 烘焙坊<br>美術館店  LA ONE 烘焙坊<br>孟子店  LA ONE 烘焙坊</span>
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
                                    <h3 class="text-uppercase font-body" style="font-size: 22px; font-weight: 700;margin-top: 20px">聯絡我們</h3>
                                    <div class="d-flex justify-content-center">
                                          <a href="https://linktr.ee/laone_kh" class="social-icon border-transparent h-bg-instagram">
                                                <i class="fa-brands fa-instagram"></i>
                                                <i class="fa-brands fa-instagram"></i>
                                          </a>
                                          <a href="https://www.youtube.com/channel/UCrKRgkFKx9g49zKqA2RoBAg" class="social-icon border-transparent h-bg-youtube">
                                                <i class="fa-brands fa-youtube"></i>
                                                <i class="fa-brands fa-youtube"></i>
                                          </a>
                                          <a href="https://page.line.me/laone?openQrModal=true" class="social-icon border-transparent h-bg-line">
                                                <i class="fa-brands fa-line"></i>
                                                <i class="fa-brands fa-line"></i>
                                          </a>
                                    </div>
                              </div>

                        </div>
                  </div>

            </div>

            <div style="position: absolute; bottom: 0; left: 0; width: 100%; z-index: 3; background: url({{asset('assets/demos/restaurant/images/sketch-header.png')}}) repeat center bottom; background-size: auto 100%; height: 40px; margin-bottom: -10px;"></div>
	</section>

      <script>
            document.addEventListener('DOMContentLoaded', function () {
                  var swiper = new Swiper('#latest-news-carousel', {
                        slidesPerView: 1,
                        spaceBetween: 10,
                        navigation: {
                              nextEl: '.swiper-button-next',
                              prevEl: '.swiper-button-prev',
                        },
                        pagination: {
                              el: '.swiper-pagination',
                              clickable: true,
                        },
                        loop: true,
                  });
                  });

      </script>

      <script>
            document.addEventListener('DOMContentLoaded', function() {
            var modalHTML = `
                  <!-- 自定義模態窗口部分 -->
                                    <div id="custom-modal" class="custom-modal" style="display: none;">
                                          <div class="custom-modal-content">
                                                <span class="close-modal" onclick="closeCustomModal()">&times;</span>
                                                <h4>LA ONE Kitchen 2024 七夕浪漫晚宴</h4>
                                                <p><img src="https://www.laone.com.tw/news/image/pics/K_%E4%B8%83%E5%A4%95%E6%83%85%E4%BA%BA%E7%AF%80%E5%AE%98%E7%B6%B2%E6%96%B0%E8%A8%8A-1200x700_0.jpg" alt="Image"></p>
                                                <p>LA ONE Kitchen 歐陸廚房<br>
                                                七夕情人節限定：8/10<br><br>

                                                晚餐供應，請提前2日預訂<br>
                                                訂位方式：電話預訂 ／ 線上訂位<br><br>

                                                <b>《七夕晚宴 個人套餐》</b><br><br>

                                                法國麵包與桂圓麵包<br>
                                                

                                                白肉旗魚、魚子醬、甜蝦塔塔、鳳梨薄霧<br>
                                                

                                                干貝、海瓜子、薩丁尼雅珍珠米、茴香泡泡<br>
                                               
                                                
                                                小卷、鮭魚卵、甜豆仁、蒸蛋、柚子奶油<br>
                                                
                                                
                                                鮑魚、舞菇、洋菇雞湯<br>
                                                

                                                蟹肉蝦汁鳥巢麵、炸中蝦<br>
                                                

                                                *****主菜三選一*****<br><br>

                                                伊比利豬、季節時蔬、蘋果泥、洋蔥醬汁 $2,460<br>
                                               
                                                
                                                紐西蘭小羔羊、炸菊芋、黑糖蕃茄  $2,530<br>
                                              
                                                
                                                嫩煎無骨牛小排、季節時蔬、防風根泥 $2,680<br>
                                              
                                                **********<br><br>

                                                主廚特製甜點 Chef dessert<br><br>

                                                咖啡或茶 Coffee or Tea<br><br>

                                                以上餐點另收 10% 服務費<br>
                                              

                                                LA ONE 歐陸廚房<br>
                                                (博愛店)訂位專線：07-3228864 ‧ 高雄市三民區博愛一路380號2F</p>
                                          </div>
                                    </div>
            `;
            document.body.insertAdjacentHTML('beforeend', modalHTML);
            });

            function openCustomModal(event) {
                  event.preventDefault();
                  document.body.style.overflow = 'hidden';
                  var modal = document.getElementById('custom-modal');
                  modal.style.display = 'flex';
                  console.log('Modal opened');  // 添加调试日志
            }

            function closeCustomModal() {
                  document.body.style.overflow = '';
                  var modal = document.getElementById('custom-modal');
                  modal.style.display = 'none';
                  console.log('Modal closed');  // 添加调试日志
            }
      </script>

  
      <style>
      /* 自定義模態窗口的樣式 */
      .custom-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);  /* 增加不透明度 */
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 999999;  /* 使用非常高的 z-index 值 */
      }

      .custom-modal-content {
            overflow-y: scroll;
            scrollbar-width: none;  /* Firefox */
            -ms-overflow-style: none;  /* Internet Explorer 10+ */
            background: white;
            padding: 20px;
            border-radius: 8px;
            width: 90%;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            position: relative;
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
      }

      .custom-modal-content::-webkit-scrollbar {
            width: 0;
            height: 0;
            display: none;
      }
      .custom-modal-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 9998;
      }
      .close-modal {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 30px;
            color: #ff0000;
            background: #ffffff;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            z-index: 1000000;  /* 确保它在模态内容之上 */
      }
      .popup-content {
            max-height: 80vh; /* 限制視窗的最大高度 */
            overflow-y: auto; /* 當內容超出時，顯示縱向滾動條 */
            }
      .modal-body {
            max-height: calc(80vh - 100px); /* 減去 modal-header 和 modal-footer 的高度 */
            overflow-y: auto;
      }
      .modal-content {
            overflow-y: scroll;
      }

      /* 這是針對滾動條樣式的範例 */
      .modal-content::-webkit-scrollbar {
            width: 10px;
      }

      .modal-content::-webkit-scrollbar-thumb {
            background-color: darkgrey;
            border-radius: 10px;
      }



      </style>
            

	
@endsection 