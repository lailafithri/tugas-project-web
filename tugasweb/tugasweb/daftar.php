<!DOCTYPE html>
<html>
<head>
	<title>Tugas Web</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
	<script language="javascript" src="../Js/biodata.js"> </script>
</head>
<body>

	<div class="container">
		<div class="header">
			
		</div>
		<div class="menu">
			<ul>
				<li><a href="biodata.php">Biodata</a></li>
				<li><a href="materi.html">Materi Kuliah</a></li>
				<li><a href="pencarian.html">Pencarian</a></li>
			</ul>
		</div>
		<div class="konten">
			
			<center><h1>BIODATA MAHASISWA</h1>
			<img src="images.jpg"

			<div class="konten">

		<table>
			<form method="post" action="biodata.php" enctype="multipart/form-data">
				<tr>
					<td><label>Nama</label></td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td><label>Tempat / Tanggal lahir</label></td>
					<td><input type="text" name="ttl"></td>
				</tr>
				<tr>
					<td><label>Alamat</label></td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td><label>Fakultas</label></td>
					<td><input type="text" name="fakultas"></td>
				</tr>
				<tr>
					<td><label>Jurusan</label></td>
					<td><input type="text" name="jurusan"></td>
				</tr>
				<tr>
					<td><label>Hobby</label></td>
					<td><input type="text" name="hobby"></td>
				</tr>
				<tr>
					<td><label>Cita-cita</label></td>
					<td><input type="text" name="cita"></td>
				</tr>
				<tr>
					<td><label>Bukti Transaksi</label></td>
      				<td><input type="file" name="file"></td>
				</tr>
					<td><button type="submit" name="submit">submit</button></td>
			</form>
			

		</table>



		</div>
		
		<div class="footer">
			
		</div>
	</div>

</body>
</html>