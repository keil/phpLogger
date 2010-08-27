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
 * $Id: Level.class.php 803 2010-05-20 13:47:08Z webadmin $
 * $HeadURL: http://svn.rm-keil.de/rm-keil/webpages/rm-keil.de/Release%20(1.0)/httpdocs/_app/core/logger/Level.class.php $
 * $Date: 2010-05-20 15:47:08 +0200 (Do, 20 Mai 2010) $
 * $Author: webadmin $
 * $Revision: 803 $
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