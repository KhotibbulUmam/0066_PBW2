<!-- PHP -->
<?php

     // Terhubung dengan file database.php
     include 'database.php';

     // Objek
     $db = new Database;

     //   
     $db -> tampil_data();
     
     

?>

<!-- HTML -->  
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
          
          <div class="container">
               <!-- Judul -->
               <div class="judul my-3">
                    <h1 class="text-center">CRUD OOP PHP</h1>
                    <hr>
               </div>

               <!-- Menambah Data -->
               <a href="input.php" class="btn btn-success btn-sm">Tambah Data</a>
               

               <!-- Tabel untuk menampilkan data user -->
               <table class="table  table-striped table-hover mt-2 mb-4" border="1">
                    <thead>
                         <tr>
                              <th scope="col" class="col">No</th>
                              <th scope="col" class="col">Foto</th>
                              <th scope="col" class="col">Nama</th>
                              <th scope="col" class="col">Jenis Kelamin</th>
                              <th scope="col" class="col">Alamat</th>
                              <th scope="col" class="col">No HP</th>
                              <th scope="col" class="col">Aksi</th>
                         </tr>
                    </thead>
                    <tbody>

                         <!-- Code PHP untuk mengambil data dari table user-->
                         <?php
                              $no = 1;
                              foreach ($db->tampil_data() as $data_user) {
                         ?>

                         <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td>
                                   <img width = "100px" src="gambar/<?php echo $data_user['gambar'] ?>">
                              </td>
                              <td><?php echo $data_user['nama'] ?></td>
                              <td><?php echo $data_user['jenis_kelamin'] ?></td>
                              <td><?php echo $data_user['alamat'] ?></td>
                              <td><?php echo $data_user['nohp'] ?></td>
                              <td>
                                   <a href="detail.php?id=<?php echo $data_user['id'] ?>"  class="btn btn-info btn-sm mx-1">Detail</a>
                                   <a href="edit.php?id=<?php echo $data_user['id'] ?>"  class="btn btn-warning btn-sm mx-1">Edit</a>
                                   <a href="proses.php?id=<?php echo $data_user['id'] ?>& aksi=hapus" class="btn btn-danger  btn-sm mx-1" onclick="return alert('Yakin mau hapus??');" >Hapus</a>
                              </td>
                         </tr>

                         <?php
                              }
                         ?>

                    </tbody>
               </table>
          </div>


          <!-- Bootstrap JavaScript -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     </body>
</html>