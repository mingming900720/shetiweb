<?php
	include "conn.inc.php";
	echo '<meta http-equiv="Content-Type" content="text/html;charset=utf-8">';

	$handle=fopen("connect.txt", "r");
	while (!feof($handle)) {

		$buffer = fgets($handle, 4096);

		$buffers = explode(":", $buffer);
		list($sid, $name, $pnum)=$buffers;

		$insert="insert into users(name, sid, pnum) values('{$name}', '{$sid}','{$pnum}');";


		echo $insert;
		$result=mysql_query($insert);
		//解决错误
		if(!$result){
			echo "ERROR ".mysql_errno()." :".mysql_error();
			exit;
		}

		if(mysql_affected_rows() > 0){
			echo "执行成功!<br>";
		}else{
			echo "记录没有改变<br>";
		}

	}

	fclose($handle);

	mysql_close($link);
?>