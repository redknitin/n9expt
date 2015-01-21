<?php
class CityModel {
	public $code;
	public $name;
	public $country_code;
}

/*
CREATE TABLE City (
code VARCHAR(4) PRIMARY KEY,
name VARCHAR(20) NULL,
country_code VARCHAR(4) REFERENCES Country(code)
);


INSERT INTO  `n9expt`.`city` (
`code` ,
`name`,
country_code
)
VALUES (
'DXB',  'Dubai', 'AE'
), (
'SHJ',  'Sharjah', 'AE'
);
*/