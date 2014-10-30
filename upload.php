<<<<<<< HEAD
<?php
	require "FileUpload.class.php";

	$up=new FileUpload(array('isRandName'=>true,'allowType'=>array('txt', 'doc', 'mp3', 'jpg', 'gif', 'rmvb'),'FilePath'=>'/home/wwwroot/default/shangchuan/uploads/', 'MAXSIZE'=>2000000000));

	echo '<pre>';
	if($up->uploadFile('spic')){
		print_r($up->getNewFileName());
	}else{
		print_r($up->getErrorMsg());	
	}
	
	echo '</pre>';
		
=======
<?php
	require "FileUpload.class.php";

	$up=new FileUpload(array('isRandName'=>true,'allowType'=>array('txt', 'doc', 'jpg', 'gif'),'FilePath'=>'/home/wwwroot/default/shangchuan/uploads/', 'MAXSIZE'=>200000));

	echo '<pre>';
	if($up->uploadFile('spic')){
		print_r($up->getNewFileName());
	}else{
		print_r($up->getErrorMsg());	
	}
	
	echo '</pre>';
		
>>>>>>> 37c66af9678c65eb7c6dd03c3ac3058983e4b6b3
