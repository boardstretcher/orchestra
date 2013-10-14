<?php include "LICENSE"; ?>		
<?php include "header.php"; ?>  
<body>
<?php include "navbar.php"; ?>

	<legend>spooler status</legend>
	<p>
		list actively running jobs in /spooler
	</p>
	<ul>
	<?php
        $dir = './spooler/';
        $files = scandir($dir);
		foreach($files as $ind_file){ 
			if ($ind_file == '.') {
				continue; }
				elseif ($ind_file == '..') {
				continue; }
			else {?>
		        <li><a href="<?php echo $dir."/".$ind_file;?>"><?php echo $ind_file;?></a></li> 
        <?php
        }};        ?> 
    </ul> 

<?php include "footer.php"; ?>	
</body>
</html>

