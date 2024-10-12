<!-- 
     Nama      : KHOTIBBUL UMAM
     NIM       : 23.240.0066
     KELAS     : 3P41
     PRODI     : TEKNIK INFORMATIKA
     MATKUL    : PEMROGRAMAN BERBASIS WEBSITE 2 
-->

<?php

     // Include / Terhubung dengan class_mahasiswa.php
     require_once "class_mahasiswa.php";

     // Membuat Objek
     $mahasiswa_1 = new Mahasiswa();

     // Menambahkan Properti
     $mahasiswa_1 -> nim    = "23.240.0066";
     $mahasiswa_1 -> nama   = "Khotibbul Umam";
     $mahasiswa_1 -> kelas  = "3P41";
     $mahasiswa_1 -> alamat = "Ds. Bakalan, Kec. Kandeman. Kab. Batang";
     $mahasiswa_1 -> tahun  =  2023;
     
     // Output
     echo "<br> NIM        : $mahasiswa_1->nim";
     echo "<br> Nama       : $mahasiswa_1->nama";
     echo "<br> Kelas      : $mahasiswa_1->kelas";
     echo "<br> Alamat     : $mahasiswa_1->alamat";
     echo "<br> Tahun      : $mahasiswa_1->tahun";
     
     // Mengakses Function Status
     $mahasiswa_1->Status(true);

     echo "<br><br>";

     // Membuat Objek
     $mahasiswa_2 = new Mahasiswa();

     // Menambahkan Properti
     $mahasiswa_2 -> nim    = "23.240.0053";
     $mahasiswa_2 -> nama   = "Hafizh Ihsan Ramadhan";
     $mahasiswa_2 -> kelas  = "3P41";
     $mahasiswa_2 -> alamat = "Ds. Prayonanggan Tengah, Kab. Batang";
     $mahasiswa_2 -> tahun  =  2023;
     
     // Output
     echo "<br> NIM        : $mahasiswa_2->nim";
     echo "<br> Nama       : $mahasiswa_2->nama";
     echo "<br> Kelas      : $mahasiswa_2->kelas";
     echo "<br> Alamat     : $mahasiswa_2->alamat";
     echo "<br> Tahun      : $mahasiswa_2->tahun";
     
     // Mengakses Function Status
     $mahasiswa_2->Status(false);

?>