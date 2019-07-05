<?php  

if(!isset($_POST['submit'])):
	echo "<script>alert('Anda harus masukkan data dahulu!'); document.location.href = 'daftar.php';</script>";

else:
	$fp = fopen("data-pendaftaran.txt","w"); //buka file database.txt untuk memulai sebelum dibaca + ditulis

	$nama = $_POST['nama']; 
	$ttl = $_POST['ttl']; 
	$alamat = $_POST['alamat'];
	$fakultas = $_POST['fakultas']; 
	$jurusan = $_POST['jurusan']; 
	$hobi = $_POST['hobby'];
	$cita = $_POST['cita'];

	$foto = $_FILES["file"]["name"]; 
	$tempat = $_FILES["file"]["tmp_name"]; 

	fputs($fp,"$nama|$ttl|$alamat|$fakultas|$jurusan|$hobi|$cita@$foto\n");
	fclose($fp);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Tugas Web</title><!-- tag untuk judul-->
	<link rel="stylesheet" type="text/css" href="tampilan.css">
	<script language="javascript" src="../Js/biodata.js"> </script>
</head>
<body>

	<div class="container">
		<div class="header">
			
		</div>
		<div class="menu">
			<ul>
				<li><a href="biodata.html">Biodata</a></li>
				<li><a href="materi.html">Materi Kuliah</a></li>
				<li><a href="pencarian.html">Pencarian</a></li>
			</ul>
		</div>
		<div class="konten">
			
			<center><h1>BIODATA MAHASISWA</h1>
			<img src="images.jpg"

			<div class="konten">

		<table> <!--untuk membuat table-->
			<tr>
				<td>Nama</td><td>:</td>
				<td><?php echo $nama; ?></td>
			</tr>
			<tr>
				<td>Tempat / Tanggal Lahir</td><td>:</td>
				<td><?php echo $ttl; ?></td>
			</tr>
			<tr>
				<td>Alamat</td><td>:</td>
				<td><?php echo $alamat; ?></td>
			</tr>
			<tr>
				<td>Fakultas</td><td>:</td>
				<td><?php echo $fakultas; ?></td>
			</tr>
			<tr>
				<td>Jurusan</td><td>:</td>
				<td><?php echo $jurusan; ?></td>
			</tr>
			<tr>
				<td>Hobby</td><td>:</td>
				<td><?php echo $hobi; ?></td>
			</tr>
			<tr>
				<td>Cinta-cita</td><td>:</td>
				<td><?php echo $cita; ?></td>
			</tr>
			<tr>
				<td>Foto</td><td>:</td>
				<td>
					<?php 

						$fp = fopen("data-pendaftaran.txt","r");
					echo "<table border=0>";
					while ($isi = fgets($fp,80))
						{
						}

						fclose($fp);

					 ?>
					
				

				</td>
			</tr>

		</table>



		</div>
		
		
	</div>
<div class="footer">
			
		</div>
</body>

</html>

<?php endif; ?>