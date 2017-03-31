<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>CRUD PHP</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <?php   require 'koneksi.php';
    if (isset($_POST['submit'])) {
         $berita_judul   = $_POST['berita_judul'];
         $berita_headline  = $_POST['berita_headline'];
         $berita_isi   = $_POST['berita_isi'];
         $berita_author  = $_POST['berita_author'];
         $berita_tanggal  = date('Y-m-d H:i:s'); $query   = mysql_query("INSERT into berita VALUES('','$berita_judul','$berita_headline','$berita_isi', '$berita_author', '$berita_tanggal')");
         if($query){          
          header('location: ./read.php');
         } else{          
          echo "Gagal input";
            }
         }
          ?>
</head>
  <body>
  <section class="buatakun" id="buatakun"> 
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <form class="inner-login" method="post" onsubmit="return validasi_input(this)">
              <h3 class="text-center title-login">Masukkan Data di bawah ini</h3>
              <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                  <div class="form-group">
                    <tr>
                    <td>Judul Berita</td>
                    </tr>
                    <input name="berita_judul" type="text" class="form-control">
                  </div>

                   <div class="form-group">
                    <tr>
                    <td>Headline Berita</td>
                    </tr>
                    <input name="berita_headline" type="text" class="form-control">
                  </div>

                  <div class="form-group">
                    <tr>
                    <td>Isi Berita</td>
                    </tr>
                    <input name="berita_isi" type="text" class="form-control">
                  </div>

                   <div class="form-group">
                   <tr>
                   <td>Penulis Berita</td>
                   </tr>
                    <input name="berita_author" type="text" class="form-control">
                  </div>
                  <div class="text-center">
                  <button type="submit" class="btn btn-info" name="submit">SIMPAN</button>
                  </div>
                   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
