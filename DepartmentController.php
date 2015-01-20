<?php
require_once 'config.php';

include 'models/DepartmentModel.php';
include 'persist/DepartmentPersist.php';
include 'persist/CityPersist.php';

class DepartmentController extends \n9fx\DbController {
	public function index() {
		$this->data = DepartmentPersist::loadDepartments();
	}

	public function save() {
		$c = new DepartmentModel();
		foreach($_POST as $key=>$val) $c->$key=$val;
		if (isset($_GET['id']) && $_GET['id']!=NULL) {
			DepartmentPersist::updateDepartment($c, $_GET['id']);
		} else {
			DepartmentPersist::insertDepartment($c);
		}
	}

	public function delete() {
		DepartmentPersist::deleteDepartment($_POST['id']);
	}

	public function edit() {
		if (isset($_GET['id']) && $_GET['id']!=NULL) {
			$this->data = DepartmentPersist::getById($_GET['id']);
		} else {
			$this->data = new DepartmentModel();
		}
		$this->lookup = [
			'city' => CityPersist::loadCities()
		];
	}
}

$c=new DepartmentController();
$c->process();
