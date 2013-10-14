<?php include "LICENSE"; ?>		
<?php include "header.php"; ?>  
<body>
<?php include "navbar.php"; ?>
<legend>/var/log/httpd/error_log output</legend>
<a href="reference.php#adminerrorlog">help</a>
<pre>
<?php $output = shell_exec("tail /var/log/httpd/error_log");
echo $output;
?>
</pre>
  <legend>required program versions</legend>
        <a href="reference.php#versions">help</a>

        <p>
                <legend>bash</legend>
                <?php $output = shell_exec('bash --version');
                echo "<pre>$output</pre>"; ?>
                <legend>ssh</legend>
                <?php $output = shell_exec('rpm -qa | grep openssh');
                echo "<pre>$output</pre>"; ?>
                <legend>sshpass</legend>
                <?php $output = shell_exec('sshpass -V');
                echo "<pre>$output</pre>"; ?>
                <legend>php</legend>
                <?php $output = shell_exec('php --version');
                echo "<pre>$output</pre>"; ?>
        </p>
        <legend>system stats</legend>
        <p>
                <legend>mem info</legend>
                <?php $output = shell_exec('free -m');
                echo "<pre>$output</pre>"; ?>
                <legend>ip info</legend>
                <?php $output = shell_exec('ip a | grep eth');
                echo "<pre>$output</pre>"; ?>
                <legend>disk info</legend>
                <?php $output = shell_exec('df -h');
                echo "<pre>$output</pre>"; ?>
        </p>

<?php include "footer.php"; ?>	
</body>
</html>

