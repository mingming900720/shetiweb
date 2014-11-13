<?php
	session_start();
	echo $_POST["code"]."<br>";
	echo $_SESSION["code"]."<br>";
	
	if(strtoupper($_POST["code"])==strtoupper($_SESSION["code"])){
		echo "OK";
	}else{
		echo "WRONG!";
	}

?>
<body>
	<form action="checkcodetest.php" method="post">
		user:<input type="text" name="username"><br>
		pass:<input type="password" name="pass"><br>
	
		code:<input type="text" name="code" onkeyup="if(this.value!=this.value.toUpperCase()) this.value=this.value.toUpperCase()"> <img src="code.php" onclick="this.src='code.php?'+Math.random()"><br>

		<input type="submit" name="sub" name="login"><br>
	</form>

</body>
