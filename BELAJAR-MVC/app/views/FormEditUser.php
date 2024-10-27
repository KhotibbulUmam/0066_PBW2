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
                    <h1 class="text-center">EDIT USER</h1>
                    <hr>
               </div>
               

               <!-- Form Edit Data  -->
               <form method="POST" class ="my-2">


                    <!-- Id -->
                    <input type="hidden" id="id" name="id" value="<?php echo $user['id'] ?>">
                    
                    <div class="mb-3">
                         <label for="name" class="form-label fw-bold">Nama</label>
                         <input type="text"  class="form-control" id="name" name="name"  value="<?php echo $user['name'] ?>">
                    </div>
                    <div class="mb-3">
                         <label for="email"   class="form-label fw-bold">Email</label>
                         <input type="email"  class="form-control" id="email" name="email"  value="<?php echo $user['email'] ?>">
                    </div>                    

                    <div class="mb-4">
                         <a href="index.php"      class="btn btn-info btn-sm">Kembali</a>
                         <button type="submit"    class="btn btn-success btn-sm" onclick="return confirm('Sudah Benar Semua??');">Update</button>
                    </div>
               </form>
          </div>
          

          <!-- Bootstrap JavaScript -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     </body>
</html>