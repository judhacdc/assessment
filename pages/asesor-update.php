<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" href="img/icon.svg">
	<title>Project</title>
	<style>
		.isian-formulir {
			margin-bottom: 10px;
			border: none;
			width: 90%;
			height: 100%;
			padding-left: 10px;
		}

		table,
		h3 {

			margin-left: 12%;
		}

		table {
			width: 900px;
			border: 1px solid black;
		}

		tr:hover {
			background-color: rgba(5, 117, 121, 0.224);
		}
	</style>
</head>

<body>
	<?php include '../koneksi.php';
	$id_asesor = $_GET['idasesor'];
	$sql = "SELECT * FROM asesor WHERE idasesor = '$id_asesor'";
	$q_tampil_asesor = mysqli_query($db, $sql);
	$r_tampil_asesor = mysqli_fetch_array($q_tampil_asesor);
	?>

	<div class="container">
		<br><br>
		<h3>Edit Data Asesor</h3>
		<form action="../proses/asesor-update-proses.php" method="post" enctype="multipart/form-data">
			<table class="table table-bordered col-9" id="tabel-input">
				<tr>
					<th class="col-4 label-formulir">&nbsp;&nbsp;ID Asesor</th>
					<td class="isian-formulir"><input type="text" name="idasesor" value="<?php echo $r_tampil_asesor['idasesor']; ?>" readonly="readonly" class="isian-formulir"></td>
				</tr>
				<tr>
					<th class="col-4 label-formulir">&nbsp;&nbsp;Nama</th>
					<td class="isian-formulir"><input type="text" name="namaasesor" value="<?php echo $r_tampil_asesor['namaasesor']; ?>" class="isian-formulir"></td>
				</tr>
				<tr>
					<th class="col-4 label-formulir">&nbsp;&nbsp;Jenis Kelamin</th>
					<td class="isian-formulir"><input type="text" name="jenis_kelamin" value="<?php echo $r_tampil_asesor['jeniskelaminasesor']; ?>" class="isian-formulir"></td>
				</tr>
				<tr>
					<th class="col-4 label-formulir">&nbsp;&nbsp;Alamat</th>
					<td class="isian-formulir"><input type="text" name="alamat" value="<?php echo $r_tampil_asesor['alamatasesor']; ?>" class="isian-formulir"></td>
				</tr>
				<tr>
					<th class="col-4 label-formulir">&nbsp;&nbsp;Status</th>
					<td class="isian-formulir"><input type="text" name="status" value="<?php echo $r_tampil_asesor['statusasesor']; ?>" class="isian-formulir"></td>
				</tr>
			</table>
			<p class="text-center"><input class="text-center btn btn-primary text-white" type="submit" name="simpan" value="Simpan"></p>
		</form>
	</div>
</body>

</html>