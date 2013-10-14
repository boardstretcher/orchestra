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
			<input type="radio" name="os" value="ubuntu12.04">ubuntu 12.04<br>
			<input type="radio" name="os" value="ubuntu12.10">ubuntu 12.10<br>
			<input type="radio" name="os" value="ubuntu13.10">ubuntu 13.10<br>
			<input type="radio" name="os" value="rhel4compatible">rhel4 compatible<br>
			<input type="radio" name="os" value="rhel5compatible">rhel5 compatible<br>
			<input type="radio" name="os" value="rhel6compatible">rhel6 compatible<br>
			<input type="radio" name="os" value="other">other<br>
		</p>
	<h4>choose key</h4>
		<p>
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
				$RList .= "<input type=\"radio\" name=\"key\" value=".$value." />".$value."<br>"; 
			}
			
			echo $RList;
		?>
			
			<input type="submit" value="create">
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
