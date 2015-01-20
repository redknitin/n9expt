<?php
require_once 'models/CountryModel.php';

class CountryPersist {
	public static function loadCountries() {
		$sql = 'SELECT code, name FROM country';
		$rset = CountryPersist::execSql($sql);
		$ret_arr = [];
		while ($row = mysql_fetch_object($rset)) {
			$ret_arr[] = $row;
		}

		return $ret_arr;
	}

	public static function deleteCountry($a_code) {
		$sql = "DELETE FROM country WHERE code='$a_code'";
		CountryPersist::execSql($sql);
	}

	public static function updateCountry($a_country, $a_key) {
		$sql = "UPDATE country SET code='{$a_country->code}', name='{$a_country->name}' WHERE code='{$a_key}'";
		CountryPersist::execSql($sql);
	}

	public static function insertCountry($a_country) {
		$sql = "INSERT INTO country (code, name) VALUES('{$a_country->code}', '{$a_country->name}')";
		CountryPersist::execSql($sql);
	}

	public static function getByCode($a_code) {
		$sql = "SELECT code, name FROM country WHERE code='$a_code'";
		$rset = CountryPersist::execSql($sql);
		if ($row = mysql_fetch_object($rset)) return $row;
		return NULL;
	}
	
	private static function execSql($sql) {
		global $logger;
		$logger->info($sql);		
		return mysql_query($sql);
	}
}