<?php

	require "FileBianli.class.php";
	
	$check=new FileBianli;
	$dirnames=array();
	$dirname="shangchuan/CloudMusic";
	
	$dirnames=$check->getDirnames($dirname);

	$check->bianliDir($dirname);

