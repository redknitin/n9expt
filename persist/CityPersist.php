<?php
require_once 'models/CityModel.php';

class CityPersist {
	public static function loadCities() {
		$sql = 'SELECT code, name, country_code, (SELECT country.name FROM country WHERE country.code=country_code) country_name FROM City';
		$rset = CityPersist::execSql($sql);
		$ret_arr = [];
		while ($row = mysql_fetch_object($rset)) {
			$ret_arr[] = $row;
		}

		return $ret_arr;
	}

	public static function deleteCity($a_code) {
		$sql = "DELETE FROM City WHERE code='$a_code'";
		CityPersist::execSql($sql);
	}

	public static function updateCity($a_City, $a_key) {
		$sql = "UPDATE City SET code='{$a_City->code}', name='{$a_City->name}', country_code='{$a_City->country_code}' WHERE code='{$a_key}'";
		CityPersist::execSql($sql);
	}

	public static function insertCity($a_City) {
		$sql = "INSERT INTO City (code, name, country_code) VALUES('{$a_City->code}', '{$a_City->name}', '{$a_City->country_code}')";
		CityPersist::execSql($sql);
	}

	public static function getByCode($a_code) {
		$sql = "SELECT code, name, country_code FROM City WHERE code='$a_code'";
		$rset = CityPersist::execSql($sql);
		if ($row = mysql_fetch_object($rset)) return $row;
		return NULL;
	}
	
	private static function execSql($sql) {
		global $logger;
		$logger->info($sql);		
		return mysql_query($sql);
	}
}