<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userModel
 *
 * @author Administrator
 */
include '../util/MySQLConnet.php';
class userModel {
    //put your code here
    private $userName;
    private $password;
    
    public function getUserName() {
        return $this->userName;
    }

    public function getPassword() {
        return $this->password;
    }

    public  function setUserName($userName) {
        $this->userName = $userName;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    
    public function __construct($userName, $password) {
        $this->userName = $userName;
        $this->password = $password;
    }
    
    public function  inssertUser(){
        
//        $dbConnet= new MySQLConnet("","","","");
//        $pdo= $dbConnet->connet();
//        $sql= "INSERT INTO uer (username,password) VALUES (:u, :p)";
//        $stmt= $pdo->prepare($sql);
//        $stmt->execute(["u"=>$this->username,"p=>$this->password"]);
        $data=[
            'name'=>$this->userName,
            'pass'=>$this->password
        ];
        $dbConnet= new MySQLConnet();
        $pdo= $dbConnet->connet();
        $sql= "INSERT INTO user (name, password) VALUES (:name,:pass)";
        $stmt=$pdo->prepare($sql);
        $stmt->execute($data);
   }
   public function getData($userName){
       $data=["name"=>$userName];
       $dbConn= new MySQLConnet();
       $sql= "SELECT * FROM user WHERE name=:name";
       return $dbConn->getData($sql,$data);
   }
   public function deleteData($userName){
       $data=[
           'name'=>$userName
       ];
       $dbConnet= new MySQLConnet();
       $sql="DELETE FROM user WHERE name=:name";
       $dbConnet->deleteData($sql,$data);
   }
}
