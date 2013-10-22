<?php 

// Config
$apachepass = "apache";

//informer is a form field, letting us know which part of this script needs to be called
$informer = $_POST["informer"];
$formname = $_POST["formname"];

if ($informer == "command") {
	switch ($formname) {
		case "run":
			$output = shell_exec("echo $apachepass | socat - EXEC:'sudo ',pty,setsid,ctty");
		break;
	}
}

if ($informer == "admin") {
	switch ($formname) {
		case "restart":
			$output = shell_exec("service httpd restart");
			header("Location: admin.php");
                	break;

		case "clear":
			$output = shell_exec("rm -rf spooler/*");
			header("Location: admin.php");
			break;

		case "update":
			$output = shell_exec("git pull");
	                header("Location: admin.php");
			break;	
        
		case "manageburns":
	                header("Location: index.php");
                	break;
        
		case "managejobs":
	                header("Location: index.php");
          		break;
        
        	case "managekeys":
	                header("Location: index.php");
                	break;
        
        	case "manageservers": 
	                header("Location: index.php");
			break;
	} //end formname switch
} //end admin informer

if ($informer == "job") {
	switch ($formname) {
		case "create":
			//simply echo the post data
			$jobname = "jobname=" . $_POST["jobname"] . "\n";
			$description = "description=" . $_POST["description"] . "\n";		
			$tags = "tags=" . $_POST["tags"] . "\n";	
			$key = "key=" . $_POST["key"] . "\n";	
			$variables = "variables=\n" . $_POST["variables"] . "\n";	
			$script = "script=\n" . $_POST["script"];	

			$file = "jobs/" . $_POST["jobname"] . ".ini";

			file_put_contents($file, $jobname);
			file_put_contents($file, $description, FILE_APPEND);
			file_put_contents($file, $tags, FILE_APPEND);
			file_put_contents($file, $key, FILE_APPEND);
			file_put_contents($file, $variables, FILE_APPEND);
			file_put_contents($file, $script, FILE_APPEND);


//			$servers = $_POST['servers'];
//			for($i=0; $i < count($servers); $i++){
//				echo "Selected " . $servers[$i] . "<br/>";
//			}
			header("Location: index.php");
			break;
	} //end formname switch
} // end createjob.php action

if ($informer == "key") {
	switch($formname) {
		case "create":
			$escaped_keytype = escapeshellcmd($_POST["keytype"]);
			$escaped_keyname = escapeshellcmd($_POST["keyname"]);
			$output = shell_exec("ssh-keygen -f ./keys/$escaped_keyname -t $escaped_keytype -N ''");
			header("Location: index.php");
			break;

		case "send":
		        $escaped_formname = escapeshellcmd($_POST["formname"]);
	        	$escaped_key = escapeshellcmd($_POST["key"]);
		        $escaped_servers = escapeshellcmd($_POST["servers"]);
		        $escaped_password = escapeshellcmd($_POST["password"]);

			$escaped_servers = explode(PHP_EOL, $escaped_servers);
			$escaped_servers = array_filter($escaped_servers, 'trim');

			foreach ($escaped_servers as $line) {
				$output = shell_exec("cd /var/www/html/orchestra/; echo $apachepass | sudo socat - EXEC:'sshpass -p $escaped_password ssh-copy-id -i keys/$escaped_key $line',pty,setsid,ctty");					
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
			break;
	}//end formname switch
} // end keys.php action

if ($informer == "search") {
	switch ($formname) {
		case "search":
			$escaped_search = escapeshellcmd($_POST["search"]);
			exec("grep -Ri $escaped_search --exclude=\*.{css,js,md,png,woff,svg,eot} --exclude=LICENSE  *",$output);                 
	                include "LICENSE";
	                include "header.php";
	                echo "<body>";
	                include "navbar.php";
	                echo "<pre>";

	                foreach ($output as $line) {
	                        echo "$line <br>";
	                } //end foreach

	                echo "</pre>";
	                break;
	}//end formname switch
} //end search

if ($informer == "server") {
	switch ($formname) {
		case "add":
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
	
			$f = fopen("servers/$escaped_hostname.ini", "w");
			fwrite($f, "hostname=$escaped_hostname\n");
			fwrite($f, "ip_address=$escaped_ipaddress\n");
			fwrite($f, "keypair=$escaped_key\n");
			fwrite($f, "os=$escaped_os\n");
			fwrite($f, "tags=$escaped_tagslist\n");
			fclose($f);  
			header("Location: index.php");
			break;
	} //end switch
} //end server
?>
