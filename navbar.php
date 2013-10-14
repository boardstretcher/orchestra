<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
	<div class="navbar-header">
	<a class="navbar-brand" href="index.php">Orchestra</a>
	</div>
	<div class="collapse navbar-collapse">
	<ul class="nav navbar-nav">
	<?php
        	$current = $_SERVER['PHP_SELF'];
	        if ($current == "/orchestra/index.php") { echo "<li class=\"active\"><a href=\"index.php\">main</a></li>";} else { echo "<li><a href=\"index.php\">main</a></li>"; }
	        if ($current == "/orchestra/jobs.php") { echo "<li class=\"active\"><a href=\"jobs.php\">jobs</a></li>";} else { echo "<li><a href=\"jobs.php\">jobs</a></li>"; }
	        if ($current == "/orchestra/snippets.php") { echo "<li class=\"active\"><a href=\"snippets.php\">snippets</a></li>";} else { echo "<li><a href=\"snippets.php\">snippets</a></li>"; }
	        if ($current == "/orchestra/burn.php") { echo "<li class=\"active\"><a href=\"burn.php\">burn</a></li>";} else { echo "<li><a href=\"burn.php\">burn</a></li>"; }
	        if ($current == "/orchestra/spooler.php") { echo "<li class=\"active\"><a href=\"spooler.php\">spooler</a></li>";} else { echo "<li><a href=\"spooler.php\">spooler</a></li>"; }
	        if ($current == "/orchestra/keys.php") { echo "<li class=\"active\"><a href=\"keys.php\">keys</a></li>";} else { echo "<li><a href=\"keys.php\">keys</a></li>"; }
	        if ($current == "/orchestra/servers.php") { echo "<li class=\"active\"><a href=\"servers.php\">servers</a></li>";} else { echo "<li><a href=\"servers.php\">servers</a></li>"; }
	        if ($current == "/orchestra/reference.php") { echo "<li class=\"active\"><a href=\"reference.php\">reference</a></li>";} else { echo "<li><a href=\"reference.php\">reference</a></li>"; }
	        if ($current == "/orchestra/howto.php") { echo "<li class=\"active\"><a href=\"howto.php\">howto</a></li>";} else { echo "<li><a href=\"howto.php\">howto</a></li>"; }
	        if ($current == "/orchestra/sysinfo.php") { echo "<li class=\"active\"><a href=\"sysinfo.php\">sysinfo</a></li>";} else { echo "<li><a href=\"sysinfo.php\">sysinfo</a></li>"; }
	        if ($current == "/orchestra/admin.php") { echo "<li class=\"active\"><a href=\"admin.php\">admin</a></li>";} else { echo "<li><a href=\"admin.php\">admin</a></li>"; }
        ?>
	</ul>
	</div><!--navbar collapse-->
	</div><!--container-->
</div>

<div class="wrapper">
<div class="container">
