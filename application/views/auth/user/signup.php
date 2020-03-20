    <!-- HK Wrapper -->
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between align-items-center">
                <a class="d-flex font-24 font-weight-500 auth-brand" href="#">
                <img src="https://dilo-image.apps.playcourt.id/tenant/d1e36b43-becd-49f5-ad65-1d91a0eb3e4e.png" class="img-fluid offset-5 mt-10" style="widht:auto; height:40px;">
                </a>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 pa-0">
                        <div class="auth-cover-img overlay-wrap" style="background-image:url(<?= base_url('assets/user/'); ?>dist/img/bg-1.jpg);">
                        </div>
                    </div>
                    <div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
                                <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                                    <h1 class="display-5 mb-10 text-red">Sign up here</h1>
                                    <p class="mb-30">Create your account and submit proposal</p>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control form-control-user" id="firstname" name="firstname" placeholder="First name" value="<?= set_value('firstname'); ?>">
                                            <?= form_error('firstname', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input type="text" class="form-control form-control-user" id="lastname" name="lastname" placeholder="Last name" value="<?= set_value('lastname'); ?>">
                                            <?= form_error('lastname', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                        </div>
                                    </div>
                                    <!-- <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" required>
                                        <label class="custom-control-label font-14" for="same-address">I have read and agree to the <a href=""><u>term and conditions</u></a></label>
                                    </div> -->
                                    <button class="btn btn-danger btn-block" type="submit">Register</button>
                                    <div class="option-sep">or</div>
                                    <!-- <div class="form-row">
                                        <div class="col-sm-6 mb-20">
                                            <button class="btn btn-indigo btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span></button>
                                        </div>
                                        <div class="col-sm-6 mb-20">
                                            <button class="btn btn-sky btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-twitter"></i> </span><span class="btn-text">Login with Twitter</span></button>
                                        </div>
                                    </div> -->
                                    <p class="text-center">Already have an account? <a href="<?= base_url('auth/'); ?>">Sign In</a></p>
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