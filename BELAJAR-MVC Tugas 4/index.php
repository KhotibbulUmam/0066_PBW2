<?php
require_once 'config/database.php';
require_once 'app/controllers/UserController.php';

     // Koneksi ke database
     $dbConnection = getDBConnection();
     
     // Membuat intrace UserController
     $controller = new UserController($dbConnection);

     // Mendapatkan parameter dari URL (misal : index.php?id=1)
     $action = isset($_GET['action']) ? $_GET['action'] : '';

     // Menentukan apa yang harus dilakukan berdasarkan aksi
     if ($action == 'edit') {
          $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
          $controller -> edit($id); // Memanggil metode edit di userController
     } else if ($action == 'hapus'){
          $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
          $controller -> delete($id);
     } else if ($action == 'detail'){
          $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
          $controller -> show($id);
     } 
     else {
          // Tampilkan semua user
          $controller -> show_all();
     }
     
?>