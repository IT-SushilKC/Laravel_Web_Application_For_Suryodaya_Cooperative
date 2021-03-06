<x-header/>

<body class="my-login-page">
	<section class="h-100">
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="card-wrapper">
						<div class="cardx fat mt-5">
							<div class="card-body">
								<h4 class="card-title">Login</h4>
								<form method="POST" class="my-login-validation" autocomplete="off" action="{{ route('login') }}">
									@csrf
									@if ( Session::get('login-error'))
										 <div class="alert alert-danger">
											 {{ Session::get('login-error') }}
										 </div>
									@endif
									
									<div class="form-group">
										<label for="email">E-mail</label>
										<input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="Enter email">
										<span class="text-danger">@error('email'){{ $message }}@enderror</span>
									
									</div>
	
									<div class="form-group">
										<a href="{{route('password.request')}}" class="float-right">
											Forgot Password?
										</a>
										<label for="password">Password
											
										</label>
										<input id="password" type="password" class="form-control" name="password" required data-eye placeholder="Enter password">
										<span class="text-danger">@error('password'){{ $message }}@enderror</span>
									</div>
									<div class="form-group">
										<div class="custom-checkbox custom-control">
											<input type="checkbox" name="remember" id="remember" class="custom-control-input" required>
											<label for="remember" class="custom-control-label">Remeber Me</label>
										</div>
									</div>
	
									<div class="form-group m-0">
										<button type="submit" class="btn btn-primary btn-block">
											Login
										</button>
									</div>
									<div class="mt-4 text-center">
										Don't have an account? <a href="{{route('register')}}">Create One</a>
									</div>
								</form>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</section>


<x-footer/>
