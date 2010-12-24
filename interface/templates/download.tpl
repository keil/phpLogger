/**************************************************
 * PHP LOGGER
 **************************************************/

/**************************************************
 * @package phpLogger
 * @subpackage interface
 * @version 2.01
 * @build 1054
 **************************************************/

/**************************************************
 * @author: Roman Matthias Keil
 * @copyright: Roman Matthias Keil
 **************************************************/
{foreach item=entry from=$entries}
{$entry.event}	{$entry.backtrace}	{$entry.timestamp}	{$entry.message}
{/foreach}