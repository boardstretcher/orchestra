<?php include "header.php"; ?> 

<h1>Orchestra Reference</h1>
<p>Here you will find the collected knowledge of the developers written out in the complete opposite style that James Joyce would employ. That is, it should be easy to read and access. If you have suggestions
for additional help tips, feel free to update and make a pull request to the github project.</p>
<p>
<a class="btn btn-inverse">
Online Help
</a>
</p>

<h2>online scripting help</h2>
	<legend>Official Gnu Bash <a class="btn btn-mini btn-inverse" href="http://www.gnu.org/software/bash/"> go</a></legend>
		<p>Bash is the shell, or command language interpreter, that will appear in the GNU operating system. Bash is an sh-compatible shell that incorporates useful features from the Korn shell (ksh) and C shell (csh). It is intended to conform to the IEEE POSIX P1003.2/ISO 9945.2 Shell and Tools standard. It offers functional improvements over sh for both programming and interactive use. In addition, most sh scripts can be run by Bash without modification.
		</p>
	
	<legend>Bash reference <a class="btn btn-mini btn-inverse" href="http://www.gnu.org/software/bash/manual/bashref.html"> go</a></legend>
	<p>The official documentation for Bash. This is the overview of how Bash works and more or less the best place to start for bash scripting.
	</p>

	<legend>Advanced Bash Scripting <a class="btn btn-mini btn-inverse" href="http://www.tldp.org/LDP/abs/html/"> go</a></legend>
	<p>This tutorial assumes no previous knowledge of scripting or programming, but progresses rapidly toward an intermediate/advanced level of instruction . . . all the while sneaking in little nuggets of UNIX® wisdom and lore. It serves as a textbook, a manual for self-study, and as a reference and source of knowledge on shell scripting techniques.
	</p>
<hr>
<h2>local orchestra help</h2>
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
        <a href="versions"></a>
        <legend>required program versions</legend>
                <p>
                the required program versions page will give you an insight into what
programs are installed on your server, and the basic health of the server as well with
some stats on memory and disk usage, and ip info. the "minimum software versions"
reccomended are:
                </p>
                <ul>
                        <li>bash 4.1</li>
                        <li>ssh 5.3</li>
                        <li>sshpass 1.05</li>
                        <li>php 5.3.3</li>
                </ul>
                <p>
                which is nothing more than a guideline. I build the program around these
versions but as you may know, using an older version of ssh probably won't change a thing.
so just keep that in mind while tooling around with Orchestra.
                </p>





<?php include "footer.php"; ?>

