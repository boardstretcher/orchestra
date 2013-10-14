<?php include "LICENSE"; ?>		
<?php include "header.php"; ?>  
<body>
<?php include "navbar.php"; ?>

	<legend>orchestra stats</legend>
		<p>
			<br>number of active burn pages: <?php $output = shell_exec('find burn/ -type f | wc -l'); echo "$output"; ?>
		</p>

	<legend>list of active burn pages</legend>
		<p>	
			list burn pages
		</p>

<?php include "footer.php"; ?>	
</body>
</html>

