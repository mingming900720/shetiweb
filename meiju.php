<?php

	require "FileBianli.class.php";
	
	$check=new FileBianli;
	$dirnames=array();
	$dirname="shangchuan/meiju";
	
	$dirnames=$check->getDirnames($dirname);

	foreach($dirnames as $key=>$val){
		$vals=explode("/", $val);
		$lastdir=$vals[count($vals)-1];
		echo '<form action="listfile.php" method="post" enctype="multipart/form-data">';	
		echo '<input type="hidden" name="dirname" value="'.$val.'"/>';	
		echo '<input type="submit" name="sub" value="'.$lastdir.'"/> <br>';
		echo '</form>';
	}
	$check->bianliDir($dirname);

