<?php include "header.php"; ?> 

	<a href="index.php">cancel</a>
	
	<legend>this will be a popup window</legend>
		<p>
			for now, its just an html form<br>
		</p>	
	<hr>
		<p>
			<form action="engine.php" method="post">	
			<input type="hidden" name="informer" value="createjob.php">
				jobname <input type="text" name="jobname"><br>
				description <input type="text" name="description"><br>
				tags <input type="text" name="tags"><br>
				requiredvars <input type="text" name="requiredvars"><br>
				default servers:<br>
		
				<!-- need php to pull this info from /servers -->
				<!-- a popup form for selection would be best -->
				<input type="checkbox" name="server[]" value="testing_server01">testing_server01<br>
				<input type="checkbox" name="server[]" value="testing_server02">testing_server02<br>
				<input type="checkbox" name="server[]" value="testing_server03">testing_server03<br>
				
				<textarea name="script" cols="100" rows="25">create your script here,..</textarea><br>
				<input type="submit" value="create">
			</form>
		</p>

<?php include "footer.php"; ?>
