
<!-- Main Content -->

    <div class="container-fluid">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb shadow-sm mb-4">
                        <li class="breadcrumb-item font-weight-bold" aria-current="page">HI! WELCOME! <span class="text-info text-uppercase"><?= htmlentities($current_user->name)?></span></li>
                    </ol>
                </nav>
            </div>

        <div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card shadow-sm border-left-primary py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            TOTAL SISWA MENDAFTAR</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_siswa; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card shadow-sm border-left-info py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            CALON SISWA JURUSAN IPA</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_ipa; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-alt fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card shadow-sm border-left-primary  py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            CALON SISWA JURUSAN IPS</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_ips; ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card shadow-sm border-left-info py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>

                        <div class="card shadow-sm mb-4">
                            <div class="card-body">
                                <h3 class="">DATA VERIFIKASI SISWA</h3>
                                <hr>
                                <div class="table-responsive-lg">
                                        <table class="table table-bordered table-striped table-lg" id="dataTable" width="100%" cellspacing="0">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th class="text-center">NISN</th>
                                                    <th class="text-center">NAMA</th>
                                                    <th class="text-center">STATUS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($siswa as $product): ?>
                                                <tr>
                                                    <td height="50" class="text-center pt-4">
                                                        <?php echo $product->nisn ?>
                                                    </td>
                                                    <td height="50" class="text-center pt-4">
                                                        <?php echo $product->nama_siswa ?>
                                                    </td>
                                                    <td height="50" class="text-center pt-4">
                                                    <?php 
                                                        if($product->status == null)
                                                        {
                                                            ?>
                                                                <span class="badge badge-warning badge-small">PENDING</span>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                        echo $product->status == 1 ? '<span class="badge badge-success">DITERIMA</span>' : '<span class="badge badge-danger">DITOLAK</span>';
                                                        }
                                                    ?>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                    
        </div>
    </div>
</div>

<script>
	function addConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#addModal').modal();
	}
</script>



