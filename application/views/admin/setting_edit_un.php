<div id="content-wrapper">

    <div class="container-fluid">

			<div class="card shadow-sm mb-4">
				<div class="card-header bg-info">
					<h6 style="color:white;" class="mt-2 font-weight-bold">UPDATE PROFILE</h6>
				</div>

					<div class="card-body border border-info">
						<?php echo $this->session->flashdata('messagePr');?>
						<form action="<?php base_url('setting/edit_profile') ?>" method="POST"  enctype="multipart/form-data">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" class="form-control <?= form_error('name') ? 'invalid' : '' ?>"
								value="<?= form_error('name') ? set_value('name') : $current_user->name ?>" 
								required maxlength="32"/>
								<div class="invalid-feedback">
									<?= form_error('name') ?>
								</div>
							</div>
							<div class="form-group mb-4">
								<label for="email">Email</label>
								<input type="text" name="email" class="form-control <?= form_error('email') ? 'invalid' : '' ?>"
								value="<?= form_error('email') ? set_value('email') : $current_user->email ?>" 
								required maxlength="32"/>
								<div class="invalid-feedback">
									<?= form_error('email') ?>
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
