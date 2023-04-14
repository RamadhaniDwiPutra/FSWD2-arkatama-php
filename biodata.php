<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
    <link rel="stylesheet" href="biodata.css">
</head>
<body>
<?php
		// Set variable untuk biodata
		$nama = "Ramadhani Dwi Putra";
		$tanggal_lahir = "10 Desember 2000";
		$jenis_kelamin = "Laki - Laki";
		$alamat = "Jl Singkarak Ujung Kp.Sidamukti Gg.H.Unen No.65";
		$riwayat_pendidikan = "SMAN 13 Depok, Universitas Gunadarma";
		$hobby = "Sepakbola, Badminton";
	?>
	<h1>Biodata Diri</h1>
	<img src="../biodatadiri/img/foto1.jpg" alt="Foto Diri">
	<br>
	<table>
		<tr>
				<th>Nama</th>
				<td><?php echo $nama; ?></td>
		</tr>
		<tr>
				<th>Tempat, Tanggal Lahir</th>
				<td><?php echo $tanggal_lahir; ?></td>
		</tr>
		<tr>
				<th>Jenis Kelamin</th>
				<td><?php echo $jenis_kelamin; ?></td>
		</tr>
		<tr>
				<th>Alamat</th>
				<td><?php echo $alamat; ?></td>
		</tr>
		<tr>
				<th>Riwayat Pendidikan</th>
				<td><?php echo $riwayat_pendidikan; ?></td>
		</tr>
		<tr>
				<th>Hobby</th>
				<td><?php echo $hobby; ?></td>
		</tr>
	</table>
</body>
</html>