<h4>Data Barang Stiker Kepala Joni</h4>
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
            <br>
            <br>
            <a href="index.php?page=detail" class="btn btn-success btn-md">
            <i class="fa fa-refresh"></i> Rekap</a>
        <a href="index.php?page=detail1" class="btn btn-success btn-md">
            <i class="fa fa-refresh"></i> Paper Bag K</a>
        <a href="index.php?page=detail2" class="btn btn-success btn-md">
            <i class="fa fa-refresh"></i>Paper Bag S</a>
        <a href="index.php?page=detail3" class="btn btn-success btn-md">
            <i class="fa fa-refresh"></i> Paper Bag B</a>
        <a href="index.php?page=detail4" class="btn btn-success btn-md">
            <i class="fa fa-refresh"></i> Notes</a>
        <a href="index.php?page=detail5" class="btn btn-success btn-md">
            <i class="fa fa-refresh"></i> Pulpen</a>
        <a href="index.php?page=detail6" class="btn btn-success btn-md">
            <i class="fa fa-refresh"></i> Stiker</a>
        <a href="index.php?page=detail7" class="btn btn-success btn-md">
            <i class="fa fa-refresh"></i> Gantungan Kunci</a>
        <a href="index.php?page=detail8" class="btn btn-success btn-md">
            <i class="fa fa-refresh"></i> Agenda</a>
        <a href="index.php?page=detail9" class="btn btn-success btn-md">
            <i class="fa fa-refresh"></i> Tumbler</a>
        <div class="clearfix"></div>
        <br />
        <!-- view barang -->
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm" id="example1">
                    <thead>
                        <tr style="background:#DFF0D8;color:#333;">
                            <th>No.</th>
                            <th> Tanggal Input </th>
                            <th>Regional</th>
                            <th>Cabang</th>
                            <th>Periode</th>
                            <th>Kegiatan/Event</th>
                            <th>Masuk</th>
                            <th>Keluar</th>
                            <th>Sisa_Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
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
                            <td><?php echo $isi['tgl_input'];?></td>
                            <td><?php echo $isi['nama_regional'];?></td>
                            <td><?php echo $isi['nama_kategori'];?></td>
                            <td><?php echo $isi['periode'];?></td>
                            <td><?php echo $isi['kegiatan'];?></td>
                            <td>
                                <?php if($isi['stok'] == '0'){?>
                                <button class="btn btn-danger"> Habis</button>
                                <?php }else{?>
                                <?php echo $isi['stok'];?>
                                <?php }?>
                            </td>
                            <td>
                                <?php if($isi['stok'] == '0'){?>
                                <button class="btn btn-danger"> Habis</button>
                                <?php }else{?>
                                <?php echo $isi['stok'];?>
                                <?php }?>
                            </td>
                            <td>
                                <?php if($isi['stok'] == '0'){?>
                                <button class="btn btn-danger"> Habis</button>
                                <?php }else{?>
                                <?php echo $isi['stok'];?>
                                <?php }?>
                            </td>
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

                                    <a href="index.php?page=detail6/detail&detail=<?php echo $isi['id_barang'];?>"><button
                                        class="btn btn-warning btn-xs">Detail</button></a>
                                <a href="fungsi/hapus/hapus.php?barang=hapus&id=<?php echo $isi['id_barang'];?>"
                                    onclick="javascript:return confirm('Hapus Data barang ?');"><button
                                        class="btn btn-danger btn-xs">Hapus</button></a>
                                <?php }?>
                        </tr>
                        <?php 
							$no++; 
							$totalStok += $isi['stok'];
						}
					?>
                    </tbody>
                </table>
            </div>
        </div>
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
                                    <td>Tanggal Input</td>
                                    <td><input type="text" required readonly="readonly" class="form-control"
                                            value="<?php echo  date("j F Y, G:i");?>" name="tgl"></td>
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
                                    <td>Periode</td>
                                    <td><input type="text" placeholder="Periode" required class="form-control"
                                            name="periode"></td>
                                </tr>
                                <tr>
                                    <td>Kegiatan atau Event</td>
                                    <td><input type="text" placeholder="kegiatan" required class="form-control"
                                            name="kegiatan"></td>
                                </tr>
                                <tr>
                                    <td>Masuk</td>
                                    <td><input type="number" placeholder="Masuk" required class="form-control"
                                            name="Masuk"></td>
                                </tr>
                                <tr>
                                    <td>keluar</td>
                                    <td><input type="number" required Placeholder="Keluar" class="form-control"
                                            name="keluar"></td>
                                </tr>
                                <tr>
                                    <td>Sisa Stok</td>
                                    <td><input type="number" required Placeholder="Sisa Stok" class="form-control"
                                            name="sisa"></td>
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