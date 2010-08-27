{**	php2log - the php logging engine

*	@package phpLogger
*	@subpackage phpLogger_interface
*	@version 1.01 $Revision: 419 $

*	@author	Roman Matthias Keil
*	@copyright: Roman Matthias Keil

*}
{foreach item=entry from=$entries}
{$entry.event}	{$entry.backtrace}	{$entry.timestamp}	{$entry.message}
{/foreach}