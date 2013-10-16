		<form action="engine.php" method="post">
			<input type="hidden" name="informer" value="admin">
			<button class="btn btn-inverse disabled" type="submit" name="formname" value="managejobs">Manage Jobs</button>
			<button class="btn btn-inverse disabled" type="submit" name="formname" value="manageservers">Manage Servers</button>
			<button class="btn btn-inverse disabled" type="submit" name="formname" value="managekeys">Manage Keys</button>
			<button class="btn btn-inverse disabled" type="submit" name="formname" value="manageburns">Manage Burns</button>
			<button class="btn btn-inverse" type="submit" name="formname" value="update">Update Orchestra</button>
			<button class="btn btn-warning" type="submit" name="formname" value="restart">Restart Apache</button>
			<button class="btn btn-danger" type="submit" name="formname" value="clear">Clear Spooler</button>
		</form>

<?php
        $fhremote = file_get_contents("https://raw.github.com/boardstretcher/orchestra/master/stats/version.nfo");
        $fhlocal = file_get_contents("stats/version.nfo");
        if($fhlocal == $fhremote){
        echo "<div class=\"alert alert-info\"><strong>Nice!</strong> Orchestra is up to date.</div>";
        }
?>


