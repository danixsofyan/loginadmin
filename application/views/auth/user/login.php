		<!-- HK Wrapper -->
		<div class="hk-wrapper">
			
			<!-- Main Content -->
			<div class="hk-pg-wrapper hk-auth-wrapper">
				
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12 pa-0">
							<div class="auth-form-wrap pt-xl-0 pt-70">
								<div class="auth-form w-xl-35 w-lg-55 w-sm-75 w-100">
								<p class="text-center mb-5"><img src="https://dilo-image.apps.playcourt.id/tenant/d1e36b43-becd-49f5-ad65-1d91a0eb3e4e.png" class="img-fluid" style="widht:auto; height:50px;"></p>
									<a class="font-24 font-weight-500 auth-brand text-center d-block mb-20" href="#">
									DILo Customer Validation 2020
									</a>									
									<form class="user" method="post" action="<?= base_url('auth'); ?>">
										<p class="text-center mb-30">Sign in to your account and enjoy!</p>
										<?= $this->session->flashdata('message'); ?> 
										<div class="form-group">
											<input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="form-group">
											<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        	<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<!-- <div class="custom-control custom-checkbox mb-25">
											<input class="custom-control-input" id="same-address" type="checkbox" checked>
											<label class="custom-control-label font-14" for="same-address">Keep me logged in</label>
										</div> -->
										<button class="btn btn-danger btn-block" type="submit">Login</button>
										<!-- <p class="font-14 text-center mt-15">Having trouble logging in?</p> -->
										<!-- <div class="option-sep">or</div>
										<div class="form-row">
											<div class="col-sm-6 mb-20"><button class="btn btn-indigo btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span></button></div>
											<div class="col-sm-6 mb-20"><button class="btn btn-sky btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-twitter"></i> </span><span class="btn-text">Login with Twitter</span></button></div>
										</div> -->
										<br>
										<p class="text-center">Do have an account yet? <a href="<?= base_url('auth/registration'); ?>">Sign Up</a></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /HK Wrapper -->