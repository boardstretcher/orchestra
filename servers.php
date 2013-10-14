<?php include "INCLUDE"; ?>
<?php include "header.php"; ?>
<body>
<?php include "navbar.php"; ?>
	<legend>add a server</legend>
	<a href="reference.php#addaserver">help</a>
        <form action="engine.php" method="post">
	<input type="hidden" name="informer" value="servers.php">
        <input type="hidden" name="formname" value="add">
	        <p>
			hostname <input type="text" name="hostname"><br>
		        ipaddress <input type="text" name="ipaddress"><br>
			tags <input type="text" name="tags"><br>
		</p>
	<h4>server type</h4>
		<p>
		<select id="os" name="os">
			<option value="" selected>Choose an OS</option>
			<option value="ubuntu12">ubuntu12</option>
			<option value="ubuntu13">ubuntu13</option>
			<option value="rhel4compatible">rhel4compatible</option>
			<option value="rhel5compatible">rhel5compatible</option>
			<option value="rhel6compatible">rhel6compatible</option>
			<option value="other">other</option>
		</select>
		</p>
	<h4>choose key</h4>
		<p>
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
				$RList .= "<option value=".$value." />".$value."<br>"; 
			}
			echo $RList;
		?>
		</select><br><br>
		<input class="btn-custom" type="submit" value="create">
        </p>
        </form>

	<legend>servers list</legend>
		<p>This is the list of the current active servers in your ./servers directory.</p>
			<ul>
			<?php
			$dir = './servers/';
			$files = scandir($dir);
			foreach($files as $ind_file){
				if ($ind_file == '.') {
					continue; }
					elseif ($ind_file == '..') {
					continue; }
					else {?>
					<li><a href="<?php echo $dir."/".$ind_file;?>"><?php echo $ind_file;?></a></li> 
			<?php
			}};
			?> 
			</ul> 
		</p>

<?php include "footer.php"; ?>
</body>
</html>
