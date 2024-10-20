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
               <h4>Tambah Data</h4>
               <hr>

               <!-- Form Tambah Data  -->
               <form method="POST" action="proses.php?aksi=tambah" class ="my-2"  enctype="multipart/form-data">
                    <div class="mb-3">
                         <label for="gambar" class="form-label fw-bold">Foto</label>
                         <input type="file"  class="form-control" id="gambar" name="gambar">
                    </div>
                    <div class="mb-3">
                         <label for="nama"   class="form-label fw-bold">Nama</label>
                         <input type="text"  class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                         <label for="jenis-kelamin"   class="form-label fw-bold">Jenis Kelamin</label><br>
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jkl" value="Laki - laki">
                              <label class="form-check-label" for="jkl">Laki - laki</label>
                         </div>
                         <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="jenis_kelamin" id="jkp" value="Perempuan">
                              <label class="form-check-label" for="jkp">Perempuan</label>
                         </div>
                    </div>
                    <div class="mb-3">
                         <label for="alamat" class="form-label fw-bold">Alamat</label>
                         <input type="text"  class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                         <label for="nohp"   class="form-label fw-bold">No HP</label>
                         <input type="text"  class="form-control" id="nohp" name="nohp">
                    </div>
                    <a href="index.php"      class="btn btn-info btn-sm">Kembali</a>
                    <button type="submit"    class="btn btn-success btn-sm" onclick="return confirm('Sudah Benar Semua??');">Submit</button>
               </form>

          </div>


          <!-- Bootstrap javaScript  -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     </body>
</html>