<?php include "LICENSE"; ?>		
<?php include "header.php"; ?>  
<body>
<?php include "navbar.php"; ?>
<legend>/var/log/httpd/error_log output</legend>
<a href="howto.php#adminerrorlog">help</a>
<pre>
<?php $output = shell_exec("tail /var/log/httpd/error_log");
echo $output;
?>
</pre>
<?php include "footer.php"; ?>	
</body>
</html>

