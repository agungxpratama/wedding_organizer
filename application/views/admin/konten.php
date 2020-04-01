<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Dashboard Vendor </h2>
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
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                <div class="card">
                    <h5 class="card-header">Input Kategori</h5>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('admin/tambah'); ?>" id="form" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                            <div class=" form-group row">
                                <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Kategori</label>
                                <div class="col-9 col-lg-10">
                                    <input id="inputEmail2" required="" placeholder="Kategori" class="form-control" name="kategori">
                                </div>
                            </div>
                            <div class="col-sm-6 pl-2">
                                <p class="text-right">
                                    <button type="submit" class="btn btn-space btn-primary">Tambah</button>

                                </p>
                            </div>
                    </div>
                </div>
            </div>
        </div>