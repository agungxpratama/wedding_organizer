<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Paket Pernikahan </h2>
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
        <!-- <?php print_r($wedding) ?> -->
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Data Paket
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <td>No.</td>
                                        <td>Nama Vendor</td>
                                        <td>Kategori</td>
                                        <td>Paket</td>
                                        <td>Harga</td>
                                        <td>Keterangan</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($wedding as $w): ?>
                                    <tr>
                                        <td>1</td>
                                        <td><?= $w->nama_vendor ?></td>
                                        <td><?= $w->kategori ?></td>
                                        <td><?= $w->paket ?></td>
                                        <td><?= $w->harga ?></td>
                                        <td><?= $w->keterangan ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <div class="row">
            <div class="col-xl-8 col-lg-10 col-md-6 col-sm-12 col-12">
                <?php foreach ($wedding as $wo) : ?>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="card-img-top" src="assets/images/card-img.jpg" alt="Card image cap">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top" src="assets/images/card-img.jpg" alt="Card image cap">
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span> </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span> </a>
                        </div>
                        <div class="card" id="styled-list">
                            <h5 class="card-header">Paket Pernikahan <?php echo $wo->nama_vendor ?> <br><br>
                                Paket <?php echo $wo->paket ?> <br> <br>
                                <div class="btn btn-primary"> <?php echo $wo->harga ?></div>
                            </h5>

                            <div class="card-body">
                                <ul class="list-unstyled arrow">
                                    <li>Makeup dan wadrobe</li>
                                    <li>3 Pasang Baju Pengantin</li>
                                    <li>1 Set Bunga Melati</li>
                                    <li>Dekorasi</li>
                                    <li>Pelaminan Bunga Hidup</li>
                                    <li>Tenda Balon</li>
                                    <li>Foto & Video Dokumentasi</li>
                                    <li>MC</li>
                                    <li>Upacara Acara Adat Live</li>
                                    <li>Hiburan</li>
                                </ul>
                                <a href="<?= base_url('home/pemesanan') ?>" class="btn btn-primary">Lanjutkan Pemesanan</a>
                                <?php echo anchor('jasa/tambah_ke_pesanan/' . $wo->idjasa, '<div class="btn btn-primary">Tambah Pesanan
                    </div>') ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span> </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span></a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
