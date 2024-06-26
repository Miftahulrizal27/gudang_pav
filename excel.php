<?php 
	@ob_start();
	session_start();
	if(!empty($_SESSION['admin'])){ }else{
		echo '<script>window.location="login.php";</script>';
        exit;
	}
    header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
    header("Content-Disposition: attachment; filename=data-laporan-".date('Y-m-d').".xls");  //File name extension was wrong
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private",false); 

    require 'config.php';
    include $view;
    $lihat = new view($config);

    $bulan_tes =array(
        '01'=>"Januari",
        '02'=>"Februari",
        '03'=>"Maret",
        '04'=>"April",
        '05'=>"Mei",
        '06'=>"Juni",
        '07'=>"Juli",
        '08'=>"Agustus",
        '09'=>"September",
        '10'=>"Oktober",
        '11'=>"November",
        '12'=>"Desember"
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang Merchendise cabang-cabang JNE</title>
</head>
<body>
	<!-- view barang -->	
    <!-- view barang -->	
    <div class="modal-view">
        <h3 style="text-align:center;"> 
                <?php if(!empty(htmlentities($_GET['cari']))){ ?>
                    Data Laporan Barang Keluar<?= $bulan_tes[htmlentities($_GET['bln'])];?> <?= htmlentities($_GET['thn']);?>
                <?php }elseif(!empty(htmlentities($_GET['hari']))){?>
                    Data Laporan Barang Keluar<?= htmlentities($_GET['tgl']);?>
                <?php }else{?>
                    Data Laporan Barang Keluar<?= $bulan_tes[date('m')];?> <?= date('Y');?>
                <?php }?>
        </h3>
        <table border="1" width="100%" cellpadding="3" cellspacing="4">
            <thead>
                <tr bgcolor="yellow">
                    <th> No</th>
                    <th> ID Barang</th>
                    <th> Regional</th>
                    <th> Cabang</th>
                    <th> PIC</th> 
                    <th> Alamat Email</th>
                    <th> departement</th>
                    <th> Kegiatan/Event</th>
                    <th> PaperBag<br>Kecil</th>
                    <th> PaperBag<br>Sedang</th>
                    <th> PaperBag<br>Besar</th>
                    <th> Notes</th>
                    <th> Pulpen</th>
                    <th> Stiker kepala<br>Joni</th>
                    <th> Gantungan kunci</th>
                    <th> Agenda Joni</th>
                    <th> Tumbler</th>
                    <th> Jumlah</th>
                    <th> Modal</th>
                    <th> Total</th>
                    <th> Admin</th>
                    <th> Tanggal Input</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no=1; 
                    if(!empty(htmlentities($_GET['cari']))){
                        $periode = htmlentities($_GET['bln']).'-'.htmlentities($_GET['thn']);
                        $no=1; 
                        $jumlah = 0;
                        $bayar = 0;
                        $hasil = $lihat -> periode_jual($periode);
                    }elseif(!empty(htmlentities($_GET['hari']))){
                        $hari = htmlentities($_GET['tgl']);
                        $no=1; 
                        $jumlah = 0;
                        $bayar = 0;
                        $hasil = $lihat -> hari_jual($hari);
                    }else{
                        $hasil = $lihat -> jual();
                    }
                ?>
                <?php 
                    $bayar = 0;
                    $jumlah = 0;
                    $modal = 0;
                    foreach($hasil as $isi){ 
                        $bayar += $isi['total'];
                        $modal += $isi['harga_beli'] * $isi['jumlah'];
                        $jumlah += $isi['jumlah'];
                ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $isi['id_barang'];?></td>
                    <td><?php echo $isi['nama_regional'];?></td>
                    <td><?php echo $isi['nama_cabang'];?></td>
                    <td><?php echo $isi['pic'];?></td>
                    <td><?php echo $isi['email'];?></td>
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
                    <td><?php echo $isi['jumlah'];?> </td>
                    <td>Rp.<?php echo number_format($isi['harga_beli']* $isi['jumlah']);?>,-</td>
                    <td>Rp.<?php echo number_format($isi['total']);?>,-</td>
                    <td><?php echo $isi['nm_member'];?></td>
                    <td><?php echo $isi['tanggal_input'];?></td>
                </tr>
                <?php $no++; }?>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td><b>Total Terjual</b></td>
                    <td><b><?php echo $jumlah;?></b></td>
                    <td><b><?php echo $jumlah;?></b></td>
                    <td><b><?php echo $jumlah;?></b></td>
                    <td><b><?php echo $jumlah;?></b></td>
                    <td><b><?php echo $jumlah;?></b></td>
                    <td><b><?php echo $jumlah;?></b></td>
                    <td><b><?php echo $jumlah;?></b></td>
                    <td><b><?php echo $jumlah;?></b></td>
                    <td><b><?php echo $jumlah;?></b></td>
                    <td><b><?php echo $jumlah;?></b></td>
                    <td><b>Rp.<?php echo number_format($modal);?>,-</b></td>
                    <td><b>Rp.<?php echo number_format($bayar);?>,-</b></td>
                    <td><b>Keuntungan</b></td>
                    <td><b>
                        Rp.<?php echo number_format($bayar-$modal);?>,-</b></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
