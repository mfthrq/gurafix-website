<!doctype html>
<html lang="en" dir="ltr">

<x-admin-header :title="'Login | Admin Gurafix'" />

<body class="geex-dashboard authentication-page">
	<main class="geex-content">
		<div class="geex-content__authentication">
			<div class="geex-content__authentication__content">
				<div class="geex-content__authentication__content__wrapper">
					<div class="geex-content__authentication__content__logo">
						
							<img class="logo-lite" src="{{ asset('assets/img/logo_gurafix_no_bg.png') }}" width="70px" alt="logo">
						
					</div>
					<form action="{{ route('admin.login.submit') }}" id="signInForm" class="geex-content__authentication__form" method="POST">
						@csrf

						<h2 class="geex-content__authentication__title">Login Admin</h2>
						
						@if ($errors->has('loginError'))
							<div class="alert alert-danger">{{ $errors->first('loginError') }}</div>
						@endif
						
						<div class="geex-content__authentication__form-group">
							<label for="emailSignIn">Email</label>
							<input type="email" id="email" name="email" placeholder="Masukkan Email" required>
							<i class="uil-envelope"></i>
						</div>
						<div class="geex-content__authentication__form-group">
							<div class="geex-content__authentication__label-wrapper">
								<label for="loginPassword">Password</label>
							</div>
							<input type="password" id="password" name="password" placeholder="Masukkan Password" required>
							<i class="uil-eye toggle-password-type"></i>
						</div>
						<button type="submit" class="geex-content__authentication__form-submit">Login</button>
					</form>
				</div>
			</div>
		</div>
	</main>

	<x-admin-footer/>

</body>

</html>