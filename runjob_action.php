begin<br>
<br>
<br>
currently this action script just repeats what was POSTED to it.<br><br>
the idea here would be to tell the user what script is going to run,<br>
then ask for values for required variables, and select what servers<br>
to run against.<br>

<?php 
$runjob = $_POST["runjob"];
$runjob = "./jobs/" . $runjob;
echo "you have seleted to run <b>" . $runjob . "</b>. see contents below.<br><br><br>";
echo "<hr>";

$f = fopen($runjob, "r");
while (!feof($f)) 
	{
	$line = fgets($f);
	echo $line . "<br>"; 
	}
fclose($f);

//grab required vars from script
//get server list as checkboxes

//select default checkboxes
//select default key

//call runengine with POST data

?>


<br>end
