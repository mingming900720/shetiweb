<?php
	$link=mysql_connect("localhost", "root", "link2014");

	if (!$link) {
		die('链接失败：'.mysql_error());
	}



	mysql_select_db('shetiweb', $link) or die("不能选定数据库：shetiweb：".mysql_error());




?>