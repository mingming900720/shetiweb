<?php

	require "FileBianli.class.php";
	
	$check=new FileBianli;
	$dirnames=array();
	$dirname="shangchuan/电影";
	
	$dirnames=$check->getDirnames($dirname);

	$check->bianliDir($dirname);

