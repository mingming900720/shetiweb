<?
	class FileUpload {
		private $filepath;//指定上传文件的保存路径
		private $allowtype=array('gif','jpg','png','jpeg');//允许文件的上传类型
		private $maxsize="1000000";//允许文件的最大长度
		private $israndname;//是否随机重命名，true flase不随机，使用原文件名
	
		//用于对上传文件的初始化
		//1.指定上传的路径 2.允许的类型 3.限制大小 4.是否使用随机文件名
		function __construct($filepath,$allowtype,$maxsize,$israndname){
			$this->filepath=$filepath;
			$this->allowtype=$allowtype;
			$this->maxsize=$maxsize;
			$this->israndname=$israndname;
			
			var_dump($this)
		}
		//用来上传一个文件 
		function uploadFile($fileFiled){
		
		}
		//用于获得上传后的文件名
		function getNewFileName(){
		
		}
		//s上传如果失败则调用此方法就可以查看错误报告
		function getErrorMeg(){
		
		}
		
	}