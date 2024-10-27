<?php
require_once 'app/models/User.php';

     class UserController
     {
          private $userModel;

          public function __construct($dbConnection)
          {
               $this -> userModel = new User($dbConnection);
          }

          public function show($id)
          {
               // Mengambil data dari model
               $user = $this -> userModel -> getUserById($id);

               // Membuat view dan meneruskan data pengguna
               require_once 'app/views/UserDetail.php';
          }

          // Function menampilkan semua data user
          public function show_all()
          {
               $users = $this -> userModel -> all_data_user();
               require_once 'app/views/UserView.php';
          }

          // Function edit
          public function edit($id)
          {
               // Mengambil data user tergantung id
               $user = $this -> userModel -> getUserById($id);

               if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Mengambil data dari form
                    $name  = $_POST['name'];
                    $email = $_POST['email'];
            
                    // Memanggil metode updateUser dari model
                    $this -> userModel -> update($id, $name, $email);
                    header("Location: index.php");
                }
               // Memuat file FormEditUser.php
               require_once 'app/views/FormEditUser.php';
          }

          // Funtion delete
          public function delete($id)
          {
               $user = $this -> userModel -> delete($id);
               header('location: index.php');
          }

     }

?>