	<h2>Orchestra</h2>
	<p>
	<?php
	$current = $_SERVER['PHP_SELF'];
	if ($current == "/orchestra/index.php") { echo "<a href='index.php'>DASHBOARD</a> |";} else { echo "<a href='index.php'>dashboard</a> |"; }
	if ($current == "/orchestra/jobs.php") { echo "<a href='jobs.php'>JOBS</a> |";} else { echo "<a href='jobs.php'>jobs</a> |"; }
	if ($current == "/orchestra/snippets.php") { echo "<a href='snippets.php'>SNIPPETS</a> |";} else { echo "<a href='snippets.php'>snippets</a> |"; }
	if ($current == "/orchestra/burn.php") { echo "<a href='burn.php'>BURN</a> |";} else { echo "<a href='burn.php'>burn</a> |"; }
	if ($current == "/orchestra/spooler.php") { echo "<a href='spooler.php'>SPOOLER</a> |";} else { echo "<a href='spooler.php'>spooler</a> |"; }
	if ($current == "/orchestra/servers.php") { echo "<a href='servers.php'>SERVERS</a> |";} else { echo "<a href='servers.php'>servers</a> |"; }
	if ($current == "/orchestra/keys.php") { echo "<a href='keys.php'>KEYS</a> |";} else { echo "<a href='keys.php'>keys</a> |"; }
	if ($current == "/orchestra/reference.php") { echo "<a href='reference.php'>REFERENCE</a> |";} else { echo "<a href='reference.php'>reference</a> |"; }
	if ($current == "/orchestra/logs.php") { echo "<a href='logs.php'>LOGS</a> |";} else { echo "<a href='logs.php'>logs</a> |"; }
	if ($current == "/orchestra/howto.php") { echo "<a href='howto.php'>HOWTO</a> |";} else { echo "<a href='howto.php'>howto</a> |"; }
	if ($current == "/orchestra/sysinfo.php") { echo "<a href='sysinfo.php'>SYSINFO</a> |";} else { echo "<a href='sysinfo.php'>sysinfo</a> |"; }
	if ($current == "/orchestra/admin.php") { echo "<a href='admin.php'>ADMIN</a> |";} else { echo "<a href='admin.php'>admin</a> |"; }
	?>
	</p>
