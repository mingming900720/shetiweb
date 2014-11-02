<?php

	$num=$_POST["num"];
	if($num){
		echo '<form action="upload.php" method="post" enctype="multipart/form-data">';
		echo '<input type="hidden" name="MAX_FILE_SIZE" value="10000000000"/>';	
		for($i=0; $i<$num; $i++){
			echo '<input type="file" name="spic[]"/> <br>';
		}
		echo '上传到：<input type="text" name="filepath"/> <br>';
		echo '<input type="submit" name="sub" value="上传"/> <br>';
		echo '</form>';
	}



