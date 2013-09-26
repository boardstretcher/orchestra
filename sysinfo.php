<?php include "LICENSE"; ?>		
<?php include "header.php"; ?>  
<body>
<?php include "navbar.php"; ?>

	<h2>program requirements:</h2>
	<p>
		<h3>bash</h3>
		<?php $output = shell_exec('bash --version');
                echo "<pre>$output</pre>"; ?>
		<h3>ssh</h3>
                <?php $output = shell_exec('/usr/bin/ssh -V');
                echo "<pre>$output</pre>"; ?>
 		<h3>sshpass</h3>
                <?php $output = shell_exec('sshpass -V');
                echo "<pre>$output</pre>"; ?>
 		<h3>php</h3>
                <?php $output = shell_exec('php --version');
                echo "<pre>$output</pre>"; ?>
	</p>
	<h2>system stats</h2>
	<p>
		<h3>mem info</h3>
		<?php $output = shell_exec('free -m');
		echo "<pre>$output</pre>"; ?>	
	        <h3>ip info</h3>
	        <?php $output = shell_exec('ip a | grep eth');
	        echo "<pre>$output</pre>"; ?>
	        <h3>disk info</h3>
	        <?php $output = shell_exec('df -h');
	        echo "<pre>$output</pre>"; ?>
	</p>

<?php include "footer.php"; ?>	
</body>
</html>

