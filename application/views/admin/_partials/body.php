
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                <img
                src="<?php echo base_url() ?>img/logo_nesi.png"
                alt="NESI"
                class=""
                style="max-height: 50px;"
                />
                </div>
                <div class="sidebar-brand-text"><h6 class="text-white font-weight-bold mt-2 ml-1">/ADMIN</h6></div>
            </a>


            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin/dashboard') ?>">
                    <b><i class="fas fa-fw fa-tachometer-alt"></i></b>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" style="color:white;">

            <!-- Heading -->
            <div class="sidebar-heading">
                DATA
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-list-ol"></i>
                    <span class="">Data Siswa</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">OPTION</h6>
                        <a class="collapse-item" href="<?php echo site_url('admin/siswa/') ?>">Data Pribadi</a>
                        <a class="collapse-item" href="<?php echo site_url('admin/siswa/berkas') ?>">Data Akademik</a>
                        <a class="collapse-item" href="<?php echo site_url('admin/siswa/datalogin') ?>">Data Akun Siswa</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span class=""> Data Admin</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white bg-opacity-75 py-2 collapse-inner rounded">
                        <h6 class="collapse-header">OPTION</h6>
                        <a class="collapse-item" href="<?php echo site_url('admin/user/') ?>">Data Akun</a>
                        <a class="collapse-item" href="<?php echo site_url('/admin/user/tambahdata') ?>">Tambah Akun</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span class=""> Data Guru</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white bg-opacity-75 py-2 collapse-inner rounded">
                        <h6 class="collapse-header">OPTION</h6>
                        <a class="collapse-item" href="<?php echo site_url('admin/guru') ?>">Data Guru</a>
                        <a class="collapse-item" href="<?php echo site_url('/admin/guru/add') ?>">Tambah Data</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                OPSI
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin/setting') ?>">
                    <i class="fas fa-fw fa-tools"></i>
                    <span class="">Setting</span></a>
            </li>

            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('auth/login_siswa') ?>" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span class="">LOG-OUT</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center mt-5 d-none d-md-inline">
                <button class="rounded-circle border-0"id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Toggler (Sidebar) -->
            

        </ul>
        <!-- End of Sidebar -->