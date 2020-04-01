<body style="background-image : url('<?= base_url('assets/'); ?>login/images/bc2.jpg');">
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="POST" action="<?= base_url('login/signup'); ?>">

        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registrations Form</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">

                <select class="custom-select custom-select-md mb-3" style="height: 45px; background-color: blueviolet;color:white;" name="dropdown">
                    <option selected>Pilih Sebagai</option>
                    <option value="vendor">Vendor</option>
                    <option value="konsumen">Konsumen</option>
                    <option value="admin">Admin</option>
                </select>



                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="name" placeholder="Nama Lengkap" autocomplete="off" value="<?= set_value('name') ?>">
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