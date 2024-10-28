
<div id="content-wrapper">

    <div class="container-fluid">

			<div class="card shadow-sm mb-4">
				<div class="card-header bg-info">
					<h6 style="color:white;" class="mt-2 font-weight-bold">UPDATE PASSWORD</h6>
				</div>

					<div class="card-body border border-info">
						<?php echo $this->session->flashdata('messagePw');?>
						<form action="<?php base_url('setting/edit_password') ?>" method="POST"  enctype="multipart/form-data">
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
								<button type="submit" name="save" class="btn btn-success float-right">Save Update</button>
							</div>
						</form>
					</div>
			</div>
	</div>
	</div>
</div>
