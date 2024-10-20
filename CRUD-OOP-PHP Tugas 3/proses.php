<?php

     // Terhubung dengan file database.php
     include 'database.php';

     // Objek
     $db = new Database;

     $aksi = $_GET['aksi'];

     // Kondisi
     if ($aksi == "tambah") {
          // Tambah Gambar dan menyimpannya di folder gambar
          $namaFile = $_FILES['gambar']['name'];
          $tmpFile = $_FILES['gambar']['tmp_name'];
          $ekstensiFile = explode('.', $namaFile);
          $ekstensiFile = strtolower(end($ekstensiFile));

          $gambar = uniqid() . "." . $ekstensiFile;
          move_uploaded_file($tmpFile, 'gambar/' . $gambar);

          $db -> tambah_data($gambar,$_POST['nama'],$_POST['jenis_kelamin'],$_POST['alamat'],$_POST['nohp']);
          header('location:index.php');

     } else if ($aksi == "update") {
          // Edit/Update Gambar
          // gambar lama 
          $gambar_lama = $_POST['gambar_lama'];
          // cek apakah mengganti gambar / tidak
          if($_FILES["gambar"]["error"] === 4) {
               // jika tidak
               $gambar = $gambar_lama;
          } else {
               // jika mengupload
               $namaFile = $_FILES['gambar']['name'];
               $tmpFile = $_FILES['gambar']['tmp_name'];
               $ekstensiFile = explode('.', $namaFile);
               $ekstensiFile = strtolower(end($ekstensiFile));
          
               $gambar = uniqid() . "." . $ekstensiFile;
               unlink('gambar/' . $gambar_lama);
               move_uploaded_file($tmpFile, 'gambar/' . $gambar);
          }

          $db -> update_data($_POST['id'],$gambar,$_POST['nama'],$_POST['jenis_kelamin'],$_POST['alamat'],$_POST['nohp']);
          header('location:index.php');

     } else if ($aksi == 'hapus') {
          // mengambil data gambar
          $id = $_GET['id'];
          $ambil_data = mysqli_query($db -> connect, "SELECT * FROM tbl_user_0066 WHERE id=$id");
          while($data = mysqli_fetch_assoc($ambil_data)) {
               $gambar = $data['gambar'];
          }
          // hapus gambar di folder
          unlink('gambar/' . $gambar);

          $db -> hapus_data($id);
          header('location:index.php');
     }
     

?>