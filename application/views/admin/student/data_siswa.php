                            <!-- DataTales Example -->
                            <?php echo $this->session->flashdata('messageDetail');?>
                            <div class="card shadow-sm mb-4">
                                <div class="card-body">
                                    <h3 class="font-weight-bold">DATA PRIBADI SISWA</h3>
                                    <hr>
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th width="40" class="text-center">No</th>
                                                    <th class="text-center">NISN</th>
                                                    <th class="text-center">Nama</th>
                                                    <th class="text-center">TL</th>
                                                    <th width="" class="text-center">Agama</th>
                                                    <th width="" class="text-center">Kota Lahir</th>
                                                    <th class="text-center">Alamat</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $no=1;
                                                ?>
                                                <?php foreach ($siswa as $product): ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $no++ ?></td>
                                                    <td width="" height="50" class="text-center">
                                                        <?php echo $product->nisn ?>
                                                    </td>
                                                    <td width="" height="50" class="text-center">
                                                        <?php echo $product->nama_siswa ?>
                                                    </td>
                                                    <td width="" class="text-center">
                                                        <?php echo $product->tanggal_lahir ?>
                                                    </td>
                                                    <td width="" class="text-center">
                                                        <?php echo $product->agama ?>
                                                    </td>
                                                    <td width="" class="text-center">
                                                        <?php echo $product->kota_lahir ?>
                                                    </td>
                                                    <td width="" class="text-center">
                                                        <?php echo $product->alamat ?>
                                                    </td>
                                                    <td width="140">
                                                    <a href="<?php echo site_url('admin/siswa/edit_data/'.$product->id_siswa) ?>"
											            class="btn btn-small btn-info font-weight-bold"><i class="fas fa-edit"></i></a>
                                                    <a href="<?php echo site_url('admin/siswa/approval/'.$product->id_siswa) ?>"
											            class="btn btn-small btn-primary font-weight-bold"><i class="fas fa-eye"></i></a>
                                                    <a onclick="deleteConfirm('<?php echo site_url('admin/siswa/delete/'.$product->id_siswa) ?>')"
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





