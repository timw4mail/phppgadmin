<?php

/**
 * PostgreSQL 9.6 support
 *
 */

include_once('./classes/database/Postgres10.php');

class Postgres96 extends Postgres10 {

	var $major_version = 9.6;

	/**
	 * Constructor
	 * @param $conn The database connection
	 */
	function __construct($conn) {
		parent::__construct($conn);
	}

	// Help functions

	function getHelpPages() {
		include_once('./help/PostgresDoc96.php');
		return $this->help_page;
	}

}
?>
