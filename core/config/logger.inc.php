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
// LOGLEVEL
//////////////////////

/*	LOGLEVEL:
 *
 *			|	ERROR	|	WARNING	|	INFO	|	DEBUG
 *	--------------------------------------------------------
 *	NONE	|	-		|	-		|	-		|	-
 *	ERROR	|	x		|	-		|	-		|	-
 *	WARNING	|	x		|	x		|	-		|	-
 *	DEBUG	|	x		|	x		|	-		|	x
 *	INFO	|	-		|	-		|	x		|	-
 *	ALL		|	x		|	x		|	x		|	x
 *
 */
define('DEFAULT_LOGLEVEL', 'ALL');


//////////////////////
// DATABASE
//////////////////////

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

?>