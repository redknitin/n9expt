<?php
class CountryModel {
	public $code;
	public $name;
	public $currencies = [];
	public $timezones = [];
	public $tld;
	public $languages = [];

	public function __construct($arr = NULL) {
		if ($arr != NULL) {
			foreach($arr as $key=>$val) {
				$this->$key = $val;
			}
		}
	}
}
//Countries can have multiple capital cities (official, temporary, administrative, defacto, legislative, royal)
//$code_type //Eg. ISO 3166-1 alpha-2, ISO 3166-1 alpha-3, UN (alpha-3), UN M49 / ISO 3166-1 numeric (numeric-3), IDD (dialing code), IATA country digrams (like ISO 3166-1 alpha-2 but with XU, AQ added)

/*
CREATE TABLE Country (
code VARCHAR(4) PRIMARY KEY,
name VARCHAR(20) NOT NULL
);


INSERT INTO  `n9expt`.`country` (
`code` ,
`name`
)
VALUES (
'AE',  'United Arab Emirates'
), (
'IN',  'India'
);
*/