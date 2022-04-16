<?php
    require_once 'C:\xampp\htdocs\Projekti-Web\database\database.php';


    class Controller1{
        public $db;
    
        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * from users');
    
            return $query->fetchAll();
        }

        public function readDataWithoutPass(){
            $query = $this->db->pdo->query('SELECT ID_User, emri, email, numriTel FROM users');

            return $query->fetchAll();
        }

        public function insert($request){
            $query = $this->db->pdo->prepare('INSERT INTO users (emri, email, numriTel, password)
            VALUES (:emri, :email, :numriTel, :password)');
    
            $query->bindParam(':emri', $request['emri']);
            $query->bindParam(':email', $request['email']);
            $query->bindParam(':numriTel', $request['numriTel']);
            $query->bindParam(':password', $request['password']);
            $query->execute();
    
            return header('Location: index.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT ID_User, emri, email, numriTel FROM users where ID_User = :id');
            $query->bindParam(":id", $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE users SET emri = :emri, email = :email, numriTel = :numriTel WHERE ID_User = :id');
            $query->bindParam(":emri", $request['emri1']);
            $query->bindParam(":email", $request['email1']);
            $query->bindParam(":numriTel", $request['numriTel1']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }


        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from users where ID_User = :id');
            $query->bindParam(":id", $id);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }
    }
?>