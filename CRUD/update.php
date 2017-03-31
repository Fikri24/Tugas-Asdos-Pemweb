<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CRUD UPDATE PHP</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">

		<?php
		require 'koneksi.php';

		if (isset($_POST['submit'])) {
				$berita_id = $_POST['berita_id'];
				$berita_judul = $_POST['berita_judul'];
				$berita_headline = $_POST['berita_headline'];
				$berita_isi = $_POST['berita_isi'];
				$berita_author = $_POST['berita_author'];
				$berita_tanggal = date('Y-m-d H:i:s');
				$query = mysql_query("UPDATE berita SET
						berita_judul='$berita_judul',
						berita_headline='$berita_headline',
						berita_isi='$berita_isi',
						berita_author='$berita_author',
						berita_tanggal='$berita_tanggal' WHERE
						berita_id='$berita_id'");
				if($query){
						header('location: ./read.php');
				} else{
						echo "Gagal UPDATE";
				}
		}
		if (isset($_GET['berita_id'])) {
				$berita_id = $_GET['berita_id'];
		$query = mysql_query("SELECT * FROM berita WHERE berita_id =
'$berita_id'");
			$hasil = mysql_fetch_array($query);
			?>
		</head>
		<body>
		<section class="buatakun" id="buatakun"> 
	      <div class="container">
	        <div class="row">
	          <div class="col-sm-12">
	            <form class="inner-login" method="post" onsubmit="return validasi_input(this)">
	              <h3 class="text-center title-login">EDIT BERITA</h3>
	              <input type="hidden" name="berita_id" value="<?php echo $hasil[0] ?>">
	              <div class="row">
	                <div class="col-sm-4 col-sm-offset-4">
	                  <div class="form-group">
	                  	
	                    <input name="berita_judul" placeholder="Judul berita" type="text" class="form-control" value="<?php echo $hasil[1] ?>">
	                  </div>

	                   <div class="form-group">
                    <input name="berita_headline" placeholder="Headline berita" type="text" class="form-control" value="<?php echo $hasil[2] ?>">
                  </div>

                  <div class="form-group">
                    <input name="berita_isi" placeholder="Isi berita" type="text" class="form-control" value="<?php echo $hasil[3] ?>">
                  </div>

                   <div class="form-group">
                    <input name="berita_author" placeholder="Penulis berita" type="text" class="form-control" value="<?php echo $hasil[4] ?>">
                  </div>
                  <div class="text-center">
                  <button type="submit" class="btn btn-info" name="submit" value="UPDATE">Update</button>
                  </div>

				    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
				    <script src="js/bootstrap.min.js"></script>
				</table>
			<?php }?>
		</form>
	</body>
</html>