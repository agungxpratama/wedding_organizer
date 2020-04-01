<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit Profile </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blank Pageheader</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <?= form_open_multipart('home/editprofile'); ?>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label ">Email</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="" class="form-control" name="email" value="<?= $user['email']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label ">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="" class="form-control" name="nama" value="<?= $user['nama']; ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label ">Username</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="" class="form-control" name="username" value="<?= $user['username']; ?>">

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Foto</div>
                    <div class="col-sm-10">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/images/profile/') . $user['image']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                </div>
                <div class="form-group row text-right">
                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                        <button type="submit" class="btn btn-space btn-primary">Edit</button>
                    </div>
                </div>

            </div>
        </div>
    </div>