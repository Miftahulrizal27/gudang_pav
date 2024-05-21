<?php 
    $id = $_GET['barang'];
    $hasil = $lihat->barang_edit($id);
?>

<a href="index.php?page=detail4" class="btn btn-primary mb-3"><i class="fa fa-angle-left"></i> Balik </a>
<h4>Edit Details Barang</h4>

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
    <form action="fungsi/edit/edit.php?barang=edit" method="POST">
        <div class="form-group">
            <label for="id_barang">ID Cabang</label>
            <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?php echo $hasil['id_barang'];?>" readonly>
        </div>
        <div class="form-group">
            <label for="regional">Regional</label>
            <input type="text" class="form-control" id="regional" name="regional" value="<?php echo $hasil['nama_kategori'];?>">
        </div>
        <div class="form-group">
            <label for="cabang">Cabang</label>
            <input type="text" class="form-control" id="cabang" name="cabang" value="<?php echo $hasil['nama_kategori'];?>">
        </div>
        <div class="form-group">
            <label for="periode">Periode</label>
            <input type="text" class="form-control" id="periode" name="periode" value="<?php echo $hasil['pic'];?>">
        </div>
        <div class="form-group">
            <label for="kegiatan">Kegiatan atau Event</label>
            <input type="text" class="form-control" id="kegiatan" name="kegiatan" value="<?php echo $hasil['email'];?>">
        </div>
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $hasil['dept'];?>">
        </div>
        <div class="form-group">
            <label for="masuk">Masuk</label>
            <input type="number" class="form-control" id="masuk" name="masuk" value="<?php echo $hasil['stok1'];?>">
        </div>
        <div class="form-group">
            <label for="keluar">Keluar</label>
            <input type="number" class="form-control" id="keluar" name="keluar" value="<?php echo $hasil['stok2'];?>">
        </div>
        <div class="form-group">
            <label for="sisa_stok">Sisa Stok</label>
            <input type="number" class="form-control" id="sisa_stok" name="sisa_stok" value="<?php echo $hasil['stok3'];?>">
        </div>
        <div class="form-group">
            <label for="tgl_update">Tanggal Update</label>
            <input type="date" class="form-control" id="tgl_update" name="tgl_update" value="<?php echo $hasil['tgl_update'];?>">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
