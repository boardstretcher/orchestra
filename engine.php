<?php 

//informer is a form field, letting us know which part of this
//script needs to be called

$informer = $_POST["informer"];
if ($informer == "createjob.php") {
	
	//simply echo the input
	echo $_POST["jobname"]; echo "<br>";
	echo $_POST["description"]; echo "<br>";
	echo $_POST["tags"]; echo "<br>";
	echo $_POST["requiredvars"]; echo "<br>";

	$server = $_POST["server"];
	$n = count($server);

	for($i=0; $i < $n; $i++) {
		echo($server[$i] . " ");
		echo "<br>";
	}

	echo $_POST["script"]; echo "<br>";
} // end createjob.php action

if ($informer == "keys.php") {
	$keyname = $_POST["keyname"];
	$keytype = $_POST["keytype"];
	$formname= $_POST["formname"];
	$sendkey= $_POST["sendkey"];
	$servers= $_POST["servers"];
	$password= $_POST["password"];

	//scrub possibly dangerous input
	$escaped_keyname = escapeshellcmd($keyname);
	$escaped_keytype = escapeshellcmd($keytype);
	$escaped_formname = escapeshellcmd($formname);
	$escaped_sendkey = escapeshellcmd($sendkey);
	$escaped_servers = escapeshellcmd($servers);
	$escaped_password = escapeshellcmd($password);

	if ($formname == "create") {
		$output = shell_exec("ssh-keygen -f ./keys/$escaped_keyname -t $escaped_keytype -N ''");
		echo "this should just be a popup<br><br>";
		echo "<pre>$output</pre>"; 
		echo "<a href='keys.php'>Go Back</a>";
	}

	if ($formname == "send") {
		$servers = $_POST["servers"];
		$password = escapeshellcmd($_POST["password"]);
		$sendkey = escapeshellcmd($_POST["sendkey"]);
		
		$servers = explode(PHP_EOL, $servers);
		$servers = array_filter($servers, 'trim');
		foreach ($servers as $line) {
			$output = shell_exec("sshpass -p $password ssh-copy-id -i keys/$sendkey $line");	
		} 

		include "LICENSE";              
                include "header.php"; 
                echo "<body>";
                include "navbar.php"; 
                echo "<pre>";
                $output = shell_exec("tail /var/log/httpd/error_log");
                echo $output;
                echo "</pre>";

	}
} // end keys.php action

if ($informer == "runjob.php") {
	$runjob = $_POST["runjob"];
	$escaped_runjob = escapeshellcmd($runjob);

	$escaped_runjob = "./jobs/" . $escaped_runjob;
	echo "you have seleted to run <b>" . $escaped_runjob . "</b>. see contents below.<br><br><br>";
	echo "<hr>";

	$f = fopen($escaped_runjob, "r");
	while (!feof($f)) {
		$line = fgets($f);
		echo $line . "<br>"; 
	}
	fclose($f);
} //end runjob.php

?>


