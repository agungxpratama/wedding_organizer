<div class="row">
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

                        <?php
                        $no = 1;
                        foreach ($this->cart->contents() as $items) : ?>

                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $items['name'] ?></td>
                                <td><?php echo $items['qty'] ?></td>
                                <td><?php echo $items['price'] ?></td>
                                <td><?php echo $items['subtotal'] ?></td>
                            </tr>

                        <?php endforeach; ?>

                    </thead>


                </table>
            </div>
        </div>
    </div>