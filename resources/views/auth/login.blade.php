
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Login</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="/assets/dashboard/modules/bootstrap-5.1.3/css/bootstrap.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="/assets/dashboard/css/style.css">
	<!-- Boostrap Icon-->
	<link rel="stylesheet" href="/assets/dashboard/modules/bootstrap-icons/bootstrap-icons.css">
</head>
<body>
 
	<div id="auth">
        
		<div class="row h-100">
			<div class="col-lg-7 d-none d-lg-block">
				<div id="auth-left">
 				</div>
			</div>
			<div class="col-lg-5 col-12">
				<div id="auth-right">
					<div class="auth-logo">
						<a href="index.html"><img src="/assets/dashboard/images/logo.png" alt="Logo"> Air Terjun Batu Mahasur</a>  
					</div>
					<h1 class="auth-title">Log in.</h1>
					<p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>
		
					<form method="POST" action="{{ route('login') }}">
                    @csrf
						<div class="form-group position-relative has-icon-left mb-4">
							<input type="email" class="form-control form-control-xl" placeholder="e-mail"  name="email" :value="old('email')" required autofocus autocomplete="username">
							<div class="form-control-icon">
								<i class="bi bi-person"></i>
							</div>
						</div>
						<div class="form-group position-relative has-icon-left mb-4">
							<input type="password" class="form-control form-control-xl" placeholder="Password" name="password" required autocomplete="current-password">
							<div class="form-control-icon">
								<i class="bi bi-shield-lock"></i>
							</div>
						</div>
						<button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
					</form>
				</div>
			</div>
			
		</div>
	</div>
		
	 

	<!-- General JS Scripts -->
	<script src="/assets/dashboard/js/atrana.js"></script>

	<!-- JS Libraies -->
	<script src="/assets/dashboard/modules/jquery/jquery.min.js"></script>
	<script src="/assets/dashboard/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/dashboard/modules/popper/popper.min.js"></script>

    <!-- Template JS File -->
	<script src="/assets/dashboard/js/script.js"></script>
	<script src="/assets/dashboard/js/custom.js"></script>
 </body>
</html>
