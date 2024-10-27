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
                    <h1 class="text-center">DETAIL USER</h1>
                    <hr>
               </div>

               <!-- Card Detail Data  -->
               <div class="card mb-3" style="max-width: auto;">
                    <div class="card-body row">
                         <div class="col-md-3">
                              <h4 class="card-title">ID</h4>
                              <h4 class="card-title">Nama</h4>
                              <h4 class="card-title">Email</h4>
                         </div>
                         <div class="col-md">
                              <h4  class="card-text">: <?php echo $user['id'] ?></h4>
                              <h4  class="card-text">: <?php echo $user['name'] ?></h4>
                              <h4  class="card-text">: <?php echo $user['email'] ?></h4>
                         </div>
                    </div>
               </div>

               <a href="index.php"      class="btn btn-info btn-sm">Kembali</a>
               <a href="index.php?id=<?php echo $user['id'] ?>&action=edit"  class="btn btn-warning btn-sm mx-1">Edit</a>
               

          </div>
          

          <!-- Bootstrap JavaScript -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     </body>
</html>