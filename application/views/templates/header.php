    <body>
        <!-- ============================================================== -->
        <!-- main wrapper -->
        <!-- ============================================================== -->
        <div class="dashboard-main-wrapper">
            <!-- ============================================================== -->
            <!-- navbar -->
            <!-- ============================================================== -->
            <div class="dashboard-header">
                <nav class="navbar navbar-expand-lg bg-white fixed-top">
                    <a class="navbar-brand" href="index.html">areumdapta</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">

                        <ul class="navbar-nav ml-auto navbar-right-top">
                            <div id="custom-search" class="top-search-bar">
                                <li class="nav-item">
                                    <?php $keranjang = 'Keranjang Pesanan : ' . $this->cart->total_items() . ' pesanan'
                                    ?>
                                    <?php echo anchor('jasa/detail_keranjang', $keranjang)  ?>
                                </li>
                            </div>

                            <li class="nav-item dropdown nav-user">
                                <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url('assets/images/profile/') . $user['image']; ?>" alt="" class="user-avatar-md rounded-circle"></a>
                                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                    <div class="nav-user-info">

                                        <h5 class="mb-0 text-white nav-user-name"> <?php echo $this->session->userdata('username') ?> </h5>
                                    </div>

                                    <a class="dropdown-item" href="<?= base_url('home/myprofile'); ?>"><i class="fas fa-user mr-2"></i>Account</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                    <a class="dropdown-item" href="<?= base_url('login/logout'); ?>"><i class="fas fa-power-off mr-2"></i>Logout</a>

                                </div>
                            </li>
                        </ul>
                    </div>
            </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->