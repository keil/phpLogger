<?php

/**************************************************
 * PHP LOGGER
 **************************************************/

/**************************************************
 * @package phpLogger
 * @subpackage core
 * @version 2.01
 * @build 1054
 **************************************************/

/**************************************************
 * @author: Roman Matthias Keil
 * @copyright: Roman Matthias Keil
 **************************************************/

Application::import('config.logger');

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
	 * @param $_event the event to log
	 * @param $_message the message to log
	 * @return unknown_type
	 */
	public function insert($_session, $_event, $_backtrace, $_message) {
		$session = mysql_real_escape_string($_session);
		$event = mysql_real_escape_string($_event);
		$backtrace = mysql_real_escape_string($_backtrace);
		$message = mysql_real_escape_string($_message);
		$sql = 'INSERT INTO `'.TABLE_LOGS.'` (`session`, `event`, `backtrace`, `timestamp`, `message`) VALUES (\''.$session.'\', \''.$event.'\', \''.$backtrace.'\', NOW(), \''.$message.'\');';
		$res = mysql_query($sql);
	}
	
	/**
	 * @return int
	 */
	public function getSession() {
		$sql = 'SELECT MAX(`session`) FROM `'.TABLE_LOGS.'`';
		$result =  mysql_fetch_array(mysql_query($sql));
		
		if(isset($result))
			return $result[0];
		else
			return 0;
	}
}
?>