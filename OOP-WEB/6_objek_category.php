<?php

     // Include/Terhubung
     require_once "6_class_category.php";

     // Membuat Objek
     $obj_Category = new Category();

     // Untuk instan var tidak lagi menggunakan seperti ini
     // $obj_Category -> name = "Handphone";
     $obj_Category -> setName("Handphone");
     $obj_Category -> setExpensive(true);

     // Menampilkan data
     echo "Name      : {$obj_Category->getName()}" . "<br>";
     echo "Expensive : {$obj_Category->isExpensive()}" . "<br>";

?>