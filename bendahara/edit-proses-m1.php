<?php  

include "../fungsi/koneksi.php";

if(isset($_POST['update'])) {
	
	$kode_brg = $_POST['kode_brg'];
	$nama_brg = $_POST['nama_brg'];
	$hargabarang = $_POST['hargabarang'];
	$id_jenis = $_POST['id_jenis'];
	$satuan = $_POST['satuan'];
	$stok = $_POST['jumlah'];
	$keterangan = $_POST['keterangan'];
	
	$brg_keluar = $_POST['brg_keluar'];

	$sisa = (intval($stok))- (intval($brg_keluar));

	$query = mysqli_query($koneksi, "UPDATE stokbarang SET nama_brg='$nama_brg', id_jenis='$id_jenis', satuan='$satuan', hargabarang='$hargabarang', stok='$stok',sisa='$sisa', keterangan='$keterangan' WHERE kode_brg ='$kode_brg' ");
	if ($query) {
		/*echo '<script language="javascript">alert("Data Berhasil Di Ubah !!!");
        document.location="index.php?p=material-m1&id_jenis=1";</script>';*/

        echo '<script language="javascript">alert("Data Berhasil Di Ubah !!!"); 
        document.location="index.php?p=material-m1&id_jenis=1&pas=atk";</script>';
	} else {
		echo 'error' . mysqli_error($koneksi);
	}

}



?>