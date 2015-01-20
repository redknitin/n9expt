<?php
require_once 'config.php';

include 'models/CountryModel.php';
include 'persist/CountryPersist.php';

class CountryController extends \n9fx\DbController {
	public function index() {
		$this->data = CountryPersist::loadCountries();
	}

	public function save() {

		$c = new CountryModel();
		foreach($_POST as $key=>$val) $c->$key=$val;
		if (isset($_GET['code']) && $_GET['code']!=NULL) {
			CountryPersist::updateCountry($c, $_GET['code']);
		} else {
			CountryPersist::insertCountry($c);
		}
	}

	public function delete() {
		CountryPersist::deleteCountry($_POST['code']);
	}

	public function edit() {
		if (isset($_GET['code']) && $_GET['code']!=NULL) {
			$this->data = CountryPersist::getByCode($_GET['code']);
		} else {
			$this->data = new CountryModel();
		}
	}
}

$c=new CountryController();
$c->process();



/*
	private function loadCountries() {
		$c_arr = [
			new CountryModel([
				'code' => 'AE',
				'name' => 'United Arab Emirates'
			]),
			new CountryModel([
				'code' => 'IN',
				'name' => 'India'
			])
		];

		return $c_arr;
	}
*/