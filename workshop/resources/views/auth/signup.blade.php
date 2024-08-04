<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.master_signup') 

<!-- 傳送資料到母模板，並指定變數為 title --> 
@section('title', $title) 

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content') 

<h1>{{ $title }}</h1> 

<!-- <div class="social"> 
    <a href="#">分享到 Facebook</a> 
    <a href="#">分享到 Twitter</a> 
</div>  -->

<section id="content">
			<div class="content-wrap py-0">

				<div class="section m-0 py-6">
					<div class="curve-bg"></div>
					<div class="container d-flex justify-content-center align-items-center">

						<div class="cs-signin-form">
							<div class="cs-signin-form-inner">
								<div class="text-center">
									<h3 class="h1 fw-bolder mb-3">Sign In</h3>
									<p class="text-smaller text-muted mb-4" style="line-height: 1.5;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, vel odio non dicta.</p>
								</div>
								<div class="d-flex justify-content-center mb-2">
									<a href="#" class="social-icon si-small text-white bg-facebook" title="Facebook">
										<i class="fa-brands fa-facebook-f"></i>
										<i class="fa-brands fa-facebook-f"></i>
									</a>

									<a href="#" class="social-icon si-small text-white bg-google" title="google">
										<i class="fa-brands fa-google"></i>
										<i class="fa-brands fa-google"></i>
									</a>

									<a href="#" class="social-icon si-small text-white bg-appstore" title="apple">
										<i class="fa-brands fa-apple"></i>
										<i class="fa-brands fa-apple"></i>
									</a>
								</div>

								<div class="clear"></div>

								<div class="divider divider-center my-2"><span>OR</span></div>

								<form id="login-form" name="login-form" class="mb-0 row" action="#" method="post">

									<div class="col-12 form-group">
										<label class="text-transform-none ls-0 fw-normal mb-1" for="login-form-username">Username:</label>
										<input type="text" id="login-form-username" class="form-control fw-semibold" placeholder="Username">
									</div>
									<div class="clear"></div>
									<div class="col-12 form-group">
										<label class="text-transform-none ls-0 fw-normal mb-1" for="login-form-password">Password:</label>
										<div class="input-group">
											<input id="login-form-password" type="password" class="form-control fw-semibold border-end-0" placeholder="Password" required="">
											<button class="btn border" onclick="myFunction()" type="button"><i class="bi-eye text-smaller"></i></button>
										</div>
									</div>

									<div class="col-12 d-flex justify-content-between">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
											<label class="form-check-label text-transform-none ls-0 mb-0 fw-semibold" for="inlineCheckbox2">Remember me</label>
										</div>
										<a href="#" class="text-smaller fw-medium"><u>Forgot Password?</u></a>
									</div>

									<div class="col-12 mt-4">
										<button class="button button-large w-100 bg-alt py-2 rounded-1 fw-medium text-transform-none ls-0 m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
									</div>
								</form>
								<p class="mb-0 mt-4 text-center fw-semibold">Don't have an account? <a href="#"><u>Sign up</u></a></p>
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>

@endsection  