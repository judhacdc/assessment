<?php
include'../koneksi.php';

$id_asesor=$_POST['idasesor'];
$nama=$_POST['namaasesor'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$status=$_POST['status'];

If(isset($_POST['simpan'])){
	
		extract($_POST);
	mysqli_query($db,
		"UPDATE asesor
		SET namaasesor='$nama',jeniskelaminasesor='$jenis_kelamin',alamatasesor='$alamat',statusasesor = '$status'
		WHERE idasesor='$id_asesor'"
	);
	header("location:../pages/asesor.php");
}
