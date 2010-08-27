<?php

/**	php2log - the php logging engine

*	@package php2log
*	@subpackage php2log_core
*	@version 1.01 $Revision: 419 $

*	@author	Roman Matthias Keil
*	@copyright: Roman Matthias Keil

*/


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