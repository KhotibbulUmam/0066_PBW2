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
               <h4>Detail Data</h4>
               <hr>

               <!-- Card Detail Data  -->
                    <?php
                         $no = 1;
                         foreach ($detail as $data_user) {
                    ?>
               
               <div class="card mb-3" style="max-width: auto;">
                    <div class="row g-0">
                         <div class="col-md-4">
                              <img src="gambar/<?php echo $data_user['gambar'] ?>" class="img-fluid rounded-start" width="100%">
                         </div>
                         <div class="col-md-8">
                              <div class="card-body">
                                   <h3 class="card-title"><?php echo $data_user['nama'] ?></h3>
                                   <p  class="card-text"><?php echo $data_user['jenis_kelamin'] ?></p>
                                   <p  class="card-text"><?php echo $data_user['alamat'] ?></p>
                                   <p  class="card-text"><?php echo $data_user['nohp'] ?></p>

                              </div>
                         </div>
                    </div>
               </div>

               <a href="index.php"      class="btn btn-info btn-sm">Kembali</a>
               <a href="edit.php?id=<?php echo $data_user['id'] ?>"  class="btn btn-warning btn-sm mx-1">Edit</a>
               
                    <?php
                         }
                    ?>

          </div>


          <!-- Bootstrap javaScript  -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     </body>
</html>