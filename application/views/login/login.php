<body style="background-image : url('<?= base_url('assets/'); ?>login/images/bc2.jpg');">
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->

    <div class="splash-container">
        <div class="card ">

            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="<?= base_url('assets/images/logo1.png'); ?>" alt="logo1"></a><span class="splash-description">Please enter your user information.</span></div>
            <?= $this->session->flashdata('pesan') ?>
            <div class="card-body">
                <form method="POST" action="<?= base_url('login/'); ?>">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" name="username" type="text" placeholder="Username" autocomplete="off" value="<?= set_value('username') ?>">
                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>

                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Password">
                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="<?= base_url('login/signup'); ?>" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>