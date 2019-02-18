<?php
namespace Models;

use \Core\Model;

class CheckList extends Model {

	public function insert($array) {
    try{
      

      $id_task =  $array["id_task"];
      $name =  $array["name"];
      $user_id =  $array["user_id"];
      $status =  $array["status"];


      $sql = "INSERT INTO checklist SET id_task = '$id_task', name ='$name', user_id = '$user_id', status = '$status'";
      $sql = $this->db->query($sql);
      
    echo json_encode($array);
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

      
      $sql = "UPDATE tasks SET name ='$name', user_id = '$user_id', status = '$status' WHERE id = '$id'";
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
  public function listAll($array){
    try{
        

          $id = $array['id'];
          

          $sql = "SELECT * FROM checklist WHERE id_task='$id'";
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