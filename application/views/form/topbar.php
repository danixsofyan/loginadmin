    <!-- HK Wrapper -->
	<div class="hk-wrapper hk-alt-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar hk-navbar-alt">
            <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand text-red" href="<?= base_url('form'); ?>">
            <img src="https://dilo-image.apps.playcourt.id/tenant/d1e36b43-becd-49f5-ad65-1d91a0eb3e4e.png" class="img-fluid offset-3" style="widht:auto; height:40px;">
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapseAlt">
            </div>
            <ul class="navbar-nav hk-navbar-content">
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="<?= base_url('assets/user/'); ?>dist/img/avatar.jpg" alt="user" class="avatar-img rounded-circle">
                                </div>
                                <!-- <span class="badge badge-success badge-indicator"></span> -->
                            </div>
                            <div class="media-body">
                                <span><?= $user['firstname']; ?> <?= $user['lastname']; ?><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <!-- <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-card"></i><span>My balance</span></a>
                        <a class="dropdown-item" href="inbox.html"><i class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
                        <div class="dropdown-divider"></div>
                        <div class="sub-dropdown-menu show-on-hover">
                            <a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                            <div class="dropdown-menu open-left-side">
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /Top Navbar -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <!-- <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item" aria-current="page" active><a href="<?= base_url('form/user'); ?>">Data Pribadi</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('form/startup'); ?>">Data Startup</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('form/founder'); ?>">Data Founder</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('form/produk'); ?>">Data Produk</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('form/coba'); ?>">Data Proposal</a></li>
                </ol>
            </nav> -->
            <!-- /Breadcrumb -->