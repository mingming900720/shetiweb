<style>
	table{
		border:1px solid #050;
	}

	 .fontb {
		color:white;
		background:blue;
	}

	th {
		width:30px;
	}

	td,th {
		height:30px;
		text-align:center;	
	}

	form {
		margin:0px;
		padding:0px;
	}

</style>


<?php
	include "calendar.class.php";
	echo '<head>';
		echo '<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/ >';
	echo '</head>';
	$calendar=new Calendar;
	$calendar->out();	
