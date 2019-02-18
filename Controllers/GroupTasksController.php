<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;
use \Models\Tasks;
use \Models\GroupTasks;

class GroupTasksController extends Controller {

	public function index() {

		$this->loadTemplate('dashboard', $array);
	}


	public function insert(){
		if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['status']) && !empty($_POST['status']) && isset($_POST['user_id']) && !empty($_POST['user_id'])) {

	
		$array = array(
			"name" => $_POST['name'],
			"status" => $_POST['status'],
			"user_id" => $_POST['user_id'],
		);
		$GroupTasks = new GroupTasks();
		$array = $GroupTasks->insert($array);

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
		$GroupTasks = new GroupTasks();
		$array = $GroupTasks->delete($array);
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
		$GroupTasks = new GroupTasks();
		$array = $GroupTasks->update($array);

		echo json_encode($array);	
		}else{
			'campo vazio';
		}
	}
	public function listAll(){
    $GroupTasks = new GroupTasks();
		$array = $GroupTasks->selectAll();
		
		return $array;
  }
	public function listUnic($id){
		if(isset($_GET['id']) && !empty($_GET['id'])){
			$array = array(
				'id' => $_GET['id']
			)	;
    $GroupTasks = new GroupTasks();
		$array = $GroupTasks->selectUnic($array);
		
		echo json_encode($array);	
		}else{
			echo 'não existe esse id';
		}
  }

}