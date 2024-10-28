<div id="content-wrapper">

    <div class="container-fluid">

			<div class="card shadow-sm mb-4">
				<div class="card-header bg-info">
					<h6 style="color:white;" class="mt-2 font-weight-bold">UPDATE DATA SISWA</h6>
				</div>

					<div class="card-body border border-info">
						<?php echo $this->session->flashdata('messageEdSt');?>
						<form action="<?php base_url('admin/siswa/edit_data') ?>" method="POST"  enctype="multipart/form-data">
							<div class="form-group row">
                            <div class="col-md-6">
								<label for="nisn">NISN</label>
								<input type="text" name="nisn" class="form-control <?= form_error('nisn') ? 'invalid' : '' ?>"
								value="<?= form_error('nisn') ? set_value('nisn') : $current_user2->nisn ?>" 
								required maxlength="32"/>
								<div class="invalid-feedback">
									<?= form_error('nisn') ?>
								</div>
                            </div>
							<div class="col-md-6">
								<label for="nik">NIK</label>
								<input type="text" name="nik" class="form-control <?= form_error('nik') ? 'invalid' : '' ?>"
								value="<?= form_error('nisn') ? set_value('nisn') : $current_user2->nik ?>" 
								required maxlength="32"/>
								<div class="invalid-feedback">
									<?= form_error('nik') ?>
								</div>
							</div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label for="jenis_kelamin">Jenis Kelamin (<?= htmlentities($current_user2->jenis_kelamin)?>)</label>
                                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control <?= form_error('jenis_kelamin') ? 'is-invalid':'' ?>" value="<?= set_value('jenis_kelamin')?>">
                                        <option value="">Pilih Agama</option>
                                        <option value="Laki-Laki" selected>Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                    <div class="invalid-feedback">
                                        <?= form_error('jurusan') ?>
                                    </div>
                                <div class="col">
                                    <label for="agama">Agama (<?= htmlentities($current_user2->agama)?>)</label>
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
                                <div class="col">
                                    <label for="jurusan">Jurusan (<?= htmlentities($current_user2->jurusan)?>)</label>
                                    <select name="jurusan" id="jurusan" class="form-control <?= form_error('jurusan') ? 'is-invalid':'' ?>" value="<?= set_value('jurusan')?>">
                                        <option value="">Pilih Jurusan</option>
                                        <option value="IPA" <?php echo set_select('jurusan', 'IPA');?>>IPA</option>
                                        <option value="IPS" <?php echo set_select('jurusan', 'IPS');?>>IPS</option>
                                    </select>
                                </div>
                                    <div class="invalid-feedback">
                                        <?= form_error('jurusan') ?>
                                    </div>
                            </div>
							<div>
								<button type="submit" name="save" class="btn btn-success float-right">Save Update</button>
                                
							</div>
						</form>
					</div>
			</div>
	</div>
	</div>
</div>
