<?php include "INCLUDE"; ?>
<?php include "header.php"; ?>
 
<body>
<?php include "navbar.php"; ?>

	<legend>snippets</legend>
	<p>This is the list of all the snippets in your ./snippets directory. These are updated often in the
repository, so be sure to update your Orchestra often.</p>
	<ul>
	<?php
	$dir = './snippets/';
	$files = scandir($dir);
	foreach($files as $ind_file){ 
		if ($ind_file == '.') {
		continue; }
		elseif ($ind_file == '..') {
		continue; }
		else {?> 
	<li><a href="<?php echo $dir."/".$ind_file;?>"><?php echo $ind_file;?></a></li> 
	<?php
	}};
	?> 
	</ul> 

<?php include "footer.php"; ?>
</body>
</html>

