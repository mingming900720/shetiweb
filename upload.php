<?php
	require "FileUpload.class.php";
	
	$defaultdir="/home/wwwroot/default/shangchuan";

	$filepath=$defaultdir."/".$_POST["filepath"];

	$up=new FileUpload(array('isRandName'=>false,'allowType'=>array('txt', 'doc', 'mp3', 'jpg', 'gif', 'rmvb', '3gp', 'zip', 'exe'),'FilePath'=>$filepath, 'MAXSIZE'=>20000000000));

	echo '<pre>';
	if($up->uploadFile('spic')){
		echo "上传以下文件到".$_POST["filepath"]."文件夹成功<br>";
		foreach($up->getNewFileName() as $key=>$val){
			echo $val."<br>";
		}
	}else{
		print_r($up->getErrorMsg());	
	}
	
	echo '</pre>';

