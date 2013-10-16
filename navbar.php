<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
<div class="container">
<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="brand" href="./index.php">Orchestra</a>
<div class="nav-collapse collapse">
<ul class="nav">

<?php
	$current = $_SERVER['PHP_SELF'];
	if ($current == "/orchestra/index.php") { echo "<li class=\"active\"><a href=\"index.php\">main</a></li>";} else { echo "<li><a href=\"index.php\">main</a></li>"; }
	if ($current == "/orchestra/jobs.php") { echo "<li class=\"active\"><a href=\"jobs.php\">jobs</a></li>";} else { echo "<li><a href=\"jobs.php\">jobs</a></li>"; }
	if ($current == "/orchestra/snippets.php") { echo "<li class=\"active\"><a href=\"snippets.php\">snippets</a></li>";} else { echo "<li><a href=\"snippets.php\">snippets</a></li>"; }
	if ($current == "/orchestra/burn.php") { echo "<li class=\"active\"><a href=\"burn.php\">burn</a></li>";} else { echo "<li><a href=\"burn.php\">burn</a></li>"; }
	if ($current == "/orchestra/spooler.php") { echo "<li class=\"active\"><a href=\"spooler.php\">spooler</a></li>";} else { echo "<li><a href=\"spooler.php\">spooler</a></li>"; }
	if ($current == "/orchestra/reference.php") { echo "<li class=\"active\"><a href=\"reference.php\">reference</a></li>";} else { echo "<li><a href=\"reference.php\">reference</a></li>"; }
	if ($current == "/orchestra/admin.php") { echo "<li class=\"active\"><a href=\"admin.php\">admin</a></li>";} else { echo "<li><a href=\"admin.php\">admin</a></li>"; }
	echo "<li>...</li>";

	$fh = fopen("stats/status.nfo", "r");
	while (!feof($fh)) {
		$line = fgets($fh);
		if (preg_match("/status\=clear/i", $line)) {
			echo "<li class=\"btn btn-success pull-right\">Status OK</li>";
		} 
	 	if (preg_match("/status\=error/i", $line)) {
			echo "<li class=\"btn btn-danger pull-right\">Status Error</li>";
		}
	}
	fclose($fh);
?>
</ul>
</div>
</div>
</div>
</div>
<div class="wrapper">
<div class="container">

<?php
	$fhremote = file_get_contents("https://raw.github.com/boardstretcher/orchestra/master/stats/version.nfo");
	$fhlocal = file_get_contents("stats/version.nfo");
	if($fhlocal != $fhremote){
	echo "<div class=\"alert\"><strong>Attention!</strong>There is a newer version of Orchestra available at Github.</div>";
	}
?>
