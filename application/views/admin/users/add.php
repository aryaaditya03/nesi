
		<div id="content-wrapper">

			<div class="container-fluid">

				<div class="card shadow-sm mb-3">
					<div class="card-header bg-success">
						<h6 class="mt-2 font-weight-bold text-white">FORM TAMBAH DATA ADMIN</h6>
					</div>
					
					<div class="card-body border border-success">			
						<?php echo $this->session->flashdata('messageUs');?>
						<form action="<?php base_url('admin/user/add') ?>" method="post" enctype="multipart/form-data" >
                        	<div class="form-group row">
								<div class="col-md-6">
									<label for="name">Nama User</label>
									<input class="form-control <?= form_error('name') ? 'invalid':'' ?>"
									type="text" name="name" min="0" placeholder="Nama Lengkap" value="<?= set_value("name") ?>"/>
									<div class="invalid-feedback">
										<?= form_error('name') ?>
									</div>
								</div>
							

								<div class="col-md-6">
									<label for="email">Email</label>
									<input class="form-control <?= form_error('email') ? 'is-invalid':'' ?>"
									type="text" name="email" min="0" placeholder="Email" value="<?= set_value("email") ?>"/>
									<div class="invalid-feedback">
										<?= form_error('email') ?>
									</div>
								</div>
							</div>

						<div class="form-group row mb-5">
							<div class="col-md-6">
								<label for="username">Username</label>
								<input class="form-control <?= form_error('username') ? 'is-invalid':'' ?>"
								 type="text" name="username" min="0" placeholder="Username" />
								<div class="invalid-feedback">
									<?= form_error('username') ?>
								</div>
							</div>
							
							<div class="col-md-6">
								<label for="password">Password</label>
								<input class="form-control <?= form_error('password') ? 'is-invalid':'' ?>"
									type="password" name="password" min="0" placeholder="Password" />
								<div class="invalid-feedback">
									<?= form_error('password') ?>
								</div>
							</div>
						</div>
							<div>
								<button name="btn_registrasi" value="simpan" class="btn btn-primary btn-block">
									SUBMIT
								</button>
							</div>
						</form>

					</div>

				</div>
            </div>
	</div>
</div>



