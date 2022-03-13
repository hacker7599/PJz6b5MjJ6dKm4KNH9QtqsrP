<x-admin.guest-layout bodyClasses="bg-login">
	<div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
		<div class="container">
			<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
				<div class="col mx-auto">
					<div class="my-4 text-center">
						<img src="assets/images/logo-img.png" width="180" alt="" />
					</div>
					<div class="card">
						<div class="card-body">
							<div class="border p-4 rounded">
								<div class="text-center">
									<h3 class="">Sign Up</h3>
									<p>Already have an account? <a href="authentication-signin.html">Sign in here</a>
									</p>
								</div>
								<div class="d-grid">
									<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
											<img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
											<span>Sign Up with Google</span>
										</span>
									</a> <a href="javascript:;" class="btn btn-facebook"><em class="bx bxl-facebook"></em>Sign Up with Facebook</a>
								</div>
								<div class="login-separater text-center mb-4"> <span>OR SIGN UP WITH EMAIL</span>
									<hr />
								</div>
								<div class="form-body">
									<form class="row g-3">
										<div class="col-sm-6">
											<label for="inputFirstName" class="form-label">First Name</label>
											<input type="email" class="form-control" id="inputFirstName" placeholder="Jhon">
										</div>
										<div class="col-sm-6">
											<label for="inputLastName" class="form-label">Last Name</label>
											<input type="email" class="form-control" id="inputLastName" placeholder="Deo">
										</div>
										<div class="col-12">
											<label for="inputEmailAddress" class="form-label">Email Address</label>
											<input type="email" class="form-control" id="inputEmailAddress" placeholder="example@user.com">
										</div>
										<div class="col-12">
											<label for="inputChoosePassword" class="form-label">Password</label>
											<div class="input-group" id="show_hide_password">
												<input type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bi bi-hide'></i></a>
											</div>
										</div>
										<div class="col-12">
											<label for="inputSelectCountry" class="form-label">Country</label>
											<select class="form-select" id="inputSelectCountry" aria-label="Default select example">
												<option selected>India</option>
												<option value="1">United Kingdom</option>
												<option value="2">America</option>
												<option value="3">Dubai</option>
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
												<button type="submit" class="btn btn-primary"><i class='bi bi-person'></i>Sign up</button>
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
</x-admin.guest-layout>