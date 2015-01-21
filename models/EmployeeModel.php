<?php
class EmployeeModel {
	public $id;
	public $name;
	public $phone;
	public $email;
	public $department_id;

	public function __construct($arr = NULL) {
		if ($arr != NULL) {
			foreach($arr as $key=>$val) {
				$this->$key = $val;
			}
		}
	}
}

/*
CREATE TABLE Employee (
id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(20),
phone VARCHAR(20),
email VARCHAR(20),
position_id INT,
department_id INT
);

*/