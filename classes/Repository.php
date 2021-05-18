<?php
include_once 'autoload.php';

class Repository
{
    public $bd;
    public $tableName;
    public function __construct($tableName){
        $this->tableName = $tableName;
        $this->bd = ConnexionBD::getInstance();
    }

    public function findByUsername($username) {
        $request = "select * from ".$this->tableName ." where username = ?";
        $response =$this->bd->prepare($request);
        $response->execute([$username]);
        return $response->fetch(PDO::FETCH_OBJ);
    }
    public function findByOne($key,$value) {
        $request = "select * from ".$this->tableName ." where ".$key."='".$value."'";
        $response =$this->bd->prepare($request);
        $response->execute();
        return $response->fetch(PDO::FETCH_OBJ);
    }

    public function findByEmail($email) {
        $request = "select * from ".$this->tableName ." where email = ?";
        $response =$this->bd->prepare($request);
        $response->execute([$email]);
        return $response->fetch(PDO::FETCH_OBJ);
    }

    public function findByUsernamePwd($id1,$id2) {
        $request = "select * from ".$this->tableName ." where username= ? and password=?";
        $response =$this->bd->prepare($request);
        $response->execute([$id1,$id2]);
        return $response->fetch(PDO::FETCH_OBJ);
    }
    
    public function findByEmailPwd($id1,$id2) {
        $request = "select * from ".$this->tableName ." where email= ? and password=?";
        $response =$this->bd->prepare($request);
        $response->execute([$id1,$id2]);
        return $response->fetch(PDO::FETCH_OBJ);
    }

    
    public function showCategory($categories){
        
        $request="select * from ".$this->tableName ." WHERE category= ".$categories[0];
            
        $response =$this->bd->prepare($request);
        $response->execute([$categories[0]]);
        return $response->fetch(PDO::FETCH_OBJ);
    }

    public function showRecipe($id){
        $request = "select * from ".$this->tableName ." where id = ?";
        $response =$this->bd->prepare($request);
        $response->execute([$id]);
        return $response->fetch(PDO::FETCH_OBJ);

    }

    public function update($id1,$id2){

        $request="UPDATE " .$this->tableName." SET ".$id1."='".$id2."'";
        $response =$this->bd->prepare($request);
        $response->execute();
        return $response->fetch(PDO::FETCH_OBJ);
    }

    public function addUser($val1,$val2,$val3){

        $request = "INSERT INTO ".$this->tableName. "(username,email,password) VALUES ('".$val1."','".$val2."','".$val3."')" ; 
        $response=$this->bd->prepare($request);
        $response->execute();
        return $response->fetch(PDO::FETCH_OBJ);
        
    }

    public function updatePic($id1,$img){

        $request="UPDATE " .$this->tableName." SET ".$id1."='".addslashes($img)."'";
        $response =$this->bd->prepare($request);
        $response->execute();
        return $response->fetch(PDO::FETCH_OBJ);
    }
  }
