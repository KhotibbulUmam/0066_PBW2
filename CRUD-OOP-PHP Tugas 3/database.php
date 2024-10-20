<?php
// Menghubungkan dengan database

     // Membuat class
     class Database {

          // Properti
          public $host        = 'localhost';
          public $username    = 'root';
          public $pasword     = '';
          public $database    = 'db_php_0066';
          public $connect;
          
          // Function Construct untuk Mengoneksi dengan database
          function __construct()
          {
               $this -> connect = mysqli_connect($this -> host,$this -> username,$this -> pasword);
               mysqli_select_db($this -> connect,$this -> database);

               // Pengujian Koneksi
               // if($this -> connect -> connect_error) {
               //      die("Koneksi gagal : " . $this -> connect -> connect_error);
               // }
               // echo 'Koneksi Berhasil';
                                                 
          }

          // Function tampil data
          function tampil_data() 
          {
               $data = mysqli_query($this -> connect, 'SELECT * FROM tbl_user_0066');  
               $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);

               return $rows;

               // Untuk menguji
               // var_dump($rows);
          }

          // Function Tambah data
          function tambah_data($gambar,$nama,$jenis_kelamin, $alamat, $nohp)
          {
               mysqli_query($this->connect, "INSERT INTO tbl_user_0066 VALUES (NULL, '$gambar', '$nama', '$jenis_kelamin' , '$alamat', '$nohp')");
          }

          // Function Tapil Data berdasarkan Id
          function tampil_data_id($id)
          {
               $data = mysqli_query($this -> connect, "SELECT * FROM tbl_user_0066 WHERE id='$id'");  
               $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
               return $rows;
          }

          // Function Update Data
          function update_data($id, $gambar,$nama, $jenis_kelamin, $alamat, $nohp)
          {
               mysqli_query($this->connect, "UPDATE tbl_user_0066 SET gambar='$gambar', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', nohp='$nohp' WHERE id='$id'");
          }

          // Function Hapus Data
          function hapus_data($id)
          {
               mysqli_query($this->connect, "DELETE FROM tbl_user_0066 WHERE id='$id'");
          }

     }

?>