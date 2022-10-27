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
</head>

<body>
	<div class="conntainer" style="margin-left: 200px;">
		<div style="margin-right: 200px;">
			<br>
			<h3>Tambah Data Asesor</h3>
			<br>
			<form action="../proses/asesor-create-proses.php" method="post" class="form" enctype="multipart/form-data">
				<div class="input-field">
					<label for="idasesor">ID asesor</label>
					<input class="form-control mb-2" type="text" name="idasesor" placeholder="Masukkan ID asesor">
				</div>
				<div class="input-field">
					<label for="namaasesor">Nama Asesor</label>
					<input class="form-control mb-2" type="text" name="namaasesor" placeholder="Masukkan Nama Asesor">
				</div>
				<div class="input-field">
					<label for="jenis_kelamin">Jenis Kelamin</label><br>
					<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</input><br>
					<input type="radio" name="jenis_kelamin" value="Perempuan" class="mb-2">Perempuan</input>
				</div>
				<div class="input-field">
					<label for="alamat">Alamat</label>
					<textarea name="alamat" class="form-control mb-2" placeholder="Masukkan Alamat Lengkap"></textarea>
				</div>
				<div class="input-field">
					<label for="alamat">Status</label>
					<input class="form-control mb-2" type="text" name="statusasesor" placeholder="Masukkan Status Asesor">
				</div>
				<div class="mt-2">
					<input type="submit" name="simpan" value="Simpan" class="btn btn-primary mt-3" style="width: 100%;">
				</div>
			</form>
		</div>
	</div>
</body>

</html>