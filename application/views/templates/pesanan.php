<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Pesanan</h2>
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
                    <h5 class="card-header">Pesanan</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Vendor</th>
                                    <th scope="col">Paket</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <?php
                            print_r($pesanan);
                             ?>
                            <tbody>
                                <?php $no = 1; foreach ($pesanan as $p): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $p->nama_vendor ?></td>
                                        <td><?= $p->paket ?></td>
                                        <td><?= $p->harga ?></td>
                                        <td>
                                            <?php if ($p->status == 0): ?>
                                                <a href="Admin" class="btn btn-primary disabled">Belum diProses</a>
                                            <?php elseif ($p->status == 1): ?>
                                                <a href="<?= $p->id_pesanan  ?>" class="btn btn-primary active">Lengkapi Data</a>
                                            <?php else: ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>


        </div>
