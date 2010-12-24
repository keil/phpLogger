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