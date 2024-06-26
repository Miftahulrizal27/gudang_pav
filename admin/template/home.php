<h3>Dashboard</h3>
<br/>
<?php 
	$sql=" select * from barang where stok <= 3";
	$row = $config -> prepare($sql);
	$row -> execute();
	$r = $row -> rowCount();
	if($r > 0){
?>
<?php
		echo "
		<div class='alert alert-warning'>
			<span class='glyphicon glyphicon-info-sign'></span> Ada <span style='color:red'>$r</span> barang yang Stok tersisa sudah kurang dari 3 items. silahkan pesan lagi !!
			<span class='pull-right'><a href='index.php?page=barang&stok=yes'>Tabel Barang <i class='fa fa-angle-double-right'></i></a></span>
		</div>
		";	
	}
?>
<?php $hasil_barang = $lihat -> barang_row();?>
<?php $hasil_kategori = $lihat -> kategori_row();?>
<?php $stok = $lihat -> barang_stok_row();?>
<?php $jual = $lihat -> jual_row();?>
<div class="row">
    <!--STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-cubes"></i>Data Barang Cabang</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($hasil_barang);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=barang'>Tabel
                    Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fa fa-bookmark"></i> Cabang</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($hasil_kategori);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=kategori'>Tabel
                    Cabang<i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <div class="col-md-3 mb-3"> 
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fa fa-bookmark"></i> Regional</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($hasil_regional);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=regional'>Tabel
                    Regional; <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-upload"></i> Data Nama Barang</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($hasil_barang['nama_barang']);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=nama_barang'>Tabel
                    Nama Barang<i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3--><div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-upload"></i> Data Barang Masuk</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($jual['stok']);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=laporan'>Tabel
                    laporan <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
       <!-- STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-upload"></i> Data Barang Keluar</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($jual['stok']);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=jual'>Tabel
                    laporan <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Stok Barang paper bag k</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($stok['jml']);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=barang'>Tabel
                    Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Stok Barang paper bag s</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($stok['jml']);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=barang'>Tabel
                    Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Stok Barang paper bag b</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($stok['jml']);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=barang'>Tabel
                    Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Stok Barang notes</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($stok['jml']);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=barang'>Tabel
                    Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Stok Barang pulpen</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($stok['jml']);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=barang'>Tabel
                    Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Stok Barang stiker</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($stok['jml']);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=barang'>Tabel
                    Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Stok Barang gantungan kunci</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($stok['jml']);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=barang'>Tabel
                    Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Stok Barang agenda</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($stok['jml']);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=barang'>Tabel
                    Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
    <!-- STATUS cardS -->
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Stok Barang tumbler</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($stok['jml']);?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=barang'>Tabel
                    Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
        <!--/grey-card -->
    </div><!-- /col-md-3-->
  
</div>