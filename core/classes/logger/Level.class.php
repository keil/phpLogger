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

class Level {

	/*	LOGLEVEL:
	 *
	 *			|	ERROR	|	WARNING	|	INFO	|	DEBUG
	 *	--------------------------------------------------------
	 *	NONE	|	-		|	-		|	-		|	-
	 *	ERROR	|	x		|	-		|	-		|	-
	 *	WARNING	|	x		|	x		|	-		|	-
	 *	DEBUG	|	x		|	x		|	-		|	x
	 *	INFO	|	-		|	-		|	x		|	-
	 *	REPORT	|	x		|	x		|	x		|	-
	 *	ALL		|	x		|	x		|	x		|	x
	 *
	 */

	static $ALL = 'ALL';
	static $ERROR = 'ERROR';
	static $DEBUG = 'DEBUG';
	static $WARNING = 'WARNING';
	static $REPORT = 'REPORT';
	static $INFO = 'INFO';
	static $NONE = 'NONE';

}
?>