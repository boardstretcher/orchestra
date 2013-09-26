<?php include "LICENSE"; ?>
<?php include "header.php"; ?> 
<body>

	<a href="index.php">cancel</a>
	<h2>this will be a popup window</h2>
	for now, its just an html form<br>
	<hr>

	<p>
		<form action="engine.php" method="post">
		<input type="hidden" name="informer" value="runjob.php">
			<?php
			$directory = opendir("./jobs");
			while($entry = readdir($directory)) {
				$dirArray[] = $entry;
			}
			closedir($directory);
			$indexCount = count($dirArray);
			sort($dirArray);
			$RList = "";
	
			for($i=2; $i<count($dirArray); $i++) {
				$value = $dirArray[$i];
				$RList .= "<input type=\"radio\" name=\"runjob\" value=".$value." />".$value."<br>\n";
			}
	
			$RButton = '<input type="button" value="Submit">';
			echo $RList;
			?>
			<br>
			<input type="submit" value="run">
		</form>
	</p>

</body>
</html>

