<?php
class PositionModel {
	public $id;
	public $name;
	public $description; //Job Description
	public $count; //Budgeted
	public $department_id;
}
/*
CREATE TABLE Position (
id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(20) NOT NULL,
description TEXT,
count INT DEFAULT 1,
department_id INT
);

*/