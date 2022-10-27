<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="style/style-index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" href="img/icon.svg">
	<title>Project</title>
	<style>
		.crud-btn {
			padding: 4px;
			background-color: rgba(2, 177, 2, 0.1);
			border-radius: 4px;
		}

		.crud-btn:hover {
			background-color: rgba(1, 100, 1, 0.2);
		}
	</style>
</head>

<body>
	<?php include '../koneksi.php' ?>
	<br>
	<div class="label-page d-flex">
		<h3 class="col-10">Tampil Data Asesor</h3>
		<p class="btn btn-primary"><a style="text-decoration: none;" class="text-white" href="../index.php">Back to home</a></p>
	</div>
	<br>
	<div class="d-flex">
		<span class="col-8">
			<a class="btn btn-primary text-white" href="asesor-create.php">Tambah Asesor</a>
		</span>
		<span class="col-11">
			<form method="post" class="form-inline">
				<input type="text" class="form-control col-3 ml-2" name="cari" placeholder="Masukkan kata kunci">
				<button type="submit" class="btn btn-primary ml-1" name="search" style="padding-left: 2%; padding-right: 2%;">Cari</button>
			</form>
		</span>
	</div>
	<br>
	<table class="table table-bordered table-striped table-hover">
		<tr class="bg-primary text-white">
			<th>No</th>
			<th>ID asesor</th>
			<th>Nama asesor</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		<?php
		$batas = 5;
		extract($_GET);
		if (empty($hal)) {
			$posisi = 0;
			$hal = 1;
			$nomor = 1;
		} else {
			$posisi = ($hal - 1) * $batas;
			$nomor = $posisi + 1;
		}
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$pencarian = trim(mysqli_real_escape_string($db, $_POST['cari']));
			if ($pencarian != "") {
				$sql = "SELECT * FROM asesor WHERE idasesor LIKE '%$pencarian%'
					OR namaasesor LIKE '%$pencarian%'
					OR jeniskelaminasesor LIKE '%$pencarian%'
					OR alamatasesor LIKE '%$pencarian%'";
				$query = $sql;
				$queryJml = $sql;
			} else {
				$query = "SELECT * FROM asesor LIMIT $posisi, $batas";
				$queryJml = "SELECT * FROM asesor";
				$no = $posisi * 1;
			}
			//escape
		} else {
			$query = "SELECT * FROM asesor LIMIT $posisi, $batas"; //menampilkan dengan batas
			$queryJml = "SELECT * FROM asesor"; //menampilkan all
			$no = $posisi * 1;
		}

		$q_tampil_asesor = mysqli_query($db, $query);
		if (mysqli_num_rows($q_tampil_asesor) > 0) {
			while ($r_tampil_asesor = mysqli_fetch_array($q_tampil_asesor)) {
				//tampilan

		?>
				<tr>
					<td><?php echo $nomor ?></td>
					<td><?php echo $r_tampil_asesor['idasesor'] ?></td>
					<td><?php echo $r_tampil_asesor['namaasesor'] ?></td>
					<td><?php echo $r_tampil_asesor['jeniskelaminasesor'] ?></td>
					<td><?php echo $r_tampil_asesor['alamatasesor'] ?></td>
					<td>
						<span><a class="crud-btn text-primary" style="text-decoration: none;" href="asesor-read.php?idasesor=<?php echo $r_tampil_asesor['idasesor'] ?>">Detail</a></span>
						<span><a class="crud-btn text-primary" style="text-decoration: none;" href="asesor-update.php?idasesor=<?php echo $r_tampil_asesor['idasesor'] ?>">Edit</a></span>
						<span><a class="crud-btn text-primary" style="text-decoration: none;" href="../proses/asesor-delete-proses.php?idasesor=<?php echo $r_tampil_asesor['idasesor'] ?>" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')">Hapus</a></span>
					</td>
				</tr>
		<?php $nomor++;
			}
		} else {
			echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
		}
		?>
	</table>
	<?php
	if (isset($_POST['cari'])) {
		if ($_POST['cari'] != '') {
			echo "<div style:'float:left'>";
			$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
			echo "Data Hasil Pencarian: <b>" . $jml . "</b>";
			echo "</div>";
		}
	} else {
		echo "<div style:'float:left'>";
		$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
		echo "Jumlah Data: <b>" . $jml . "</b>";
		echo "</div>";
	?>
		<div class="pagination" style="float: right;">
			<?php
			$jml_hal = ceil($jml / $batas);
			for ($i = 1; $i <= $jml_hal; $i++) {
				if ($i != $hal) {
					echo "<a href='?p=asesor&hal=$i'>$i</a>";
				} else {
					echo "<a class='active'>$i</a>";
				}
			}
			?>
			<a target="_blank" href="asesor-read-all.php"><img src="../images/printer1.png" height="30px"></a>
		</div>
		<br><br>
	<?php
	}
	?>

</body>

</html>