<div id="content-wrapper">
    <div class="container-fluid">
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-info">
                <h6 style="color:white;" class="mt-2 font-weight-bold">DETAIL & APPROVAL DATA SISWA</h6>
            </div>
            <div class="card-body border border-info">
                <form action="<?php base_url('admin/siswa/approval') ?>" method="post" enctype="multipart/form-data">
                <div class="">
                <div class="col">
                    <p><b> NISN : </b><br><?= htmlentities($current_user2->nisn)?></p>
                </div>
                <div class="col">
                    <p><b> NIK : </b><br><?= htmlentities($current_user2->nik)?></p>
                </div>
                <div class="col">
                    <p><b> Nama : </b><br><?= htmlentities($current_user2->nama_siswa)?></p>
                </div>
                <div class="col">
                    <p><b> Asal Sekolah : </b><br><?= htmlentities($current_user2->asal_sekolah)?></p>
                </div>
                <div class="col">
                    <p><b> Jurusan : </b><br><?= htmlentities($current_user2->jurusan)?></p>
                </div>
                <div class="col">
                    <p><b> Tanggal Lahir : </b><br><?= htmlentities($current_user2->tanggal_lahir)?></p>
                </div>
                <div class="col">
                    <p><b> Kota Kelahiran : </b><br><?= htmlentities($current_user2->kota_lahir)?></p>
                </div>
                <div class="col">
                    <p><b> Nomor Handphone : </b><br><?= htmlentities($current_user2->no_handphone)?></p>
                </div>
                <div class="col">
                    <p><b> Alamat : </b><br><?= htmlentities($current_user2->alamat)?></p>
                </div>
                <div class="col">
                    <p><b> Jenis Kelamin : </b><br><?= htmlentities($current_user2->jenis_kelamin)?></p>
                </div>
                <div class="col">
                    <p><b> Agama : </b><br><?= htmlentities($current_user2->agama)?></p>
                </div>
                <div class="col">
                    <p><b> Nama Ibu : </b><br></b><?= htmlentities($current_user2->nama_ibu)?></p>
                </div>
                <div class="col">
                    <p><b> Nama Ayah : </b><br></b><?= htmlentities($current_user2->nama_ayah)?></p>
                </div>
                <div class="col">
                    <p><b> Nama Wali : </b><br></b><?= htmlentities($current_user2->nama_wali)?></p>
                </div>
                <div class="col">
                    <p><b> Status :  </b><br>
                    <?php 
                        if($current_user2->status == null)
                        {
                            ?>
                                <span class="badge badge-warning badge-small">PENDING</span>
                            <?php
                        }
                        else
                        {
                        echo $current_user2->status == 1 ? '<span class="badge badge-success">DITERIMA</span>' : '<span class="badge badge-danger">DITOLAK</span>';
                        }
                    ?>
                    </p>
                </div>
                <div class="row ml-3">
                <div class="mr-4">
                    <p><b> IJAZAH : </b><br><img src="<?php echo base_url(); ?>./img/uploads/ijazah/<?php echo $current_user2->ijazah; ?>" width="100" height="140"/></p>
                </div>
                <div class="mr-4">
                <p><b> NILAI : </b><br><img src="<?php echo base_url(); ?>./img/uploads/nilai/<?php echo $current_user2->nilai_siswa; ?>" width="100" height="140"/></p>
                </div>
                <div class="">
                <p><b> SKHUN : </b><br><img src="<?php echo base_url(); ?>./img/uploads/skhun/<?php echo $current_user2->skhun; ?>" width="100" height="140"/></p>
                </div>
                </div>
                <?php
                $i=1;
                ?>
                <div class="col">
                    <label><b>STATUS</b></label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status" value="1" required>
                        <label class="form-check-label mr-4" for="status">
                            DITERIMA
                        </label>
                        <input class="form-check-input" type="radio" name="status" id="status" value="2" required>
                        <label class="form-check-label" for="status">
                            DITOLAK
                        </label>
                    </div>
                </div>
                <?php
                $i++;
                ?>
                <hr class="mb-4">
                <div>
                <button name="btn_registrasi" type="submit" class="btn btn-primary float-right">
                    <span class="font-weight-bold">SUBMIT</span>
                </button>
                <a href="<?= site_url('') ?>" class="btn btn-secondary font-weight-bold mr-1 float-right">KEMBALI</a>
                </div>
</div>
</div>
</div>
</div>
</div>