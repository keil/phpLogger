<?php

/**	php2log - the php logging engine

*	@package php2log
*	@subpackage php2log_interface
*	@version 1.01 $Revision: 803 $

*	@author	Roman Matthias Keil
*	@copyright: Roman Matthias Keil

*/

require_once 'config/logger.inc.php';

class LoggerConnection {

	/**
	 * @var unknown_type
	 */
	private $connection;

	/**
	 * @return unknown_type
	 */
	function __construct() {
		$this->connection = mysql_connect(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, true) or die(": " . mysql_error());
		mysql_select_db(DATABASE) or die(": " . mysql_error());
	}

	/**
	 * @return unknown_type
	 */
	function __destruct() {
		mysql_close($this->connection);
	}

	/**
	 * @return unknown_type
	 */
	public function selectALL() {
		$sql = 'SELECT * FROM `'.DATABASE_TABLE.'` ORDER BY `timestamp` DESC';
		return mysql_query($sql);
	}

	/**
	 * @return unknown_type
	 */
	public function selectINFO() {
		$sql = 'SELECT * FROM `'.DATABASE_TABLE.'` WHERE `event`=\'INFO\' ORDER BY `timestamp` DESC';
		return mysql_query($sql);
	}

	/**
	 * @return unknown_type
	 */
	public function selectERROR() {
		$sql = 'SELECT * FROM `'.DATABASE_TABLE.'` WHERE `event`=\'ERROR\' ORDER BY `timestamp` DESC';
		return mysql_query($sql);
	}

	/**
	 * @return unknown_type
	 */
	public function selectDEBUG() {
		$sql = 'SELECT * FROM `'.DATABASE_TABLE.'` WHERE `event`=\'DEBUG\' ORDER BY `timestamp` DESC';
		return mysql_query($sql);
	}

	/**
	 * @return unknown_type
	 */
	public function selectWARNING() {
		$sql = 'SELECT * FROM `'.DATABASE_TABLE.'` WHERE `event`=\'WARNING\' ORDER BY `timestamp` DESC';
		return mysql_query($sql);
	}

	/**
	 * @return unknown_type
	 */
	public function selectLAST() {
		$sql = 'SELECT * FROM `'.DATABASE_TABLE.'` WHERE `session` = (SELECT MAX(`session`) FROM `'.DATABASE_TABLE.'`) ORDER BY `timestamp` DESC';
		return mysql_query($sql);
	}

	/**
	 * @return unknown_type
	 */
	public function clear() {
		$sql = 'TRUNCATE TABLE `'.DATABASE_TABLE.'`';
		return mysql_query($sql);
	}
}
?>
