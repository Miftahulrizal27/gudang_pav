<h4>Regional</h4>
<br />
<?php if(isset($_GET['success'])){?>
<div class="alert alert-success">
    <p>Tambah Data Berhasil !</p>
</div>
<?php }?>
<?php if(isset($_GET['success-edit'])){?>
<div class="alert alert-success">
    <p>Update Data Berhasil !</p>
</div>
<?php }?>
<?php if(isset($_GET['remove'])){?>
<div class="alert alert-danger">
    <p>Hapus Data Berhasil !</p>
</div>
<?php }?>
<?php 
	if(!empty($_GET['uid'])){
	$sql = "SELECT * FROM regional WHERE id_regional = ?";
	$row = $config->prepare($sql);
	$row->execute(array($_GET['uid']));
	$edit = $row->fetch();
?>
<form method="POST" action="fungsi/edit/edit.php?regional=edit">
    <table>
        <tr>
            <td style="width:25pc;"><input type="text" class="form-control" value="<?= $edit['nama_regional'];?>"
                    required name="regional" placeholder="Masukan regional Baru">
                <input type="hidden" name="id" value="<?= $edit['id_regional'];?>">
            </td>
            <td style="padding-left:10px;"><button id="tombol-simpan" class="btn btn-primary"><i class="fa fa-edit"></i>
                    Ubah Data</button></td>
        </tr>
    </table>
</form>
<?php }else{?>
<form method="POST" action="fungsi/tambah/tambah.php?regional=tambah">
    <table>
        <tr>
            <td style="width:25pc;"><input type="text" class="form-control" required name="regional"
                    placeholder="Masukan regional Baru"></td>
            <td style="padding-left:10px;"><button id="tombol-simpan" class="btn btn-primary"><i class="fa fa-plus"></i>
                    Insert Data</button></td>
        </tr>
    </table>
</form>
<?php }?>
<br />
<div class="card card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm" id="example1">
            <thead>
                <tr style="background:#DFF0D8;color:#333;">
                    <th>No.</th>
                    <th>Regional</th>
                    <th>Tanggal Input</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
				$hasil_1 = $lihat -> regional();
				$no=1;
				foreach($hasil_1 as $isi){
			?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $isi['nama_regional'];?></td>
                    <td><?php echo $isi['tgl_input'];?></td>
                    <td>
                        <a href="index.php?page=regional&uid=<?php echo $isi['id_regional'];?>"><button
                                class="btn btn-warning">Edit</button></a>
                        <a href="fungsi/hapus/hapus.php?regional=hapus&id=<?php echo $isi['id_regional'];?>"
                            onclick="javascript:return confirm('Hapus Data Kategori ?');"><button
                                class="btn btn-danger">Hapus</button></a>
                    </td>
                </tr>
                <?php $no++; }?>
            </tbody>
        </table>
    </div>
</div>