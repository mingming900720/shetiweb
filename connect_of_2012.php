<?php
	header("Content-Type:text/html;charset=utf-8");
	include "page.class.php";
	
	include "conn.inc.php";
	
	$result=mysql_query("select * from users");


	$total=mysql_num_rows($result);

	$num=25;
	
	$page=new Page($total, $num, "&cid=99");

	$sql="select * from users {$page->limit}";

	$result=mysql_query($sql);

	echo '<table align="center" border="1" width="960">';
	echo '<caption><h1>2012体育系</h1></caption>';

	while($row=mysql_fetch_assoc($result)){
		echo '<tr>';
		echo '<td>'.$row["id"].'</td>';
		echo '<td>'.$row["name"].'</td>';
		echo '<td>'.$row["sid"].'</td>';
		echo '<td>'.$row["pnum"].'</td>';
		echo '</tr>';
	}

	echo '<tr><td colspan="5" align="right">'.$page->fpage().'</td></tr>';
	echo '</table>';

?>