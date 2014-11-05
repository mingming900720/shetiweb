<?php

	require "FileBianli.class.php";
	
	$check=new FileBianli;
	$dirnames=array();
	$dirname="shangchuan/软件";
	
	$dirnames=$check->getDirnames($dirname);

	$check->bianliDir($dirname);

