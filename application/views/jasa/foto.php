<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Foto & Video </h2>
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


        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card-columns">
                <?php foreach ($foto as $fot) : ?>
                    <div class="card">
                        <img class="card-img-top" src="../assets/images/card-img.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $fot->nama_vendor ?></h3>
                            <p class="card-text"><?php echo $fot->kategori ?></p>
                            <a href="<?= base_url('Jasa/detail_hiburan') ?>" class="btn btn-outline-primary">Details</a>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>