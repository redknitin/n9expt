<?php
class VacancyModel {
	public $id;
	public $position_id; //Title is obtained from here
	public $description_override;
	public $expires_on
}
/*
CREATE TABLE Position (
id INT PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(20) NOT NULL,
count INT DEFAULT 1,
department_id INT
);

*/