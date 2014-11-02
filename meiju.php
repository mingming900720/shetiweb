<?php

	require "FileBianli.class.php";
	
	$check=new FileBianli;
	
	$dirname="shangchuan/meiju";
	
	if($check->bianliDir($dirname)){
		echo "yesssssssssssssssssssssssssssssssssssssssssssssssssssssss<br>";
	}else{
		echo"noooooooooooooooooooooooooooooooooooooooooooooooooooooooooo<br>";
	}
	
	