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
						<input class="form-control" name="" value=" PT. TIKI JALUR NUGRAHA EKAKURIR"
									placeholder="">
					</div>
					<div class="form-group">
						<label for="">ALAMAT</label>
						<input class="form-control" name="" value=" TOMANG, JAKARTA BARAT, DKJ. JAKARTA, INDONESIA"
									placeholder="">
					</div>
					<div class="form-group">
						<label for="">DIREKTORAT</label>
						<input class="form-control" name="" value=" MARKETING "
									placeholder="">
					</div>
					<div class="form-group">
						<label for="">DIVISI</label>
						<input class="form-control" name="" value=" BRANDING ACTIVATION "
									placeholder="">
					</div>
					<div class="form-group">
						<label for="">DEPARTEMENT</label>
						<input class="form-control" name="" value=" PROMOTION AND ACTIVATION "
									placeholder="">
					</div>
					<div class="form-group">
						<label for="">MERCHENDISE</label>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>