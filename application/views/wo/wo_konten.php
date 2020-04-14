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
                    <h2 class="pageheader-title">Wedding Organizer </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Wedding Organizer</li>
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
            <div class="col-xl-4 col-lg-10 col-md-12 col-sm-12 col-12">
                <?php foreach ($wedding as $wo) : ?>
                    <div class="product-thumbnail">
                        <div class="product-img-head">
                            <div class="product-img">
                                <img src="<?php echo base_url() . '/assets/images/' ?>" alt="" class="img-fluid"></div>
                            <div class=""><a href="#" class="product-wishlist-btn"><i class="fas fa-heart"></i></a></div>
                        </div>
                        <div class="product-content">
                            <div class="product-content-head">
                                <h3 class="product-title"><?php echo $wo->nama_vendor ?> </h3>
                                <div class="product-rating d-inline-block">
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                    <i class="fa fa-fw fa-star"></i>
                                </div><br>
                                <h5><?php echo $wo->kategori ?></h5>
                            </div>
                            <div class="product-btn">
                                <a href="detail_wo/<?= $wo->idjasa ?>" class="btn btn-primary">Detail</a>
                                <!-- <?php echo anchor('wo/detail/' . $wo->idjasa, '<div class="btn btn-primary">Detail</div>') ?> -->
                                <a href="#" class="btn btn-outline-light"><i class="fas fa-exchange-alt"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>

</div>
