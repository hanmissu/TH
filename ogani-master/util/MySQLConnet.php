<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MySQLConnet
 *
 * @author Administrator
 */
class MySQLConnet {
    //put your code here
    private $servername;
    private $username;
    private $password;
    private $db;
    private $conn;
    public function __construct(){
            $this->servername="localhost";
            $this->username="root";
             $this->password="";
            $this->db="demo";
    }
    public function connet(){
        try {
            $this->conn= new PDO("mysql:host=$this->servername;dbname=$this->db", $this->username,$this->password);
            
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "ket noi thanh cong";
            return $this->conn;
        } catch (Exception $ex) {
            echo "ket noi that bai". $ex->getMessage();
        }
    }
    public function disconnet(){
        $this->conn==null;
    }
    public function  insertData($sql, $data=array()){
       $dbCon= new MySQLConnet();
        $pdo= $dbCon->connet();
        $stmt= $pdo->prepare($sql);
        $stmt->execute($data);
        $dbCon->disconnet();
    }
      public function getData($sql,$data=array()){
       $dbCon= new MySQLConnet();
       $pdo=$dbCon->connet();
       $stmt=$pdo->prepare($sql);
       $stmt->execute($data);
       $user=$stmt->fetch();
       $dbCon->disconnet();
       return $user; 
   }
   public function deleteData($sql,$data=array()){
       $dbCon= new MySQLConnet();
       $pdo=$dbCon->connet();
       $stmt=$pdo->prepare($sql);
       $stmt->execute($data);
       $dbCon->disconnet();
   }
}
