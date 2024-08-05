<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.master_home') 

<!-- 傳送資料到母模板，並指定變數為 title --> 
@section('title', $title) 

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content') 


		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="row justify-content-center col-mb-50">
						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-center fbox-effect border-bottom-0">
								<div class="fbox-icon">
									<a href="#"><i class="bi-grid i-alt"></i></a>
								</div>
								<div class="fbox-content">
									<h3>100+ Portfolio Templates<span class="subtitle">Item Grids in Different Styles</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-center fbox-effect border-bottom-0">
								<div class="fbox-icon">
									<a href="#"><i class="bi-file-earmark-text i-alt"></i></a>
								</div>
								<div class="fbox-content">
									<h3>40+ Single Item Layouts<span class="subtitle">Details shown in Interactive Manner</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-center fbox-effect border-bottom-0">
								<div class="fbox-icon">
									<a href="#"><i class="bi-hand-thumbs-up i-alt"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Unlimited Possibilities<span class="subtitle">Endless Customization Options</span></h3>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="section">
					<div class="heading-block text-center border-bottom-0 mb-0">
						<h2>"Everything is designed, but some things are designed well."</h2>
					</div>
				</div>

				<div class="container">

					<div class="row col-mb-50">
						<div class="col-md-7 col-lg-8">

							<h4>Design Partners</h4>

							<ul class="clients-grid row row-cols-2 row-cols-sm-3 row-cols-md-5 mb-0">
								<li class="grid-item"><a href="http://logofury.com/logo/enzo.html" data-animate="fadeIn"><img src="images/clients/1.png" alt="Clients"></a></li>
								<li class="grid-item"><a href="http://logofury.com" data-animate="fadeIn" data-delay="100"><img src="images/clients/2.png" alt="Clients"></a></li>
								<li class="grid-item"><a href="http://logofaves.com/2021/03/grabbt/" data-animate="fadeIn" data-delay="200"><img src="images/clients/3.png" alt="Clients"></a></li>
								<li class="grid-item"><a href="http://logofaves.com/2021/01/ladera-granola/" data-animate="fadeIn" data-delay="300"><img src="images/clients/4.png" alt="Clients"></a></li>
								<li class="grid-item"><a href="http://logofaves.com/2021/02/hershel-farms/" data-animate="fadeIn" data-delay="400"><img src="images/clients/5.png" alt="Clients"></a></li>
								<li class="grid-item"><a href="http://logofury.com/logo/food-fight-radio.html" data-animate="fadeIn" data-delay="500"><img src="images/clients/6.png" alt="Clients"></a></li>
								<li class="grid-item"><a href="http://logofury.com" data-animate="fadeIn" data-delay="600"><img src="images/clients/7.png" alt="Clients"></a></li>
								<li class="grid-item"><a href="http://logofury.com/logo/up-travel.html" data-animate="fadeIn" data-delay="700"><img src="images/clients/8.png" alt="Clients"></a></li>
								<li class="grid-item"><a href="http://logofury.com/logo/caffi-bardi.html" data-animate="fadeIn" data-delay="800"><img src="images/clients/9.png" alt="Clients"></a></li>
								<li class="grid-item"><a href="http://logofury.com/logo/bignix-design.html" data-animate="fadeIn" data-delay="900"><img src="images/clients/10.png" alt="Clients"></a></li>
							</ul>

						</div>

						<div class="col-md-5 col-lg-4">
							<h4>What our Clients Say?</h4>

							<div class="fslider testimonial" data-animation="slide" data-arrows="false">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide">
											<div class="row gx-3">
												<div class="col-auto pt-1">
													<img class="rounded-circle" src="{{asset('assets/images/testimonials/3.jpg')}}" width="56" height="56" alt="Customer Testimonails">
												</div>
												<div class="col">
													<p class="mb-3 fs-6 font-secondary">Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
													<h4 class="h6 mb-0 fw-medium">Steve Jobs</h4>
													<small class="text-muted">Apple Inc.</small>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="row gx-3">
												<div class="col-auto pt-1">
													<img class="rounded-circle" src="images/testimonials/2.jpg" width="56" height="56" alt="Customer Testimonails">
												</div>
												<div class="col">
													<p class="mb-3 fs-6 font-secondary">Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
													<h4 class="h6 mb-0 fw-medium">Collis Ta'eed</h4>
													<small class="text-muted">Envato Inc.</small>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="row gx-3">
												<div class="col-auto pt-1">
													<img class="rounded-circle" src="images/testimonials/1.jpg" width="56" height="56" alt="Customer Testimonails">
												</div>
												<div class="col">
													<p class="mb-3 fs-6 font-secondary">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
													<h4 class="h6 mb-0 fw-medium">John Doe</h4>
													<small class="text-muted">XYZ Inc.</small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

@endsection  

