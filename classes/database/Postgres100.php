<?php

/**
 * PostgreSQL 10.0 support
 *
 */

include_once('./classes/database/Postgres.php');

class Postgres100 extends Postgres {

	var $major_version = 10.0;

	/**
	 * Constructor
	 * @param $conn The database connection
	 */
	function __construct($conn) {
		parent::__construct($conn);
	}

	// Help functions

	function getHelpPages() {
		include_once('./help/PostgresDoc100.php');
		return $this->help_page;
	}

}
?>
