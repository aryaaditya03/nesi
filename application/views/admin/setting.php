<div id="content-wrapper">

    <div class="container-fluid">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb shadow-sm mb-4">
                    <li class="breadcrumb-item font-weight-bold" aria-current="page">/SETTING</li>
                </ol>
                
            </nav>
        </div>

			<div class="card shadow-sm mb-4">
				<div class="card-header">
					<b>Avatar</b>
				</div>
				<div class="card-body">
					<?php
					$avatar = $current_user->avatar ?
						base_url('upload/avatar/' . $current_user->avatar)
						: get_gravatar($current_user->email)
					?>
					<img src="<?= $avatar ?>" alt="<?= htmlentities($current_user->name, TRUE) ?>" height="80" width="80">
				</div>
			</div>
			<div class="card shadow-sm mb-4">
				<div class="card-header">
					<b>Profile Settings</b>
				</div>
				<div class="card-body">
					Name: <span class="text-gray"><?= html_escape($current_user->name) ?></span>
					<br>
					Email: <span class="text-gray"><?= html_escape($current_user->email) ?></span>
                    <a href="<?= site_url('admin/setting/edit_profile') ?>" class="btn btn-success float-right font-weight-bold" role="button" aria-pressed="true">EDIT DATA</a>
				</div>
			</div>
			<div class="card shadow-sm mb-4">
				<div class="card-header">
					<b>Security & Password</b>
				</div>
				<div class="card-body">
					Your Password: <span class="text-gray">******</span>
					<br>
					Last Changed: <span class="text-gray">22-08-2020</span>
					<a href="<?= site_url('admin/setting/changePassword') ?>" class="btn btn-success float-right font-weight-bold" role="button" aria-pressed="true">EDIT DATA</a>
				</div>
			</div>
    </div>
</div>
