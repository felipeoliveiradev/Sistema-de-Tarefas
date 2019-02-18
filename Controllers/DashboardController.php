<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;
use \Models\Tasks;
use \Models\GroupTasks;

class DashboardController extends Controller {

	public function index() {
		$array = array();
		$tasks = new Tasks();
		$groupTasks = new GroupTasks();

		$array['tasks'] = $tasks->selectAll();
		$array['groupTasks'] = $groupTasks->selectAll();




		$this->loadTemplate('dashboard', $array);
	}


}