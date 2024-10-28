<div id="content-wrapper">

    <div class="container-fluid">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-4 shadow-sm">
                    <li class="breadcrumb-item font-weight-bold active" aria-current="page">/DATA ADMIN</li>
                </ol>
            </nav>
        </div>  
                       
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                        <h3 class="font-weight-bold">DATA DIRI ADMIN</h3>
                        <hr>
                            <div class="table-responsive-sm">
                                <table class="table table-bordered table-sm table-striped" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Lengkap</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Username</th>
                                            <th class="text-center">Created</th>
                                            <th class="text-center">Login</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no=1;
                                        ?>
                                        <?php foreach ($user as $product): ?>
                                        <tr>
                                            <td width="" class="text-center"><?php echo $no++ ?></td>
                                            <td width="" class="text-center">
                                                <?php echo $product->name ?>
                                            </td>
                                            <td width="" class="text-center">
                                                <?php echo $product->email ?>
                                            </td>
                                            <td width="" class="text-center">
                                                <?php echo $product->username ?>
                                            </td>
                                            <td width="" class="text-center">
                                                <?php echo $product->created_at ?>
                                            </td>
                                            <td width="" class="text-center">
                                                <?php echo $product->last_login ?>
                                            </td>
                                            <td width="50">
											    <a onclick="deleteConfirm('<?php echo site_url('admin/user/delete/'.$product->id_user) ?>')"
											href="#!" class="btn btn-small btn-danger text-center font-weight-bold"><i class="fas fa-trash"></i></a>
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

</div>




