<?php
//Base functions for application
function countFiles($directory){
	$it = new FilesystemIterator($directory,FilesystemIterator::SKIP_DOTS);
	return	printf("%d", iterator_count($it));
}
