<?php

/**	php2log - the php logging engine

*	@package php2log
*	@subpackage php2log_interface
*	@version 1.01 $Revision: 419 $

*	@author	Roman Matthias Keil
*	@copyright: Roman Matthias Keil

*/

require_once 'classes/smarty/Smarty.class.php';
require_once 'config/logger.inc.php';

abstract class StandardMasterpage {

	/**
	 * @param Smarty $engine
	 * @return unknown_type
	 */
	abstract protected function workbench(Smarty $engine);

	/**
	 * @return unknown_type
	 */
	function __construct(){

		$engine = new Smarty();

		$this->initialize($engine);
		$this->generate($engine);
	}

	/**
	 * @param Smarty $_engine
	 * @return unknown_type
	 */
	private function initialize(Smarty $_engine) {

		ini_set('date.timezone',TIMEZONE);
		ini_set('display_errors', DISPLAY_ERRORS);
		ini_set('error_reporting', ERROR_REPORTING);

		// directorys
		$_engine->template_dir = TEMPLATE_DIR;
		$_engine->compile_dir = COMPILE_DIR;
		$_engine->cache_dir = CACHE_DIR;
		$_engine->config_dir = CONFIG_DIR;
		$_engine->plugins_dir = PLUGINS_DIR;

		// debugging
		$_engine->debugging = DEBUGGING;
		$_engine->debugging_tpl = DEBUGGING_TEMPLATE;
		$_engine->debugging_ctrl = DEBUGGING_CTRL;

		// compiling
		$_engine->compile_check = COMPILE_CHECK;
		$_engine->force_compile = FORCE_COMPILE;
		$_engine->compile_id = COMPILE_ID;
		$_engine->use_sub_dirs = USE_SUB_DIRS;

		// chaching
		$_engine->caching = CACHING;
		$_engine->cache_lifetime = CACHE_LIFETIME;
		$_engine->cache_modified_check = CACHE_CHECK;

		// SECURITY SETTINGS
		$_engine->php_handling = PHP_HANDLING;
		$_engine->security = SECURITY;
		$_engine->security_settings = SECURITY_SETTINGS;

		// TEMPLATE SETTINGS
		$_engine->left_delimiter = LEFT_DELIMITER;
		$_engine->right_delimiter = RIGHT_DELIMITER;

		// SMARTY SYSTEM SETTINGS
		$_engine->request_vars_order = REQUEST_VARS_ORDER;
		$_engine->request_auto_globals = REQUEST_AUTO_GLOBALS;

		$_engine->default_modifieres = DEFAULT_MODIFIER;
		$_engine->default_resource_type = DEFAULT_RESOURCE;

		$_engine->cache_handler_func = CACHE_HANDLER;
		$_engine->autoloadfilters = AUTOLOAD_FILTERS;
		$_engine->config_override = CONFIG_OVERRIDE;
		$_engine->config_booleanize = CONFIG_BOOLEANIZE;
		$_engine->config_read_hidden = CONFIG_READ_HIDDEN;
		$_engine->onfig_fix_newlines = CONFIG_FIX_NEWLINE;
		$_engine->default_temlate_handelr_func = TEMPLATE_HANDLER;
		$_engine->compiler_file = COMPILER_FILE;
		$_engine->compiler_class = COMPILER_CLASS;
		$_engine->config_class = CONFIG_CLASS;
	}

	/**
	 * @param Smarty $_engine
	 * @return unknown_type
	 */
	private function generate(Smarty $_engine) {

		////////////////////
		// CONTENT
		////////////////////

		$this->workbench($_engine);

		////////////////////
		// DISPLAY
		////////////////////

		$_engine->display('standard.tpl');
	}
}
?>
