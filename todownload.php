<?php
include "download.php";
$dir=opendir($dirname);
while($fileName=readdir($dir)){
	if($fileName!="."  && $fileName!=".."){
		header('Content-type: image/jpg');
		header('Content-Disposition: attachment; filename=\".$dirname.'/'.$fileName.\"');
		header( 'Content-Transfer-Encoding: binary' );    
		readfile("'$fileName'");
	}
}
closedir($dir);
echo $dirname."/".$filename."<br>";