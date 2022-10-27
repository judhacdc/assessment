<?php
include '../koneksi.php';
$id_asesor = $_GET['idasesor'];
mysqli_query($db, 
"DELETE FROM asesor WHERE idasesor = '$id_asesor'"
);

header("location: ../pages/asesor.php");
?>