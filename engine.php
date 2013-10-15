<?php 

//informer is a form field, letting us know which part of this
//script needs to be called

$informer = $_POST["informer"];
$formname = $_POST["formname"];

if ($informer == "createjob.php") {
	
	//simply echo the post data
	echo $_POST["jobname"]; echo "<br>";
	echo $_POST["description"]; echo "<br>";
	echo $_POST["tags"]; echo "<br>";
	echo $_POST["requiredvars"]; echo "<br>";
	echo $_POST["script"]; echo "<br>";
	exit();
} // end createjob.php action

if ($informer == "keys") {
	if ($formname == "create") {
		$escaped_keytype = escapeshellcmd($_POST["keytype"]);
		$escaped_keyname = escapeshellcmd($_POST["keyname"]);
		$output = shell_exec("ssh-keygen -f ./keys/$escaped_keyname -t $escaped_keytype -N ''");
		header("Location: keys.php");
		exit();
	}//if formname == create

	if ($formname == "send") {
	        $escaped_formname = escapeshellcmd($_POST["formname"]);
        	$escaped_key = escapeshellcmd($_POST["key"]);
	        $escaped_servers = escapeshellcmd($_POST["servers"]);
	        $escaped_password = escapeshellcmd($_POST["password"]);

		$escaped_servers = explode(PHP_EOL, $escaped_servers);
		$escaped_servers = array_filter($escaped_servers, 'trim');

		foreach ($escaped_servers as $line) {
		
		} 

		include "LICENSE";              
                include "header.php"; 
                echo "<body>";
                include "navbar.php"; 
                echo "<pre>";
                $output = shell_exec("tail /var/log/httpd/error_log");
		echo "password: $escaped_password<br>";
		echo "key: $escaped_key<br>";
                echo $output;
                echo "</pre>";
		exit();
	}//if formname == send
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
	exit();
} //end runjob.php

if ($informer == "server") {
	if ($formname == "add") {
		//pull post data, scrub, and assign
		$escaped_hostname = escapeshellcmd($_POST["hostname"]);
		$escaped_ipaddress = escapeshellcmd($_POST["ipaddress"]);
		$escaped_tags = escapeshellcmd($_POST["tags"]);
		$escaped_tagslist = escapeshellcmd($_POST["tags"]);
		$escaped_os = escapeshellcmd($_POST["os"]);
		$escaped_key = escapeshellcmd($_POST["key"]);
	
		// break out tags
		$escaped_tags = explode(",", $escaped_tags);
		$escaped_tags = array_filter($escaped_tags, 'trim');
	
		//print tags
	        foreach ($escaped_tags as $line) {
			echo "tags: $line <br>";
	        }//end foreach
	
		//print form info
		//echo "hostname: $escaped_hostname <br>";
		//echo "ip: $escaped_ipaddress <br>";
		//echo "os: $escaped_os <br>";
		//echo "key: $escaped_key <br>";
	
		$f = fopen("servers/$escaped_hostname.ini", "w");
		fwrite($f, "hostname=$escaped_hostname\n");
		fwrite($f, "ip_address=$escaped_ipaddress\n");
		fwrite($f, "keypair=$escaped_key\n");
		fwrite($f, "os=$escaped_os\n");
		fwrite($f, "tags=$escaped_tagslist\n");
		fclose($f);  
		header("Location: servers.php");
		exit();
	}

	if ($formname == "search") {
		$escaped_search = escapeshellcmd($_POST["search"]);
		exec("grep -i $escaped_search ./servers/*",$output);
		include "LICENSE";
                include "header.php";
                echo "<body>";
                include "navbar.php";
                echo "<pre>";
		foreach ($output as $line) {
                        echo "$line <br>";
                }//end foreach
                echo "</pre>";
		exit();
	}
} //end servers.php
?>
