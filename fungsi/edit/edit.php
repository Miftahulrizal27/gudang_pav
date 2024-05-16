<?php
session_start();
if (!empty($_SESSION['admin'])) {
    require '../../config.php';
    if (!empty($_GET['pengaturan'])) {
        $nama= htmlentities($_POST['namatoko']);
        $alamat = htmlentities($_POST['alamat']);
        $kontak = htmlentities($_POST['kontak']);
        $pemilik = htmlentities($_POST['pemilik']);
        $id = '1';

        $data[] = $nama;
        $data[] = $alamat;
        $data[] = $kontak;
        $data[] = $pemilik;
        $data[] = $id;
        $sql = 'UPDATE toko SET nama_toko=?, alamat_toko=?, tlp=?, nama_pemilik=? WHERE id_toko = ?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=pengaturan&success=edit-data"</script>';
    }

    if (!empty($_GET['kategori'])) {
        $nama= htmlentities($_POST['kategori']);
        $id= htmlentities($_POST['id']);
        $data[] = $nama;
        $data[] = $id;
        $sql = "UPDATE kategori SET  nama_kategori=? WHERE id_kategori= $id";
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=kategori&uid='.$id.'&success-edit=edit-data"</script>';
    }
    if (!empty($_GET['regional'])) {
        $nama= htmlentities($_POST['regional']);
        $id= htmlentities($_POST['id']);
        $data[] = $nama;
        $data[] = $id;
        $sql = 'UPDATE regional SET  nama_regional=? WHERE id_regional=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=regional&uid='.$id.'&success-edit=edit-data"</script>';
    }

    if (!empty($_GET['stok1'])) {
        $restok1 = htmlentities($_POST['restok1']);
        $id = htmlentities($_POST['id']);
        $dataS[] = $id;
        $sqlS = 'select*from barang WHERE id_barang=?';
        $rowS = $config -> prepare($sqlS);
        $rowS -> execute($dataS);
        $hasil = $rowS -> fetch();

        $stok1 = $restok1 + $hasil['stok1'];

        $data[] = $stok1;
        $data[] = $id;
        $sql = 'UPDATE barang SET stok1=? WHERE id_barang=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=barang&success-stok1=stok1-data"</script>';
    }
    if (!empty($_GET['stok2'])) {
        $restok2 = htmlentities($_POST['restok2']);
        $id = htmlentities($_POST['id']);
        $dataS[] = $id;
        $sqlS = 'select*from barang WHERE id_barang=?';
        $rowS = $config -> prepare($sqlS);
        $rowS -> execute($dataS);
        $hasil = $rowS -> fetch();

        $stok2 = $restok2 + $hasil['stok2'];

        $data[] = $stok2;
        $data[] = $id;
        $sql = 'UPDATE barang SET stok3=? WHERE id_barang=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=barang&success-stok=stok-data"</script>';
    }
    if (!empty($_GET['stok3'])) {
        $restok = htmlentities($_POST['restok3']);
        $id = htmlentities($_POST['id']);
        $dataS[] = $id;
        $sqlS = 'select*from barang WHERE id_barang=?';
        $rowS = $config -> prepare($sqlS);
        $rowS -> execute($dataS);
        $hasil = $rowS -> fetch();

        $stok3 = $restok3 + $hasil['stok3'];

        $data[] = $stok3;
        $data[] = $id;
        $sql = 'UPDATE barang SET stok3=? WHERE id_barang=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=barang&success-stok=stok-data"</script>';
    }
    if (!empty($_GET['stok4'])) {
        $restok4 = htmlentities($_POST['restok4']);
        $id = htmlentities($_POST['id']);
        $dataS[] = $id;
        $sqlS = 'select*from barang WHERE id_barang=?';
        $rowS = $config -> prepare($sqlS);
        $rowS -> execute($dataS);
        $hasil = $rowS -> fetch();

        $stok4 = $restok4 + $hasil['stok4'];

        $data[] = $stok4;
        $data[] = $id;
        $sql = 'UPDATE barang SET stok4=? WHERE id_barang=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=barang&success-stok=stok-data"</script>';
    }
    if (!empty($_GET['stok5'])) {
        $restok5 = htmlentities($_POST['restok5']);
        $id = htmlentities($_POST['id']);
        $dataS[] = $id;
        $sqlS = 'select*from barang WHERE id_barang=?';
        $rowS = $config -> prepare($sqlS);
        $rowS -> execute($dataS);
        $hasil = $rowS -> fetch();

        $stok5 = $restok5 + $hasil['stok5'];

        $data[] = $stok5;
        $data[] = $id;
        $sql = 'UPDATE barang SET stok5=? WHERE id_barang=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=barang&success-stok=stok-data"</script>';
    }
    if (!empty($_GET['stok6'])) {
        $restok6 = htmlentities($_POST['restok6']);
        $id = htmlentities($_POST['id']);
        $dataS[] = $id;
        $sqlS = 'select*from barang WHERE id_barang=?';
        $rowS = $config -> prepare($sqlS);
        $rowS -> execute($dataS);
        $hasil = $rowS -> fetch();

        $stok6 = $restok6 + $hasil['stok6'];

        $data[] = $stok6;
        $data[] = $id;
        $sql = 'UPDATE barang SET stok6=? WHERE id_barang=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=barang&success-stok=stok-data"</script>';
    }
    if (!empty($_GET['stok7'])) {
        $restok7 = htmlentities($_POST['restok7']);
        $id = htmlentities($_POST['id']);
        $dataS[] = $id;
        $sqlS = 'select*from barang WHERE id_barang=?';
        $rowS = $config -> prepare($sqlS);
        $rowS -> execute($dataS);
        $hasil = $rowS -> fetch();

        $stok7 = $restok7 + $hasil['stok7'];

        $data[] = $stok7;
        $data[] = $id;
        $sql = 'UPDATE barang SET stok7=? WHERE id_barang=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=barang&success-stok=stok-data"</script>';
    }
    if (!empty($_GET['stok8'])) {
        $restok8 = htmlentities($_POST['restok8']);
        $id = htmlentities($_POST['id']);
        $dataS[] = $id;
        $sqlS = 'select*from barang WHERE id_barang=?';
        $rowS = $config -> prepare($sqlS);
        $rowS -> execute($dataS);
        $hasil = $rowS -> fetch();

        $stok8 = $restok8 + $hasil['stok8'];

        $data[] = $stok8;
        $data[] = $id;
        $sql = 'UPDATE barang SET stok8=? WHERE id_barang=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=barang&success-stok=stok-data"</script>';
    }
    if (!empty($_GET['stok9'])) {
        $restok9 = htmlentities($_POST['restok9']);
        $id = htmlentities($_POST['id']);
        $dataS[] = $id;
        $sqlS = 'select*from barang WHERE id_barang=?';
        $rowS = $config -> prepare($sqlS);
        $rowS -> execute($dataS);
        $hasil = $rowS -> fetch();

        $stok9 = $restok9 + $hasil['stok9'];

        $data[] = $stok9;
        $data[] = $id;
        $sql = 'UPDATE barang SET stok9=? WHERE id_barang=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=barang&success-stok=stok-data"</script>';
    }
    if (!empty($_GET['stok'])) {
        $restok = htmlentities($_POST['restok']);
        $id = htmlentities($_POST['id']);
        $dataS[] = $id;
        $sqlS = 'select*from barang WHERE id_barang=?';
        $rowS = $config -> prepare($sqlS);
        $rowS -> execute($dataS);
        $hasil = $rowS -> fetch();

        $stok = $restok + $hasil['stok'];

        $data[] = $stok;
        $data[] = $id;
        $sql = 'UPDATE barang SET stok=? WHERE id_barang=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=barang&success-stok=stok-data"</script>';
    }

    if (!empty($_GET['barang'])) {
        $id = htmlentities($_POST['id']);
        $regional = htmlentities($_POST['regional']);
        $kategori = htmlentities($_POST['kategori']);
        $pic = htmlentities($_POST['pic']);
        $email = htmlentities($_POST['email']);
        $dept = htmlentities($_POST['dept']);
        $beli = htmlentities($_POST['beli']);
        $jual = htmlentities($_POST['jual']);
        $satuan = htmlentities($_POST['satuan']);
        $stok = htmlentities($_POST['stok1']);
        $stok = htmlentities($_POST['stok2']);
        $stok = htmlentities($_POST['stok3']);
        $stok = htmlentities($_POST['stok4']);
        $stok = htmlentities($_POST['stok5']);
        $stok = htmlentities($_POST['stok6']);
        $stok = htmlentities($_POST['stok7']);
        $stok = htmlentities($_POST['stok8']);
        $stok = htmlentities($_POST['stok9']);
        $stok = htmlentities($_POST['stok']);
        $tgl = htmlentities($_POST['tgl']);

        $data[] = $regional;
        $data[] = $kategori;
        $data[] = $pic;
        $data[] = $email;
        $data[] = $dept;
        $data[] = $beli;
        $data[] = $jual;
        $data[] = $satuan;
        $data[] = $stok1;
        $data[] = $stok2;
        $data[] = $stok3;
        $data[] = $stok4;
        $data[] = $stok5;
        $data[] = $stok6;
        $data[] = $stok7;
        $data[] = $stok8;
        $data[] = $stok9;
        $data[] = $stok;
        $data[] = $tgl;
        $data[] = $id;
        $sql = 'UPDATE barang SET id_regional=?,id_kategori=?, pic=?, email=?, dept=?, 
				harga_beli=?, harga_jual=?, satuan_barang=?, stok1=?, stok2=?, stok3=?, stok4=?, stok5=?, stok6=?, stok7=?, stok8=?, stok9=?, stok=?, tgl_update=?  WHERE id_barang=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=barang/edit&barang='.$id.'&success=edit-data"</script>';
    }
    
    if (!empty($_GET['detail'])) {
        $id = htmlentities($_POST['id']);
        $tgl = htmlentities($_POST['tgl']);
        $regional = htmlentities($_POST['regional']);
        $kategori = htmlentities($_POST['kategori']);
        $periode = htmlentities($_POST['periode']);
        $kegiatan = htmlentities($_POST['kegiatan']);
        $nama_barang = htmlentities($_POST['nama_barang']);
        $masuk = htmlentities($_POST['masuk']);
        $keluar = htmlentities($_POST['keluar']);
        $sisa_stok = htmlentities($_POST['sisa_stok']);

        $data[] = $regional;
        $data[] = $kategori;
        $data[] = $periode;
        $data[] = $kegiatan;
        $data[] = $nama_barang;
        $data[] = $masuk;
        $data[] = $keluar;
        $data[] = $sisa_stok;
        $data[] = $tgl;
        $data[] = $id;
        $sql = 'UPDATE barang SET id_regional=?,id_kategori=?, periode=?, kegiatan=?, nama_barang=?, 
				masuk=?, keluar=?, sisa_stok=?, tgl_update=?  WHERE id_barang=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=detail/edit&detail='.$id.'&success=edit-data"</script>';
    }

    if (!empty($_GET['gambar'])) {
        $id = htmlentities($_POST['id']);
        set_time_limit(0);
        $allowedImageType = array("image/gif", "image/JPG", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", 'image/webp');
        $filepath = $_FILES['foto']['tmp_name'];
        $fileSize = filesize($filepath);
        $fileinfo = finfo_open(FILEINFO_MIME_TYPE);
        $filetype = finfo_file($fileinfo, $filepath);
        $allowedTypes = [
            'image/png'   => 'png',
            'image/jpeg'  => 'jpg',
            'image/gif'   => 'gif',
            'image/jpg'   => 'jpeg',
            'image/webp'  => 'webp'
        ];
        if(!in_array($filetype, array_keys($allowedTypes))) {
            echo '<script>alert("You can only upload JPG, PNG and GIF file");window.location="../../index.php?page=user"</script>';
            exit;
        }else if ($_FILES['foto']["error"] > 0) {
            echo '<script>alert("You can only upload JPG, PNG and GIF file");window.location="../../index.php?page=user"</script>';
            exit;
        } elseif (!in_array($_FILES['foto']["type"], $allowedImageType)) {
            // echo "You can only upload JPG, PNG and GIF file";
            // echo "<font face='Verdana' size='2' ><BR><BR><BR>
            // 		<a href='../../index.php?page=user'>Back to upform</a><BR>";
            echo '<script>alert("You can only upload JPG, PNG and GIF file");window.location="../../index.php?page=user"</script>';
            exit;
        } elseif (round($_FILES['foto']["size"] / 1024) > 4096) {
            // echo "WARNING !!! Besar Gambar Tidak Boleh Lebih Dari 4 MB";
            // echo "<font face='Verdana' size='2' ><BR><BR><BR>
            // 		<a href='../../index.php?page=user'>Back to upform</a><BR>";
            echo '<script>alert("WARNING !!! Besar Gambar Tidak Boleh Lebih Dari 4 MB");window.location="../../index.php?page=user"</script>';
            exit;
        } else {
            $dir = '../../assets/img/user/';
            $tmp_name = $_FILES['foto']['tmp_name'];
            $name = time().basename($_FILES['foto']['name']);
            if (move_uploaded_file($tmp_name, $dir.$name)) {
                //post foto lama
                $foto2 = $_POST['foto2'];
                //remove foto di direktori
                unlink('../../assets/img/user/'.$foto2.'');
                //input foto
                $id = $_POST['id'];
                $data[] = $name;
                $data[] = $id;
                $sql = 'UPDATE member SET gambar=?  WHERE member.id_member=?';
                $row = $config -> prepare($sql);
                $row -> execute($data);
                echo '<script>window.location="../../index.php?page=user&success=edit-data"</script>';
            } else {
                echo '<script>alert("Masukan Gambar !");window.location="../../index.php?page=user"</script>';
                exit;
            }
        }
    }

    if (!empty($_GET['profil'])) {
        $id = htmlentities($_POST['id']);
        $nama = htmlentities($_POST['nama']);
        $alamat = htmlentities($_POST['alamat']);
        $tlp = htmlentities($_POST['tlp']);
        $email = htmlentities($_POST['email']);
        $nik = htmlentities($_POST['nik']);

        $data[] = $nama;
        $data[] = $alamat;
        $data[] = $tlp;
        $data[] = $email;
        $data[] = $nik;
        $data[] = $id;
        $sql = 'UPDATE member SET nm_member=?,alamat_member=?,telepon=?,email=?,NIK=? WHERE id_member=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=user&success=edit-data"</script>';
    }
    
    if (!empty($_GET['pass'])) {
        $id = htmlentities($_POST['id']);
        $user = htmlentities($_POST['user']);
        $pass = htmlentities($_POST['pass']);

        $data[] = $user;
        $data[] = $pass;
        $data[] = $id;
        $sql = 'UPDATE login SET user=?,pass=md5(?) WHERE id_member=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=user&success=edit-data"</script>';
    }

    if (!empty($_GET['jual'])) {
        $id = htmlentities($_POST['id']);
        $id_barang = htmlentities($_POST['id_barang']);
        $jumlah = htmlentities($_POST['jumlah']);

        $sql_tampil = "select *from barang where barang.id_barang=?";
        $row_tampil = $config -> prepare($sql_tampil);
        $row_tampil -> execute(array($id_barang));
        $hasil = $row_tampil -> fetch();

        if ($hasil['stok'] > $jumlah) {
            $jual = $hasil['harga_jual'];
            $total = $jual * $jumlah;
            $data1[] = $jumlah;
            $data1[] = $total;
            $data1[] = $id;
            $sql1 = 'UPDATE penjualan SET jumlah=?,total=? WHERE id_penjualan=?';
            $row1 = $config -> prepare($sql1);
            $row1 -> execute($data1);
            echo '<script>window.location="../../index.php?page=jual#keranjang"</script>';
        } else {
            echo '<script>alert("Keranjang Melebihi Stok Barang Anda !");
					window.location="../../index.php?page=jual#keranjang"</script>';
        }
    }

    if (!empty($_GET['cari_barang'])) {
        $cari = trim(strip_tags($_POST['keyword']));
        if ($cari == '') {
        } else {
            $sql = "select barang.*, kategori.id_kategori, kategori.nama_kategori
					from barang inner join kategori on barang.id_kategori = kategori.id_kategori
					where barang.id_barang like '%$cari%' or barang.nama_barang like '%$cari%' or barang.merk like '%$cari%'";
            $row = $config -> prepare($sql);
            $row -> execute();
            $hasil1= $row -> fetchAll();
            ?>
		<table class="table table-stripped" width="100%" id="example2">
			<tr>
				<th>ID Cabang</th>
				<th>Nama Regional</th>
                <th>Nama Cabang</th>
                <th>PIC</th>
                <th>alamat Email</th>
                <th>Departement</th>
                <th>PaperBag<br>Kecil</th>
                <th>PaperBag<br>Sedang</th>
                <th>PaperBag<br>Besar</th>
                <th>Notes</th>
                <th>Pulpen</th>
                <th>Stiker kepala<br>Joni</th>
                <th>Gantungan kunci</th>
                <th>Agenda Joni</th>
                <th>Tumbler</th>
				<th>Harga Jual</th>
				<th>Aksi</th>
			</tr>
		<?php foreach ($hasil1 as $hasil) {?>
			<tr>
                
				<td><?php echo $hasil['id_barang'];?></td>
				<td><?php echo $hasil['nama_regional'];?></td>
                <td><?php echo $hasil['nama_kategori'];?></td>
                <td><?php echo $hasil['pic'];?></td>
                <td><?php echo $hasil['email'];?></td>
                <td><?php echo $hasil['dept'];?></td>
                <td>
                    <?php if($isi['stok1'] == '0'){?>
                    <button class="btn btn-danger"> Habis</button>
                    <?php }else{?>
                    <?php echo $isi['stok1'];?>
                    <?php }?>
                </td>
                <td>
                    <?php if($isi['stok2'] == '0'){?>
                    <button class="btn btn-danger"> Habis</button>
                    <?php }else{?>
                    <?php echo $isi['stok2'];?>
                    <?php }?>
                </td>
                <td>
                    <?php if($isi['stok3'] == '0'){?>
                    <button class="btn btn-danger"> Habis</button>
                    <?php }else{?>
                    <?php echo $isi['stok3'];?>
                    <?php }?>
                </td>

                <td>
                    <?php if($isi['stok4'] == '0'){?>
                    <button class="btn btn-danger"> Habis</button>
                    <?php }else{?>
                    <?php echo $isi['stok4'];?>
                    <?php }?>
                </td>
                <td>
                    <?php if($isi['stok5'] == '0'){?>
                    <button class="btn btn-danger"> Habis</button>
                    <?php }else{?>
                    <?php echo $isi['stok5'];?>
                    <?php }?>
                </td>
                <td>
                    <?php if($isi['stok6'] == '0'){?>
                    <button class="btn btn-danger"> Habis</button>
                    <?php }else{?>
                    <?php echo $isi['stok6'];?>
                    <?php }?>
                </td>
                <td>
                    <?php if($isi['stok7'] == '0'){?>
                    <button class="btn btn-danger"> Habis</button>
                    <?php }else{?>
                    <?php echo $isi['stok7'];?>
                    <?php }?>
                </td>
                <td>
                    <?php if($isi['stok8'] == '0'){?>
                    <button class="btn btn-danger"> Habis</button>
                    <?php }else{?>
                    <?php echo $isi['stok8'];?>
                    <?php }?>
                </td>
                <td>
                    <?php if($isi['stok9'] == '0'){?>
                    <button class="btn btn-danger"> Habis</button>
                    <?php }else{?>
                    <?php echo $isi['stok9'];?>
                    <?php }?>
                </td>
				<td><?php echo $hasil['harga_jual'];?></td>
				<td>
				<a href="fungsi/tambah/tambah.php?jual=jual&id=<?php echo $hasil['id_barang'];?>&id_kasir=<?php echo $_SESSION['admin']['id_member'];?>" 
					class="btn btn-success">
					<i class="fa fa-shopping-cart"></i></a></td>
			</tr>
		<?php }?>
		</table>
<?php
        }
    }
}
