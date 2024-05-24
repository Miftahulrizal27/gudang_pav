<h4>Data Barang Agenda</h4>
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
        <br>
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
        <!-- view barang -->
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-sm" id="example1">
                    <thead>
                        <tr style="background:#DFF0D8;color:#333;">
                            <th>No.</th>
                            <th>Tanggal Input </th>
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

                                    <a href="index.php?page=detail8/detail&detail=<?php echo $isi['id_barang'];?>"><button
                                        class="btn btn-warning btn-xs">Edit</button></a>
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
        <!-- end view barang -->
        <!-- tambah barang MODALS-->
        <!-- Modal -->
