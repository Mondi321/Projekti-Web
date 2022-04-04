<?php
    require_once 'C:\xampp\htdocs\Projekti-Web\database\database.php';

    class Blog{
        public $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM blogs');

            return $query->fetchAll();
        }

        public function insert($request,$session){
            $request['foto'] = './img/' .$request['foto'];

            $query = $this->db->pdo->prepare('INSERT INTO blogs (foto, titulli, pershkrimi, user, data) VALUES (:foto, :titulli, :pershkrimi, :user, :data)');

            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":titulli", $request['titulli']);
            $query->bindParam(":pershkrimi", $request['pershkrimi']);
            $query->bindParam(":user", $session['emri']);
            $query->bindParam(":data", $session['data']);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function edit($id){
            $query= $this->db->pdo->prepare('SELECT * FROM blogs where ID_blog = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return $query->fetch();
        }

        public function update($request, $session, $id){
            $query = $this->db->pdo->prepare('UPDATE blogs SET foto = :foto, titulli = :titulli, pershkrimi = :pershkrimi,user = :user, data = :data where ID_blog = :id');

            $query->bindParam(":foto", $request['foto']);
            $query->bindParam(":titulli", $request['titulli']);
            $query->bindParam(":pershkrimi", $request['pershkrimi']);
            $query->bindParam(":user", $session['emri']);
            $query->bindParam(":data", $session['data']);
            $query->bindParam(":id", $id);

            $query->execute();

            return header('Location: ../views/dashboard.php');
        }

        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE FROM blogs where ID_blog = :id');

            $query->bindParam(":id", $id);
            $query->execute();

            return header('Location: ../views/dashboard.php');
        }
    }
?>