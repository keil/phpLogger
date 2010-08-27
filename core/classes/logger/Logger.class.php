<?php

/**************************************************
 * PHP LOGGER
 **************************************************/

/**************************************************
 * @package phpLogger
 * @subpackage core
 **************************************************/

/**************************************************
 * @author: Roman Matthias Keil
 * @copyright: Roman Matthias Keil
 **************************************************/

/**************************************************
 * $Id: Logger.class.php 803 2010-05-20 13:47:08Z webadmin $
 * $HeadURL: http://svn.rm-keil.de/rm-keil/webpages/rm-keil.de/Release%20(1.0)/httpdocs/_app/core/logger/Logger.class.php $
 * $Date: 2010-05-20 15:47:08 +0200 (Do, 20 Mai 2010) $
 * $Author: webadmin $
 * $Revision: 803 $
 **************************************************/

Application::import('core.logger.Level');
Application::import('core.logger.LoggerConnection');

class Logger {

	/**
	 * @var int
	 */
	private $session;
	
	/**
	 * @var unknown_type
	 */
	private $level;

	/**
	 * @param string $_level
	 * @return unknown_type
	 */
	function __construct($_level) {
		$this->session = $this->getSession();
		$this->level = $_level;
	}

	/**
	 * @return int
	 */
	private function getSession() {
		$connection = new LoggerConnection();
		$session = $connection->getSession();
		return ++$session;
	}

	/**
	 * @param string $_value
	 * @return unknown_type
	 */
	public function ERROR($_value) {
		if($this->level == Level::$ERROR || $this->level == Level::$WARNING || $this->level == Level::$DEBUG || $this->level == Level::$REPORT || $this->level == Level::$ALL)
		$this->log('ERROR', $_value);
	}

	/**
	 * @param string $_value
	 * @return unknown_type
	 */
	public function WARNING($_value) {
		if($this->level == Level::$WARNING || $this->level == Level::$DEBUG || $this->level == Level::$REPORT ||  $this->level == Level::$ALL)
		$this->log('WARNING', $_value);
	}

	/**
	 * @param string $_value
	 * @return unknown_type
	 */
	public function DEBUG($_value) {
		if($this->level == Level::$DEBUG || $this->level == Level::$ALL)
		$this->log('DEBUG', $_value);
	}

	/**
	 * @param string $_value
	 * @return unknown_type
	 */
	public function INFO($_value) {
		if($this->level == Level::$INFO || $this->level == Level::$REPORT || $this->level == Level::$ALL)
		$this->log('INFO', $_value);
	}

	/**
	 * @param string $_type
	 * @param sring $_value
	 * @return unknown_type
	 */
	private function log($_type, $_value) {
		$session = $this->session;

		$debugBacktrace = debug_backtrace();
		$backtrace = basename($debugBacktrace[1]['file']).' ('.$debugBacktrace[1]['line'].')';

		$connection = new LoggerConnection();
		$connection->insert($session, $_type, $backtrace, $_value);
	}
}
?>