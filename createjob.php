<?php include 'header.php' ?>
<?php include 'navbar.php' ?>

<form action="engine.php" method="post">
<input type="hidden" name="informer" value="job">
<input type="hidden" name="formname" value="create">
<h4>job name</h4>
<input class='span3' type="text" name="jobname" placeholder='no spaces please'><br>
<h4>description</h4>
<input class='span3' type="text" name="description" placeholder='brief description'><br>
<h4>tags</h4>
<input class='span3' type="text" name="tags" placeholder='comma seperated tags'><br>
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
<textarea class="span3" name="variables" rows=10 placeholder="required variables on seperate lines"></textarea><br>
<textarea class="span12" name="script" rows=20 placeholder="paste/write your script here..."></textarea><br>
<button class="btn btn-primary" type="submit">Save Job</button>
</form>
