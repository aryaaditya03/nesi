<div id="content-wrapper">

    <div class="container-fluid">

			<div class="card shadow-sm mb-4">
					<div class="card-body">
                        <h2 class="mb-1 font-weight-bold">GANTI PASSWORD</h2>
                        <hr class="mb-4">
						<?php echo $this->session->flashdata('messageNP');?>
						<form action="<?php base_url('students/changepass/changepassword') ?>" method="POST"  enctype="multipart/form-data">
                            <div class="form-group row">
							<div class="col-md-6">
                                <label for="current_password">Password Saat Ini</label>
					            <input type="password" name="current_password" class="form-control <?= form_error('current_password') ? 'invalid' : '' ?>"
                                value="<?= set_value("current_password") ?>" required/>
                                <div class="invalid-feedback">
                                <?= form_error('current_password') ?>
                                </div>
							</div>
				            <div class="col-md-6">
                                <label for="password_confirm1">Konfirmasi Password Saat Ini</label>
                                <input type="password" name="password_confirm" class="form-control <?= form_error('password_confirm1') ? 'invalid' : '' ?>"
                                value="<?= set_value("password_confirm1") ?>" required/>
                                <div class="invalid-feedback">
                                    <?= form_error('password_confirm1') ?>
                                </div>
							</div>
							</div>
							<div class="form-group row">
							<div class="col-md-6">
                                <label for="password">Password Baru</label>
					            <input type="password" name="password" class="form-control <?= form_error('password') ? 'invalid' : '' ?>"
                                value="<?= set_value("password") ?>" required/>
                                <div class="invalid-feedback">
                                <?= form_error('password') ?>
                                </div>
							</div>
				            <div class="col-md-6 mb-3">
                                <label for="password_confirm">Konfirmasi Password Baru</label>
                                <input type="password" name="password_confirm" class="form-control <?= form_error('password_confirm') ? 'invalid' : '' ?>"
                                value="<?= set_value("password_confirm") ?>" required/>
                                <div class="invalid-feedback">
                                    <?= form_error('password_confirm') ?>
                                </div>
							</div>
							</div>
							<div>
								<button type="submit" name="save" class="btn btn-block btn-success font-weight-bold">GANTI PASSWORD</button>
							</div>
						</form>
					</div>
			</div>
	</div>
	</div>
</div>