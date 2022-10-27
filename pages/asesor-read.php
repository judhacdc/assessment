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
			width: 500px;
			height: 100%;
			padding-left: 10px;
		}

		table,
		h3 {
			margin-right: 300px;
		}

		table {
			border: 1px solid black;
			width: 500px;
		}

		tr:hover {
			background-color: rgba(17, 247, 17, 0.324);
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<div class="container-manual" id="content">
		<br>
		<div>
			<h3>Detil Asesor</h3>
		</div>
		<hr>
		<div>
			<table class="table table-hover table-stiped table-bordered">
				<tr>
					<th>ID Asesor</th>
					<td><?php echo $r_tampil_asesor['idasesor'] ?></td>
				</tr>
				<tr>
					<th>Nama</th>
					<td><?php echo $r_tampil_asesor['namaasesor'] ?></td>
				</tr>
				<tr>
					<th>Jenis Kelamin</th>
					<td><?php echo $r_tampil_asesor['jeniskelaminasesor'] ?></td>
				</tr>
				<tr>
					<th>Alamat</th>
					<td><?php echo $r_tampil_asesor['alamatasesor'] ?></td>
				</tr>
				<tr>
					<th>Status</th>
					<td><?php echo $r_tampil_asesor['statusasesor'] ?></td>
				</tr>
			</table>
		</div>
		<div style=" float:right;">
			<span class="btn btn-primary"><a href="asesor.php" style="text-decoration: none; color: white;">Kembali</a></span>
		</div>
		<br>
	</div>
</body>

</html>