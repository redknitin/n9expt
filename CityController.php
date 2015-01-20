<?php
require_once 'config.php';

include 'models/CityModel.php';
include 'persist/CityPersist.php';
include 'persist/CountryPersist.php';

class CityController extends \n9fx\DbController {
	public function index() {
		$this->data = CityPersist::loadCities();
	}

	public function save() {
		$c = new CityModel();
		foreach($_POST as $key=>$val) $c->$key=$val;
		if (isset($_GET['code']) && $_GET['code']!=NULL) {
			CityPersist::updateCity($c, $_GET['code']);
		} else {
			CityPersist::insertCity($c);
		}
	}

	public function delete() {
		CityPersist::deleteCity($_POST['code']);
	}

	public function edit() {
		if (isset($_GET['code']) && $_GET['code']!=NULL) {
			$this->data = CityPersist::getByCode($_GET['code']);
		} else {
			$this->data = new CityModel();
		}
		$this->lookup = [
			'country' => CountryPersist::loadCountries()
		];
	}
}

$c=new CityController();
$c->process();



/*
	private function loadCountries() {
		$c_arr = [
			new CityModel([
				'code' => 'AE',
				'name' => 'United Arab Emirates'
			]),
			new CityModel([
				'code' => 'IN',
				'name' => 'India'
			])
		];

		return $c_arr;
	}
*/