<?php

     // Include/Terhubung
     require_once "5_class_product.php";
     require_once "5_class_productturunan.php";

     // Membuat Objek baru
     $product  = new Product("Apple", 20000);

     // Menampilkan info name dan price
     // echo $product -> name();      // Error karena var name bersifat frivate
     // echo $product -> price();     // Error karena var price bersifat frivate

     // Altenatif, menggunakan function getName dan getPrice
     echo $product -> getName(); 
     echo "<br>";
     echo $product -> getPrice();
     echo "<br>"; 

     // Membuat Objek baru
     $product2 = new Product_Turunan("Nanas", 30000);
     echo "<br>";
     $product2 -> info();
?>