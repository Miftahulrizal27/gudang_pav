<!--sidebar end-->

 <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
 <!--main content start-->
 <?php
	$id = $_SESSION['admin']['id_member'];
	$hasil = $lihat->member_edit($id);
	?>
 <h4>Keranjang Penjualan</h4>
 <br>
 <?php if (isset($_GET['success'])) { ?>
 	<div class="alert alert-success">
 		<p>Edit Data Berhasil !</p>
 	</div>
 <?php } ?>
 <?php if (isset($_GET['remove'])) { ?>
 	<div class="alert alert-danger">
 		<p>Hapus Data Berhasil !</p>
 	</div>
 <?php } ?>
 <div class="row">
 	<div class="col-sm-4">
 		<div class="card card-primary mb-3">
 			<div class="card-header bg-primary text-white">
 				<h5><i class="fa fa-search"></i> Cari Barang</h5>
 			</div>
 			<div class="card-body">
 				<input type="text" id="cari" class="form-control" name="cari" placeholder="Masukan : ID_Cabang / Cabang">
 			</div>
 		</div>
 	</div>
 	<div class="col-sm-8">
 		<div class="card card-primary mb-3">
 			<div class="card-header bg-primary text-white">
 				<h5><i class="fa fa-list"></i> Hasil Pencarian</h5>
 			</div>
 			<div class="card-body">
 				<div class="table-responsive">
 					<div id="hasil_cari"></div>
 					<div id="tunggu"></div>
 				</div>
 			</div>
 		</div>
 	</div>


 	<div class="col-sm-12">
 		<div class="card card-primary">
 			<div class="card-header bg-primary text-white">
 				<h5><i class="fa fa-shopping-cart"></i> PIC Pusat
 					<a class="btn btn-danger float-right" onclick="javascript:return confirm('Apakah anda ingin reset keranjang ?');" href="fungsi/hapus/hapus.php?penjualan=jual">
 						<b>RESET KERANJANG</b></a>
 				</h5>
 			</div>
 			<div class="card-body">
 				<div id="keranjang" class="table-responsive">

 					<form id="formKurangstok" method="POST" action="index.php?page=jual&nota=yes#kasirnya">
 						<table class="table table-bordered">
 							<tr>
 								<td><b>Tanggal</b></td>
 								<td><input type="text" readonly="readonly" class="form-control" value="<?php echo date("j F Y, G:i"); ?>" name="tgl"></td>
 							</tr>
 						</table>
 						<table class="table table-bordered w-100" id="example1">
 							<thead>
 								<tr>
 									<td> No</td>
 									<td> ID Cabang</td>
 									<td> Regional</td>
 									<td> Cabang</td>
 									<td> PIC</td>
 									<td> Alamat Email</td>
 									<td> Departement</td>
 									<td> Kegiatan/Event</td>
 									<td> PaperBag<br>Kecil</td>
 									<td> PaperBag<br>Sedang</td>
 									<td> PaperBag<br>Besar</td>
 									<td> Notes</td>
 									<td> Pulpen</td>
 									<td> Stiker Kepala<br>Joni</td>
 									<td> Gantungan Kunci</td>
 									<td> Agenda Joni</td>
 									<td> Tumbler</td>
 									<td> Total</td>
 									<td> PIC Pusat</td>
 									<td> Aksi</td>
 								</tr>
 							</thead>
 							<tbody>
 								<?php $total_bayar = 0;
									$no = 1;
									$hasil_penjualan = $lihat->penjualan(); ?>
 								<?php foreach ($hasil_penjualan  as $isi) { ?>
 									<tr>
 										<td><?php echo $no; ?></td>
 										<td><?php echo $isi['nama_regional']; ?></td>
 										<td><?php echo $isi['nama_kategori']; ?></td>
 										<td><?php echo $isi['pic']; ?></td>
 										<td><?php echo $isi['email']; ?></td>
 										<td><?php echo $isi['dept']; ?></td>
 										<td>
 											<!-- aksi ke table penjualan -->
 											<input type="text" name="jumlah" class="form-control">
 											<input type="hidden" name="id" class="form-control">
 											<input type="hidden" name="id_barang" class="form-control">
 										</td>
 										<td>
 											<!-- aksi ke table penjualan -->
 											<input type="number" name="jumlah[<?= $isi['id_cabang']; ?>][stok1]" value="<?php echo $isi['jumlah']; ?>" class="form-control">
 											<!-- <input type="hidden" name="id" value="<?php echo $isi['id_penjualan']; ?>" class="form-control">
 											<input type="hidden" name="id_barang" value="<?php echo $isi['id_barang']; ?>" class="form-control"> -->
 										</td>
 										<td>
 											<!-- aksi ke table penjualan -->
 											<input type="number" name="jumlah[<?= $isi['id_cabang']; ?>][stok2]" value="<?php echo $isi['jumlah']; ?>" class="form-control">
 											<!-- <input type="hidden" name="id" value="<?php echo $isi['id_penjualan']; ?>" class="form-control">
 											<input type="hidden" name="id_barang" value="<?php echo $isi['id_barang']; ?>" class="form-control"> -->
 										</td>
 										<td>
 											<!-- aksi ke table penjualan -->
 											<input type="number" name="jumlah[<?= $isi['id_cabang']; ?>][stok3]" value="<?php echo $isi['jumlah']; ?>" class="form-control">
 											<!-- <input type="hidden" name="id" value="<?php echo $isi['id_penjualan']; ?>" class="form-control">
 											<input type="hidden" name="id_barang" value="<?php echo $isi['id_barang']; ?>" class="form-control"> -->
 										</td>
 										<td>
 											<!-- aksi ke table penjualan -->
 											<input type="number" name="jumlah[<?= $isi['id_cabang']; ?>][stok4]" value="<?php echo $isi['jumlah']; ?>" class="form-control">
 											<!-- <input type="hidden" name="id" value="<?php echo $isi['id_penjualan']; ?>" class="form-control">
 											<input type="hidden" name="id_barang" value="<?php echo $isi['id_barang']; ?>" class="form-control"> -->
 										</td>
 										<td>
 											<!-- aksi ke table penjualan -->
 											<input type="number" name="jumlah[<?= $isi['id_cabang']; ?>][stok5]" value="<?php echo $isi['jumlah']; ?>" class="form-control">
 											<!-- <input type="hidden" name="id" value="<?php echo $isi['id_penjualan']; ?>" class="form-control">
 											<input type="hidden" name="id_barang" value="<?php echo $isi['id_barang']; ?>" class="form-control"> -->
 										</td>
 										<td>
 											<!-- aksi ke table penjualan -->
 											<input type="number" name="jumlah[<?= $isi['id_cabang']; ?>][stok6]" value="<?php echo $isi['jumlah']; ?>" class="form-control">
 											<!-- <input type="hidden" name="id" value="<?php echo $isi['id_penjualan']; ?>" class="form-control">
 											<input type="hidden" name="id_barang" value="<?php echo $isi['id_barang']; ?>" class="form-control"> -->
 										</td>
 										<td>
 											<!-- aksi ke table penjualan -->
 											<input type="number" name="jumlah[<?= $isi['id_cabang']; ?>][stok7]" value="<?php echo $isi['jumlah']; ?>" class="form-control">
 											<!-- <input type="hidden" name="id" value="<?php echo $isi['id_penjualan']; ?>" class="form-control">
 											<input type="hidden" name="id_barang" value="<?php echo $isi['id_barang']; ?>" class="form-control"> -->
 										</td>
 										<td>
 											<!-- aksi ke table penjualan -->
 											<input type="number" name="jumlah[<?= $isi['id_cabang']; ?>][stok8]" value="<?php echo $isi['jumlah']; ?>" class="form-control">
 											<!-- <input type="hidden" name="id" value="<?php echo $isi['id_penjualan']; ?>" class="form-control">
 											<input type="hidden" name="id_barang" value="<?php echo $isi['id_barang']; ?>" class="form-control"> -->
 										</td>
 										<td>
 											<!-- aksi ke table penjualan -->
 											<input type="number" name="jumlah[<?= $isi['id_cabang']; ?>][stok9]" value="<?php echo $isi['jumlah']; ?>" class="form-control">
 											<!-- <input type="hidden" name="id" value="<?php echo $isi['id_penjualan']; ?>" class="form-control">
 											<input type="hidden" name="id_barang" value="<?php echo $isi['id_barang']; ?>" class="form-control"> -->
 										</td> 
 										<td>Rp.<?php echo number_format($isi['total']); ?>,-</td>
 										<td><?php echo $isi['nm_member']; ?></td>
 										<td>
 											<button type="submit" class="btn btn-warning">Update</button>
 					</form>
 					<!-- aksi ke table penjualan -->
 					<a href="fungsi/hapus/hapus.php?jual=jual&id=<?php echo $isi['id_penjualan']; ?>&brg=<?php echo $isi['id_barang']; ?>
											&jml=<?php echo $isi['jumlah']; ?>" class="btn btn-danger"><i class="fa fa-times"></i>
 					</a>
 					</td>
 					</tr>
 				<?php $no++;
										$total_bayar += $isi['total'];
									} ?>
 				</tbody>
 				</table>
 				</form>
 				<br />
 				<?php $hasil = $lihat->jumlah(); ?>
 				<div id="kasirnya">
 					<table class="table table-stripped">
 						<?php
							// proses bayar dan ke nota
							if (!empty($_GET['nota']) && $_GET['nota'] == 'yes') {
								$total = $_POST['total'];
								$bayar = $_POST['bayar'];
								if (!empty($bayar)) {
									$hitung = $bayar - $total;
									if ($bayar >= $total) {
										$id_barang = $_POST['id_barang'];
										$id_member = $_POST['id_member'];
										$jumlah = $_POST['jumlah'];
										$total = $_POST['total1'];
										$tgl_input = $_POST['tgl_input'];
										$periode = $_POST['periode'];
										$jumlah_dipilih = count($id_barang);

										$barang = $_POST['jumlah'];

										$barang = [
											'BR006' => [
												'paperbag_kecil' => 3,
												'paperbag_sedang' => 3,
												'paperbag_besar' => 3,
												'notes' => 3,
												'pulpen' => 3
											],
											'BR005' => [
												'paperbag_kecil' => 2,
												'paperbag_sedang' => 2,
												'paperbag_besar' => 2,
												'notes' => 2,
												'pulpen' => 2
											],
										];

										foreach ($barang as $key => $value) {
											$id_cabang = $key;
											$stok1 = $value['stok1'];
                                            $stok2 = $value['stok2'];
											$stok3 = $value['stok3'];
                                            $stok4 = $value['stok4'];
                                            $stok5 = $value['stok5'];
                                            $stok6 = $value['stok6'];
                                            $stok7 = $value['stok7'];
                                            $stok8 = $value['stok8'];
                                            $stok9 = $value['stok9'];

											foreach ($barang as $id_cabang => $stok_barang) {
												foreach ($stok_barang as $nama_stok => $jumlah_stok) {
													//ambil data dari db where id_cabang
													$sql = "SELECT $nama_stok FROM barang WHERE id_cabang = :id_cabang";
													$stmt = $config->prepare($sql);
													$stmt->execute([':id_cabang' => $id_cabang]);
													$current_stock = $stmt->fetchColumn();
											
													//perhitungan data dari db di kurangi input user
													$new_stock = $current_stock - $jumlah_stok;
											
													//update data yang ada di db dengan value baru yang sudah di kurangi
													$sql = "UPDATE barang SET $nama_stok = :new_stock WHERE id_cabang = :id_cabang";
													$stmt = $config->prepare($sql);
													$stmt->execute([':new_stock' => $new_stock, ':id_cabang' => $id_cabang]);
												}
											}
	
										}

										for ($x = 0; $x < $jumlah_dipilih; $x++) {

											$d = array($id_barang[$x], $id_member[$x], $jumlah[$x], $total[$x], $tgl_input[$x], $periode[$x]);
											$sql = "INSERT INTO nota (id_barang,id_member,jumlah,total,tanggal_input,periode) VALUES(?,?,?,?,?,?)";
											$row = $config->prepare($sql);
											$row->execute($d);

											// ubah stok barang
											$sql_barang = "SELECT * FROM barang WHERE id_barang = ?";
											$row_barang = $config->prepare($sql_barang);
											$row_barang->execute(array($id_barang[$x]));
											$hsl = $row_barang->fetch();

											$stok = $hsl['stok'];
											$idb  = $hsl['id_barang'];

											$total_stok = $stok - $jumlah[$x];
											// echo $total_stok;
											$sql_stok = "UPDATE barang SET stok = ? WHERE id_barang = ?";
											$row_stok = $config->prepare($sql_stok);
											$row_stok->execute(array($total_stok, $idb));
										}
										echo '<script>alert("Belanjaan Berhasil Di Bayar !");</script>';
									} else {
										echo '<script>alert("Uang Kurang ! Rp.' . $hitung . '");</script>';
									}
								}
							}
							?>
 						<!-- aksi ke table nota -->
 						<!-- <form method="POST" action="index.php?page=jual&nota=yes#kasirnya"> -->
 						<?php foreach ($hasil_penjualan as $isi) {; ?>
 							<input type="hidden" name="id_barang[]" value="<?php echo $isi['id_barang']; ?>">
 							<input type="hidden" name="id_member[]" value="<?php echo $isi['id_member']; ?>">
 							<input type="hidden" name="jumlah[]" value="<?php echo $isi['jumlah']; ?>">
 							<input type="hidden" name="total[]" value="<?php echo $isi['total']; ?>">
 							<input type="hidden" name="tgl_input[]" value="<?php echo $isi['tanggal_input']; ?>">
 							<input type="hidden" name="periode[]" value="<?php echo date('m-Y'); ?>">
 						<?php $no++;
							} ?>
 						<tr>
 							<!-- <td>Total Semua  </td>
									<td><input type="text" class="form-control" name="total" value="<?php echo $total_bayar; ?>"></td>

									<td>Bayar  </td>
									<td><input type="text" class="form-control" name="bayar" value="<?php echo $bayar; ?>"></td> -->
 							<td><button class="btn btn-success" type="submit" form="formKurangstok"><i class="fa fa-shopping-cart"></i> Keluarkan</button>
 								<?php if (!empty($_GET['nota'] == 'yes')) { ?>
 									<a class="btn btn-danger" href="fungsi/hapus/hapus.php?penjualan=jual">
 										<b>RESET</b></a>
 							</td><?php } ?></td>
 						</tr>
 						<!-- </form> -->
 						<!-- aksi ke table nota -->
 						<tr>
 							<!-- <td>Kembali</td>
								<td><input type="text" class="form-control" value="<?php echo $hitung; ?>"></td>
								<td></td> -->
 							<td>
 								<a href="print.php?nm_member=<?php echo $_SESSION['admin']['nm_member']; ?>
									&bayar=<?php echo $bayar; ?>&kembali=<?php echo $hitung; ?>" target="_blank">
 									<button class="btn btn-secondary">
 										<i class="fa fa-print"></i> Print Bukti Barang Keluar
 									</button></a>
 							</td>
 							<td></td>
 							<td></td>
 							<td></td>
 						</tr>
 					</table>
 					<br />
 					<br />
 				</div>
 				</div>
 			</div>
 		</div>
 	</div>


 	<script>
 		// AJAX call for autocomplete 
 		$(document).ready(function() {
 			$("#cari").change(function() {
 				$.ajax({
 					type: "POST",
 					url: "fungsi/edit/edit.php?cari_barang=yes",
 					data: 'keyword=' + $(this).val(),
 					beforeSend: function() {
 						$("#hasil_cari").hide();
 						$("#tunggu").html('<p style="color:green"><blink>tunggu sebentar</blink></p>');
 					},
 					success: function(html) {
 						$("#tunggu").html('');
 						$("#hasil_cari").show();
 						$("#hasil_cari").html(html);
 					}
 				});
 			});
 		});
 		//To select country name
 	</script>