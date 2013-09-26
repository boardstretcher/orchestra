begin<br>
<br>
<br>
<?php 

echo $_POST["keyname"]; echo "<br>";
echo $_POST["keytype"]; echo "<br>";

$keyname = $_POST["keyname"];
$keytype = $_POST["keytype"];

$output = shell_exec("ssh-keygen -f ./keys/$keyname -t $keytype -N ''");
echo "<pre>$output</pre>"; 


?>
<br>end
