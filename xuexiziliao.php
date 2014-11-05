<?php

	require "FileBianli.class.php";
	
	$check=new FileBianli;
	$dirnames=array();
	$dirname="shangchuan/学习资料";
	
	$dirnames=$check->getDirnames($dirname);

	$check->bianliDir($dirname);

