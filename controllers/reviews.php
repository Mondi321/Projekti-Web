<?php
    require_once 'C:\xampp\htdocs\Projekti-Web\database\database.php';

    class Reviews{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM reviews');

            return $query->fetchAll();
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM reviews where ID_review = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE reviews SET foto = :foto, emri = :emri, pershkrimi = :pershkrimi WHERE ID_review = :id');

            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":emri", $request['emri']);
            $query->bindParam(":pershkrimi", $request['pershkrimi']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function insert($request){
            $request['foto'] = './img/'. $request['foto'];

            $query = $this->db->pdo->prepare('INSERT INTO reviews (foto, emri, pershkrimi) VALUES (:foto, :emri, :pershkrimi)');
            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":emri", $request['emri']);
            $query->bindParam(":pershkrimi", $request['pershkrimi']);

            $query->execute();

            return header('Location: ../views/dashboard.php');
            
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from reviews WHERE ID_review = :id');

            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }
    }
?>