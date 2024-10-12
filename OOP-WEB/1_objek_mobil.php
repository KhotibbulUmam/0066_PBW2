<?php

     // Include/Terhubung dengan class Mobil (1_class_mobil.php)
     require_once "1_class_mobil.php";

     // Inisialisasi variabel (Objek) mobil_satu
     $mobil_satu    = new Mobil();
     
     // Menambahkan informasi objek mobil_satu
     $mobil_satu -> nama      = "Avanza";
     $mobil_satu -> merk      = "Toyota";
     $mobil_satu -> warna     = "Hitam" ;
     $mobil_satu -> tahun     =  2019   ;
     $mobil_satu -> kecepatan_max     =  1300;
     
     // Menampilkan informasi Objek mobil_satu
     var_dump($mobil_satu) ;
     echo "<br><br>";

     echo "Nama     : $mobil_satu->nama"  ."<br>";
     echo "Merk     : $mobil_satu->merk"  ."<br>";
     echo "Warna    : $mobil_satu->warna" ."<br>";
     echo "Tahun    : $mobil_satu->tahun" ."<br>";
     echo "Kecepatan Maksimal : $mobil_satu->kecepatan_max" ."<br>";

     echo "<br>";

     // Membuat Objek baru mobil_dua
     $mobil_dua     = new Mobil();

     // Menambahkan properti pada objek mobil_dua
     $mobil_dua -> nama       = "Brio";  
     $mobil_dua -> merk       = "Honda";  
     $mobil_dua -> warna      = "Merah";  
     $mobil_dua -> tahun      =  2018;  
     $mobil_dua -> kecepatan_max      =  1000;
     
     // Menampilkan informasi Objek mobil_dua
     var_dump($mobil_dua);

?>