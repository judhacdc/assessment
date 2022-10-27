<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="shortcut icon" href="img/icon.svg">
	<title>Project</title>
</head>

<body>
	<header class="top-head">
		<div class="container-manual">
			<div class="medsos">
				<ul>
					<li><a class="icon" href="#"><i class="fab fa-facebook"></i></a></li>
					<li><a class="icon" href="#"><i class="fab fa-instagram"></i></a></li>
					<li><a class="icon" href="#"><i class="fab fa-youtube"></i></a></li>
					<li><a class="bnsp" href="#">BNSP-LSP-1565-IDa</a></li>
				</ul>
			</div>
		</div>
	</header>
	<div class="navbar">
		<div class="container-manual">
			<label>LOGO</label>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Profil</a>
					<ul class="dropdown">
						<li><a href="#">lembaga sertifikasi</a></li>
						<li><a href="visi-misi.html">visi & misi</a></li>
					</ul>
				</li>
				<li><a href="#">Sertifikasi</a>
					<ul class="dropdown">
						<li><a href="skema-sertifikasi.php">skema sertifikasi</a></li>
						<li><a href="pages/asesor.php">daftar asessor</a></li>
					</ul>
				</li>
				<li><a href="#">Media</a></li>
				<li><a href="registrasi.html">Registrasi</a></li>
			</ul>
		</div>
	</div>
	<div class="container-manual">
		<section class="konten">
			<h1 class="judul" style="text-align: center;">Pendaftaran Asesor</h1>
			<div class="daftar">
				<?php
				$umur = $_POST['umur'];
				$valid = false;
				function cekUmur($usia)
				{
					if ($usia > 21) {
						echo "<div style='font-size: 210px; text-align: center;margin-bottom: 40px;color: green'><i class='fas fa-check-circle'></i></div><h2>registrasi berhasil!</h2><br><p>Terimakasih, registrasi anda berhasil di proses, tunggu informasinya yang akan dikirimkan di email anda untuk proses seleksi dan penerimaan</p>";
					} else {
						echo "<div style='font-size: 210px; text-align: center;margin-bottom: 40px;color: red'><i class='fas fa-times-circle'></i></div><h2>REGISTRASI GAGAL!</h2><br><p>Mohon maaf registrasi anda tidak dapat diproses dikarenakan anda masih belum memenuhi kriteria syarat umur menjadi seorang asesor</p>";
					}
				}
				cekUmur($umur);
				?>
			</div>
		</section>
	</div>
	<footer class="footer">
		<div class="container-manual">
			<div class="baris-footer">
				<div class="kolom-footer">
					<h4><a href="#">Mitra LSP</a></h4>
					<ul>
						<li><a href="#">LSP MIGAS</a></li>
						<li><a href="#">LSP Manajemen Resiko</a></li>
						<li><a href="#">LSP STP Bandung</a></li>
						<li><a href="#">LSP Kimia Industri</a></li>
						<li><a href="#">Indonesia Kompeten</a></li>
					</ul>
				</div>
				<div class="kolom-footer">
					<h4><a href="#">Link Popular</a></h4>
					<ul>
						<li><a href="#">Training Online</a></li>
						<li><a href="#">Pelatihan Asesor BNSP</a></li>
						<li><a href="#">Sertifikasi Digital Marketing</a></li>
						<li><a href="#">Registrasi Sertifikasi</a></li>
						<li><a href="#">Pemegang Sertifikat</a></li>
					</ul>
				</div>
				<div class="kolom-footer">
					<h4><a href="#">Kontak</a></h4>
					<ul>
						<li>
							<i class="fas fa-map-marked-alt"></i>
							<a href="#">Jakarta : Pulogebang Indah Blok J11 No 34, Jakarta Timur, 021-22859837</a>
						</li>
						<li>
							<i class="fas fa-map-marked-alt"></i>
							<a href="#">Yogyakarta : Jalan Demangan Baru No. 8, Catur Tunggal, Depok, Demangan Baru, DIY</a>
						</li>
						<li>
							<i class="fas fa-map-marked-alt"></i>
							<a href="#">Bogor : Pusat Inovasi LIPI Tenant A3, Cibinong, 0817 401157g</a>
						</li>
						<li>
							<i class="fas fa-envelope-open-text"></i>
							<a href="#">info@lspdigital.id</a>
						</li>
						<li>
							<i class="fab fa-whatsapp"></i>
							<a href="#">085329489247</a>
						</li>
						<li>
							<i class="fab fa-whatsapp"></i>
							<a href="#">082122064698</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>