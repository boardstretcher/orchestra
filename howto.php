<?php include "INCLUDE"; ?>
<?php include "header.php"; ?>
<body>
<?php include "navbar.php"; ?>

	<a href="addaserver"></a>
	<legend>add a server</legend>
		<p>this section is concerned with adding a server to Orchestra which
will allow that server to be selected in various forms and actions. Before you create 
or add a server to Orchestra, be sure to create a key, and send a key to the server 
using the 'create a key' and 'send key' sections.
		</p>
		<ul>
			<li>enter the hostname of the new server</li>
			<li>enter the IP address of the new server</li>
			<li>enter a comma seperated list of tags you would like attached to the server</li>
			<li>choose the server OS type</li>
			<li>choose the key for Orchestra to use to log in to the server</li>
			<li>click 'create'</li>
		</ul>

	<a href="adminerrorlog"></a>
	<legend>admin / error_log</legend>
		<p>
		The admin page has a section to display the last 15 or so lines of
the /var/log/httpd/error_log file which can be very helpful in debugging scripts and
Orchestra itself. You can edit the 'admin.php' file to change the number of lines
displayed if you feel you need to.
		</p>

	<a href="createakey"></a>
	<legend>create a key</legend>
		<p>
		this section allows you to create a DSA/RSA key that will be stored
in the /keys directory. Ultimately you should send this key to a server, and the
key will be used by Orchestra to log in and run scripts.
		</p>		
		<ul>
			<li>choose a keyname</li>
			<li>choose a keytype</li>
			<li>press 'create key'</li>
		</ul>
	
	<a href="sendkey"></a>
        <legend>send key to server(s)</legend>
                <p>
		if you have created a key, using the create a key section, then you
will see a list of the available keys here. you can select a key and send it to
multiple servers (that use the same password). Orchestra can then be set up to 
use the public key of the pair created to log into those servers to run scripts.
                </p>
                <ul>
                        <li>choose a previously created key</li>
                        <li>enter the names of servers to send to (one line each)</li>
                        <li>enter the password that all previous servers share</li>
			<li>press 'send key'</li>
                </ul>
		<p>
		note that there will be output on the next page that can help in 
diagnosing any issues. the most common problem is using a hostname that is not
resolving to an ip address via /etc/hosts or your dns server.
		</p>

<?php include "footer.php" ?>
</body>
</html>

