<?php

     class Mobil_4
     {
          var string $nama;
          var string $brand;
          var int    $tahun;

          // Constructor
          function __construct(string $nama, string $brand, int $tahun)
          {
               $this -> nama  = $nama;
               $this -> brand = $brand;
               $this -> tahun = $tahun;
          }

          // Function
          function info_mobil()
          {
               return "Nama mobil : $this->nama " ."<br>" . "Brand : $this->brand " ."<br>" . "Tahun : $this->tahun" ."<br>" ;
          }
     }

?>