<?php
namespace Models;

use \Core\Model;

class GroupTasks extends Model {

	public function insert($array) {
    try{
      
    

      $name =  $array["name"];
      $user_id =  $array["user_id"];
      $status =  $array["status"];


      $sql = "INSERT INTO grouptasks SET name ='$name', user_id = '$user_id', status = '$status'";
      $sql = $this->db->query($sql);
      return $array;
    }catch(PDOException $e){
      echo "falhou: ". $e->getMessage();
    }
  }
  
  public function delete($array) {
    try{

      $id = $array['id'];
  

      $sql = "DELETE FROM grouptasks WHERE id = '$id'";
      $sql = $this->db->query($sql);


      return $array;
    }catch(PDOException $e){
      echo "falhou: ". $e->getMessage();
    }
  }
  
  public function update($array){
    try{

      $id  = $array['id'];
      $status =  $array['status'];
      $name = $array['name'];
      $user_id =  $array['user_id'];

      
      $sql = "UPDATE grouptasks SET name ='$name', user_id = '$user_id', status = '$status' WHERE id = '$id'";
      $sql = $this->db->query($sql);


      return $array;
    }catch(PDOException $e){
      echo "falhou: ".$e->getMessage();
    }
  }

  public function selectAll(){
    try{
          $array = array();

          $sql = "SELECT * FROM grouptasks";
          $sql = $this->db->query($sql);

          if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
          }

          return $array;
        }catch(PDOException $e){
          echo "falhou: ".$e->getMessage();
      }
    
  }
  public function selectUnic($array){
    try{
          
          $id =  $array['id'];
          $sql = "SELECT * FROM grouptasks WHERE id='$id'";
          $sql = $this->db->query($sql);

          if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
          }

          return $array;
        }catch(PDOException $e){
          echo "falhou: ".$e->getMessage();
      }
    
  }
}