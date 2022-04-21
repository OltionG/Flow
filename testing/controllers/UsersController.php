<?php
require_once '../config/Database.php';

class UsersController{
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    //CRUD Form Code

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from users');

        return $query->fetchAll();
    }

    public function insert($request){
        $query = $this->db->pdo->prepare('INSERT INTO users (name, username, email, password) 
        VALUES (:name, :username, :email, :password)');

        $query->bindParam(':name', $request['name']);
        $query->bindParam(':username', $request['username']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':password', $request['password']);
        $query->execute();

        return header('Location: menuDashboard.php');
    }

    public function edit($id){
        $query = $this->db->pdo->prepare('SELECT * from users WHERE ID = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    /*public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE users SET name = :name, username = :username, email = :email,
        password = :password WHERE id = :id');

        $query->bindParam(':name', $request['name']);
        $query->bindParam(':username', $request['username']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':password', $request['password']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: menuDashboard.php');
    }*/

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE users SET name = :name, username = :username, email = :email, password = :password 
        WHERE ID = :id');

        $query->bindParam(':name', $request['name']);
        $query->bindParam(':username', $request['username']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':password', $request['password']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: menuDashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from users WHERE ID = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: menuDashboard.php');
    }
}
?>