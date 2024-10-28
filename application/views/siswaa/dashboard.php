
<!-- Main Content -->
<div id="content-wrapper">
    <div class="container-fluid">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item font-weight-bold" aria-current="page">HI NEW STUDENT! <span class="text-info text-uppercase"><?= htmlentities($current_user->nama_siswa)?></span></li>
                    </ol>
                </nav>
            </div>
            <?php echo $this->session->flashdata('messageEmail');?>
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <div class="mb-2">
                            <h3 class="font-weight-bold">PENGUMUMAN</h3>
                            <hr>
                            <span class="text-muted">HARAP PERHATIKAN INFORMASI DIBAWAH!</span>
                        </div>
                        <div class="">
                        <p><b>STATUS VERIFIKASI ANDA : </b>
                        <?php 
                            if($current_user->status == null)
                            {
                                ?>
                                    <span class="badge badge-warning">PENDING</span>
                                <?php
                            }
                            else
                            {
                            echo $current_user->status == 1 ? '<span class="badge badge-success">SELAMAT ANDA DITERIMA!</span>' : '<span class="badge badge-danger">MAAF ANDA DITOLAK! JANGAN PUTUS SEMANGAT!</span>';
                            }
                        ?>
                        </p>
                        </div>
                        <div class="">
                        <p><b>SILAHKAN KLIK TOMBOL UNTUK MENGIRIM EMAIL BERISI LINK UJIAN</b>&nbsp;
                        <a href="<?= site_url('students/dashboard/sendEmail') ?>" class="btn btn-primary font-weight-bold">TEST UJIAN</a>
                        </p>
                        </div>
                    </div>
                </div>
</div>
</div>
</div>
    









