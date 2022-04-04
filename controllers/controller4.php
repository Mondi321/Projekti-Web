<?php
    require_once 'C:\xampp\htdocs\Projekti-Web\database\database.php';

    class Controller4{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM contactForm');

            return $query->fetchAll();
        }

        public function insert($request){
            $query = $this->db->pdo->prepare('INSERT INTO contactForm(emri, email, mesazhi) VALUES (:emri, :email, :mesazhi)');

            $query->bindParam(":emri", $request['emri']);
            $query->bindParam(":email", $request['email']);
            $query->bindParam(":mesazhi", $request['mesazhi']);

            $query->execute();

            return header('Location: ./index.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM contactForm WHERE ID_contact = :id');

            $query->bindParam(":id", $id);

            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE contactForm SET emri = :emri, email = :email, mesazhi = :mesazhi WHERE ID_contact = :id');

            $query->bindParam(":emri", $request['emri']);
            $query->bindParam(":email", $request['email']);
            $query->bindParam(":mesazhi", $request['mesazhi']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: dashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE FROM contactForm WHERE ID_contact = :id');

            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: dashboard.php');
        }
    }
?>