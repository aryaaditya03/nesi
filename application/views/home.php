<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PPDB ONLINE</title>
  
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />

    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>" />


  </head>
  <body>
    <header>
      <nav
        class="navbar navbar-expand-lg navbar-light bg-white pt-4 pb-4">
        <div class="container">
          <a class="navbar-brand font-weight-bold-800" href="#">/NEW STUDENT INFORMATION</a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link mr-3" href="#">INFORMASI</a>
              <a class="nav-item nav-link mr-3" href="<?php echo site_url('auth/login') ?>">ADMIN</a>
              <a class="nav-item nav-link mr-3 active" href="<?php echo site_url('auth/login_siswa') ?>">MASUK</a>
              <a class="btn btn-info rounded-pill" href="<?php echo site_url('students/registrasi/regis') ?>">DAFTAR</a>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <section>
      <div class="container pb-5 pt-4">
        <div class="row pb-5">
          <div class="col-md-6">
            <h5 class="text-main pt-4">#NESI</h5>
            <h3 class="text-main h1 mb-3 font-weight-bold">
              APLIKASI PPDB ONLINE <br />
              NEW STUDENT INFO
            </h3>

            <p class="text-main mb-5">
              Untuk calon pendaftar tahun ajaran 2023/2024 bisa mendaftar
              melalui website ini atau langsung datang ke tempat pendaftaran
            </p>

            <a href="<?php echo site_url('students/registrasi/regis') ?>" class="btn-reg btn btn-info btn-lg rounded-pill"
              >DAFTAR SEKARANG</a
            >
          </div>
          <div class="col-md-6 d-none d-sm-block">
            <img
              src="<?php echo base_url('img/undraw_new.svg') ?>"
              alt="image hero"
              class="img-reg img-fluid d-block mx-auto"
              style="max-height: 320px;"
            />
          </div>
        </div>
      </div>
    </section>

    <hr>

    <section class="tentang">
      <div class="container">
        <div class="row">
          <div class="tentang-nesi text-center">
            <img
              src="<?php echo base_url() ?>img/logo_home1.png"
              alt="tentang sekolah"
              class="img-fluid mx-auto d-block pr-2"
              style="max-height: 280px;"
            />
            <h3 class="font-weight-bold mb-3 mt-2 text-center">TENTANG NESI</h3>
            <p class="deskripsi text-center">
            New Student Information atau NESI adalah Aplikasi berbasis web php yang dibuat
            oleh kelompok 6. Aplikasi web ini berfungsi untuk siswa dan admin melakukan PPDB
            secara efektif dan efisien. Selain itu website ini juga user-friendly dan mudah digunakan.
            </p>
            <p class="font-weight-bold mt-4">Kontak Kami</p>
            <ul class="social">
              <li>
                <a href="tel:082302002407">
                  <img src="<?php echo base_url() ?>img/icons/telephone.svg" alt="telephone" />
                </a>
              </li>
              <li>
                <a href="mailto:est23.edi@gmail.com">
                  <img src="<?php echo base_url() ?>img/icons/email.svg" alt="email" />
                </a>
              </li>
              <li>
                <a href="https://facebook.com/est23.edi">
                  <img src="<?php echo base_url() ?>img/icons/facebook.svg" alt="facebook" />
                </a>
              </li>
              <li>
                <a href="https://smkndu.sch.id">
                  <img src="<?php echo base_url() ?>img/icons/internet.svg" alt="website" />
                </a>
              </li>
          </div>
        </div>
      </div>
    </section>

    <hr>

    <section class="alumni">
      <div class="container">
        <h3 class="text-center font-weight-bold mb-1">ABOUT US</h3>
        <p class="text-center mb-4 pb-3">
          "Team on behind of NESI"
        </p>
        <hr class="pb-4" style="color:#333;height:3px;">

        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <img src="<?php echo base_url() ?>img/undraw_3.svg" alt="foto" />

                <q class="text-center">
                  No Matter
                </q>

                <p class="font-weight-bold text-center mb-0">
                  Arya Nur Aditya
                </p>
                <span class="text-muted">Web Developer, Traviora</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 pb-4">
            <div class="card">
              <div class="card-body">
                <img src="<?php echo base_url() ?>img/avatar.jpg" alt="foto" />

                <q class="text-center">
                  Yaudah Iya.
                </q>

                <p class="font-weight-bold text-center mb-0">
                  Aliif Musyaffa Zahraan
                </p>
                <span class="text-muted">Web Developer, Traviora</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 pl-4">
            <div class="card">
              <div class="card-body">
                <img src="<?php echo base_url() ?>img/avatar.jpg" alt="foto" />

                <q class="text-center">
                  O Aja.
                </q>

                <p class="font-weight-bold text-center mb-0">
                  Daniel Lasroha Siahaan
                </p>
                <span class="text-muted">Web Developer, Traviora</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <img src="<?php echo base_url() ?>img/avatar.jpg" alt="foto" />

                <q class="text-center">
                  Ok, Tq.
                </q>

                <p class="font-weight-bold text-center mb-0">
                  Muamar Fahrur Rahman
                </p>
                <span class="text-muted">Web Developer, Traviora</span>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <img src="<?php echo base_url() ?>img/avatar.jpg" alt="foto" />

                <q class="text-center">
                  Anjay
                </q>

                <p class="font-weight-bold text-center mb-0">
                  Fadhil Naufal Muhammad
                </p>
                <span class="text-muted">Web Developer, Traviora</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="text-center py-3 bg-light">
        <div class="container">
          <span class="text-muted">Copyright @2023 NewStudentInformation</span>
        </div>
      </div>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="<?php echo base_url() ?>js/scrollreveal.js"></script>

  </body>
</html>
