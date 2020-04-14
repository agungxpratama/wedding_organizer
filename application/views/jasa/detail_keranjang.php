<div class="dashboard-wrapper">
<!-- <div class="container"> -->
<div class="container-fluid dashboard-content">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Keranjang </h2>
                <!-- <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p> -->
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Keranjang</a></li>
                            <!-- <li class="breadcrumb-item active" aria-current="page">Blank Pageheader</li> -->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="card">
            <h5 class="card-header">Keranjang Pesanan</h5>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Vendor</th>
                            <th scope="col">Paket</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Sub Total</th>
                        </tr>
                </thead>
                <tbody>
                    <?php
                    $jumlah = 0;
                    $no = 1;
                    foreach ($this->cart->contents() as $items) : ?>

                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $items['name'] ?></td>
                        <td><?php echo $items['qty'] ?></td>
                        <td><?php echo $items['price'] ?></td>
                        <td><?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
                    </tr>
                    <?php $jumlah += $items['subtotal'] ?>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <th>Jumlah</th>
                        <th>Rp. <?= number_format($jumlah, 0, ',', '.') ?></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="simpan_pesanan" class="btn btn-primary text text-white" name="button">Simpan Pesanan</a>
                        </td>
                    </tr>
                </tfoot>
                <?php print_r($this->cart->contents()); ?>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<!-- <div class="row"> -->
