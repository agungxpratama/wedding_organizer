<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Pemesanan </h2>
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
                <div class="card">
                    <h5 class="card-header">Form Pemesanan</h5>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('home/tambah_pemesanan'); ?>" id="validationform" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Vendor</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required="" placeholder="Nama Vendor" class="form-control" name="nama_vendor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Jenis Paket</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required="" placeholder="Paket Pernikahan" class="form-control" name="paket">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Harga Paket</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required="" placeholder="Harga Paket" class="form-control" name="harga">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Tambah keterangan</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <textarea required="" class="form-control" placeholder="Tambah Keterangan" name="keterangan"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Lengkap</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required="" placeholder="Nama Lengkap" class="form-control" name="nama_lengkap">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Alamat</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <textarea required="" class="form-control" placeholder="Alamat" name="alamat"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">No HP</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required="" data-parsley-min="6" placeholder="No HP" class="form-control" name="no_hp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Tanggal Pernikahan</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" required="" placeholder="Tanggal Pernikahan" class="form-control" name="tglpernikahan">
                                </div>
                            </div>

                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" name="submit" value="submit" class="btn btn-space btn-primary">Kirim</button>
                                    <button class="btn btn-space btn-secondary">Batal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>