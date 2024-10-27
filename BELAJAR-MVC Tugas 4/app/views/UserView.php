<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <!-- Bootstrap CSS -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

          <title>User Information</title>
          
     </head>
     <body>
          
          <div class="container">
               <!-- Judul -->
               <div class="judul my-3">
                    <h1 class="text-center">LIST USERS</h1>
                    <hr>
               </div>

               <!-- Tabel untuk menampilkan data user -->
               <table class="table  table-striped table-hover mt-2 mb-4" border="1">
                    <thead>
                         <tr>
                              <th scope="col" class="col-md-1">No</th>
                              <th scope="col" class="col-md-5">Nama</th>
                              <th scope="col" class="col-md-4">Email</th>
                              <th scope="col" class="col-md-3">Aksi</th>
                         </tr>
                    </thead>
                    <tbody>

                         <!-- Code PHP untuk mengambil data dari table users-->
                         <?php
                              $no = 1;
                              foreach ($users as $user) {
                         ?>

                         <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $user['name'] ?></td>
                              <td><?php echo $user['email'] ?></td>
                              <td>
                                   <a href="index.php?id=<?php echo $user['id']; ?>&action=detail" class="btn btn-info btn-sm mx-1">Detail</a>
                                   <a href="index.php?id=<?php echo $user['id']; ?>&action=edit"   class="btn btn-warning btn-sm mx-1">Edit</a>
                                   <a href="index.php?id=<?php echo $user['id']; ?>&action=hapus"  class="btn btn-danger  btn-sm mx-1" onclick="return alert('Yakin mau hapus??');" >Hapus</a>
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