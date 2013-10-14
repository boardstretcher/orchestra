<?php include "INCLUDE"; ?>
<?php include "header.php"; ?>
<body>
<?php include "navbar.php"; ?>
	<legend>about</legend>
                <p>
                Orchestra is very unsecure. Just by it's very statement of purpose 
it is unsecure. It's a centralized server, with keys to the castle, with the
capability to run scripts on any server. Do not trust just anyone with it. If you do that, 
Orchestra can be a great tool. Otherwise, it can be a great weapon. 
                </p>
		<p>
		This is not a tool for a team. This is a tool for an individual. It should
be locked down as such.
		</p>
	<legend>security considerations</legend>
	<ul>
		<li>iptables should be enabled</li>
		<li>selinux should be enabled</li>
		<li>allow login only from certain workstations</li>
		<li>.htaccess file in place</li>
		<li>https should be enabled</li>
		<li>disallow root login @ ssh</li>
		<li>disallow password login, require a key to login @ ssh</li>

	</ul>

	<legend>HOWto</legend>
		<p>
			QuickStart
		</p>
		
		<ul>
			<li>Create a key</li>
			<li>Create a server</li>
			<li>Create a job</li>
			<li>Run the job</li>
		</ul>

<?php include "footer.php" ?>
</body>
</html>

