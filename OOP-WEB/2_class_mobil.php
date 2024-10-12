<?php

     class Mobil
     {
          //Constant
          const AUTOR = "Khotibbul Umam";

          // Properti
          var  string $nama;
          var  string $merk    = "Toyota";   // Default Properties Value
          var ?string $warna   = null;       // ditambah tanda ?
          var  int    $tahun;
          var  int    $kecepatan_max;

          // Membuat Function tambah_kecepatan
          function tambah_kecepatan()
          {
               echo "Kecepatan Bertambah!";    
          }

          // Membuat Function info_mobil
          function info_mobil(?string $nama)
          {
               // Kondisi jika parameter kosong maka akan ditampilkan properties dari objek
               if (is_null($nama)) {
                    echo "Nama mobil adalah {$this->nama}" . "<br>";
               } else {
                    echo "Mobil anda adalah $nama" ."<br>";
               }
          }
     }

?>