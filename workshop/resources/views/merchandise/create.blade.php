<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.master') 

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content') 


		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="mx-auto mb-0" id="tab-login-register" style="max-width: 500px;">
						<div class="accordion-title">
							新增商品
						</div>

						<div class="tab-content">
							<div class="tab-pane show active" id="tab-login" role="tabpanel" aria-labelledby="canvas-tab-login-tab"
								tabindex="0">
								<div class="card mb-0">

									@include('component.loginAlert')

									<div class="card-body" style="padding: 40px;">
										<form action="/user/auth/login" method="post">
											@csrf
											<h3>Login to your Account</h3>

											<div class="row">
												<div class="col-12 form-group">
													<label for="login-form-email">Email:</label>
													<input type="text" id="email" name="email" value="" class="form-control">
												</div>

												<div class="col-12 form-group">
													<label for="login-form-password">Password:</label>
													<input type="password" id="password" name="password" value="" class="form-control">
												</div>

												<div class="col-12 form-group">
													<div class="d-flex justify-content-between">
														<button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
														<a href="#">Forgot Password?</a>
													</div>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>
		</section>

@endsection  

