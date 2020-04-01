 <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Pemesanan</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <!-- <li class="breadcrumb-item"><a href="#" class="breadcrumb-link"></a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link"></a></li>
                                            <li class="breadcrumb-item active" aria-current="page"></li> -->
                                        </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="card">
                                    <h5 class="card-header">Form Pemesanan</h5>
                                    <div class="card-body">
                                        <form id="validationform" data-parsley-validate="" novalidate="">
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Wedding Organizer</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <input type="text" required="" placeholder="Wedding Organizer name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Paket Pernikahan</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <input type="text" required="" data-parsley-minlength="6" placeholder="Paket pernikahan" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Harga Paket</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <input type="text" required="" data-parsley-maxlength="6" placeholder="Rp" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Tambah Keterangan</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <textarea required="" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Lengkap</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <input type="text" required="" data-parsley-length="[5,10]" placeholder="Nama lengkap" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Alamat</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <textarea required="" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right">No HP</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <input type="text" required="" data-parsley-min="6" placeholder="+62" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Tanggal Pernikahan</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <input type="text" required="" data-parsley-max="6" placeholder="d-m-yyyy" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Batas Pelunasan</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <input required="" type="number" min="6" max="100" placeholder="d-m-yyyy" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Nomor Rekening WO</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <input type="text" required="" data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="(001)12345" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row text-right">
                                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                    <button type="submit" class="btn btn-space btn-primary">Izinkan</button>
                                                    <button class="btn btn-space btn-secondary">Tolak</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>