<!-- PHP -->
<?php

     // Terhubung dengan file database.php
     include 'database.php';

     // Objek
     $db = new Database;

     $detail = $db -> tampil_data_id($_GET['id']);
?>

<!-- HTML  -->
<!doctype html>
<html lang="en">
     <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <!-- Bootstrap CSS -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

          <title>CRUD OOP PHP</title>
     </head>
     <body>
          
          <div class="container my-3">
               <!-- Judul -->
               <h1 class="text-center">CRUD OOP PHP</h1>
               <h4>Edit Data</h4>
               <hr>

               <!-- Form Edit Data  -->
               <form method="POST" action="proses.php?aksi=update" class ="my-2"  enctype="multipart/form-data">

                    <?php
                         $no = 1;
                         foreach ($detail as $data_user) {
                    ?>

                    <!-- Id -->
                    <input type="hidden" id="id" name="id" value="<?php echo $data_user['id'] ?>">
                    <!-- gambar Lama -->
                    <input type="hidden" id="gambar_lama" name="gambar_lama" value="<?php echo $data_user['gambar'] ?>">
                    
                    <div class="mb-3">
                         <label for="gambar" class="form-label fw-bold">Foto</label><br>
                         <img class="my-2" width = "150px" src="gambar/<?php echo $data_user['gambar'] ?>">
                         <input type="file"  class="form-control" id="gambar" name="gambar">
                    </div>
                    <div class="mb-3">
                         <label for="nama"   class="form-label fw-bold">Nama</label>
                         <input type="text"  class="form-control" id="nama" name="nama" value="<?php echo $data_user['nama'] ?>">
                    </div>
                    <div class="mb-3">
                         <label for="jenis-kelamin"   class="form-label fw-bold">Jenis Kelamin</label><br>

                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jkl" value="Laki - laki" <?php echo ($data_user['jenis_kelamin'] == "Laki - laki") ? "checked" : ""; ?>>
                              <label class="form-check-label" for="jkl">Laki - laki</label>
                         </div>
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jkp" value="Perempuan" <?php echo ($data_user['jenis_kelamin'] == "Perempuan") ? "checked" : ""; ?>>
                              <label class="form-check-label" for="jkp">Perempuan</label>
                         </div>
                    </div>
                    <div class="mb-3">
                         <label for="alamat" class="form-label fw-bold">Alamat</label>
                         <input type="text"  class="form-control" id="alamat" name="alamat"  value="<?php echo $data_user['alamat'] ?>">
                    </div>
                    <div class="mb-3">
                         <label for="nohp"   class="form-label fw-bold">No HP</label>
                         <input type="text"  class="form-control" id="nohp" name="nohp"  value="<?php echo $data_user['nohp'] ?>">
                    </div>

                    <?php
                         }
                    ?>

                    <div class="mb-4">
                         <a href="index.php"      class="btn btn-info btn-sm">Kembali</a>
                         <button type="submit"    class="btn btn-success btn-sm" onclick="return confirm('Sudah Benar Semua??');">Submit</button>
                    </div>
               </form>

          </div>


          <!-- Bootstrap javaScript  -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     </body>
</html>