<?php include "LICENSE"; ?>		
<?php include "header.php"; ?>  
<body>
<?php include "navbar.php"; ?>

	<h2>orchestra stats</h2>
		<p>
			<br>number of active burn pages: <?php $output = shell_exec('find burn/ -type f | wc -l'); echo "$output"; ?>
		</p>

	<h2>list of active burn pages</h2>
		<p>	
			list burn pages
		</p>

<?php include "footer.php"; ?>	
</body>
</html>

