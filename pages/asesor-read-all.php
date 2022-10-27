<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="container">
	<br><br>
	<h3>Data Asesor</h3>
	<hr>
	<div>
		<table class="table table-bordered table-striped table-hover">
			<tr>
				<th class="bg-primary text-white">No</th>
				<th class="bg-primary text-white">ID Asesor</th>
				<th class="bg-primary text-white">Nama</th>
				<th class="bg-primary text-white">Jenis Kelamin</th>
				<th class="bg-primary text-white">Alamat</th>
				<th class="bg-primary text-white">Status</th>
			</tr>
			<?php
			$nomor = 1;
			include '../koneksi.php';
			$sql = "SELECT * FROM asesor";
			$q_tampil_asesor = mysqli_query($db, $sql);
			if (mysqli_num_rows($q_tampil_asesor) > 0) {
				while ($r_tampil_asesor = mysqli_fetch_array($q_tampil_asesor)) {
			?>
					<tr>
						<td><?php echo $nomor ?></td>
						<td><?php echo $r_tampil_asesor['idasesor'] ?></td>
						<td><?php echo $r_tampil_asesor['namaasesor'] ?></td>
						<td><?php echo $r_tampil_asesor['jeniskelaminasesor'] ?></td>
						<td><?php echo $r_tampil_asesor['alamatasesor'] ?></td>
						<td><?php echo $r_tampil_asesor['statusasesor'] ?></td>
					</tr>
			<?php
					$nomor++;
				}
			} else {
				echo "Data tidak ditemukan";
			}
			?>
		</table>
	</div>
	<script>
		window.print();
	</script>
</div>