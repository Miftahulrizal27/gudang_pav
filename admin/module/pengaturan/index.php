<h4>Tentang PAV</h4>
<br>
<?php if(isset($_GET['success'])){?>
<div class="alert alert-success">
	<p>Ubah Data Berhasil !</p>
</div>
<?php }?>
<div class="card">
	<div class="card-body">
		<form method="post" action="fungsi/edit/edit.php?pengaturan=ubah">
			<div class="row">
				<div class="col-md 6">
					<div class="form-group">
						<label for="">Nama Perusahaan</label>
						<input class="form-control" name="" value=" PT. Tiki Jalur Nugraha Ekakurir (JNE Express)"
									placeholder="">
					</div>
					<div class="form-group">
						<label for="">Alamat</label>
						<input class="form-control" name="" value=" Lantai 3, Jl. Tomang Raya No.11,  Jakarta Barat, Daerah Khusus Jakarta, Indonesia"
									placeholder="">
					</div>
					<div class="form-group">
						<label for="">Direktorat</label>
						<input class="form-control" name="" value=" Marketing "
									placeholder="">
					</div>
					<div class="form-group">
						<label for="">Divisi</label>
						<input class="form-control" name="" value=" Branding Activation "
									placeholder="">
					</div>
					<div class="form-group">
						<label for="">Departement</label>
						<input class="form-control" name="" value=" Promotion and Activation"
									placeholder="">
					</div>
					<div class="form-group">
						<input class="form-control" name="" value=" Menchendise"
									placeholder="">
					</div>
					<div class="form-group">
						<label for="">PIC</label>
						<input class="form-control" name="" value=" Ibu Atiek"
									placeholder="">
						<br>
						<input class="form-control" name="" value=" Ibu Nova"
									placeholder="">
					</div>
				</div>
			</div>
		</form>
	</div>
</div>