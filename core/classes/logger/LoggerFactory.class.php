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
 * $Id: LoggerFactory.class.php 803 2010-05-20 13:47:08Z webadmin $
 * $HeadURL: http://svn.rm-keil.de/rm-keil/webpages/rm-keil.de/Release%20(1.0)/httpdocs/_app/core/logger/LoggerFactory.class.php $
 * $Date: 2010-05-20 15:47:08 +0200 (Do, 20 Mai 2010) $
 * $Author: webadmin $
 * $Revision: 803 $
 **************************************************/

Application::import('config.debugger');
Application::import('core.logger.Logger');

class LoggerFactory {

	/**
	 * @var Logger
	 */
	private static $logger;
	
	/**
	 * @param string $_level
	 * @return unknown_type
	 */
	static function getInstance($_level = null) {
		if(!isset(LoggerFactory::$logger)) {
			if(isset($_level)) LoggerFactory::$logger = new Logger($_level);
			else LoggerFactory::$logger = new Logger(DEFAULT_LOGLEVEL);
		}
		return LoggerFactory::$logger;
	}


	// set_error_handler(array("LoggerFactory", "php2logErrorHandler"));
	static function php2logErrorHandler($_code, $_message, $_file, $_line) {
		$logger = LoggerFactory::getInstance();
		$logger->ERROR($_message.', '.$_file.', '.$_line);
		return false;
	}


	// set_exception_handler(array("LoggerFactory", "php2logExceptionHandler"));
	static function php2logExceptionHandler($_exception) {
		$logger = LoggerFactory::getInstance();
		$logger->ERROR($_exception->getMessage());
		return false;
	}
}
?>