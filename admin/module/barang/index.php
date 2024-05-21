         <h4>Data Barang Cabang</h4>
        <br />
        <?php if(isset($_GET['success-stok'])){?>
        <div class="alert alert-success">
            <p>Tambah Stok Berhasil !</p>
        </div>
        <?php }?>
        <?php if(isset($_GET['success'])){?>
        <div class="alert alert-success">
            <p>Tambah Data Berhasil !</p>
        </div>
        <?php }?>
        <?php if(isset($_GET['remove'])){?>
        <div class="alert alert-danger">
            <p>Hapus Data Berhasil !</p>
        </div>
        <?php }?>

        <?php 
			$sql=" select * from barang where stok <= 3";
			$row = $config -> prepare($sql);
			$row -> execute();
			$r = $row -> rowCount();
			if($r > 0){
				echo "
				<div class='alert alert-warning'>
					<span class='glyphicon glyphicon-info-sign'></span> Ada <span style='color:red'>$r</span> barang yang Stok tersisa sudah kurang dari 3 items. silahkan pesan lagi !!
					<span class='pull-right'><a href='index.php?page=barang&stok=yes'>Cek Barang <i class='fa fa-angle-double-right'></i></a></span>
				</div>
				";	
			}
		?>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-primary btn-md mr-2" data-toggle="modal" data-target="#myModal">
            <i class="fa fa-plus"></i> Insert Data</button>
        <a href="index.php?page=barang&stok=yes" class="btn btn-warning btn-md mr-2">
            <i class="fa fa-list"></i> Sortir Stok Kurang</a>
        <a href="index.php?page=barang" class="btn btn-success btn-md">
            <i class="fa fa-refresh"></i> Refresh Data</a>
        <div class="clearfix"></div>
        <br />
        <!-- view barang -->
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm" id="example1">
                    <thead>
                        <tr style="background:#DFF0D8;color:#333;">
                            <th>No.</th>
                            <th>ID_Cabang</th>
                            <th>Regional</th>
                            <th>Cabang</th>
                            <th>PIC</th>
                            <th>Alamat_Email</th>
                            <th>Departement</th>
                            <th>PaperBag<br>Kecil</th>
                            <th>PaperBag<br>Sedang</th>
                            <th>PaperBag<br>Besar</th>
                            <th>Notes</th>
                            <th>Pulpen</th>
                            <th>Stiker_kepala<br>Joni</th>
                            <th>Gantungan_kunci</th>
                            <th>Agenda_Joni</th>
                            <th>Tumbler</th>
                            <th>Stok</th>
                            <th>HFarga Beli</th>
                            <th>Harga Jual</th>
                            <th>Satuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
						$totalBeli = 0;
						$totalJual = 0;
						$totalStok = 0;
						if($_GET['stok'] == 'yes')
						{
							$hasil = $lihat -> barang_stok();

						}else{
							$hasil = $lihat -> barang();
						}
						$no=1;
						foreach($hasil as $isi) {
					?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $isi['id_barang'];?></td>
                            <td><?php echo $isi['nama_regional'];?></td>
                            <td><?php echo $isi['nama_kategori'];?></td>
                            <td><?php echo $isi['pic'];?></td>
                            <td><?php echo $isi['email'];?></td>
                            <td><?php echo $isi['dept'];?></td>
                            <td>
                                <?php if($isi['stok1'] == '0'){?>
                                <button class="btn btn-danger"> Habis</button>
                                <?php }else{?>
                                <?php echo $isi['stok1'];?>
                                <?php }?>
                            </td>
                            <td>
                                <?php if($isi['stok2'] == '0'){?>
                                <button class="btn btn-danger"> Habis</button>
                                <?php }else{?>
                                <?php echo $isi['stok2'];?>
                                <?php }?>
                            </td>
                            <td>
                                <?php if($isi['stok3'] == '0'){?>
                                <button class="btn btn-danger"> Habis</button>
                                <?php }else{?>
                                <?php echo $isi['stok3'];?>
                                <?php }?>
                            </td>
                            <td>
                                <?php if($isi['stok4'] == '0'){?>
                                <button class="btn btn-danger"> Habis</button>
                                <?php }else{?>
                                <?php echo $isi['stok4'];?>
                                <?php }?>
                            </td>
                            <td>
                                <?php if($isi['stok5'] == '0'){?>
                                <button class="btn btn-danger"> Habis</button>
                                <?php }else{?>
                                <?php echo $isi['stok5'];?>
                                <?php }?>
                            </td>
                            <td>
                                <?php if($isi['stok6'] == '0'){?>
                                <button class="btn btn-danger"> Habis</button>
                                <?php }else{?>
                                <?php echo $isi['stok6'];?>
                                <?php }?>
                            </td>
                            <td>
                                <?php if($isi['stok7'] == '0'){?>
                                <button class="btn btn-danger"> Habis</button>
                                <?php }else{?>
                                <?php echo $isi['stok7'];?>
                                <?php }?>
                            </td>
                            <td>
                                <?php if($isi['stok8'] == '0'){?>
                                <button class="btn btn-danger"> Habis</button>
                                <?php }else{?>
                                <?php echo $isi['stok8'];?>
                                <?php }?>
                            </td>
                            <td>
                                <?php if($isi['stok9'] == '0'){?>
                                <button class="btn btn-danger"> Habis</button>
                                <?php }else{?>
                                <?php echo $isi['stok9'];?>
                                <?php }?>
                            </td>
                            <td>
                                <?php if($isi['stok'] == '0'){?>
                                <button class="btn btn-danger"> Habis</button>
                                <?php }else{?>
                                <?php echo $isi['stok'];?>
                                <?php }?>
                            </td>
                            <td>Rp.<?php echo number_format($isi['harga_beli']);?>,-</td>
                            <td>Rp.<?php echo number_format($isi['harga_jual']);?>,-</td>
                            <td> <?php echo $isi['satuan_barang'];?></td>
                            <td>
                                <?php if($isi['stok'] <=  '3'){?>
                                <form method="POST" action="fungsi/edit/edit.php?stok=edit">
                                    <input type="text" name="restok" class="form-control">
                                    <input type="hidden" name="id" value="<?php echo $isi['id_barang'];?>"
                                        class="form-control">
                                    <button class="btn btn-primary btn-sm">
                                        Restok
                                    </button>
                                    <a href="fungsi/hapus/hapus.php?barang=hapus&id=<?php echo $isi['id_barang'];?>"
                                        onclick="javascript:return confirm('Hapus Data barang ?');">
                                        <button class="btn btn-danger btn-sm">Hapus</button></a>
                                </form>
                                <?php }else{?>
                                <a href="index.php?page=barang/details&barang=<?php echo $isi['id_barang'];?>"><button
                                        class="btn btn-primary btn-xs">Details</button></a>

                                <a href="index.php?page=barang/edit&barang=<?php echo $isi['id_barang'];?>"><button
                                        class="btn btn-warning btn-xs">Edit</button></a>
                                <a href="fungsi/hapus/hapus.php?barang=hapus&id=<?php echo $isi['id_barang'];?>"
                                    onclick="javascript:return confirm('Hapus Data barang ?');"><button
                                        class="btn btn-danger btn-xs">Hapus</button></a>
                                <?php }?>
                        </tr>
                        <?php 
							$no++; 
							$totalBeli += $isi['harga_beli'] * $isi['stok']; 
							$totalJual += $isi['harga_jual'] * $isi['stok'];
							$totalStok += $isi['stok'];
						}
					?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="7">Total </td>
                            <th><?php echo $totalStok;?></td>
                            <th><?php echo $totalStok;?></td>
                            <th><?php echo $totalStok;?></td>
                            <th><?php echo $totalStok;?></td>
                            <th><?php echo $totalStok;?></td>
                            <th><?php echo $totalStok;?></td>
                            <th><?php echo $totalStok;?></td>
                            <th><?php echo $totalStok;?></td>
                            <th><?php echo $totalStok;?></td>
                            <th><?php echo $totalStok;?></td>
                            <th>Rp.<?php echo number_format($totalBeli);?>,-</td>
                            <th>Rp.<?php echo number_format($totalJual);?>,-</td>
                            <th colspan="2" style="background:#ddd"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- end view barang -->
        <!-- tambah barang MODALS-->
        <!-- Modal -->

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content" style=" border-radius:0px;">
                    <div class="modal-header" style="background:#285c64;color:#fff;">
                        <h5 class="modal-title"><i class="fa fa-plus"></i> Tambah Barang</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="fungsi/tambah/tambah.php?barang=tambah" method="POST">
                        <div class="modal-body">
                            <table class="table table-striped bordered">
                                <?php
									$format = $lihat -> barang_id();
								?>
                                <tr>
                                    <td>ID Cabang</td>
                                    <td><input type="text" readonly="readonly" required value="<?php echo $format;?>"
                                            class="form-control" name="id"></td>
                                </tr>
                                <tr>
                                    <td>Regional</td>
                                    <td>
                                        <select name="regional" class="form-control" required>
                                            <option value="#">Pilih Regional</option>
                                            <?php  $kat = $lihat -> regional(); foreach($kat as $isi){ 	?>
                                            <option value="<?php echo $isi['id_regional'];?>">
                                                <?php echo $isi['nama_regional'];?></option>
                                            <?php }?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cabang</td>
                                    <td>
                                        <select name="kategori" class="form-control" required>
                                            <option value="#">Pilih Cabang</option>
                                            <?php  $kat = $lihat -> kategori(); foreach($kat as $isi){ 	?>
                                            <option value="<?php echo $isi['id_kategori'];?>">
                                                <?php echo $isi['nama_kategori'];?></option>
                                            <?php }?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PIC</td>
                                    <td><input type="text" placeholder="PIC" required class="form-control"
                                            name="pic"></td>
                                </tr>
                                <tr>
                                    <td>Alamat Email</td>
                                    <td><input type="text" placeholder="Alamat Email" required class="form-control"
                                            name="email"></td>
                                </tr>
                                <tr>
                                    <td>Departement</td>
                                    <td><input type="text" placeholder="Departement" required class="form-control"
                                            name="dept"></td>
                                </tr>
                                <tr>
                                    <td>PaperBag(Kecil)</td>
                                    <td><input type="number" required Placeholder="Stok" class="form-control"
                                            name="stok1"></td>
                                </tr>
                                <tr>
                                    <td>PaperBag(Sedang)</td>
                                    <td><input type="number" required Placeholder="Stok" class="form-control"
                                            name="stok2"></td>
                                </tr>
                                <tr>
                                    <td>PaperBag(Besar)</td>
                                    <td><input type="number" required Placeholder="Stok" class="form-control"
                                            name="stok3"></td>
                                </tr>
                                <tr>
                                    <td>Notes</td>
                                    <td><input type="number" required Placeholder="Stok" class="form-control"
                                            name="stok4"></td>
                                </tr>
                                <tr>
                                    <td>Pulpen</td>
                                    <td><input type="number" required Placeholder="Stok" class="form-control"
                                            name="stok5"></td>
                                </tr>
                                <tr>
                                    <td>Stiker Kepala Joni</td>
                                    <td><input type="number" required Placeholder="Stok" class="form-control"
                                            name="stok6"></td>
                                </tr>
                                <tr>
                                    <td>Gantungan Kunci</td>
                                    <td><input type="number" required Placeholder="Stok" class="form-control"
                                            name="stok7"></td>
                                </tr>
                                <tr>
                                    <td>Agenda Joni</td>
                                    <td><input type="number" required Placeholder="Stok" class="form-control"
                                            name="stok8"></td>
                                </tr>
                                <tr>
                                    <td>Tumbler</td>
                                    <td><input type="number" required Placeholder="Stok" class="form-control"
                                            name="stok9"></td>
                                </tr>
                                <tr>
                                    <td>Harga Beli</td>
                                    <td><input type="number" placeholder="Harga beli" required class="form-control"
                                            name="beli"></td>
                                </tr>
                                <tr>
                                    <td>Harga Jual</td>
                                    <td><input type="number" placeholder="Harga Jual" required class="form-control"
                                            name="jual"></td>
                                </tr>
                                <tr>
                                    <td>Satuan Barang</td>
                                    <td>
                                        <select name="satuan" class="form-control" required>
                                            <option value="#">Pilih Satuan</option>
                                            <option value="PCS">PCS</option>
                                            <option value="PCS">DUS</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td><input type="number" required Placeholder="Stok" class="form-control"
                                            name="stok"></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Input</td>
                                    <td><input type="text" required readonly="readonly" class="form-control"
                                            value="<?php echo  date("j F Y, G:i");?>" name="tgl"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Insert
                                Data</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>