<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <?php foreach ($hiburan as $hib) : ?>
                    <div class="page-header">
                        <h2 class="pageheader-title">Hiburan Vendor <?php echo $hib->nama_vendor ?></h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Vendor</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Detail Hiburan dan MC</li>
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

            <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card">
                                <img class="card-img-top" alt="Card image cap" src=" <?php echo base_url() . '/assets/images/' . $hib->image ?>">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo base_url() . '/assets/images/' . $hib->image ?>" alt="Card image cap">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span> </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span> </a>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="tab-regular">
                <ul class="nav nav-tabs nav-fill" id="myTab7" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab-justify" data-toggle="tab" href="#home-justify" role="tab" aria-controls="home" aria-selected="true">Paket <?php echo $hib->paket ?> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab-justify" data-toggle="tab" href="#profile-justify" role="tab" aria-controls="profile" aria-selected="false">Tab#2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab-justify" data-toggle="tab" href="#contact-justify" role="tab" aria-controls="contact" aria-selected="false">Tab#3</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent7">
                    <div class="tab-pane fade show active" id="home-justify" role="tabpanel" aria-labelledby="home-tab-justify">
                        <p class="lead"> Harga Panggung : Rp. <?php echo number_format($hib->harga, 0, ',', ' .') ?></p>
                        <p> <?php echo $hib->keterangan ?></p>
                        <?php echo anchor('home/pemesanan/' . $hib->idjasa, '<div class="btn btn-secondary">Lanjutkan Pemesanan
                    </div>') ?>
                        <?php echo anchor('jasa/tambah_ke_pesanan/' . $hib->idjasa, '<div class="btn btn-primary">Tambah ke Pesanan
                    </div>') ?>
                        <div class="tab-pane fade" id="profile-justify" role="tabpanel" aria-labelledby="profile-tab-justify">
                            <p>Nullam et tellus ac ligula condimentum sodales. Aenean tincidunt viverra suscipit. Maecenas id molestie est, a commodo nisi. Quisque fringilla turpis nec elit eleifend vestibulum. Aliquam sed purus in odio ullamcorper congue consectetur in neque. Aenean sem ex, tempor et auctor sed, congue id neque. </p>
                        </div>
                        <div class="tab-pane fade" id="contact-justify" role="tabpanel" aria-labelledby="contact-tab-justify">
                            <p>Vivamus pellentesque vestibulum lectus vitae auctor. Maecenas eu sodales arcu. Fusce lobortis, libero ac cursus feugiat, nibh ex ultricies tortor, id dictum massa nisl ac nisi. Fusce a eros pellentesque, ultricies urna nec, consectetur dolor. Nam dapibus scelerisque risus, a commodo mi tempus eu.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>