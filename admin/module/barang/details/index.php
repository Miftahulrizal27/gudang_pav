<?php 
	$id = $_GET['barang'];
	$hasil = $lihat -> barang_edit($id);
?>
<a href="index.php?page=barang" class="btn btn-primary mb-3"><i class="fa fa-angle-left"></i> Balik </a>
<h4>Details Barang</h4>
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
<div class="card card-body">
	<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<td>ID Barang</td>
				<td><?php echo $hasil['id_barang'];?></td>
			</tr>
			<tr>
				<td>Regional</td>
				<td><?php echo $hasil['nama_kategori'];?></td>
			</tr>
			<tr>
				<td>Cabang</td>
				<td><?php echo $hasil['nama_kategori'];?></td>
			</tr>
			<tr>
				<td>PIC</td>
				<td><?php echo $hasil['pic'];?></td>
			</tr>
			<tr>
				<td>Alamat Email</td>
				<td><?php echo $hasil['email'];?></td>
			</tr>
			<tr>
				<td>Departement</td>
				<td><?php echo $hasil['dept'];?></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><?php echo $hasil['stok1'];?></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><?php echo $hasil['stok2'];?></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><?php echo $hasil['stok3'];?></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><?php echo $hasil['stok4'];?></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><?php echo $hasil['stok5'];?></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><?php echo $hasil['stok6'];?></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><?php echo $hasil['stok7'];?></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><?php echo $hasil['stok8'];?></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><?php echo $hasil['stok9'];?></td>
			</tr>
			<tr>
				<td>Harga Beli</td>
				<td><?php echo $hasil['harga_beli'];?></td>
			</tr>
			<tr>
				<td>Harga Jual</td>
				<td><?php echo $hasil['harga_jual'];?></td>
			</tr>
			<tr>
				<td>Satuan Barang</td>
				<td><?php echo $hasil['satuan_barang'];?></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><?php echo $hasil['stok'];?></td>
			</tr>
			<tr>
				<td>Tanggal Input</td>
				<td><?php echo $hasil['tgl_input'];?></td>
			</tr>
			<tr>
				<td>Tanggal Update</td>
				<td><?php echo $hasil['tgl_update'];?></td>
			</tr>
		</table>
	</div>
</div>