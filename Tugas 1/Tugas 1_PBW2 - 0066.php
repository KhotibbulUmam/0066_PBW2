<!-- 
     Nama      : KHOTIBBUL UMAM
     NIM       : 23.240.0066
     KELAS     : 3P41
     PRODI     : TEKNIK INFORMATIKA
     MATKUL    : PEMROGRAMAN BERBASIS WEBSITE 2 
-->

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Online style Boostrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- CSS -->
     <style>
          h1 {
               color : #798645;
          }

          .container {
               max-width : 800px;
               margin    : 0 auto;
               padding   : 50px;
               background-color : #FAF7F0;
               border-radius : 10px;
               border : 1px solid;
               border-color : #798645;
          }

          label , p {
               font-weight : bold;
          }

          .form-control {
               border-color : #798645;
          }

          .btn {
               background-color: #798645;
               color : #FAF7F0;
               width : 100%;
          }

     </style>


     <title>Hitung Total Pembelian Belanja</title>
</head>
<body>
     
     <h1 class="text-center py-3">INPUT DATA BELANJA</h1>
    
     <div class="container">
     
          <form action="" method="POST">
               <div class="input">
                    <!-- Input Total Belanja -->
                    <div class="mb-3">
                         <label for="ttlbelanja">Total Belanja</label>
                         <input class="form-control" type="number" name="ttlbelanja" id="ttlbelanja" required min = 0>
                    </div>
                    <!-- Input Nama Member (Opsional) -->
                    <div class="mb-3">
                         <label for="member">Masukan Nama Member (Opsional)</label>
                         <input class="form-control" type="text" name="member" id="member" placeholder="kosongi jika tidak ada">
                    </div>
     
               </div>
               <div class="mb-3">
                    <button type="submit" class="btn fw-bold">Submit</button>
               </div>
          </form>

          <!-- PHP -->
          <?php

               if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    // Buat variable
                    // Dan mengambil data yang ada di form
                    $ttlbelanja_0066    = $_POST['ttlbelanja'];
                    $member             = $_POST['member'];

                    $ttlbayar = $ttlbelanja_0066;
                    echo "<p> Total Belanja awal = " . number_format($ttlbelanja_0066, 2, ',', '.') . "</p>";

                    // Array Member yang tersedia
                    $nm_member     = array('UMAM','HAFIZH','DANU','WILDAN');

                    // Keterangan Member awal false
                    $ket_member = false;

                    // Cek Member
                    foreach ($nm_member as $cek_member) {
                         if ($member == $cek_member) {
                              // setelah di cek dan sesuai, keterangan member akan aktif/true
                              $ket_member = true;
                         }
                    }

                    // Diskon
                    if ($ket_member) { // Keterangan member true
                         
                         // Diskon member 10%
                         $diskon     = $ttlbayar * 0.10;
                         $ttlbayar   = $ttlbayar - $diskon ;
                         echo "<p> Diskon member 10% senilai = " . number_format($diskon, 2, ',', '.') . "</p>";


                    if ($ttlbelanja_0066 >= 500000) {            // Jika pembelian >= 500.000 tambahan diskon 10%
                         $diskon     = $ttlbayar * 0.10;
                         $ttlbayar   = $ttlbayar - $diskon ;
                         echo "<p> Pembelian diatas 500.000 dapat tambahan diskon 10% senilai = " . number_format($diskon, 2, ',', '.') . "</p>";
                         
                    } else if ($ttlbelanja_0066 >= 300000) {     // Jika pembelian >= 300.000 tambahan diskon 5%
                         $diskon     = $ttlbayar * 0.05;
                         $ttlbayar   = $ttlbayar - $diskon ;
                         echo "<p> Pembelian diatas 300.000 dapat tambahan diskon 5% senilai = " . number_format($diskon, 2, ',', '.') . "</p>";
                    }
                    

                    } else { // Keterangan member false
                    
                         if ($ttlbelanja_0066 >= 500000) {       // Jika pembelian >= 500.000 diskon 10%
                              $diskon     = $ttlbayar * 0.10;
                              $ttlbayar   = $ttlbayar - $diskon ;
                              echo "<p> Pembelian diatas 500.000 dapat diskon 10% senilai = " . number_format($diskon, 2, ',', '.') . "</p>";
                         }
                    }

                    // Menampilkan hasil
                    echo "<p> Total yang harus dibayar = Rp " . number_format($ttlbayar, 2, ',', '.') . "</p>";
               

               }

          ?>

     </div>

</body>
</html>