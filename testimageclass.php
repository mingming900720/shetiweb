<?php


/*
*图像处理类
*类名Image
*文件：image.class.php
*功能：图片的缩放和加水印
*目的：让不会使用GD库的学员，通过本类可以对任意类型的图片进行缩放和加水印
*
*
*
*/

	include "image.class.php";
	
	$image=new Image("./image/");
	//对图片进行缩放
	echo $image->thumb("01.jpg", 200, 200, "th_");

	//对图片进行加水印
	echo $image->waterMark("01.jpg", "logo.jpg", 5, "wa_");
