<?php
    require_once 'C:\xampp\htdocs\Projekti-Web\database\database.php';

    class Produktet{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM produktet where lloji = 1');

            return $query->fetchAll();
        }

        public function insert($request){
            $request['foto'] = './img/'. $request['foto'];
            $query = $this->db->pdo->prepare('INSERT into produktet (foto, brendi, pershkrimi,cmimiPaZbritje, lloji) VALUES (:foto, :brendi, :pershkrimi, :cmimiPaZbritje, 1)');

            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":brendi", $request['brendi']);
            $query->bindParam(":pershkrimi", $request['pershkrimi']);
            $query->bindParam(":cmimiPaZbritje", $request['cmimi']);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM produktet where ID_produkti = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE produktet SET foto = :foto, brendi = :brendi, pershkrimi = :pershkrimi, cmimiPaZbritje = :cmimiPaZbritje WHERE ID_produkti = :id');

            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":brendi", $request['brendi']);
            $query->bindParam(":pershkrimi", $request['pershkrimi']);
            $query->bindParam(":cmimiPaZbritje", $request['cmimiPaZbritje']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE from produktet WHERE ID_produkti = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }


        // Produktet me zbritje slideshow

        public function readData1(){
            $query = $this->db->pdo->query('SELECT * from produktet where lloji = 2');

            return $query->fetchAll();
        }

        public function insert1($request){
            $request['foto2'] = './img/'.$request['foto2'];

            $query = $this->db->pdo->prepare('INSERT INTO produktet (foto, brendi, cmimiPaZbritje, cmimiMeZbritje, lloji) VALUES (:foto, :brendi, :cmimiPaZbritje, :cmimiMeZbritje, 2)');

            $query->bindParam(":foto",$request['foto2']);
            $query->bindParam(":brendi",$request['brendi2']);
            $query->bindParam(":cmimiPaZbritje",$request['cmimiPare']);
            $query->bindParam(":cmimiMeZbritje",$request['cmimiDyte']);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }


        public function update1($request, $id){
            $query = $this->db->pdo->prepare('UPDATE produktet SET foto = :foto, brendi = :brendi, cmimiPaZbritje = :cmimiPaZbritje, cmimiMeZbritje = :cmimiMeZbritje WHERE ID_produkti = :id');

            $query->bindParam(":foto", $request['foto2']);
            $query->bindParam(":brendi", $request['brendi2']);
            $query->bindParam(":cmimiPaZbritje", $request['cmimiPare']);
            $query->bindParam(":cmimiMeZbritje", $request['cmimiDyte']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }


        //slideshow 1 - main page

        public function readDataS1(){
            $query = $this->db->pdo->query('SELECT * from produktet where lloji = 3');

            return $query->fetchAll();
        }

        public function insertS1($request){
            $request['foto'] = './img/'. $request['foto'];

            $query = $this->db->pdo->prepare('INSERT INTO produktet (foto, brendi, pershkrimi, lloji) VALUES (:foto, :brendi, :pershkrimi, 3)');

            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":brendi", $request['brendi']);
            $query->bindParam(":pershkrimi", $request['pershkrimi']);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function updateS1($request, $id){
            $query = $this->db->pdo->prepare('UPDATE produktet SET foto = :foto, brendi = :brendi, pershkrimi = :pershkrimi where ID_produkti = :id');

            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":brendi", $request['brendi']);
            $query->bindParam(":pershkrimi", $request['pershkrimi']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }


        // products page -- swiper 1

        public function readDataSw1(){
            $query = $this->db->pdo->query('SELECT * from produktet where lloji = 4');

            return $query->fetchAll();
        }

        public function insertSw1($request){
            $request['foto'] = './img/'. $request['foto'];

            $query = $this->db->pdo->prepare('INSERT INTO produktet (foto, brendi, cmimiMeZbritje, cmimiPaZbritje, zbritja, lloji) VALUES (:foto, :brendi, :cmimiMeZbritje, :cmimiPaZbritje, :zbritja, 4)');
            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":brendi", $request['brendi']);
            $query->bindParam(":cmimiMeZbritje", $request['cmimiMeZbritje']);
            $query->bindParam(":cmimiPaZbritje", $request['cmimiPaZbritje']);
            $query->bindParam(":zbritja", $request['zbritja']);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function updateSw1($request, $id){
            $query = $this->db->pdo->prepare('UPDATE produktet SET foto = :foto, brendi = :brendi, cmimiMeZbritje = :cmimiMeZbritje, cmimiPaZbritje = :cmimiPaZbritje, zbritja = :zbritja where ID_produkti = :id');

            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":brendi", $request['brendi']);
            $query->bindParam(":cmimiMeZbritje", $request['cmimiMeZbritje']);
            $query->bindParam(":cmimiPaZbritje", $request['cmimiPaZbritje']);
            $query->bindParam(":zbritja", $request['zbritja']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }


        // products page -- gallery

        public function readDataG(){
            $query = $this->db->pdo->query('SELECT * from produktet where lloji = 5');

            return $query->fetchAll();
        }

        public function insertG($request){
            $request['foto'] = './img/'. $request['foto'];

            $query = $this->db->pdo->prepare('INSERT INTO produktet (foto, lloji) VALUES (:foto, 5)');
            $query->bindParam(":foto", $request['foto']);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function updateG($request, $id){
            $query = $this->db->pdo->prepare('UPDATE produktet SET foto = :foto where ID_produkti = :id');

            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        // best sellers - products

        public function readDataBS(){
            $query = $this->db->pdo->query('SELECT * from produktet where lloji = 6');

            return $query->fetchAll();
        }

        public function insertBS($request){
            $request['foto'] = './img/'. $request['foto'];

            $query = $this->db->pdo->prepare('INSERT INTO produktet (foto, brendi, cmimiPaZbritje, lloji) VALUES (:foto, :brendi, :cmimiPaZbritje, 6)');

            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":brendi", $request['brendi']);
            $query->bindParam(":cmimiPaZbritje", $request['cmimiPaZbritje']);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function updateBS($request, $id){
            $query = $this->db->pdo->prepare('UPDATE produktet SET foto = :foto, brendi = :brendi, cmimiPaZbritje = :cmimiPaZbritje WHERE ID_produkti = :id');

            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":brendi", $request['brendi']);
            $query->bindParam(":cmimiPaZbritje", $request['cmimiPaZbritje']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }


        // new arrivals - products

        public function readDataNA(){
            $query = $this->db->pdo->query('SELECT * FROM produktet where lloji = 7');

            return $query->fetchAll();
        }

        public function insertNA($request){
            $request['foto'] = './img/'. $request['foto'];

            $query = $this->db->pdo->prepare('INSERT INTO produktet (foto, brendi, cmimiMeZbritje, cmimiPaZbritje, lloji) VALUES (:foto, :brendi, :cmimiMeZbritje, :cmimiPaZbritje, 7)');

            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":brendi", $request['brendi']);
            $query->bindParam(":cmimiMeZbritje", $request['cmimiMeZbritje']);
            $query->bindParam(":cmimiPaZbritje", $request['cmimiPaZbritje']);

            $query->execute();

            return header('Location: ../views/dashboard.php');

        }

        public function updateNA($request, $id){
            $query = $this->db->pdo->prepare('UPDATE produktet SET foto = :foto, brendi = :brendi, cmimiMeZbritje = :cmimiMeZbritje, cmimiPaZbritje = :cmimiPaZbritje where ID_produkti = :id');

            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":brendi", $request['brendi']);
            $query->bindParam(":cmimiMeZbritje", $request['cmimiMeZbritje']);
            $query->bindParam(":cmimiPaZbritje", $request['cmimiPaZbritje']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }
    }
?>