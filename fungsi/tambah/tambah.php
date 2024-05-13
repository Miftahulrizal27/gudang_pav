<?php

session_start();
if (!empty($_SESSION['admin'])) {
    require '../../config.php';
    if (!empty($_GET['kategori'])) {
        $nama= htmlentities(htmlentities($_POST['kategori']));
        $tgl= date("j F Y, G:i");
        $data[] = $nama;
        $data[] = $tgl;
        $sql = 'INSERT INTO kategori (nama_kategori,tgl_input) VALUES(?,?)';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=kategori&&success=tambah-data"</script>';
    }
    if (!empty($_GET['regional'])) {
        $nama= htmlentities(htmlentities($_POST['regional']));
        $tgl= date("j F Y, G:i");
        $data[] = $nama;
        $data[] = $tgl;
        $sql = 'INSERT INTO regional (nama_regional,tgl_input) VALUES(?,?)';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=regional&&success=tambah-data"</script>';
    }

    if (!empty($_GET['barang'])) {
        $id = htmlentities($_POST['id']);
        $regional = htmlentities($_POST['regional']);
        $kategori = htmlentities($_POST['kategori']);
        $pic = htmlentities($_POST['pic']);
        $email = htmlentities($_POST['email']);
        $dept = htmlentities($_POST['dept']);
        $stok1 = htmlentities($_POST['stok1']);
        $stok2 = htmlentities($_POST['stok2']);
        $stok3 = htmlentities($_POST['stok3']);
        $stok4 = htmlentities($_POST['stok4']);
        $stok5 = htmlentities($_POST['stok5']);
        $stok6 = htmlentities($_POST['stok6']);
        $stok7 = htmlentities($_POST['stok7']);
        $stok8 = htmlentities($_POST['stok8']);
        $stok9 = htmlentities($_POST['stok9']);
        $beli = htmlentities($_POST['beli']);
        $jual = htmlentities($_POST['jual']);
        $satuan = htmlentities($_POST['satuan']);
        $stok = htmlentities($_POST['stok']);
        $tgl = htmlentities($_POST['tgl']);

        $data[] = $id;
        $data[] = $regional;
        $data[] = $kategori;
        $data[] = $pic;
        $data[] = $email;
        $data[] = $dept;
        $data[] = $stok1;
        $data[] = $stok2;
        $data[] = $stok3;
        $data[] = $stok4;
        $data[] = $stok5;
        $data[] = $stok6;
        $data[] = $stok7;
        $data[] = $stok8;
        $data[] = $stok9;
        $data[] = $beli;
        $data[] = $jual;
        $data[] = $satuan;
        $data[] = $stok;
        $data[] = $tgl;
        $sql = 'INSERT INTO barang (id_barang,id_regional,id_kategori,pic,email,dept,stok1,stok2,stok3,stok4,stok5,stok6,stok7,stok8,stok9,harga_beli,harga_jual,satuan_barang,stok,tgl_input) 
			    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=barang&success=tambah-data"</script>';
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
        echo '<script>window.location="../../index.php?page=barang/edit&barang='.$id.'&success=edit-data"</script>';
    }
    
    if (!empty($_GET['jual'])) {
        $id = $_GET['id'];

        // get tabel barang id_barang
        $sql = 'SELECT * FROM barang WHERE id_barang = ?';
        $row = $config->prepare($sql);
        $row->execute(array($id));
        $hsl = $row->fetch();

        if ($hsl['stok'] > 0) {
            $kasir =  $_GET['id_kasir'];
            $jumlah = 1;
            $total = $hsl['harga_jual'];
            $tgl = date("j F Y, G:i");

            $data1[] = $id;
            $data1[] = $kasir;
            $data1[] = $jumlah;
            $data1[] = $total;
            $data1[] = $tgl;

            $sql1 = 'INSERT INTO penjualan (id_barang,id_member,jumlah,total,tanggal_input) VALUES (?,?,?,?,?)';
            $row1 = $config -> prepare($sql1);
            $row1 -> execute($data1);

            echo '<script>window.location="../../index.php?page=jual&success=tambah-data"</script>';
        } else {
            echo '<script>alert("Stok Barang Anda Telah Habis !");
					window.location="../../index.php?page=jual#keranjang"</script>';
        }
    }
}
