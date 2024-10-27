<?php

     class user
     {
          private $db;

          public function __construct($dbConnection)
          {
               $this -> db = $dbConnection;
          }

          // Function menampilkan data berdasarkan id
          public function getUserById($id)
          {
               $stmt = $this -> db -> prepare("SELECT * FROM users WHERE id = :id");
               $stmt -> bindParam(':id', $id);
               $stmt -> execute();
               return $stmt -> fetch(PDO::FETCH_ASSOC);
          }

          // Function tampil data
          public function all_data_user()
          {
               $stmt = $this -> db -> prepare("SELECT * FROM users");
               $stmt -> execute();
               return $stmt -> fetchAll(PDO::FETCH_ASSOC);
          }

          // Function update
          public function update($id, $name, $email)
          {
               $stmt = $this -> db -> prepare("UPDATE users SET name = :name, email = :email WHERE id = :id");
               $stmt -> bindParam(':id', $id);
               $stmt -> bindParam(':name', $name);
               $stmt -> bindParam(':email', $email);
               $stmt -> execute();
          }

          // Function hapus 
          public function delete($id)
          {
               $stmt = $this -> db -> prepare("DELETE FROM users WHERE id = :id");
               $stmt -> bindParam(':id', $id);
               $stmt -> execute();
               return $stmt -> fetchAll(PDO::FETCH_ASSOC);
          }
     }

?>