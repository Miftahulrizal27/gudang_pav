<?php 
	$id = $_GET['barang'];
	$hasil = $lihat -> barang_edit($id);
?>
<a href="index.php?page=detail5" class="btn btn-primary mb-3"><i class="fa fa-angle-left"></i> Balik </a>
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
				<td>Periode</td>
				<td><?php echo $hasil['pic'];?></td>
			</tr>
			<tr>
				<td>Kegiatan atau Event</td>
				<td><?php echo $hasil['email'];?></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><?php echo $hasil['dept'];?></td>
			</tr>
			<tr>
				<td>Masuk</td>
				<td><?php echo $hasil['stok1'];?></td>
			</tr>
			<tr>
				<td>keluar</td>
				<td><?php echo $hasil['stok2'];?></td>
			</tr>
			<tr>
				<td>Sisa Stok</td>
				<td><?php echo $hasil['stok3'];?></td>
			</tr>
			<tr>
				<td>Tanggal Update</td>
				<td><?php echo $hasil['tgl_update'];?></td>
			</tr>
		</table>
	</div>
</div>