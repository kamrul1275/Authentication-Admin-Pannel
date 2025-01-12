<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="backend/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="backend/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="backend/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="backend/assets/css/pace.min.css" rel="stylesheet" />
	<script src="backend/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="backend/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="backend/assets/css/app.css" rel="stylesheet">
	<link href="backend/assets/css/icons.css" rel="stylesheet">
	<title>Rukada - Responsive Bootstrap 5 Admin Template</title>
</head>

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="my-4 text-center">
							<img src="backend/assets/images/logo-img.png" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Sign Up</h3>
										<p>Already have an account? <a href="{{ route('show.login')}}">Sign in here</a>
										</p>
									</div>
		
									
									</div>


                                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
									<div class="form-body">

										<form class="row g-3" action="{{route('register')}}" method="POST">
                                            @csrf
										

                                            <div class="col-12">
												<label for="name" class="form-label">Name</label>
												<input type="text" name="name" class="form-control" id="name" placeholder="enter your name">
											</div>

											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="example@user.com">
											</div>

                                            <div class="col-12">
												<label for="phone" class="form-label">Phone Number</label>
												<input type="number" name="phone" class="form-control" id="phone" placeholder="+88 0">
											</div>

											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" name="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-12">
												<label for="inputSelectCountry" class="form-label">Location</label>
												<select class="form-select" name="location" id="inputSelectCountry" aria-label="Default select example">
													<option selected>Area</option>
													<option value="1" name="location">Insite Dhaka</option>
													<option value="2" name="location">Outsite Dhaka</option>
												
												</select>
											</div>
											<div class="col-12">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">I read and agree to Terms & Conditions</label>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Sign up</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="backend/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="backend/assets/js/jquery.min.js"></script>
	<script src="backend/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="backend/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="backend/assets/js/app.js"></script>
</body>

</html>