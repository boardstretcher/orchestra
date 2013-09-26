<?php include "LICENSE"; ?>		
<?php include "header.php"; ?>  
<body>
<?php include "navbar.php"; ?>

	<h2>orchestra stats</h2>
	<p>
		<br>number of snippets: <?php $output = shell_exec('find snippets/ -type f | wc -l'); echo "$output"; ?>
		<br>newest snippet: <?php $output = shell_exec('ls -tr snippets/ | tail -n 1'); echo "$output"; ?>
		<br>number of active burn pages: <?php $output = shell_exec('find burn/ -type f | wc -l'); echo "$output"; ?>
		<br>number of active jobs: <?php $output = shell_exec('find jobs/ -type f | wc -l'); echo "$output"; ?>
		<br>number of scheduled jobs: <?php $output = shell_exec('crontab -l | wc -l'); echo "$output"; ?>
		<br>number of servers: <?php $output = shell_exec('find servers/ -type f | wc -l'); echo "$output"; ?>
		<br>number of keys: <?php $output = shell_exec('find keys/ -type f | wc -l'); echo "$output"; ?>
	</p>
	<h2>run stats</h2>
	<p>
		successful jobs:<br>
		failed jobs:<br>
		<!-- pull data from ./stats/ -->
	</p>

<?php include "footer.php"; ?>	
</body>
</html>

