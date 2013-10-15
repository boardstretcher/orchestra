<?php include "header.php"; ?> 
<?php include "modals/createkeyModal.php"; ?>
<?php include "modals/sendkeyModal.php"; ?>

	<legend>create key</legend>
	<a href="#createkeyModal" role="button" class="btn" data-toggle="modal">Create Key</a>

	<legend>send key to server(s)</legend>
	<a href="#sendkeyModal" role="button" class="btn" data-toggle="modal">Distribute Key</a>

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
                                $RList .= "<option value=\"".$value."\"/>".$value."<br>\n";
                        }
                        echo $RList;
                        ?>
		</select>
                        <br>

		<h4>Step 2: specify server(s) to send key to</h4>
		<i>one server per line</i><br>	
			<textarea name="servers" cols="25" rows="10"></textarea><br>
	
		<h4>Step 3: specify password for server(s)</h4>
			<input class="span3" type="text" name="password" placeholder="password"><br>
                        <input class="btn btn-inverse" type="submit" value="Send Key"> <a class="btn btn-info" href="reference.php#sendkey">help</a>
                </form>
        </p>
	
<?php include "footer.php"; ?>
