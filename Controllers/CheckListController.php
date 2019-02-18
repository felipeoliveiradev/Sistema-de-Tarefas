<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;
use \Models\Tasks;
use \Models\GroupTasks;
use \Models\CheckList;

class CheckListController extends Controller {

	public function index() {

		$this->loadTemplate('dashboard', $array);
	}
	public function insert(){
		if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['status']) && !empty($_POST['status']) && isset($_POST['user_id']) && !empty($_POST['user_id']) && isset($_POST['id_task']) && !empty($_POST['id_task'])) {
	
		$array = array(
			"id_task" => $_POST['id_task'],
			"name" => $_POST['name'],
			"status" => $_POST['status'],
      "user_id" => $_POST['user_id'],
		);
		var_dump($array);
		$CheckList = new CheckList();
		$array = $CheckList->insert($array);

		return $array;
		}else{
			echo 'algum campo esta em branco';
		}
	}	
	public function delete($id){
		if(isset($_GET['id']) && !empty($_GET['id'])){
		$array = array(
			'id' => $_GET['id']
		)	;
		$Tasks = new Tasks();
		$array = $Tasks->delete($array);
		return $array;
		}else{
			echo  'sem grupo para excluior';
		}
  }
	public function update(){
		if(isset($_POST['name']) && !empty($_POST['name'])){
			$array = array(
				"id" => $_POST['id'],
				"name" => $_POST['name'],
				"status" => $_POST['status'],
				"user_id" => $_POST['user_id'],
			);
		$GroupTasks = new Tasks();
		$array = $GroupTasks->update($array);

		echo json_encode($array);	
		}else{
			'campo vazio';
		}
	}
	public function updateTitle(){
		if(isset($_POST['name']) && !empty($_POST['name'])){
			$array = array(
				"id" => $_POST['id'],
				"id_group_task" => $_POST['id_group_task'],
				"name" => $_POST['name'],
				"status" => $_POST['status'],
				"user_id" => $_POST['user_id'],
			);
		$Tasks = new Tasks();
		$array = $Tasks->updateTitle($array);

		echo json_encode($array);	
		}else{
			'campo vazio';
		}
	}
	public function concluir(){
		if(isset($_GET['id']) && !empty($_GET['id'])){
			$array = array(
				'id' => $_GET['id']
			)	;
			$Tasks = new Tasks();
			$array = $Tasks->concluir($array);
			return $array;
			}else{
				echo  'sem grupo para excluior';
			}
	}
	public function reabrir(){
		if(isset($_GET['id']) && !empty($_GET['id'])){
			$array = array(
				'id' => $_GET['id']
			)	;
			$Tasks = new Tasks();
			$array = $Tasks->reabrir($array);
			return $array;
			}else{
				echo  'sem grupo para excluior';
			}
	}
	public function listAll($id){
		if(isset($_GET['id']) && !empty($_GET['id'])){
			$array = array(
				'id' => $_GET['id']
			);
			$CheckList = new CheckList();
			$array = $CheckList->listAll($array);
		
				echo json_encode($array);
			}else{
				echo 'campo não existe';
			}
  }
	public function listUnic($id){
		if(isset($_GET['id']) && !empty($_GET['id'])){
			$array = array(
				'id' => $_GET['id']
			)	;
    $Tasks = new Tasks();
		$array = $Tasks->selectUnic($array);
		
		echo json_encode($array);	
		}else{
			echo 'não existe esse id';
		}
  }

}