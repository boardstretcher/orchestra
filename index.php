<?php include "header.php"; ?>
<?php include "modals/addserverModal.php"; ?>
<?php include "modals/listserversModal.php"; ?>
<?php include "modals/searchserversModal.php"; ?>
<?php include "modals/createkeyModal.php"; ?>
<?php include "modals/sendkeyModal.php"; ?>

<a href="#createkeyModal" role="button" class="btn" data-toggle="modal">Create Key</a>
<a href="#sendkeyModal" role="button" class="btn" data-toggle="modal">Distribute Key</a>
<a href="#addserverModal" role="button" class="btn" data-toggle="modal">Add Server</a>
<a href="#listserversModal" role="button" class="btn" data-toggle="modal">Server List</a>
<a href="#searchserversModal" role="button" class="btn" data-toggle="modal">Search servers</a>


	<legend>orchestra stats</legend>
	<p>
		<br>number of snippets: <?php $output = shell_exec('find snippets/ -type f | wc -l'); echo "$output"; ?>
		<br>newest snippet: <?php $output = shell_exec('ls -tr snippets/ | tail -n 1'); echo "$output"; ?>
		<br>number of active burn pages: <?php $output = shell_exec('find burn/ -type f | wc -l'); echo "$output"; ?>
		<br>number of active jobs: <?php $output = shell_exec('find jobs/ -type f | wc -l'); echo "$output"; ?>
		<br>number of scheduled jobs: <?php $output = shell_exec('crontab -l | wc -l'); echo "$output"; ?>
		<br>number of servers: <?php $output = shell_exec('find servers/ -type f | wc -l'); echo "$output"; ?>
		<br>number of keys: <?php $output = shell_exec('find keys/ -type f | wc -l'); echo "$output"; ?>
	</p>
	<legend>run stats</legend>
	<p>
		successful jobs:<br>
		failed jobs:<br>
		<!-- pull data from ./stats/ -->
	</p>

<?php include "footer.php"; ?>	
