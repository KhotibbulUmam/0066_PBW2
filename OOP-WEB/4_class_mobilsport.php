<?php
// Inheritance (Pewarisan)

     // Mewarisi properti yg ada pada class Mobil_4 di file 4_class_mobil.php
     class Mobil_Sport extends Mobil_4
     {
          public $turbo  = false;

          // Function
          function jalankan_turbo()
          {
               $this -> turbo = true;
               return "Jalankan Turbo!";
          }

          // Function Everriding
          // Jadi saat memanggil function info_mobil() dari class mobil_sport, info_mobil() yang di run adalah yg ini, bukan yg berada pada class mobil
          function info_mobil()
          {
               return "Nama mobil : $this->nama " ."<br>" . "Brand : $this->brand " ."<br>" . "Tahun : $this->tahun " ."<br>" . "Turbo : $this->turbo " . true . "<br>";
          }
     }

?>