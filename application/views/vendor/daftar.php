<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Daftar Paket </h2>
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

                    <h5 class="card-header">Basic Table</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Vendor</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Aksi</th>
                                </tr>

                                <?php
                                $no = 1;
                                foreach ($vendor as $jasa) : ?>

                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $jasa->nama_vendor ?></td>
                                        <td><?php echo $jasa->kategori ?></td>
                                        <!-- <td><?php echo $jasa->paket ?></td> -->
                                        <td><?php echo $jasa->harga ?></td>
                                        <!-- <td><?php echo $jasa->keterangan ?></td> -->
                                        <!-- <td><?php echo $jasa->foto ?></td> -->
                                        <td>
                                            <div class="btn btn-success btn-sm"><i class="fas fa-search"></i></div>
                                        </td>
                                        <td>
                                            <div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>
                                        </td>
                                        <td><?php echo anchor('vendor/hapus/' . $jasa->idjasa, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>