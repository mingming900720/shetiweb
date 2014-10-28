<?
	class FileUpload {
		private $filepath;     //指定上传文件保存的路径
		private $allowtype=array('gif', 'jpg', 'png', 'jpeg');  //充许上传文件的类型
		private $maxsize=1000000;  //允上传文件的最大长度 1M
		private $israndname=true;  //是否随机重命名， true false不随机，使用原文件名
		private $originName;   //源文件名称
		private $tmpFileName;   //临时文件名
		private $fileType;  //文件类型
		private $fileSize;  //文件大小
		private $newFileName; //新文件名
		private $errorNum=0;  //错误号
		private $errorMess=""; //用来提供错误报告


		
		//用于对上传文件初使化
		//1. 指定上传路径， 2，充许的类型， 3，限制大小， 4，是否使用随机文件名称
		//让用户可以不用按位置传参数，后面参数给值不用将前几个参数也提供值
		function __construct($options=array()){
			foreach($options as $key=>$val){
				$key=strtolower($key);
				//查看用户参数中数组的下标是否和成员属性名相同
				if(!in_array($key,get_class_vars(get_class($this)))){
					continue;
				}

				$this->setOption($key, $val);
			}
		 
		
		}
	
		
		private function setOption($key,$val){
			$this->$key=$val;
		}
		//用来检查文件上传路径
		private function checkFilePath(){
		
		}
		
		//用来检查文件上传的大小
		private function checkFileSize(){
		
		}
		
		//设置随机文件名称
		private function proRandName(){
		
		}
		
		//用于检查文件上传类型
		private function checkFileType(){
		
		}
		
		//用来上传一个文件 
		function uploadFile($fileField){
		
			$name=$_FILES[$fileField]['name'];
			$tmp_name=$_FILES[$fileField]['tmp_name'];
			$size=$_FILES[$fileField]['size'];
			$error=$_FILES[$fileField]['error'];
			
			
			
				$this->setFiles($name, $tmp_name, $size, $error);
		}
		
		//设置和$_FILES有关的内容
		private function setFiles($name="", $tmp_name='', $size=0, $error=0){
			$this->setOption('errorNum',$error);
			
			if($error){
				return false;
			}
			
			$this->setOption('originName',$name);
			$this->setOption('tmpFileName',$tmp_name);
			arrStr=explode('.', $name);
			$this->setOption('filetype',strlower($arrStr[count($arrStr)-1] ));
			$this->setOption('fileSize',$size);

			return true;
		}
		
		//用于获得上传后的文件名
		function getNewFileName(){
		
		}
		//s上传如果失败则调用此方法就可以查看错误报告
		function getErrorMsg(){
		
		}
		
	}