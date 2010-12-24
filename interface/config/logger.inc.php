<?php

/**************************************************
 * PHP LOGGER
 **************************************************/

/**************************************************
 * @package phpLogger
 * @subpackage config
 * @version 2.01
 * @build 1054
 **************************************************/

/**************************************************
 * @author: Roman Matthias Keil
 * @copyright: Roman Matthias Keil
 **************************************************/


//////////////////////
// DATABASE
//////////////////////

/* hostename of teh database
 */
define('DATABASE_HOST', '');

/* the database to write in the logentries
 */
define('DATABASE', '');

/* the database to write in the logentries
 */
define('DATABASE_TABLE', '');

/* the username for the mysql system
 */
define('DATABASE_USERNAME', '');

/* the password for the mysql system
 */
define('DATABASE_PASSWORD', '');


//////////////////////
// INTERFACE
//////////////////////

/** TIMEZONE
 *
 *	DEFAULT: Europe/Berlin;
 */
define('TIMEZONE','Europe/Berlin');

/** ERROR-REPORTING LEVEL
 *
 *	Bitwert		Konstante
 * ----------------------------
 *	0 			DISABLED
 *	1			E_ERROR
 *	2			E_WARNING
 *	4			E_PARSE
 *	8			E_NOTICE
 *	16			E_CORE_ERROR
 *	32			E_CORE_WARNING
 *	64			E_COMPILE_ERROR
 *	128			E_COMPILE_WARNING
 *	256			E_USER_ERROR
 *	512			E_USER_WARNING
 *	1024		E_USER_NOTICE
 *	6143		E_ALL
 *	2048		E_STRICT
 *
 *	DEFAULT: DISABLED
 */
define('ERROR_REPORTING', E_ALL);

/** DISPLAY-REPORTING
 *
 *	DEFAULT: false;
 */
define('DISPLAY_ERRORS', false);


//////////////////////
// SMARTY
//////////////////////

/**	SMARTY_DIR
 *	the smarty source directory
 */
define('SMARTY_DIR', 'classes/smarty/');

/**	SMARTY_CORE_DIR
 *	the smarty core directory
 */
define('SMARTY_CORE_DIR', 'classes/smarty/internals/');

/**	TEMPLATE_DIR
 *	rhe template directory
 */
define('TEMPLATE_DIR', 'templates');

/**	COMPILE_DIR
 *	the template compile directory
 */
define('COMPILE_DIR', 'templates_c');

/**	CACHE_DIR
 *	the cache directory
 */
define('CACHE_DIR', 'cache');

/** CONFIG_DIR
 * the smarty sonfig directory
 */
define('CONFIG_DIR', 'classes/smarty/config/');

/**	PLUGINS_DIR
 *	the smarty plugin directory
 */
define('PLUGINS_DIR', 'classes/smarty/plugins/');

/**	SECURITY_DIR
 *	the smarty security directory
 */
define('SECURITY_DIR', null);

/**	THRUSTED_DIR
 *	the smarty thrusted directory
 */
define('THRUSTED_DIR', null);



/**	DEBUGGING
 *	enables the debugging console
 *	DEFAULT: false
 */
define('DEBUGGING', false);

/**	DEBUGGING_TEMPLATE
 *	name of the debugging template
 *	DEFAULT: debug.tpl
 */
define('DEBUGGING_TEMPLATE', 'debug.tpl');

/**	DEBUGGING_CTRL
 *	open debugging conole by URL
 *	VALUES: NONE, URL (SMARTY_DEBUG)
 *	DEFAULT: NONE
 */
define('DEBUGGING_CTRL', 'NONE');



/**	COMPILE_CHECK
 *	checks if an template has been modified
 *	DEFAULT: false
 */
define('COMPILE_CHECK', false);

/**	FORCE_COMPILE
 *	force compile on every request
 *	DEFAULT: false
 */
define('FORCE_COMPILE', false);

/**	COMPILE_ID
 *	sets an id for diferent kinds of template versions
 *	DEFAULT: ''
 */
define('COMPILE_ID', null);

/**	CACHE_CHECK
 *	use subdirs in TEMPLATE_DIR
 *	DEFAULT: false
 */
define('USE_SUB_DIRS', false);



/**	CACHING
 *	sets an chaching mode
 *	0 - disabled
 *	1 - use current $cache_lifetime
 *	2 - use $cache_lifetime when file is created
 *
 *	DEFAULT: 0
 */
