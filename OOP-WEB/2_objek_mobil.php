<?php

     // Include/Terhubung dengan class Mobil (2_class_mobil.php)
     require_once "2_class_mobil.php";

     // Inisialisasi variabel (Objek) mobil_satu
     $mobil_satu    = new Mobil();

     // Menambahkan properti pada objek mobil_satu
     // $mobil_satu -> nama  = null;            // Error karena pada deklarasi tidak dibuat null
     $mobil_satu -> nama  = "Avanza";
     $mobil_satu -> merk;                    // Tidak perlu isi data karena sudah terisi pada saat deklarasi (Default Properties Value)
     $mobil_satu -> warna = null;            // Valid, karena sudah dideklarasikan boleh null
     $mobil_satu -> tahun = 2019;
     $mobil_satu -> kecepatan_max  = 1300;

     // Menampilkan informasi Objek mobil_satu
     var_dump($mobil_satu) ;
     echo "<br><br>";
     //
     echo "Nama     : $mobil_satu->nama"  ."<br>";
     echo "Merk     : $mobil_satu->merk"  ."<br>";
     echo "Warna    : $mobil_satu->warna" ."<br>";
     echo "Tahun    : $mobil_satu->tahun" ."<br>";
     echo "Kecepatan Maksimal : $mobil_satu->kecepatan_max" ."<br>";

     // Mengakses function/method tambah_kecepatan
     $mobil_satu -> tambah_kecepatan();

     echo "<br>";

     // Mengakses function/method info_mobil
     $mobil_satu -> info_mobil(null);        // dengan parameter null, maka yg ditampilkan adalah properti dari objek Mobil

     $mobil_satu -> info_mobil("Xenia");     // dengan parameter nilai, maka yg ditampilkan adalah properti dari function yg diakses pada saat ini (Xenia)

     echo "<br>";

     // Memanggil dan menampilkan Constant
     echo Mobil::AUTOR;
?>