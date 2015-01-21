<?php
class VacancyModel {
	public $id;
	public $position_id; //Title is obtained from here
	public $description_override;
	public $expires_on
}
/*
CREATE TABLE Vacancy (
id INT PRIMARY KEY AUTO_INCREMENT,
position_id INT,
description_override TEXT,
expires_on DATE
);

*/