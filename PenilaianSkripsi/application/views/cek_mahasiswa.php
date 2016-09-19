<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cek Mahasiswa</title>
</head>

<body>
	<h1>Lihat Data Mahasiswa</h1>
	<table border="1">
		<tr>
			<th>Semester</th>
			<th>Tahun</th>
			<th> </th>
		</tr>
	<?php foreach($data as $d){ ?>
		<tr>
			<td><?php echo $d['semester']; ?></td>
			<td><?php echo $d['tahun']; ?></td>
			<td><a href="<?php echo base_url()."index.php/test/hapusDataMahasiswa/".$d['npm']?>">delete</a></td>
		</tr>				
	<?php } ?>
	<a href="<?php echo base_url()."index.php/test/index"?>">Kembali ke halaman utama</a>
	</table>
</body>

</html>