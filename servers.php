<?php include "header.php"; ?>

	<legend>add a server</legend>
        <form action="engine.php" method="post">
	<input type="hidden" name="informer" value="servers.php">
        <input type="hidden" name="formname" value="add">
	<h4>server info</h4>
	        <p>
		<input class="span3" type="text" name="hostname" placeholder="hostname"><br>
		<input class="span3" type="text" name="ipaddress" placeholder="ipaddress"><br>
		<input class="span3" type="text" name="tags" placeholder="tags,tags,tags"><br>
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
		<input class="btn btn-inverse" type="submit" value="create"> <a class="btn btn-info" href="reference.php#addaserver"> help</a>
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

	<legend>search servers</legend>
		<p>
			<form action="engine.php" method="post">
		        <input type="hidden" name="informer" value="servers.php">
	        	<input type="hidden" name="formname" value="search">
			<input type="text" name="search"><br>	
			<input class="btn btn-inverse" type="submit" value="search"> <a class="btn btn-info" href="reference.php#searchserver"> help</a>
		</p>

<?php include "footer.php"; ?>
