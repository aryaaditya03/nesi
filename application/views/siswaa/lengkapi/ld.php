<div id="content-wrapper">

<div class="container-fluid">
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <div class="d-sm-flex justify-content-between align-items-center">
                    <h2 class="mb-3 font-weight-bold">EDIT DATA</h2>
                </div>
                <div class="market-status-table mt-2">
                    <div class="table-responsive" style="overflow-x:hidden;">
                        <?php echo $this->session->flashdata('messageEditLd');?>
                        <form action="<?php base_url('students/lengkapi/edit_data') ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input type="text" name="nisn" class="form-control <?= form_error('nisn') ? 'invalid' : '' ?>"
                                value="<?= form_error('nisn') ? set_value('nisn') : $current_user->nisn ?>" 
                                required maxlength="32" disabled/>
                                <div class="invalid-feedback">
                                    <?= form_error('nisn') ?>
                                </div>
                            </div>
                            </div>
                            <div class="col">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" name="nik" class="form-control <?= form_error('nik') ? 'invalid' : '' ?>"
                                value="<?= form_error('nik') ? set_value('nik') : $current_user->nik ?>" 
                                required maxlength="32" disabled/>
                                <div class="invalid-feedback">
                                    <?= form_error('nik') ?>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <div class="form-group">
                                <label for="nama_siswa">Nama</label>
                                <input type="text" name="nama_siswa" class="form-control <?= form_error('nama_siswa') ? 'invalid' : '' ?>"
                                value="<?= form_error('nama_siswa') ? set_value('nama_siswa') : $current_user->nama_siswa ?>" 
                                required maxlength="32"/>
                                <div class="invalid-feedback">
                                    <?= form_error('nama_siswa') ?>
                                </div>
                            </div>
                            </div>
                            <div class="col">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control <?= form_error('email') ? 'invalid' : '' ?>"
                                value="<?= form_error('email') ? set_value('email') : $current_user->email ?>" 
                                required maxlength="32"/>
                                <div class="invalid-feedback">
                                    <?= form_error('email') ?>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <div class="form-group">
                                <label for="kota_lahir">Kota Lahir</label>
                                <input type="text" name="kota_lahir" class="form-control <?= form_error('kota_lahir') ? 'invalid' : '' ?>"
                                value="<?= form_error('kota_lahir') ? set_value('kota_lahir') : $current_user->kota_lahir ?>" 
                                required maxlength="32"/>
                                <div class="invalid-feedback">
                                    <?= form_error('kota_lahir') ?>
                                </div>
                            </div>
                            </div>
                            <div class="col">
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="text" class="form-control datepicker <?= form_error('tanggal_lahir') ? 'invalid':'' ?>" id="tanggal_lahir" placeholder=" Tanggal Lahir"  name="tanggal_lahir" value="<?= form_error('kota_lahir') ? set_value('kota_lahir') : $current_user->tanggal_lahir ?>">
                                <div class="invalid-feedback">
                                    <?= form_error('tanggal_lahir') ?>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" class="form-control <?= form_error('jenis_kelamin') ? 'invalid' : '' ?>"
                                value="<?= form_error('jenis_kelamin') ? set_value('jenis_kelamin') : $current_user->jenis_kelamin ?>" placeholder="Jenis Kelamin" disabled/>
                                <div class="invalid-feedback">
                                    <?= form_error('jenis_kelamin') ?>
                                </div>
                            </div>
                            </div>
                            <div class="col">
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <input type="text" name="agama" class="form-control <?= form_error('agama') ? 'invalid' : '' ?>"
                                value="<?= form_error('agama') ? set_value('agama') : $current_user->agama ?>" placeholder="Agama" disabled/>
                                <div class="invalid-feedback">
                                    <?= form_error('agama') ?>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <div class="form-group">
                                <label for="asal_sekolah">Sekolah Asal</label>
                                <input type="text" name="asal_sekolah" class="form-control <?= form_error('asal_sekolah') ? 'invalid' : '' ?>"
                                value="<?= form_error('asal_sekolah') ? set_value('asal_sekolah') : $current_user->asal_sekolah ?>" placeholder="Asal Sekolah"/>
                                <div class="invalid-feedback">
                                    <?= form_error('asal_sekolah') ?>
                                </div>
                            </div>
                            </div>
                            <div class="col">
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control <?= form_error('jurusan') ? 'invalid' : '' ?>"
                                value="<?= form_error('jurusan') ? set_value('jurusan') : $current_user->jurusan ?>" placeholder="jurusan" disabled/>
                                <div class="invalid-feedback">
                                    <?= form_error('jurusan') ?>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <div class="form-group">
                                <label for="no_handphone">No HP</label>
                                <input type="tel" name="no_handphone" class="form-control <?= form_error('no_handphone') ? 'invalid' : '' ?>"
                                value="<?= form_error('no_handphone') ? set_value('no_handphone') : $current_user->no_handphone ?>" placeholder="No Telp"/>
                                <div class="invalid-feedback">
                                    <?= form_error('no_handphone') ?>
                                </div>
                            </div>
                            </div>
                            <div class="col">
                            <div class="form-group">
                                <label for="nama_ibu">Nama Ibu</label>
                                <input type="text" name="nama_ibu" class="form-control <?= form_error('nama_ibu') ? 'invalid' : '' ?>"
                                value="<?= form_error('nama_ibu') ? set_value('nama_ibu') : $current_user->nama_ibu ?>" placeholder="Nama Ibu"/>
                                <div class="invalid-feedback">
                                    <?= form_error('nama_ibu') ?>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <div class="form-group">
                            <label for="nama_ayah">Nama Ayah</label>
                                <input type="text" name="nama_ayah" class="form-control <?= form_error('nama_ayah') ? 'invalid' : '' ?>"
                                value="<?= form_error('nama_ayah') ? set_value('nama_ayah') : $current_user->nama_ayah ?>" placeholder="Nama Ayah"/>
                                <div class="invalid-feedback">
                                    <?= form_error('nama_ayah') ?>
                                </div>
                            </div>
                            </div>
                            <div class="col">
                            <div class="form-group">
                            <label for="nama_wali">Nama Wali</label>
                                <input type="text" name="nama_wali" class="form-control <?= form_error('nama_wali') ? 'invalid' : '' ?>"
                                value="<?= form_error('nama_wali') ? set_value('nama_wali') : $current_user->nama_wali ?>" placeholder="Nama Wali"/>
                                <div class="invalid-feedback">
                                    <?= form_error('nama_wali') ?>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control <?= form_error('alamat') ? 'invalid':'' ?>" value="<?= form_error('alamat') ? set_value('alamat') : $current_user->alamat ?>" placeholder="Wajib Di isi...." required></textarea>
                            </div>
                            <div class="invalid-feedback">
                                <?= form_error('alamat')?>
                            </div>
                            </div>
                        </div>

                        <div>
                            <button type="submit" name="save" class="btn btn-success float-right">Save Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>



