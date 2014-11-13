<?php

	session_start();

	include "validationcode.class.php";

	$code=new ValidationCode(174,22,5);

	$code->showImage();//输出到页面中，供注册活着登录使用
	$_SESSION["code"]=$code->getCheckCode();//将验证码保存到服务器中
