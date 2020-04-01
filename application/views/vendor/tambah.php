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
                     <h2 class="pageheader-title">Tambah Paket</h2>
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
                     <h5 class="card-header">Validation Types</h5>
                     <div class="card-body">
                         <form method="post" action="<?= base_url('vendor/tambah_data'); ?>" id="validationform" data-parsley-validate="" novalidate="" enctype="multipart/form-data">
                             <div class="form-group row">
                                 <label class="col-12 col-sm-3 col-form-label text-sm-right">Nama Vendor</label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                     <input type="text" required="" placeholder="Nama Vendor" class="form-control" name="nama_vendor">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label class="col-3 col-sm-3 col-form-label text-sm-right">Kategori</label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                     <select class="custom-select" id="inputGroupSelect01" name="kategori">
                                         <option selected>Choose kategori</option>
                                         <option value="dekorasi">Dekorasi</option>
                                         <option value="gedung">Gedung</option>
                                         <option value="catering">Catering</option>
                                         <option value="foto">Foto</option>
                                         <option value="hiburan">Hiburan</option>
                                         <option value="wo">WO</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label class="col-12 col-sm-3 col-form-label text-sm-right">Paket</label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                     <input type="text" required="" data-parsley-maxlength="6" placeholder="Paket" class="form-control" name="paket">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label class="col-12 col-sm-3 col-form-label text-sm-right">Harga</label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                     <input type="text" required="" class="form-control" name="harga">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label class="col-12 col-sm-3 col-form-label text-sm-right">Keterangan</label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                     <textarea required="" class="form-control" name="keterangan"></textarea>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label class="col-12 col-sm-3 col-form-label text-sm-right">Foto</label>
                                 <div class="col-12 col-sm-8 col-lg-6">
                                     <input type="file" required="" class="form-control" name="image">
                                 </div>
                             </div>
                             <div class="form-group row text-right">
                                 <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                     <button type="submit" name="submit" value="submit" class="btn btn-space btn-primary">Submit</button>
                                     <button class="btn btn-space btn-secondary">Cancel</button>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>