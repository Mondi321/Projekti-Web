<?php
    require_once 'C:\xampp\htdocs\Projekti-Web\database\database.php';

    class Controller2{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM fotot1');

            return $query->fetchAll();
        }

        public function insert($request){
            $request['foto'] = './img/'.$request['foto'];
            $query = $this->db->pdo->prepare('INSERT into fotot1 (foto1, brendi1, pershkrimi1,cmimi1) VALUES (:foto1, :brendi1, :pershkrimi1, :cmimi1)');

            $query->bindParam(":foto1", $request['foto']);
            $query->bindParam(":brendi1", $request['brendi']);
            $query->bindParam(":pershkrimi1", $request['pershkrimi']);
            $query->bindParam(":cmimi1", $request['cmimi']);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM fotot1 where ID_foto1 = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE fotot1 SET foto1 = :foto1, brendi1 = :brendi1, pershkrimi1 = :pershkrimi1, cmimi1 = :cmimi1 WHERE ID_foto1 = :id');

            $query->bindParam(":foto1", $request['foto1']);
            $query->bindParam(":brendi1", $request['brendi1']);
            $query->bindParam(":pershkrimi1", $request['pershkrimi1']);
            $query->bindParam(":cmimi1", $request['cmimi1']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from fotot1 WHERE ID_foto1 = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }
    }
?>