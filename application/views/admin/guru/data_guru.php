<div id="content-wrapper">

    <div class="container-fluid">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-4 shadow-sm">
                    <li class="breadcrumb-item font-weight-bold" aria-current="page">/DATA GURU</li>
                </ol>
            </nav>
        </div>
                            <?php echo $this->session->flashdata('messageHpsGuru');?>
                            <div class="card shadow-sm mb-4">
                                <div class="card-body">
                                    <h3 class="font-weight-bold">DATA DIRI GURU</h3>
                                    <hr>
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th width="" class="text-center">No</th>
                                                    <th class="text-center">Kode Guru</th>
                                                    <th class="text-center">Nama guru</th>
                                                    <th width="" class="text-center">Mapel</th>
                                                    <th width="" class="text-center">Email</th>
                                                    <th width="" class="text-center">No. Telp</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $no=1;
                                                ?>
                                                <?php foreach ($guru as $product): ?>
                                                <tr>
                                                    <td class="text-center pt-4"><?php echo $no++ ?></td>
                                                    <td height="50" class="text-center pt-4">
                                                        <?php echo $product->kode_guru ?>
                                                    </td>
                                                    <td class="text-center pt-4">
                                                        <?php echo $product->nama_guru ?>
                                                    </td>
                                                    <td class="text-center pt-4">
                                                        <?php echo $product->mapel ?>
                                                    </td>
                                                    <td class="text-center pt-4">
                                                        <?php echo $product->email ?>
                                                    </td>
                                                    <td class="text-center pt-4">
                                                        <?php echo $product->no_telp ?>
                                                    </td>
                                                    <td width="100">
                                                    <a href="<?php echo site_url('admin/guru/edit/'.$product->id_guru) ?>"
											            class="btn btn-small text-info font-weight-bold"><i class="fas fa-edit"></i> EDIT</a>
                                                        <a onclick="deleteConfirm('<?php echo site_url('admin/guru/delete/'.$product->id_guru) ?>')"
                                                    href="#!" class="btn btn-small text-danger text-center font-weight-bold"><i class="fas fa-trash"></i> HAPUS</a>
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





