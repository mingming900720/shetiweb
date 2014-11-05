<?php

	require "FileBianli.class.php";
	
	$check=new FileBianli;
	$dirnames=array();
	$dirname="shangchuan/Sports";
	
	$dirnames=$check->getDirnames($dirname);

	$check->bianliDir($dirname);

