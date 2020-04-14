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
                     <h2 class="pageheader-title">Pesanan</h2>
                     <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                     <div class="page-breadcrumb">
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <!-- <li class="breadcrumb-item"><a href="#" class="breadcrumb-link"></a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link"></a></li>
                                            <li class="breadcrumb-item active" aria-current="page"></li> -->
                             </ol>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
         <!-- ============================================================== -->
         <!-- end pageheader -->
         <!-- ============================================================== -->
         <div class="card">
             <h5 class="card-header">Tabel Pesanan</h5>
             <div class="card-body">
                 <table class="table">
                     <thead>
                         <tr>
                             <th scope="col">No</th>
                             <th scope="col">Nama</th>
                             <th scope="col">Alamat</th>
                             <th scope="col">No HP/Telp </th>
                             <th scope="col">Pesanan</th>
                             <th scope="col">Harga</th>
                             <th scope="col">Aksi</th>

                         </tr>
                     </thead>
                     <tbody><?php
                     // print_r($pesanan)
                      ?>
                         <?php $no = 1; foreach ($pesanan as $p): ?>
                             <tr>
                                 <th scope="row"><?= $no++ ?></th>
                                 <td><?= $p->username ?></td>
                                 <td></td>
                                 <td></td>
                                 <td><?= $p->name ?></td>
                                 <td><?= $p->harga ?></td>
                                 <td>
                                    <?php if ($p->status == 0): ?>
                                        <a href="prosesPesanan/<?= $p->id_pesanan  ?>" class="btn btn-primary active">Proses</a>
                                    <?php elseif ($p->status == 1): ?>
                                        <a href="Admin" class="btn btn-primary disabled">Menunggu Pemesan</a>
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
