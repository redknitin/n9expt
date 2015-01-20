<?php
require_once 'models/DepartmentModel.php';

class DepartmentPersist {
	public static function loadDepartments() {
		$sql = 'SELECT id, name, location, city_code, (SELECT city.name FROM city WHERE city.code=city_code) city_name FROM Department';
		$rset = DepartmentPersist::execSql($sql);
		$ret_arr = [];
		while ($row = mysql_fetch_object($rset)) {
			$ret_arr[] = $row;
		}

		return $ret_arr;
	}

	public static function deleteDepartment($a_id) {
		$sql = "DELETE FROM Department WHERE id='$a_id'";
		DepartmentPersist::execSql($sql);
	}

	public static function updateDepartment($a_Department, $a_key) {
		$sql = "UPDATE Department SET name='{$a_Department->name}', city_code='{$a_Department->city_code}', location='{$a_Department->location}' WHERE id='{$a_key}'";
		DepartmentPersist::execSql($sql);
	}

	public static function insertDepartment($a_Department) {
		$sql = "INSERT INTO Department (name, city_code, location) VALUES('{$a_Department->name}', '{$a_Department->city_code}', '{$a_Department->location}')";
		DepartmentPersist::execSql($sql);
	}

	public static function getById($a_id) {
		$sql = "SELECT id, name, location, city_code FROM Department WHERE id='$a_id'";
		$rset = DepartmentPersist::execSql($sql);
		if ($row = mysql_fetch_object($rset)) return $row;
		return NULL;
	}
	
	private static function execSql($sql) {
		global $logger;
		$logger->info($sql);		
		return mysql_query($sql);
	}
}