<?php
// things to fix in this code:
// remove .pub results from list of keys
?>

<?php include "LICENSE"; ?>
<?php include "header.php"; ?> 
<body>
<?php include "navbar.php"; ?>

	<h2>create key</h2>
	<p>
		<form action="engine.php" method="post">
			<input type="hidden" name="informer" value="keys.php">
			<input type="hidden" name="formname" value="create">
			keyname<br>
			<input type="text" name="keyname"><br><br>
			keytype<br>
			RSA<input type="radio" name="keytype" value="rsa"><br>
			DSA<input type="radio" name="keytype" value="dsa">	
			<input type="submit" value="create key">
		</form>
	</p>

	<hr>

	<h2>send key to server(s)</h2>
	<p>
                <form action="engine.php" method="post">
		<input type="hidden" name="informer" value="keys.php">
		<input type="hidden" name="formname" value="send">
		<h4>Step 1: choose a key</h4>

		<?php
		// can turn this bit into a function, its going to be used a bit
		// ?>
                        <?php
                        $directory = opendir("./keys");
                        while($entry = readdir($directory)) {
                                $dirArray[] = $entry;
                        }
                        closedir($directory);
                        $indexCount = count($dirArray);
                        sort($dirArray);
                        $RList = "";
 			for($i=2; $i<count($dirArray); $i++) {
                                $value = $dirArray[$i];
                                $RList .= "<input type=\"radio\" name=\"sendkey\" value=".$value." />".$value."<br>\n";
                        }
                        echo $RList;
                        ?>
                        <br>
		<h4>Step 2: choose server(s) to send key to</h4>
		<i>one server per line</i><br>	
			<textarea name="servers" cols="25" rows="10"></textarea><br>
	
		<h4>Step 3: specify password for server(s)</h4>
			<textarea name="password" cols="25" rows="1"></textarea><br>
	
                        <input type="submit" value="Send Key">
                </form>
        </p>
	
<?php include "footer.php"; ?>
</body>
</html>

