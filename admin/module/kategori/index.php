<h4>Cabang</h4>
<br />
<?php if (isset($_GET['success'])) { ?>
    <div class="alert alert-success">
        <p>Tambah Data Berhasil !</p>
    </div>
<?php } ?>
<?php if (isset($_GET['success-edit'])) { ?>
    <div class="alert alert-success">
        <p>Update Data Berhasil !</p>
    </div>
<?php } ?>
<?php if (isset($_GET['remove'])) { ?>
    <div class="alert alert-danger">
        <p>Hapus Data Berhasil !</p>
    </div>
<?php } ?>
<?php
if (!empty($_GET['uid'])) {
    $sql = "SELECT * FROM kategori WHERE id_kategori = ?";
    $row = $config->prepare($sql);
    $row->execute(array($_GET['uid']));
    $edit = $row->fetch();
?>
    <form method="POST" action="fungsi/edit/edit.php?kategori=edit">
        <table>
            <tr>
                <td style="width:25pc;"><input type="text" class="form-control" value="<?= $edit['nama_kategori']; ?>" required name="kategori" placeholder="Masukan Cabang Baru">
                    <input type="hidden" name="id" value="<?= $edit['id_kategori']; ?>">
                </td>
                <td style="padding-left:10px;"><button id="tombol-simpan" class="btn btn-primary"><i class="fa fa-edit"></i>
                        Ubah Data</button></td>
                <td>
                    <button type="button" class="btn btn-primary btn-md mr-2" data-toggle="modal" data-target="#insert_barang">
                        <i class="fa fa-plus"></i> Insert Barang</button>
                </td>
            </tr>
        </table>
    </form>
<?php } else { ?>
    <form method="POST" action="fungsi/tambah/tambah.php?kategori=tambah">
        <table>
            <tr>
                <td style="width:25pc;"><input type="text" class="form-control" required name="kategori" placeholder="Masukan Kategori Barang Baru"></td>
                <td style="padding-left:10px;"><button id="tombol-simpan" class="btn btn-primary"><i class="fa fa-plus"></i>
                        Insert Data</button></td>
                <td>
                    <button type="button" class="btn btn-primary btn-md mr-2" data-toggle="modal" data-target="#insert_barang">
                        <i class="fa fa-plus"></i> Insert Barang</button>
                </td>
            </tr>
        </table>
    </form>
<?php } ?>
<br />
<div class="card card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm" id="example1">
            <thead>
                <tr style="background:#DFF0D8;color:#333;">
                    <th>No.</th>
                    <th>Cabang</th>
                    <th>Tanggal Input</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $hasil = $lihat->kategori();
                $no = 1;
                foreach ($hasil as $isi) {
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $isi['nama_kategori']; ?></td>
                        <td><?php echo $isi['tgl_input']; ?></td>
                        <td>
                            <a href="index.php?page=detail<?php echo $isi['id_barang']; ?>"><button class="btn btn-primary btn-xs">Details</button></a>
                            <a href="index.php?page=kategori&uid=<?php echo $isi['id_kategori']; ?>"><button class="btn btn-warning">Edit</button></a>
                            <a href="fungsi/hapus/hapus.php?kategori=hapus&id=<?php echo $isi['id_kategori']; ?>" onclick="javascript:return confirm('Hapus Data Kategori ?');"><button class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                <?php $no++;
                } ?>
            </tbody>
        </table>
    </div>
</div>

<div id="insert_barang" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" style=" border-radius:0px;">
            <div class="modal-header" style="background:#285c64;color:#fff;">
                <h5 class="modal-title"><i class="fa fa-plus"></i> Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="fungsi/tambah/tambah.php?barang=tambah" method="POST">
                <div class="modal-body">
                    <table class="table table-striped bordered">
                        <?php
                        $format = $lihat->barang_id();
                        ?>
                        <tr>
                            <td>ID Cabang</td>
                            <td><input type="text" readonly="readonly" required value="<?php echo $format; ?>" class="form-control" name="id"></td>
                        </tr>
                        <tr>
                            <td>Regional</td>
                            <td>
                                <select name="regional" class="form-control" required>
                                    <option value="#">Pilih Regional</option>
                                    <?php $kat = $lihat->regional();
                                    foreach ($kat as $isi) {     ?>
                                        <option value="<?php echo $isi['id_regional']; ?>">
                                            <?php echo $isi['nama_regional']; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Cabang</td>
                            <td>
                                <select name="kategori" class="form-control" required>
                                    <option value="#">Pilih Cabang</option>
                                    <?php $kat = $lihat->kategori();
                                    foreach ($kat as $isi) {     ?>
                                        <option value="<?php echo $isi['id_kategori']; ?>">
                                            <?php echo $isi['nama_kategori']; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>PIC</td>
                            <td><input type="text" placeholder="PIC" required class="form-control" name="pic"></td>
                        </tr>
                        <tr>
                            <td>Alamat Email</td>
                            <td><input type="text" placeholder="Alamat Email" required class="form-control" name="email"></td>
                        </tr>
                        <tr>
                            <td>Departement</td>
                            <td><input type="text" placeholder="Departement" required class="form-control" name="dept"></td>
                        </tr>
                        <tr>
                            <td>PaperBag(Kecil)</td>
                            <td><input type="number" required Placeholder="Stok" class="form-control" name="stok1"></td>
                        </tr>
                        <tr>
                            <td>PaperBag(Sedang)</td>
                            <td><input type="number" required Placeholder="Stok" class="form-control" name="stok2"></td>
                        </tr>
                        <tr>
                            <td>PaperBag(Besar)</td>
                            <td><input type="number" required Placeholder="Stok" class="form-control" name="stok3"></td>
                        </tr>
                        <tr>
                            <td>Notes</td>
                            <td><input type="number" required Placeholder="Stok" class="form-control" name="stok4"></td>
                        </tr>
                        <tr>
                            <td>Pulpen</td>
                            <td><input type="number" required Placeholder="Stok" class="form-control" name="stok5"></td>
                        </tr>
                        <tr>
                            <td>Stiker Kepala Joni</td>
                            <td><input type="number" required Placeholder="Stok" class="form-control" name="stok6"></td>
                        </tr>
                        <tr>
                            <td>Gantungan Kunci</td>
                            <td><input type="number" required Placeholder="Stok" class="form-control" name="stok7"></td>
                        </tr>
                        <tr>
                            <td>Agenda Joni</td>
                            <td><input type="number" required Placeholder="Stok" class="form-control" name="stok8"></td>
                        </tr>
                        <tr>
                            <td>Tumbler</td>
                            <td><input type="number" required Placeholder="Stok" class="form-control" name="stok9"></td>
                        </tr>
                        <tr>
                            <td>Harga Beli</td>
                            <td><input type="number" placeholder="Harga beli" required class="form-control" name="beli"></td>
                        </tr>
                        <tr>
                            <td>Harga Jual</td>
                            <td><input type="number" placeholder="Harga Jual" required class="form-control" name="jual"></td>
                        </tr>
                        <tr>
                            <td>Satuan Barang</td>
                            <td>
                                <select name="satuan" class="form-control" required>
                                    <option value="#">Pilih Satuan</option>
                                    <option value="PCS">PCS</option>
                                    <option value="PCS">DUS</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><input type="number" required Placeholder="Stok" class="form-control" name="stok"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Input</td>
                            <td><input type="text" required readonly="readonly" class="form-control" value="<?php echo  date("j F Y, G:i"); ?>" name="tgl"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Insert
                        Data</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>

</div>