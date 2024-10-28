
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                <img
                src="<?php echo base_url() ?>img/logo_nesi.png"
                alt="tentang sekolah"
                class=""
                style="max-height: 50px;"
                />
                </div>
                <div class="sidebar-brand-text"><h6 class="text-white font-weight-bold mt-2 ml-1">/SISWA</h6></div>
            </a>


            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('students/dashboard') ?>">
                    <b><i class="fas fa-fw fa-tachometer-alt"></i></b>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('students/lengkapi/edit_data') ?>">
                    <i class="fas fa-fw fa-cloud"></i>
                    <span class="">Lengkapi Data</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span class="">Upload Berkas</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white bg-opacity-75 py-2 collapse-inner rounded">
                        <h6 class="collapse-header">OPTION</h6>
                        <a class="collapse-item" href="<?php echo site_url('students/upload/ijazah') ?>">Upload Ijazah</a>
                        <a class="collapse-item" href="<?php echo site_url('students/upload/nilai_siswa') ?>">Upload Nilai</a>
                        <a class="collapse-item" href="<?php echo site_url('students/upload/skhun') ?>">Upload Skhun</a>
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('students/changepass/changepassword') ?>">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span class="">Ganti Password</span></a>
            </li>

            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('auth/login') ?>" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span class="">LOG-OUT</span></a>
            </li>

            <div class="text-center mt-5 d-none d-md-inline">
                <button class="rounded-circle border-0"id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Toggler (Sidebar) -->
            

        </ul>
        <!-- End of Sidebar -->