<?php

    $x  = 10;
    $y  = 5;

    echo "Operator Aritmatika";
    echo "<br> nilai x = ". $x;
    echo "<br> nilai y = ". $y;
    echo "<br>";
    
    echo "<br> hasil x + y = " . $x + $y;   // Penjumlahan
    echo "<br> hasil x - y = " . $x - $y;   // Pengurangan
    echo "<br> hasil x * y = " . $x * $y;   // Perkalian
    echo "<br> hasil x / y = " . $x / $y;   // Pembagian
    echo "<br> hasil x % y = " . $x % $y;   // Sisa Bagi (Modulus)

    echo "<br><br>";
    echo "Operator Komperasi <br>";
    // echo var_dump($x == $y);

    // Ada 3 Macam Komparasi (IF, IF ELSE, IF ELSE IF)

    // Komparasi IF
    $nilai = 78;

    echo "<br>";
    echo "Nilai : " . $nilai;
    
    if ($nilai > 70) {
        echo "<br> Selamat Anda Lulus";
    }

    echo "<br>";

    //Komparasi IF ELSE
    $nilaitengah = 60;

    echo "<br>";
    echo "Nilai : " . $nilaitengah;

    if ($nilaitengah > 70) {
        echo "<br> Selamat Anda Lulus";
    } else {
        echo "<br> Anda Tidak Lulus";
    }

    echo "<br>";

    //Komparasi IF ELSE IF
    $nilaiakhir = 90;
    
    echo "<br>";
    echo "Nilai Akhir : " . $nilaiakhir;

    if ($nilaiakhir >= 80) {
        echo "<br> Grade A";
    } else if($nilaiakhir >= 70){
        echo "<br> Grade B";
    } else if($nilaiakhir >= 60){
        echo "<br> Grade C";
    } else {
        echo "<br> Grade D";
    }

?>