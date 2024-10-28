<div id="content-wrapper">

    <div class="container-fluid">

			<div class="card shadow-sm mb-4">
				<div class="card-header bg-info">
					<h6 style="color:white;" class="mt-2 font-weight-bold">EDIT DATA GURU</h6>
				</div>

					<div class="card-body border border-info">

                        <form action="" method="post"
                            enctype="multipart/form-data" >

                            <input type="hidden" name="id" value="<?php echo $student->id_guru?>" />
						<?php echo $this->session->flashdata('messageEditGuru');?>
						<form action="<?php base_url('admin/guru/edit') ?>" method="POST"  enctype="multipart/form-data">
							<div class="form-group row">
                            <div class="col-md-6">
								<label for="kode_guru">Kode Guru</label>
								<input type="text" name="kode_guru" class="form-control <?= form_error('kode_guru') ? 'invalid' : '' ?>"
								value="<?= form_error('kode_guru') ? set_value('kode_guru') : $current_user2->kode_guru ?>" 
								/>
								<div class="invalid-feedback">
									<?= form_error('kode_guru') ?>
								</div>
                            </div>
							<div class="col-md-6">
								<label for="nama_guru">Nama Guru</label>
								<input type="text" name="nama_guru" class="form-control <?= form_error('nama_guru') ? 'invalid' : '' ?>"
								value="<?= form_error('nama_guru') ? set_value('nama_guru') : $current_user2->nama_guru ?>" 
								/>
								<div class="invalid-feedback">
									<?= form_error('nama_guru') ?>
								</div>
							</div>
                            </div>
                            <div class="form-group row mb-4">
                            <div class="col">
								<label for="mapel">Mapel</label>
								<input type="text" name="mapel" class="form-control <?= form_error('mapel') ? 'invalid' : '' ?>"
								value="<?= form_error('mapel') ? set_value('mapel') : $current_user2->mapel ?>" 
								/>
								<div class="invalid-feedback">
									<?= form_error('mapel') ?>
								</div>
                            </div>
							<div class="col">
								<label for="email">Email Guru</label>
								<input type="text" name="email" class="form-control <?= form_error('email') ? 'invalid' : '' ?>"
								value="<?= form_error('email') ? set_value('email') : $current_user2->email ?>" 
								/>
								<div class="invalid-feedback">
									<?= form_error('email') ?>
								</div>
							</div>
                            <div class="col">
								<label for="no_telp">No Telp Guru</label>
								<input type="tel" name="no_telp" class="form-control <?= form_error('no_telp') ? 'invalid' : '' ?>"
								value="<?= form_error('no_telp') ? set_value('no_telp') : $current_user2->no_telp ?>" 
								/>
								<div class="invalid-feedback">
									<?= form_error('no_telp') ?>
								</div>
							</div>
                            </div>
                            <div>
								<button type="submit" kode_guru="save" class="btn btn-primary btn-block float-right">Submit</button>
							</div>
                            </div>
						</form>
					</div>
			</div>
	
	</div>
</div>
