<?php
	require "FileBianli.class.php";
	
	$lowdir=$_POST["dirname"];
	
	$listfile=new FileBianli;
	$listfile->bianliDir($lowdir);