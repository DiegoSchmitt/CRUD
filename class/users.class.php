<?php
class Users{
    private $pdo;
    public function __construct(){
         $this->pdo = new pdo("mysql:dbname=crud;host=localhost", "root", "");
    }
    public function getAll(){
        $sql = "SELECT * FROM users";
        $sql = $this->pdo->query($sql);
        if($sql -> rowCount() > 0){
            return $sql->fetchAll();
        }
        else{
            return array();
        }
    }

    public function getEmail($email){
        $sql = "SELECT * FROM users WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->execute();
        if($sql->rowCount() > 0){
            return $sql->fetch();
        } else{
            return false;
        }

    }

    public function getId($id){
        $sql = "SELECT * FROM users WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        if($sql->rowCount() > 0){
            return $sql->fetch();
        } else{
            return false;
        }

    }

    public function add($name, $lastName, $email, $address, $password){
       if($this->existEmail($email)==false){
            $sql = "INSERT INTO users (name, lastname, email, address, password) VALUES (:name, :lastName, :email, :address, :password)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(":name", $name);
            $sql->bindValue(":lastName", $lastName);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":address", $address);
            $sql->bindValue(":password", $password);
            $sql->execute();
            return true;
        }
       else{
            return false;
        }
    }

    public function edit($id, $name, $lastName, $email, $address, $password){
            $sql = "UPDATE users SET id = :id, name = :name, lastname = :lastName, email = :email, address = :address, password = :password";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(":id", $id);
            $sql->bindValue(":name", $name);
            $sql->bindValue(":lastName", $lastName);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":address", $address);
            $sql->bindValue(":password", $password);
            $sql->execute();
    }

    public function del($id){
        $sql = "DELETE FROM users WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function existEmail($email){
        $sql = "SELECT * FROM users WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            return true;
        } else{
            return false;
        }
    }
}