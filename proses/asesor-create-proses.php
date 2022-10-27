<?php
include '../koneksi.php';
$id_asesor = $_POST['idasesor'];
$nama = $_POST['namaasesor'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$status = $_POST['statusasesor'];

if (isset($_POST['simpan'])) {
	extract($_POST);
	$sql = "INSERT INTO asesor
			VALUES ('$id_asesor', '$nama', '$jenis_kelamin', '$alamat', '$status')";
	$query = mysqli_query($db, $sql);

	header("location:../pages/asesor.php");
}
?>