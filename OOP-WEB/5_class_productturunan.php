<?php

     // Membuat Class Baru (Turunan Product)
     class Product_Turunan extends Product
     {
          // Function
          public function info()
          {
               echo "Name  : $this->name  " . "<br>";
               echo "Price : $this->price " . "<br>";
          }
     }

?>