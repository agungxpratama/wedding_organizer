<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Hiburan Dan MC </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Vendor</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Hiburan dan MC</li>
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
                <?php foreach ($hiburan as $hib) : ?>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo base_url() . '/assets/images/' . $hib->image ?>" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $hib->nama_vendor ?></h3>
                            <p class="card-text"><?php echo $hib->kategori ?></p>
                            <?php echo anchor('jasa/detail_hiburan/' . $hib->idjasa, '<div class="btn btn-primary">Detail
                    </div>') ?>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>