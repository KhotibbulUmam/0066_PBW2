<!-- 
     Nama      : KHOTIBBUL UMAM
     NIM       : 23.240.0066
     KELAS     : 3P41
     PRODI     : TEKNIK INFORMATIKA
     MATKUL    : PEMROGRAMAN BERBASIS WEBSITE 2 
-->

<?php

     // Membuat Class Mahasiswa
     class Mahasiswa
     {
          // Properti
          var string $nim;
          var string $nama;
          var string $kelas;
          var string $alamat;
          var int    $tahun;
          var bool   $status;

          // Function
          function Status($status)
          {
               echo "<br> Keterangan : ";
               
               if($status == true) {
                    echo "Mahasiswa Aktif";
               } else {
                    echo "Mahasiswa Tidak Aktif / Offline";
               }
          }

     }

?>