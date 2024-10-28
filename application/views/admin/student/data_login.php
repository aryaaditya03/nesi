                            <!-- DataTales Example -->
                            <div class="card shadow-sm mb-4">
                                <div class="card-body">
                                    <h3 class="font-weight-bold">DATA AKUN SISWA</h3>
                                    <hr>
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">NISN</th>
                                                    <th class="text-center">Nama</th>
                                                    <th class="text-center">Email</th>
                                                    <th class="text-center">No Telp</th>
                                                    <th class="text-center">Terakhir Login</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $no=1;
                                                ?>
                                                <?php foreach ($siswa as $product): ?>
                                                <tr>
                                                    <td class="text-center pt-4"><?php echo $no++ ?></td>
                                                    <td height="50" class="text-center pt-4">
                                                        <?php echo $product->nisn ?>
                                                    </td>
                                                    <td height="50" class="text-center pt-4">
                                                        <?php echo $product->nama_siswa ?>
                                                    </td>
                                                    <td height="50" class="text-center pt-4">
                                                        <?php echo $product->email ?>
                                                    </td>
                                                    <td height="50" class="text-center pt-4">
                                                        <?php echo $product->no_handphone ?>
                                                    </td>
                                                    <td height="50" class="text-center pt-4">
                                                        <?php echo $product->last_login ?>
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
