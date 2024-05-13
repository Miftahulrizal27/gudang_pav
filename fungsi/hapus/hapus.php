<?php

session_start();
if (!empty($_SESSION['admin'])) {
    require '../../config.php';
    if (!empty(htmlentities($_GET['kategori']))) {
        $id= htmlentities($_GET['id']);
        $data[] = $id;
        $sql = 'DELETE FROM kategori WHERE id_kategori=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=kategori&&remove=hapus-data"</script>';
    }
    if (!empty(htmlentities($_GET['regional']))) {
        $id= htmlentities($_GET['id']);
        $data[] = $id;
        $sql = 'DELETE FROM regional WHERE id_regional=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=regional&&remove=hapus-data"</script>';
    }

    if (!empty(htmlentities($_GET['barang']))) {
        $id= htmlentities($_GET['id']);
        $data[] = $id;
        $sql = 'DELETE FROM barang WHERE id_barang=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=barang&&remove=hapus-data"</script>';
    }

    if (!empty(htmlentities($_GET['jual']))) {
        $dataI[] = htmlentities($_GET['brg']);
        $sqlI = 'select*from barang where id_barang=?';
        $rowI = $config -> prepare($sqlI);
        $rowI -> execute($dataI);
        $hasil = $rowI -> fetch();

        /*$jml = htmlentities($_GET['jml']) + $hasil['stok'];

        $dataU[] = $jml;
        $dataU[] = htmlentities($_GET['brg']);
        $sqlU = 'UPDATE barang SET stok =? where id_barang=?';
        $rowU = $config -> prepare($sqlU);
        $rowU -> execute($dataU);*/

        $id = htmlentities($_GET['id']);
        $data[] = $id;
        $sql = 'DELETE FROM penjualan WHERE id_penjualan=?';
        $row = $config -> prepare($sql);
        $row -> execute($data);
        echo '<script>window.location="../../index.php?page=jual"</script>';
    }

    if (!empty(htmlentities($_GET['penjualan']))) {
        $sql = 'DELETE FROM penjualan';
        $row = $config -> prepare($sql);
        $row -> execute();
        echo '<script>window.location="../../index.php?page=jual"</script>';
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

    
    if (!empty(htmlentities($_GET['laporan']))) {
        $sql = 'DELETE FROM nota';
        $row = $config -> prepare($sql);
        $row -> execute();
        echo '<script>window.location="../../index.php?page=laporan&remove=hapus"</script>';
    }
}
