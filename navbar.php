	<h2>Orchestra</h2>
	<p>
	<?php
	$current = $_SERVER['PHP_SELF'];
	if ($current == "/simple/proto/index.php") { echo "<a href='index.php'>DASHBOARD</a> |";} else { echo "<a href='index.php'>dashboard</a> |"; }
	if ($current == "/simple/proto/jobs.php") { echo "<a href='jobs.php'>JOBS</a> |";} else { echo "<a href='jobs.php'>jobs</a> |"; }
	if ($current == "/simple/proto/snippets.php") { echo "<a href='snippets.php'>SNIPPETS</a> |";} else { echo "<a href='snippets.php'>snippets</a> |"; }
	if ($current == "/simple/proto/burn.php") { echo "<a href='burn.php'>BURN</a> |";} else { echo "<a href='burn.php'>burn</a> |"; }
	if ($current == "/simple/proto/spooler.php") { echo "<a href='spooler.php'>SPOOLER</a> |";} else { echo "<a href='spooler.php'>spooler</a> |"; }
	if ($current == "/simple/proto/servers.php") { echo "<a href='servers.php'>SERVERS</a> |";} else { echo "<a href='servers.php'>servers</a> |"; }
	if ($current == "/simple/proto/keys.php") { echo "<a href='keys.php'>KEYS</a> |";} else { echo "<a href='keys.php'>keys</a> |"; }
	if ($current == "/simple/proto/reference.php") { echo "<a href='reference.php'>REFERENCE</a> |";} else { echo "<a href='reference.php'>reference</a> |"; }
	if ($current == "/simple/proto/logs.php") { echo "<a href='logs.php'>LOGS</a> |";} else { echo "<a href='logs.php'>logs</a> |"; }
	if ($current == "/simple/proto/help.php") { echo "<a href='howto.php'>HELP</a> |";} else { echo "<a href='howto.php'>help</a> |"; }
	if ($current == "/simple/proto/sysinfo.php") { echo "<a href='sysinfo.php'>SYSINFO</a> |";} else { echo "<a href='sysinfo.php'>sysinfo</a> |"; }
	?>
	</p>
