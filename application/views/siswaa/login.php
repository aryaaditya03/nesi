<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NESI - Login</title>

    <style>

    .body{
        background-color:#2c3e50;
    }

    .logo-login {
        max-height: 160px;
        margin-bottom: 20px;
    }
    </style>


    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>" />

</head>

<body>
    <header>
        <nav
            class="navbar shadow-sm navbar-expand-lg navbar-light bg-white pt-4 pb-4">
            <div class="container">
            <a class="navbar-brand" href="#">/NEW STUDENT INFORMATION</a>
            <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link mr-3" href="<?php echo site_url('home') ?>">HOME</a>
            <a class="nav-item nav-link font-weight-bold" href="<?php echo site_url('students/registrasi/regis') ?>"><i class="fas fa-edit"></i> DAFTAR</a>
            </div>
            </div>
        </nav>
        </header>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-12 col-md-4 align-items-center justify-content-center">
                <div class="card o-hidden shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">         
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-1200 font-weight-bold "><i class="fas fa-users"></i> &nbsp;HALAMAN LOGIN SISWA</h1>
                                        <p class="text-sm text-gray">-- HI NEW STUDENT! --</p>
                                    </div>
                                    <?php echo $this->session->flashdata('messageLoginSiswa');?>
                                    <form action="" method="post">
                                    <form class="user">
                                        <div class="form-group"> 
                                            <input type="text" name="email"class="form-control form-control-user"
                                                placeholder="Enter email" value="<?= set_value('email') ?>">
                                            <div class="invalid-feedback">
					                            <?= form_error('email') ?>
				                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                 placeholder="Password" value="<?= set_value('password') ?>" required >
                                            <div class="invalid-feedback">
					                            <?= form_error('password') ?>
				                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info btn-user btn-block">
                                            Login
                                        </button>
                                    <hr>
                                    <div class="text-center">
                                        <p class="small">WELCOME SISWA BARU!</p>
                                    </div>
                                    <div class="text-center">
                                        <a class="small text-white">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <footer>
      <div class="text-center py-4 bg-white">
        <div class="container">
          <span class="text-muted">Copyright @2023 NewStudentInformation</span>
        </div>
      </div>
    </footer>

<?php $this->load->view("admin/_partials/modal.php") ?>
<!--JAVASCRIPT -->
<?php $this->load->view("admin/_partials/js.php") ?>


</html>