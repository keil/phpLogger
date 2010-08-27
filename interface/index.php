<?php

/**	php2log - the php logging engine

*	@package phpLogger
*	@subpackage phpLogger_interface
*	@version 1.01 $Revision: 419 $

*	@author	Roman Matthias Keil
*	@copyright: Roman Matthias Keil

*/

require_once 'classes/masterpage/StandardMasterpage.class.php';
require_once 'classes/logger/LoggerConnection.class.php';
require_once 'config/version.inc.php';

class Index extends StandardMasterpage {

	/**
	 * @return unknown_type
	 */
	function __construct() {
		parent::__construct();
	}

	/* (non-PHPdoc)
	 * @see classes/masterpage/StandardMasterpage#workbench($engine)
	 */
	protected function workbench(Smarty $_engine) {

		if(isset($_GET['cmd']))
		$cmd = $_GET['cmd'];
		else $cmd='all';

		switch ($cmd) {
			case 'all':
				$connection = new LoggerConnection();
				$result = $connection->selectALL();
				$this->show($_engine, $result);
				break;

			case 'info':
				$connection = new LoggerConnection();
				$result = $connection->selectINFO();
				$this->show($_engine, $result);
				break;

			case 'error':
				$connection = new LoggerConnection();
				$result = $connection->selectERROR();
				$this->show($_engine, $result);
				break;

			case 'debug':
				$connection = new LoggerConnection();
				$result = $connection->selectDEBUG();
				$this->show($_engine, $result);
				break;

			case 'warning':
				$connection = new LoggerConnection();
				$result = $connection->selectWARNING();
				$this->show($_engine, $result);
				break;

			case 'last':
				$connection = new LoggerConnection();
				$result = $connection->selectLAST();
				$this->show($_engine, $result);
				break;
					
			case 'download':
				$connection = new LoggerConnection();
				$result = $connection->selectALL();
				$this->download($_engine, $result);
				break;
					
			case 'clear':
				$connection = new LoggerConnection();
				$result = $connection->clear();
				$result = $connection->selectALL();
				$this->show($_engine, $result);
				break;

			default:
				$connection = new LoggerConnection();
				$result = $connection->selectALL();
				$this->show($_engine, $result);
				break;
		}

		$_engine->assign('TITLE', 'phpLogger - '.$cmd);
		$_engine->assign('cmd', $cmd);

		$_engine->assign('interface_version', VERSION);
		$_engine->assign('interface_build', BUILD);
		$_engine->assign('core_version', CORE_VERSION);
	}


	/**
	 * @param Smarty $_engine
	 * @param $_values
	 * @return unknown_type
	 */
	private function show(Smarty $_engine, $_values) {

		$entries = array();

		while((list($id, $event, $backtrace, $timestamp, $message) =  mysql_fetch_row($_values)))
		{
			$entry['class'] = strtolower($event);
			$entry['backtrace'] = $backtrace;
			$entry['timestamp'] = date('Y.m.d - H:i:s', strtotime($timestamp));
			$entry['event'] = $event;
			$entry['message'] = $message;

			$entries[] = $entry;
		}

		$_engine->assign('entries', $entries);
	}

	/**
	 * @param Smarty $_engine
	 * @param $_values
	 * @return unknown_type
	 */
	private function download(Smarty $_engine, $_values) {

		$entries = array();

		while((list($id, $event, $backtrace, $timestamp, $message) =  mysql_fetch_row($_values)))
		{
			$entry['class'] = strtolower($event);
			$entry['backtrace'] = $backtrace;
			$entry['timestamp'] = date('Y.m.d - H:i:s', strtotime($timestamp));
			$entry['event'] = $event;
			$entry['message'] = $message;

			$entries[] = $entry;
		}

		$_engine->assign('entries', $entries);
		$value = $_engine->fetch('download.tpl');

		header('Content-Type: text/plain');
		header("Content-Transfer-Encoding: binary");
		header("Accept-Ranges: bytes");
		header('Content-Disposition: attachment; filename="php2log_'.date("Ymd_His").'"');
		echo $value;
		exit();
	}
}

new Index();
?>