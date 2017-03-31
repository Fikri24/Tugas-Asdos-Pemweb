<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>CRUD PHP</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
  	<h1 class="text-center">Data Berita</h1>
<table border= "5" class="table">
<tr>
	<th>No</th>
	<th>Judul Berita</th>
	<th>Headline Berita</th>
	<th>Isi Berita</th>
	<th>Author</th>
	<th>Tanggal Post</th>
	<th>Aksi</th>
</tr>
	<?php
		require 'koneksi.php';
		$no = 1;
		$query = mysql_query("SELECT * from berita");
		while ($hasil = mysql_fetch_array($query)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $hasil[1]?></td>
				<td><?php echo $hasil[2]?></td>
				<td><?php echo $hasil[3]?></td>
				<td><?php echo $hasil[4]?></td>
				<td><?php echo $hasil[5]?></td>
				<td>
					<a href="update.php?berita_id=<?php echo $hasil[0]?>"> update | <a href ="delete.php?berita_id=<?php echo $hasil[0]?>">delete
				</td>
			</tr>
		<?php }?>
		</table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
