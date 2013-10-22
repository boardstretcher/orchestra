<?php include 'header.php' ?>
<?php include 'navbar.php' ?>

<div class="row-fluid">
	<div class="span4">
		<form action="engine.php" method="post">
		<input type="hidden" name="informer" value="job">
		<input type="hidden" name="formname" value="create">
		
		<h4>job name</h4>
		<input type="text" name="jobname" placeholder='no spaces please'><br>
		<h4>description</h4>
		<input type="text" name="description" placeholder='brief description'><br>
		<h4>tags</h4>
		<input type="text" name="tags" placeholder='comma seperated tags'><br>
		<h4>ssh key</h4>
		<select id="key" name="key">
		<?php
			$dir = './keys/';
			$files = scandir($dir);
			foreach($files as $ind_file){
			if ($ind_file == '.') { continue; }
			elseif ($ind_file == '..') { continue; }
			else { 
			echo "<option value=\"$ind_file\">$ind_file</option><br>";
			}
			};
		?>
		</select><br>
	</div>

	<div class="span4">
		<p>
		<h4>default servers</h4>
	<?php           
	        $dir = './servers/';
	        $files = scandir($dir);
	        foreach($files as $ind_file){
	        if ($ind_file == '.') { continue; }
	        elseif ($ind_file == '..') { continue; }
	        else {                  
	        echo "<input type=\"checkbox\" name=\"servers[]\" value=\"$ind_file\">$ind_file</option><br>";
	        }                       
	        };              
	?>
		</p>
	</div>

	<div class="span4">            
		<h4>required variables</h4>
		<textarea name="variables" rows=10 placeholder="required variables on seperate lines"></textarea><br>
	</div>
</div>
	
		<textarea class="span11"  name="script" rows=20 placeholder="paste/write your script here..."></textarea><br>
		<button class="btn btn-primary" type="submit">Save Job</button>
	
	</form>
