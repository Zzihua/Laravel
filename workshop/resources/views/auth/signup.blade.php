<!-- 指定繼承 layout.master 母模板 --> 
@extends('layout.master_signup') 

<!-- 傳送資料到母模板，並指定變數為 title --> 
@section('title', $title) 

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('content') 


<!-- <div class="social"> 
    <a href="#">分享到 Facebook</a> 
    <a href="#">分享到 Twitter</a> 
</div>  -->
<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="mx-auto mb-0" id="tab-login-register" style="max-width: 500px;">

						<ul class="nav canvas-alt-tabs2 tabs nav-pills justify-content-center mb-3" id="canvas-tab-nav2" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="tab-login-tab" data-bs-toggle="pill" data-bs-target="#tab-login"
									type="button" role="tab" aria-controls="tab-login" aria-selected="false">Login</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="tab-register-tab" data-bs-toggle="pill" data-bs-target="#tab-register" type="button"
									role="tab" aria-controls="tab-register" aria-selected="true">Register</button>
							</li>
						</ul>

							<div class="tab-pane" id="tab-register" role="tabpanel" aria-labelledby="canvas-tab-register-tab"
								tabindex="0">
								<div class="card mb-0">
									<div class="card-body" style="padding: 40px;">
										<h3>Register for an Account</h3>

										<form action="/user/auth/signup" method="post">
                                            @csrf
											<div class="col-12 form-group">
												<label for="register-form-name">Name:</label>
												<input type="text" id="nickname" name="nickname" value="" class="form-control">
											</div>

											<div class="col-12 form-group">
												<label for="register-form-email">Email:</label>
												<input type="text" id="email" name="email" value="" class="form-control">
											</div>


											<div class="col-12 form-group">
												<label for="register-form-password">Password:</label>
												<input type="password" id="password" name="password" value="" class="form-control">
											</div>


											<div class="col-12 form-group">
												<button class="button button-3d button-black m-0" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
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

