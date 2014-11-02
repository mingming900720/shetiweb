<?php

	$dirname="shangchuan/photo";
	
	$dir=opendir($dirname);
	echo "<html>";

	echo "<body>";
	while($fileName=readdir($dir)){
		if($fileName!="." && $fileName!=".."){
			echo "<a href=$dirname/$fileName>$fileName</a><br>";
		}
	}
	echo "</body>";
	echo "</html>";
	closedir($dir);







