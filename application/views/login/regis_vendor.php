<body style="background-image : url('<?= base_url('assets/'); ?>login/images/bc2.jpg');">
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="POST" action="<?= base_url('login/signup'); ?>">

        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registrations Form For Vendor</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="nama_vendor" placeholder="Nama Vendor" autocomplete="off" value="<?= set_value('name') ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="username" placeholder="UserName" autocomplete="off" value="<?= set_value('username') ?>">
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class=" form-group">
                    <input class="form-control form-control-lg" type="email" name="email" placeholder="E-mail" autocomplete="off" value="<?= set_value('email') ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" name="password1" type="password" placeholder="Password">
                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" name="password2" type="password" placeholder="Confirm">
                </div>

                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                    </label>
                </div>

            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="<?= base_url('login'); ?>" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>