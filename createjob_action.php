begin<br>
<br>
<br>
currently this action script just repeats what was POSTED to it.
<?php 

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


?>
<br>end
