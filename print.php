<?php 
	@ob_start();
	session_start();
	if(!empty($_SESSION['admin'])){ }else{
		echo '<script>window.location="login.php";</script>';
        exit;
	}
	require 'config.php';
	include $view;
	$lihat = new view($config);
	$hsl = $lihat -> penjualan();
?>
<html>
	<head>
		<title>print</title>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="icon" type="image/png" href="assets/img//user/jne.png">
	</head>
	<body>
		<script>window.print();</script>
		<div class="container">
			<div class="row">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					<center>
						<p><?php echo $toko['nama_toko'];?></p>
						<p><?php echo $toko['alamat_toko'];?></p>
						<p>Tanggal : <?php  echo date("j F Y, G:i");?></p>
						<p>PIC : <?php  echo htmlentities($_GET['nm_member']);?></p>
					</center>
					<table class="table table-bordered" style="width:100%;">
						<tr>
							<th>|No|</th>
							<th>Regional|</th>
							<th>Cabang|</th>
							<th>PIC|</th> 
							<th>departement|</th>
							<th>Kegiatan/Event|</th>
							<th>PaperBag<br>Kecil|</th>
							<th>PaperBag<br>Sedang|</th>
							<th>PaperBag<br>Besar|</th>
							<th>Notes|</th>
							<th>Pulpen|</th>
							<th>Stiker kepala<br>Joni|</th>
							<th>Gantungan kunci|</th>
							<th>Agenda Joni|</th>
							<th>Tumbler|</th>
						</tr>
						<?php $no=1; foreach($hsl as $isi){?>
						<tr>
							<td><?php echo $no;?></td>
							<td><?php echo $isi['nama_regional'];?></td>
							<td><?php echo $isi['nama_cabang'];?></td>
							<td><?php echo $isi['pic'];?></td>
							<td><?php echo $isi['dept'];?></td>
							<td><?php echo $isi['kegiatan'];?></td>
							<td><?php echo $isi['jumlah'];?> </td>
							<td><?php echo $isi['jumlah'];?> </td>
							<td><?php echo $isi['jumlah'];?> </td>
							<td><?php echo $isi['jumlah'];?> </td>
							<td><?php echo $isi['jumlah'];?> </td>
							<td><?php echo $isi['jumlah'];?> </td>
							<td><?php echo $isi['jumlah'];?> </td>
							<td><?php echo $isi['jumlah'];?> </td>
							<td><?php echo $isi['jumlah'];?> </td>
						</tr>
						<?php $no++; }?>
					</table>
					<div class="clearfix"></div>
					<center>
						<p>Terima Kasih !</p>
					</center>
				</div>
				<div class="col-sm-4"></div>
			</div>
		</div>
	</body>
</html>
