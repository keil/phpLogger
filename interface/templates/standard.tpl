{**	php2log - the php logging engine

*	@package phpLogger
*	@subpackage phpLogger_interface
*	@version 1.01 $Revision: 419 $

*	@author	Roman Matthias Keil
*	@copyright: Roman Matthias Keil

*}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="de" xml:lang="de" xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<meta http-equiv="content-type" content="text/html; charset=ISO-8859-15" />
		<meta http-equiv="content-language" content="de" />
		<meta http-equiv="pragma" content="no-cache" />

		<meta name="author" content="Roman Matthias Keil" />
		<meta name="publisher" content="Roman Matthias Keil" />
		<meta name="copyright" content="Roman Matthias Keil" />
		<meta name="owner" content="Roman Matthias Keil" />
		<meta name="date" content="2009-09-15 14:01:05" />

		<meta name="description" content="phpLogger interface" />
		<meta name="keywords" content="php, logs, logging, php2log" />
		<meta name="language" content="de" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="7 days" />

		<link rel="stylesheet" type="text/css"	href="stylesheets/template.css" media="all" />
		<link rel="stylesheet" type="text/css" href="stylesheets/content.css" media="all" />

		<title>{$TITLE}</title>

	</head>
	<body>

		<ul id="menue">
			<li><a {if !isset($cmd) || $cmd=="all"}class="current"{/if} href="?cmd=all">all</a></li>
			<li><span class="red">|<span></li>
			<li><a {if $cmd=="error"}class="current"{/if} href="?cmd=error">error</a></li>
			<li><span class="red">|<span></li>
			<li><a {if $cmd=="debug"}class="current"{/if} href="?cmd=debug">debug</a></li>
			<li><span class="red">|<span></li>
			<li><a {if $cmd=="warning"}class="current"{/if} href="?cmd=warning">warning</a></li>
			<li><span class="red">|<span></li>
			<li><a {if $cmd=="info"}class="current"{/if} href="?cmd=info">info</a></li>
			<li><span class="red">|<span></li>
			<li><a {if $cmd=="last"}class="current"{/if} href="?cmd=last">last</a></li>
			<li><span class="red">|<span></li>
			<li><a {if $cmd=="download"}class="current"{/if} href="?cmd=download">download</a></li>
			<li><span class="red">|<span></li>
			<li><a {if $cmd=="clear"}class="current"{/if} href="?cmd=clear">clear</a></li>
		</ul>

		<div id="content">
			<h1>{$TITLE}</h1>
			<!-- BEGINN LOG INFORMATION -->
			<ul id="logs">
			{foreach item=entry from=$entries}
				<li>
					<span class="{$entry.class}">{$entry.event}</span>
					<span class="backtrace">{$entry.backtrace}</span>
					<span class="date">{$entry.timestamp}</span>
					{$entry.message}
				</li>
			{/foreach}
			</ul>
			<!-- END LOG INFORMATION -->
		</div>

		<div id="footline">
			<p><a href="http://rm-keil.de">phpLogger</a> - php logging
			engine<br />
			Copyright © by <a href="http://matthias-keil.de">Roman Matthias
			Keil</a><br />
			Interface: Version {$interface_version} Build {$interface_build} | Core: Version {$core_version}</p>
		</div>

	</body>
</html>