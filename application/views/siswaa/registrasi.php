<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Aplikasi pendaftaran Siswa SMKN DARUL ULUM MUNCAR.">
  <meta name="author" content="e-development.tech">

  <title>NESI - Registrasi Siswa</title>


  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  
  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>css/sb-admin-2.min.css" rel="stylesheet">

  <!-- css datepicker -->
  <link href="<?= base_url() ?>assets/vendor/datepicker/css/bootstrap-datepicker.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>" />

  <style>

  .card{
    background-color: white;
  }
  .logo-login {
      max-height: 160px;
      margin-bottom: 20px;
  }
  </style>

</head>


<body class="">
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
              <a class="nav-item nav-link mr-3" href="#">INFORMASI</a>
              <a class=" btn btn-success font-weight-bold float-right rounded-pill" href="<?php echo site_url('auth/login_siswa') ?>">LOGIN</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card o-hidden border border-white my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-md-12 border border-white">
                <div class="p-3">
                  <div class="text-center">
                  <h1 class="h3 font-weight-bold">FORM REGISTRASI SISWA BARU</h1>
                    <p class="mb-4">HARAP MASUKKAN DATA DIRI DENGAN BENAR!</p>
                  </div>
                  <hr class="mb-4">
                  <?php echo $this->session->flashdata('messageReg');?>
                  <form action="<?php base_url('students/registrasi') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <div class="col-md-6">
                          <label for="nisn">Nisn</label>
                          <input type="text" class="form-control <?= form_error('nisn') ? 'is-invalid':'' ?>" placeholder="" name="nisn" value="<?= set_value('nisn')?>">
                        </div>
                          <div class="invalid-feedback">
                            <?= form_error('nisn') ?>
                          </div>
                        
                          <div class="col-md-6">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control <?= form_error('nik') ? 'is-invalid':'' ?>" id="nik" placeholder="" name="nik" value="<?= set_value('nik')?>">
                          </div>
                          <div class="invalid-feedback">
                              <?= form_error('nik') ?>
                          </div>
  
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="nama_siswa">Nama Siswa</label>
                            <input type="text" class="form-control <?= form_error('nama_siswa') ? 'is-invalid':'' ?>" id="nama_siswa" placeholder="" name="nama_siswa" value="<?= set_value('nama_siswa')?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('nama_siswa') ?>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email Anda</label>
                            <input type="text" class="form-control <?= form_error('email') ? 'is-invalid':'' ?>" id="email" placeholder="" name="email" value="<?= set_value('email')?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('email') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="kota_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control  <?= form_error('kota_lahir') ? 'is-invalid':'' ?>" id="kota_lahir" placeholder="" name="kota_lahir" value="<?= set_value('kota_lahir')?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('kota_lahir') ?>
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" class="form-control datepicker <?= form_error('tanggal_lahir') ? 'is-invalid':'' ?>" id="tanggal_lahir" placeholder=""  name="tanggal_lahir" value="<?= set_value('tanggal_lahir')?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('tanggal_lahir') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input  <?= form_error('jenis_kelamin') ? 'is-invalid':'' ?>" type="radio" name="jenis_kelamin" id="lk" value="Laki-Laki" value="<?= set_value('jenis_kelamin')?>">
                                <label class="form-check-label" for="lk">
                                    Laki Laki
                                </label>
                            </div>
                            <div class="invalid-feedback">
                              <?= form_error('jenis_kelamin') ?>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input <?= form_error('jenis_kelamin') ? 'is-invalid':'' ?>" type="radio" name="jenis_kelamin" id="pr" value="Perempuan">
                                <label class="form-check-label" for="pr">
                                    Perempuan
                                </label>
                            </div>
                            <div class="invalid-feedback">
                              <?= form_error('jenis_kelamin') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="agama">Agama</label>
                            <select name="agama" id="agama" class="form-control <?= form_error('agama') ? 'is-invalid':'' ?>" value="<?= set_value('agama')?>">
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Budha</option>
                            </select>
                        </div>
                        <div class="invalid-feedback">
                          <?= form_error('agama') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" class="form-control  <?= form_error('asal_sekolah') ? 'is-invalid':'' ?>" id="asal_sekolah" placeholder="" name="asal_sekolah" value="<?= set_value('asal_sekolah')?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('asal_sekolah') ?>
                        </div>
                        <div class="col-md-6">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control <?= form_error('jurusan') ? 'is-invalid':'' ?>" value="<?= set_value('jurusan')?>">
                                <option value="">Pilih Jurusan</option>
                                <option value="IPA">IPA</option>
                                <option value="IPS">IPS</option>
                            </select>
                        </div>
                        <div class="invalid-feedback">
                          <?= form_error('jurusan') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control <?= form_error('alamat') ? 'is-invalid':'' ?>" value="<?= set_value('alamat')?>"></textarea>
                    </div>
                    <div class="invalid-feedback">
                      <?= form_error('alamat')?>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="no_handphone">NO HP</label>
                            <input name="no_handphone" type="text" class="form-control <?= form_error('no_handphone') ? 'is-invalid':'' ?>" id="no_handphone" placeholder="" value="<?= set_value('no_handphone')?>">
                        </div>
                        <div class="invalid-feedback">
                          <?= form_error('no_handphone') ?>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_wali">Nama Wali</label>
                            <input type="text" class="form-control  <?= form_error('nama_wali') ? 'is-invalid':'' ?>" id="nama_wali" placeholder="" name="nama_wali" value="<?= set_value('nama_wali')?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('nama_wali') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="nama_ayah" >Nama Ayah</label>
                            <input name="nama_ayah" type="text" class="form-control <?= form_error('nama_ayah') ? 'is-invalid':'' ?>" id="nama_ayah" placeholder="" value="<?= set_value('nama_ayah')?>">
                        </div>
                        <div class="invalid-feedback">
                          <?= form_error('nama_ayah') ?>
                        </div>
                        <div class="col-md-6">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input type="text" class="form-control  <?= form_error('nama_ibu') ? 'is-invalid':'' ?>" id="nama_ibu" placeholder="" name="nama_ibu" value="<?= set_value('nama_ibu')?>">
                        </div>
                        <div class="invalid-feedback">
                            <?= form_error('nama_ibu') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control <?= form_error('password') ? 'is-invalid':'' ?>" id="password" placeholder="" value="<?= set_value('password')?>">
                        </div>
                        <div class="invalid-feedback">
                          <?= form_error('password') ?>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="ulangi_password">Ulangi Password</label>
                            <input name="ulangi_password" type="password" class="form-control <?= form_error('ulangi_password') ? 'is-invalid':'' ?>" id="ulangi_password" placeholder="" value="<?= set_value('ulangi_password')?>">
                        </div>
                        <div class="invalid-feedback">
                          <?= form_error('ulangi_password') ?>
                        </div>
                    </div>

                    <button name="btn_registrasi" value="simpan" class="btn btn-info btn-user btn-block font-weight-bold">
                      REGISTRASI
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
  <footer>
      <div class="text-center py-4 bg-white">
        <div class="container">
          <span class="text-muted">Copyright @2023 NewStudentInformation</span>
        </div>
      </div>
    </footer>
  
  

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

  <!-- js datepicker -->
  <script src="<?= base_url() ?>assets/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>

  <script type="text/javascript">
    $(function(){
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: false,
        }).on('change.datepicker', function (ev) {
            console.log('tes');
        });
    });
  </script>
</body>



</html>