define('CACHING', 0);

/**	CACHE_LIFETIME
 *	lifetime (sec.) of the cache files
 *
 *	minute - 60
 *	houre - 3600
 *	day - 86400
 *	week - 604800
 *
 *	DEFAULT: 0
 */
define('CACHE_LIFETIME', 0);

/**	CACHE_CHECK
 *	sends 403 Not Modified insted of content
 *
 *	DEFAULT: false
 */
define('CACHE_CHECK', false);



/**	PHP_HANDLING
 *	sets how to handel php tag's ({php} .. {/php})
 *
 *	SMARTY_PHP_PASSTHRU - print tags as plain text
 *	SMARTY_PHP_QUOTE - quote als html
 *	SMARTY_PHP_REMOVE - remove
 *	SMARTY_PHP_ALLOW - exceute als php code
 *
 *	DEFAULT: SMARTY_PHP_PASSTHRU
 */
define('PHP_HANDLING', 'SMARTY_PHP_PASSTHRU');

/**	SECURITY
 *	enables security settings in templates
 *
 *	DEFAULT: false
 */
define('SECURITY', false);

/**	SECURITY_SETTINGS
 *	sets an array with security settings use when securits is true
 *	DEFAULT:	null
 */
define('SECURITY_SETTINGS', null);



/**	LEFT_DELIMITER
 *	left template delimiter
 *
 *	DEFAULT: {
 */
define('LEFT_DELIMITER', '{');

/**	RIGHT_DELIMITER
 *	right template delimiter
 *
 *	DEFAULT: }
 */
define('RIGHT_DELIMITER', '}');



/**	REQUEST_VARS_ORDER
 *	request order of variables
 *
 *	DEFAULT: EGPCS
 */
define('REQUEST_VARS_ORDER', 'EGPCS');

/**	REQUEST_AUTO_GLOBALS
 *	use:
 *	false - $HTTP_*_VAR[]
 *	true - $_*[]
 *
 *	DEFAULT: false
 */
define('REQUEST_AUTO_GLOBALS', false);

/**	DEFAULT_MODIFIER
 *	array of modifiers to applay
 *
 *	DEFAULT: null
 */
define('DEFAULT_MODIFIER', null);

/**	DEFAULT_RESOURCE
 *	sets the default type to use by including
 *	include('index.tpl') instead of include('file:index.tpl')
 *
 *	DEFAULT: file
 */
define('DEFAULT_RESOURCE', 'file');

/**	CACHE_HANDLER
 *	sets an function for chache handling
 *
 *	DEFAULT: null
 */
define('CACHE_HANDLER', null);


/**	AUTOLOAD_FILTERS
 *	an array of filters smarty should load on startup
 *
 *	DEFAULT: null
 */
define('AUTOLOAD_FILTERS', null);


/**	CONFIG_OVERRIDE
 *	override configurations with the same name
 *	else the values are pushed into an array
 *
 *	DEFAULT: true
 */
define('CONFIG_OVERRIDE', true);

/**	CONFIG_BOOLEANIZE
 *	converts automaticla value types of on/off yes/no to true/false
 *
 *	DEFAULT: false
 */
define('CONFIG_BOOLEANIZE', false);

/**	CONFIG_READ_HIDDEN
 *	tells smarty if hiddem sections in the configuration file can be red
 *
 *	DEFAULT: false
 */
define('CONFIG_READ_HIDDEN', false);

/**	CONFIG_FIX_NEWLINE
 *	converts \n\r and \r to \n
 *
 *	DEFAULT: true
 */
define('CONFIG_FIX_NEWLINE', 'true');

/**	TEMPLATE_HANDLER
 *	this resource is called if an template can not be fount
 */
define('TEMPLATE_HANDLER', '');

/**	COMPILER_FILE
 *	the name of the Smarty_Compiler
 *
 *	DEFAULT: Smarty_Compiler.class.php
 */
define('COMPILER_FILE', 'Smarty_Compiler.class.php');

/**	COMPILER_CLASS
 *	the class for compiling the templates
 *
 *	DEFAULT: Smarty_Compiler
 */
define('COMPILER_CLASS', 'Smarty_Compiler');

/**	CONFIG_CLASS
 *	the class to load config files
 *
 *	DEFAULT: Config_File
 */
define('CONFIG_CLASS', 'Config_File');

?>