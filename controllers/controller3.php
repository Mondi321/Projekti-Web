<?php 
    require_once 'C:\xampp\htdocs\Projekti-Web\database\database.php';

    class Controller3{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }


        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM fotot2');

            return $query->fetchAll();
        }

        public function insert($request){
            $request['foto2'] = './img/'.$request['foto2'];

            $query = $this->db->pdo->prepare('INSERT INTO fotot2 (foto2, brendi2, cmimiPare, cmimiDyte) VALUES (:foto2, :brendi2, :cmimiPare, :cmimiDyte)');

            $query->bindParam(":foto2",$request['foto2']);
            $query->bindParam(":brendi2",$request['brendi2']);
            $query->bindParam(":cmimiPare",$request['cmimiPare']);
            $query->bindParam(":cmimiDyte",$request['cmimiDyte']);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM fotot2 WHERE ID_foto2 = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE fotot2 SET foto2 = :foto2, brendi2 = :brendi2, cmimiPare = :cmimiPare, cmimiDyte = :cmimiDyte WHERE ID_foto2 = :id');

            $query->bindParam(":foto2", $request['foto2']);
            $query->bindParam(":brendi2", $request['brendi2']);
            $query->bindParam(":cmimiPare", $request['cmimiPare']);
            $query->bindParam(":cmimiDyte", $request['cmimiDyte']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from fotot2 where ID_foto2 = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

    }
?>