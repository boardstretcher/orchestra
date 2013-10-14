<?php
// things to fix in this code:
// remove .pub results from list of keys
?>

<?php include "LICENSE"; ?>
<?php include "header.php"; ?> 
<body>
<?php include "navbar.php"; ?>
	<legend>create key</legend>
	<a href="reference.php#createakey"> help</a>
	<p>
		<form action="engine.php" method="post">
			<input type="hidden" name="informer" value="keys.php">
			<input type="hidden" name="formname" value="create">
			keyname<br>
			<input type="text" name="keyname"><br>
			keytype<br>
			RSA<input type="radio" name="keytype" value="rsa"><br>
			DSA<input type="radio" name="keytype" value="dsa">	
			<br>
			<input class="btn-custom" type="submit" value="create key">
		</form>
	</p>

	<legend>send key to server(s)</legend>
	<a href="reference.php#sendkey"> help</a>
	<p>
                <form action="engine.php" method="post">
		<input type="hidden" name="informer" value="keys.php">
		<input type="hidden" name="formname" value="send">
		<h4>Step 1: choose a key</h4>
		<select id="key" name="key">
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
                                $RList .= "<option name=\"sendkey\" value=".$value." />".$value."<br>\n";
                        }
                        echo $RList;
                        ?>
		</select>
                        <br>

		<h4>Step 2: specify server(s) to send key to</h4>
		<i>one server per line</i><br>	
			<textarea name="servers" cols="25" rows="10"></textarea><br>
	
		<h4>Step 3: specify password for server(s)</h4>
			<textarea name="password" cols="25" rows="1"></textarea><br>
	
                        <input class="btn-custom" type="submit" value="Send Key">
                </form>
        </p>
	
<?php include "footer.php"; ?>
</body>
</html>

