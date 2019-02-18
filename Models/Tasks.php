<?php
namespace Models;

use \Core\Model;

class Tasks extends Model {

	public function insert($array) {
    try{
      

      $id_group_task =  $array["id_group_task"];
      $name =  $array["name"];
      $user_id =  $array["user_id"];
      $status =  $array["status"];


      $sql = "INSERT INTO tasks SET id_group_task = '$id_group_task', name ='$name', user_id = '$user_id', status = '$status'";
      $sql = $this->db->query($sql);
      return $array;
    }catch(PDOException $e){
      echo "falhou: ". $e->getMessage();
    }
  }
  
  public function delete($array) {
    try{

      $id = $array['id'];
  

      $sql = "DELETE FROM tasks WHERE id = '$id'";
      $sql = $this->db->query($sql);


      return $array;
    }catch(PDOException $e){
      echo "falhou: ". $e->getMessage();
    }
  }

  public function concluir($array) {
    try{

      $id = $array['id'];
  
      
      $sql = "UPDATE tasks SET status= '2' WHERE id =  '$id'";
      $sql = $this->db->query($sql);


      return $array;
    }catch(PDOException $e){
      echo "falhou: ". $e->getMessage();
    }
  }
  public function reabrir($array) {
    try{

      $id = $array['id'];
  
      
      $sql = "UPDATE tasks SET status= '1' WHERE id =  '$id'";
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

      
      $sql = "UPDATE tasks SET name ='$name', user_id = '$user_id', status = '$status' WHERE id = '$id'";
      $sql = $this->db->query($sql);


      return $array;
    }catch(PDOException $e){
      echo "falhou: ".$e->getMessage();
    }
  }

  public function updateTitle($array){
    try{

      $id  = $array['id'];
      $status =  $array['status'];
      $name = $array['name'];
      $user_id =  $array['user_id'];
      $id_group_task =  $array['id_group_task'];

      
      $sql = "UPDATE tasks SET name ='$name', user_id = '$user_id', id_group_task= '$id_group_task', status = '$status' WHERE id = '$id'";
      $sql = $this->db->query($sql);


      return $array;
    }catch(PDOException $e){
      echo "falhou: ".$e->getMessage();
    }
  }

  public function selectAll(){
    try{
          $array = array();

          $sql = "SELECT * FROM tasks";
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
          $sql = "SELECT * FROM tasks WHERE id='$id'";
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