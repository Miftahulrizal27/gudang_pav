 <!--sidebar end-->

 <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
 <!--main content start-->
 <?php 
	$id = $_GET['barang'];
	$hasil = $lihat -> barang_edit($id);
?>
 <a href="index.php?page=barang" class="btn btn-primary mb-3"><i class="fa fa-angle-left"></i> Balik </a>
 <h4>Edit Barang</h4>
 <?php if(isset($_GET['success'])){?>
 <div class="alert alert-success">
     <p>Edit Data Berhasil !</p>
 </div>
 <?php }?>
 <?php if(isset($_GET['remove'])){?>
 <div class="alert alert-danger">
     <p>Hapus Data Berhasil !</p>
 </div>
 <?php }?>
<div class="card card-body">
	<div class="table-responsive">
		<table class="table table-striped">
			<form action="fungsi/edit/edit.php?barang=edit" method="POST">
				<tr>
					<td>ID Barang</td>
					<td><input type="text" readonly="readonly" class="form-control" value="<?php echo $hasil['id_barang'];?>"
							name="id"></td>
				</tr>
				<tr>
					<td>Regional</td>
					<td>
						<select name="regional" class="form-control">
							<option value="<?php echo $hasil['id_regional'];?>"><?php echo $hasil['nama_regional'];?></option>
							<option value="#">Pilih Kategori</option>
							<?php  $kat = $lihat -> regional(); foreach($kat as $isi){ 	?>
							<option value="<?php echo $isi['id_regional'];?>"><?php echo $isi['nama_regioanal'];?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Kategori</td>
					<td>
						<select name="kategori" class="form-control">
							<option value="<?php echo $hasil['id_kategori'];?>"><?php echo $hasil['nama_kategori'];?></option>
							<option value="#">Pilih Kategori</option>
							<?php  $kat = $lihat -> kategori(); foreach($kat as $isi){ 	?>
							<option value="<?php echo $isi['id_kategori'];?>"><?php echo $isi['nama_kategori'];?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr>
					<td>PIC</td>
					<td><input type="text" class="form-control" value="<?php echo $hasil['pic'];?>" name="pic"></td>
				</tr>
				<tr>
					<td>Alamat Email</td>
					<td><input type="text" class="form-control" value="<?php echo $hasil['email'];?>" name="email"></td>
				</tr>
				<tr>
					<td>Department</td>
					<td><input type="text" class="form-control" value="<?php echo $hasil['dept'];?>" name="dept"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['stok1'];?>" name="stok1"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['stok2'];?>" name="stok2"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['stok3'];?>" name="stok3"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['stok4'];?>" name="stok4"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['stok5'];?>" name="stok5"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['stok6'];?>" name="stok6"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['stok7'];?>" name="stok7"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['stok8'];?>" name="stok8"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['stok9'];?>" name="stok9"></td>
				</tr>
				<tr>
					<td>Harga Beli</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['harga_beli'];?>" name="beli"></td>
				</tr>
				<tr>
					<td>Harga Jual</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['harga_jual'];?>" name="jual"></td>
				</tr>
				<tr>
					<td>Satuan Barang</td>
					<td>
						<select name="satuan" class="form-control">
							<option value="<?php echo $hasil['satuan_barang'];?>"><?php echo $hasil['satuan_barang'];?>
							</option>
							<option value="#">Pilih Satuan</option>
							<option value="PCS">PCS</option>
							<option value="PCS">DUS</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="number" class="form-control" value="<?php echo $hasil['stok'];?>" name="stok"></td>
				</tr>
				<tr>
					<td>Tanggal Update</td>
					<td><input type="text" readonly="readonly" class="form-control" value="<?php echo  date("j F Y, G:i");?>"
							name="tgl"></td>
				</tr>
				<tr>
					<td></td>
					<td><button class="btn btn-primary"><i class="fa fa-edit"></i> Update Data</button></td>
				</tr>
			</form>
		</table>
	</div>
</div>