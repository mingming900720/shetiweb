<?php


	session_start();

	
	$string="";
	echo $_SESSION["code"]."<br>";
		echo $_POST["code"]."-----------------<br>";
	echo $_POST["name"]."-------------<br>";
	if(strtoupper($_POST["code"])==strtoupper($_SESSION["code"])){
			//定义短变量
		$name=$_POST["name"];	
		$age=$_POST["age"];	
		$sex=$_POST["sex"];	
		$grade=$_POST["grade"];	
		$subject=$_POST["subject"];	
		$address=$_POST["address"];	
		$position=$_POST["position"];	
		$understand=$_POST["understand"];	
		$skill=$_POST["skill"];	
		$selfevaluation=$_POST["selfevaluation"];
		$phonenumber=$_POST["phonenumber"];
		$QQnumber=$_POST["QQnumber"];
		$departments=$_POST["departments"];
		
		

		$filename="resume/".$name.".txt";//设置文件名称
		//打开文件，如果不存在则创建文件，失败则通过程序
		$handle=fopen($filename, 'w') or die('打开<b>'.$filename.'</b>失败');
		//写入文件内容
		fwrite($handle, "姓名：".$name."\n");	
		fwrite($handle, "性别：".$sex."\n");	
		fwrite($handle, "年龄：".$age."\n");
		fwrite($handle, "院系：".$departments."\n");	
		fwrite($handle, "年级：".$grade."\n");	
		fwrite($handle, "专业：".$subject."\n");
		fwrite($handle, "地址：".$address."\n");	
		fwrite($handle, "电话：".$phonenumber."\n");	
		fwrite($handle, "QQ：".$QQnumber."\n");	
		fwrite($handle, "申请职位：".$position."\n");	
		fwrite($handle, "职位认知：".$understand."\n");	
		fwrite($handle, "掌握技能：".$skill."\n");	
		fwrite($handle, "自我评价：".$selfevaluation."\n");
		
		fclose($handle);
		
		$string="您的资料已经成功送达Link HR 手中，请保持联系方式畅通，以便通知面试事宜<br>您也可以联系QQ：872757305 询问面试进度，祝您有一个好心情！";
	}else{
		$string="输入的验证码不正确呦！回去检查下吧！";
	}


	
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Link | 诚聘英才</title>
<meta name="generator" content="phpwind v8.7(20120229)">
<meta name="description" content="">
<meta name="keywords" content="">
<!--<base id="headbase" href="http://www.erqilu.com/">--><base href=".">
<link type="text/css" rel="stylesheet" href="./二七路   诚聘英才_files/g=bbscss">
<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script type="text/javascript" src="./二七路   诚聘英才_files/g=bbsjsheader"></script>

<style>
/*广播台*/
.radio{height:133px;min-width:800px;overflow:hidden;}
.radioDl{padding:0;margin:0;}
.radioDl dt{padding:0;width:690px;margin-left:7px;float:left;}
.radioDl dt .div{float:left;padding:13px 27px 0 0;}
.radioDl dt .div p{ text-align:center;line-height:25px;}
.radioUl {margin-left:-30px;padding-top:5px;}
.radioUl li{line-height:24px;height:24px;font-size:12px;overflow:hidden;}
.radioBg .view-hover,.radioBg .view-current{min-height:135px;_height:135px;}

/*实名认证*/
.certificate{ position:absolute;margin-left:0;margin-top:-2px;z-index:10;}
/*帖子标题*/
.readTitle{
	width: 100%;
	text-align: center;
	font-size: 26px;
	line-height: 60px;
	font-family: 微软雅黑;
	color: black;
	height:60px;
	margin-top:20px;
}
.tip_info{
	padding:10px 20px;
}
/*仿新浪微博用户信息显示START*/
.user_infm{
width:160px;
height:40px;
}
.user_infm li{
float:left;
width:39px;
}
.user_infm .border_l{
border-left:1px solid #999;
padding-left:3px;
width:38px;
}
.user_infm li em{
display:block;
font-size:12px;
font-family:宋体;
color:#c53131;
font-weight:700;
}
/*仿新浪微博用户信息显示END*/
/*名片*/
.card{border:1px solid #a6cbe7;width:433px;position:absolute;margin:-9px 0 0 -16px;background:#fff;-webkit-box-shadow:4px 4px 0 #e4e4e4;-moz-box-shadow:4px 4px 0 #e4e4e4;box-shadow:4px 4px 0 #e4e4e4;z-index:9;}
.card a{color:#c22;}
.card dl{padding-right:10px;}
.card dt{width:160px;overflow:hidden;}
.card dt .face_img{margin:8px 15px;float:left;}
.card dt p{padding-left:15px;}
.card dd{width:260px;padding:5px 0;float:right;}
.card dd li{height:23px;overflow:hidden;line-height:23px;}
.card dd.ddA{border-bottom:1px dotted #ccc;}
.card dd.ddA span{display:inline-block;width:60px;}
.card dd.ddB{padding:10px 0;}
.card dd.ddB a{padding-left:20px;margin-right:16px;}
.half li{float:left;width:49.5%;}
.face_img:hover{text-decoration:none;}

/*帖子结构*/
.floot_leftdiv{overflow:hidden;}
.readCon_right{float:right;clear:right;padding-bottom:10px;margin-left:10px;}
.operTips{line-height:2;background:#fffeed;color:#333;margin-right:20px;}
#read_tpc table{table-layout:fixed;}

/*帖子管理*/
.readAdmin{background:#F6F7F7;border:1px solid #d5e6ed;padding:5px 10px;border-bottom:0;}
.readAdmin a{margin:0 5px;cursor:pointer;float:left;}
.readAdmin a:hover{ text-decoration:none;color:#000;}
.readAdmin span{color:#bbb; font-family:Simsun;padding:0 5px;float:left;}

/*楼层信息*/
.readNum{overflow:hidden;}
.readNum ul{padding:7px 0;margin-left:-1px;width:160px;}
.readNum li{float:left;width:64px;padding-left:15px;border-left:1px solid #d5e6ed;line-height:14px;}
.readNum li em{display:block; font-weight:700;padding-bottom:3px;}

/*楼层直达*/
h1 a.gray{ font-size:12px; font-weight:100;font-family:Simsun;}
.readStairs a{float:left;width:15px;height:15px;background:url(images/bbs.png) -44px -64px;overflow:hidden; text-indent:-2000em;margin-top:3px;display:block;}
.readStairs a.read_prev{margin-right:5px;}
.readStairs a.read_next{margin-right:15px; background-position:-64px -64px;}
.readStairs{padding-top:5px;}
.readStairs .input{width:20px;padding:1px;vertical-align:top;}
a.stairs{display:block;float:left;width:16px;height:16px;background-position:-28px -108px;}

/*用户信息*/
.readName{padding:10px 0 0 15px;}
.readHonor{color:#666;margin:0 0 5px;line-height:18px;width:128px;}
.readFace img{line-height:1;display:block;background:#fff;margin-bottom:3px;}
.readFace p img{border:0; display:inline;}
.readLevel{line-height:25px;}
.readLevel img{display:block;}
.readUser_info .one{padding:0 0 5px;}
.readUser_info .one a{color:#c53131;}
.readUser_info .one a:hover{}
.readUser_info dt{width:60px;float:left;margin-right:5px;}
.readUser_info dd{float:left;}
.readUser_info ul.two li{float:left;width:60px;height:25px;background:#c53131;margin:0 3px 3px 0;line-height:25px;padding-left:4px}
.readUser_info ul.two li a{padding-left:18px;color:#fff}
.add_mes{ background:url(images/bbs.png) no-repeat -118px -443px;}
.add_adm{ background:url(images/pwicon/add_adm.png) no-repeat;}
.add_gag{ background:url(images/pwicon/add_gag.png) no-repeat;}
.add_fri{ background:url(images/bbs.png) no-repeat -115px -523px;}
.add_pro{ background:url(images/bbs.png) no-repeat -115px -561px;}
.add_home{ background:url(images/bbs.png) no-repeat -116px -481px;}

/*楼主留言*/
.louMes{width:300px;background:#F6F7F7;border-left:4px solid #d5e6ed;padding:10px;line-height:1.5;margin:20px 0; font-size:12px;}

/*主楼用户操作*/
.userOper{ text-align:center;margin:0 0 10px;}
.userOper a{color:#fff;background:#c53131 url(images/bbs.png) -107px -267px no-repeat;line-height:24px;height:24px;padding:0 8px 0 28px;display:inline-block;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;margin:0 1px;*font-family:Simsun;}
.userOper a:hover{ text-decoration:none;background-color:#b12131;}
.userOper a.r_keep{ background-position:-107px -297px;}
.userOper a.r_recommend{ background-position:-107px -327px;}
.userOper a.r_dig{ background-position:-107px -357px;}

/*关联主题*/
.related h4{display:block;padding:5px 0;border-bottom:1px dashed #e4e4e4;}
.related ul{padding:10px 0;border-bottom:1px dashed #e4e4e4;}

/*图片列表*/
.imgList{margin:10px 0;}
.imgList h4{height:25px;padding:0 10px 0 30px;line-height:25px;background:#F6F7F7 url(images/erqilu/file/img.gif) 10px center no-repeat;;border-top:1px solid #a6cbe7;border-bottom:1px solid #d5e6ed;}
.imgList h4 a{color:#014c90;margin:0 3px;}
.imgList h4 a.current{color:#333; font-weight:700;}
.imgList ul{padding-top:10px;}
.imgList li{float:left;width:20%;padding:0 0 10px;height:125px;}
.imgList .tac img{ width:120px;height:120px;}
.imgList li img{ cursor:pointer;display:block}
.imgList ul.one li{float:none;width:auto;height:auto;}
.forbid{padding-left:20px;background:#fff url(images/pwicon/forbid.png) 0 center no-repeat;line-height:20px;height:20px;display:inline-block;height:20px;top:0;color:#ff0000;}

/*分享*/
.shareAll{padding:2px 20px 0;border-top:1px solid #d5e6ed;background:#F6F7F7;}
.shareAll em{float:left;background:url(images/erqilu/breadEm.png) right center no-repeat;padding:5px 18px 5px 0;}
.shareAll a{float:left;margin:6px 0 0 8px;width:16px;height:16px;display:block;overflow:hidden; text-indent:-2000em;background:url(images/pwicon/shareAll.png) no-repeat;filter:alpha(opacity=80);-moz-opacity:0.8;opacity:0.8;}
.shareAll a:hover{filter:alpha(opacity=100);-moz-opacity:1;opacity:1;}

/*新幻灯片*/
.pImg_wrap{position:absolute;z-index:1002;}
.pImg{background:#ffffff;}
.pImg_bg{position:absolute;background:#000;width:100%;height:100%;filter:alpha(opacity=50);-moz-opacity:0.5;opacity:0.5;left:0;right:0;top:0;bottom:0;z-index:1001;}
.bcr1,.bcr2,.bcr3,.bcr4,.pibg1,.pibg2,.pibg3,.pibg4{overflow:hidden;z-index:1005;line-height:0 }
.bcr1,.bcr2,.bcr3,.bcr4{width:5px;height:5px;background:url(images/search/pImg.png) no-repeat;}
.pibg1,.pibg2,.pibg3,.pibg4{ background:#ffffff;}
.pibg1{height:5px;}
.pibg2{width:5px;}
.pibg3{height:5px;}
.pibg4{width:5px;}
.bcr1{ background-position:0 0;}
.bcr2{ background-position:-5px 0;}
.bcr3{ background-position:-5px -5px;}
.bcr4{ background-position:0 -5px;}
.pImg_close{background:url(images/search/pImg_close.png);float:right;width:15px;height:15px;text-indent:-2000em;overflow:hidden;-webkit-transition: all 0.2s ease-out;margin:3px 0 0 0;display:inline;}
.pImg_close:hover{background-position:0 -15px;}
.imgLoading{overflow:hidden;position:relative;}
.imgLoading img{display:block;width:100%;height:100%;}
.aPre,.aNext{position:absolute;background:url(images/blank.gif);width:45%;padding-bottom:5000px;margin-bottom:-5000px;}
.aPre{cursor:url(u/images/pre.cur),auto;}
.aNext{cursor:url(u/images/next.cur),auto;right:0;}

/*投票*/
.vote{font-size:12px;margin-bottom:20px;}
.vote h4{line-height:25px;height:25px; font-weight:700;}
.vote{line-height:1.5;}
.vote_text{padding-top:10px;}
.vote .vote_numline{width:300px; vertical-align:middle;}
.vote .vote_pick{vertical-align:bottom;width:19px;}
.vote .vote_pick input{padding:0;margin:-3px 0 0;*margin:-3px 0 0 -3px;}
.vote .vote_result{padding:0 0 0 10px;vertical-align:bottom;width:20px;}
.vote .vote_result div{white-space:nowrap;}
.vote .vote_result span{padding:0 10px 0 3px;}
.vote_part{background:#f7f7f7;padding:5px 10px;width:300px;word-break: keep-all;display:none;}
.vote_Bot{padding:10px 0 0 0;}
.vote_Bot .btn2{margin:0;}
.perCent,.perValue,.perValue span{background:url(images/post/type/vote.png) repeat-x;}
.perCent{background-color:#f0f0f0;height:12px;overflow:hidden;color:#587f02; position:relative;}
.perValue{float:left;height:100%;background-color:#006ad7;overflow:hidden; background-position:right -24px;}
.perValue span{float:left;height:100%;width:2px; background-position:0 -12px;}
.perbgA{ background-position:right -48px;}
.perbgA span{ background-position:0 -36px;}
.perbgB{ background-position:right -72px;}
.perbgB span{ background-position:0 -60px;}
.perbgC{ background-position:right -96px;}
.perbgC span{ background-position:0 -84px;}
.perbgD{ background-position:right -120px;}
.perbgD span{ background-position:0 -108px;}

/*辩论*/
.debate{margin-bottom:20px;border-bottom:1px dotted #d5e6ed;padding-bottom:20px;}
.debate_table table,.debate_oper table{ table-layout:fixed;}
.debate_table h4{padding:20px 0;}
.debate_table p{padding:15px 20px;background:#f7f7f7;border:1px dashed #e4e4e4;}
.debate_table th{background:url(images/post/type/vs.png) center center no-repeat;}
.debate_table .s4{color:#0a6cba;}
.de_ratio,.de_ratio span,.de_ratio div{background:url(images/post/type/debate.png) 0 0 no-repeat;}
.debate_table td.de_ratio{width:60px;height:150px; vertical-align:bottom;}
.de_ratio div span{height:3px;width:60px; background-position:-60px bottom; position:absolute;bottom:0;}
.de_ratio div{width:60px;height:30%;background-position:-60px 0;overflow:hidden; position:relative;}
.de_ratio .de_ratio_s{ background-position:-120px 0;}
.de_ratio .de_ratio_s span{ background-position:-120px bottom;}
.debate_oper .bt2 button{padding:0;width:74px;*width:70px;overflow:visible;}
.debate_oper .bt2{margin:0;}
.debate_square_btn,.debate_anti_btn,.debate_neutral_btn{height:18px;line-height:18px;}
.debate_square_btn{border:1px solid #ee6821;}
.debate_square_btn span{background:#ee6821;color:#fff;padding:0 .5em;}
.debate_square_btn div,.debate_anti_btn div{cursor:pointer;padding:0 .5em;background:#fff;}
.debate_square_btn em,.debate_anti_btn em{background:#fff;color:#333;}
.debate_anti_btn{border:1px solid #23bceb;}
.debate_anti_btn span{background:#23bceb;color:#fff;padding:0 .5em;}
.debate_neutral_btn{background:#ffffee;border:1px solid #f5a25c;color:#ff6600;padding:0 10px;display:inline-block;}

/*商品*/
.goodsPost{padding-bottom:30px;}
.goodsPost h5{font:bold 16px/2 Arial;}
.goodsPost ul{border-top:1px solid #d5e6ed;}
.goodsPost li{height:26px;line-height:26px;border-bottom:1px solid #d5e6ed;}
.goodsPost li em{display:inline-block;width:80px;padding:0 0 0 15px; white-space:nowrap;color:#666;}
.goodsPost li del{ font-size:14px; font-style:normal;}
.goodsPost_player{float:left;width:200px;height:151px;padding:5px;border:1px solid #d5e6ed;}

/*查看参与人员*/
.partici{}
.partici li{float:left;width:33%;line-height:25px; text-indent:1em;overflow:hidden;height:25px;}
.partici li a{text-decoration:underline;}
.partici li a:hover{ text-decoration:none;color:#333;}

/*发帖来自*/
.phone{padding-left:20px; font-size:12px;color:#666;background:url(images/pwicon/phone.png) 0 center no-repeat;margin:20px 0;}

/*抢楼*/
.rob_floors_win{width:113px;height:28px; text-indent:-2000em;display:block;overflow:hidden;background:url(images/pwicon/rob_floors_win.png) no-repeat;margin-bottom:10px;}

/*回帖奖励*/
.reply_reward{height:28px;line-height:28px;height:28px;width:120px;background:url(images/pwicon/reply_reward.png) no-repeat;}
.reply_reward span{display:block;width:66px;height:28px;vertical-align:middle;overflow:hidden; text-indent:-2000em;float:left;}
.reply_reward em{color:#ea5600;float:left;width:50px; text-align:center;font-style:normal;}

/*勋章*/
.read_medals img{margin-right:3px;}

/*帖内置顶*/
.read_topped{background:url(u/images/up.png) 0 center no-repeat;padding-left:14px;}

/*标签*/
.read_tags{background:url(images/pwicon/tags.png) 0 center no-repeat;padding-left:20px;}

/*引用回复*/
.quote_left{padding-left:16px;background:url(u/images/quoteA.png) 0 center no-repeat;}
.quote_right{background:url(u/images/quoteB.png) 0 center no-repeat;padding:0 8px;}

/*87新评分*/
.read_score {color:#616161;border:1px solid #d9dcde;background:#f6f7f7}
.read_score td{padding:5px 0;}
.read_score tr:hover td{background:#F6F7F7;}
.read_score td.read_score_face{padding-left:10px;}
.read_score td.read_score_face a{display:block;height:20px;width:20px;overflow:hidden;}
.read_score td.read_score_time{padding-left:10px;padding-right:10px;}
.read_score td.read_score_time .s4{ text-align:right;float:right;}
.read_score_head{border-top:1px solid #d9dcde;padding:8px 10px;background:#fff;background: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#f7f7f7));background: -moz-linear-gradient(top, #ffffff, #f7f7f7);filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f7f7f7');}

/*87新评分弹窗*/
.read_score_pop{padding:10px 0;}
.read_score_pop td,.read_score_pop th{padding:5px 0 5px 10px; font-size:12px;}
.read_score_pop th{width:45px;line-height:24px; text-align:right; font-weight:100;}
.rating_pop{padding:2px 0;}
.rating_pop a{width:35px;display:inline-block;text-align:center;border:1px solid #c7d8e1;color:#425b79;background:#f3fafc;background: -webkit-gradient(linear, 0 0, 0 100%, from(#f8fdfe), to(#edf6f9));background: -moz-linear-gradient(top, #f8fdfe, #edf6f9);filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f8fdfe', endColorstr='#edf6f9');}
.rating_pop a:hover{border-color:#4f8eb0;text-decoration:none;}
.rating_pop a.less{border-color:#ecd8cf;color:#8d5230;background:#fffaf2;background: -webkit-gradient(linear, 0 0, 0 100%, from(#fffaf2), to(#fff0e6));background: -moz-linear-gradient(top, #fffaf2, #fff0e6);filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffaf2', endColorstr='#fff0e6');}
.rating_pop a.less:hover{ border-color:#c58b69;}
.rating_pop a.old{background:#f7f7f7;color:#999;border:1px solid #ccc; cursor:default; filter:none;}
.rating_pop_surplus{color:#666;}
/*楼角*/
.cornermark{
	height:54px;
	width:65px;
	background:url(/images/bbs.png) 0px -270px;
}
.marktype1{
	background-position:0px -324px;
}
.marktype2{
	background-position:0px -379px;
}
</style>
<!--[if IE]>
<style>
.readUser_info .one dt{padding-top:1px;}
</style>
<![endif]-->

<link rel="icon" href="http://www.erqilu.com/favicon.ico?v=3" type="image/x-icon">

<!--[if IE 6]>	
		<script src='js/pngfix.min.js'></script>
		<script>
DD_belatedPNG.fix('.png_bg,.link_down span,.link_up span,');
		</script>
<![endif]-->
<script>
var isStaff = Boolean('');
var staffName = '游客';
var imgpath = 'images';
var verifyhash = '21512c25';
var modeimg = '';
var modeBase = '';
var winduid = '';
var windid	= '';
var groupid	= 'guest';
var basename = '';
var temp_basename = '';
var db_shiftstyle = '1';
var pw_baseurl = "http://www.erqilu.com";
function shiftStyle(){
	if(db_shiftstyle == 1){
		if (getObj('widthCfg').innerHTML=='切换到宽版') {
if(!getObj('fullscreenStyle')) {
		var l = document.createElement('link');
		l.id="fullscreenStyle";
		l.rel="stylesheet";
		l.type="text/css";
		l.href="images/fullscreen.css";
		l.media="all";
		document.body.appendChild(l);
}else {
	getObj('fullscreenStyle').disabled = false;
}
getObj('widthCfg').innerHTML='切换到窄版';
var widthCfg = 1;
		} else {
var widthCfg = 0;
getObj('fullscreenStyle').disabled=true;
getObj('widthCfg').innerHTML='切换到宽版';
		}
		SetCookie('widthCfg',widthCfg);
		if(typeof goTop!="undefined"){
goTop.setStyle();
		}
		if(typeof messagetip!="undefined"&&typeof messagetip.db!="undefined"){
messagetip.setStyle();
messagetip.update();
		}
	}
};
</script>
<!--[if IE 9 ]>
<meta name="msapplication-task" content="name=网站首页; action-uri=http://www.erqilu.com; icon-uri=favicon.ico" />
<meta name="msapplication-task" content="name=个人中心; action-uri=u.php; icon-uri=images/ico/home.ico" />
<meta name="msapplication-task" content="name=我的帖子; action-uri=apps.php?q=article; icon-uri=images/ico/post.ico" />
<meta name="msapplication-task" content="name=消息中心; action-uri=message.php; icon-uri=images/ico/mail.ico" />
<meta name="msapplication-task" content="name=我的设置; action-uri=profile.php; icon-uri=images/ico/edit.ico" />
<![endif]-->
<link rel="archives" title="二七路" href="http://www.erqilu.com/simple/">
<style>@-moz-keyframes nodeInserted{from{opacity:0.99;}to{opacity:1;}}@-webkit-keyframes nodeInserted{from{opacity:0.99;}to{opacity:1;}}@-o-keyframes nodeInserted{from{opacity:0.99;}to{opacity:1;}}@keyframes nodeInserted{from{opacity:0.99;}to{opacity:1;}}embed,object{animation-duration:.001s;-ms-animation-duration:.001s;-moz-animation-duration:.001s;-webkit-animation-duration:.001s;-o-animation-duration:.001s;animation-name:nodeInserted;-ms-animation-name:nodeInserted;-moz-animation-name:nodeInserted;-webkit-animation-name:nodeInserted;-o-animation-name:nodeInserted;}</style></head>
<body background="二七路   诚聘英才_files"><script async="" src="./二七路   诚聘英才_files/api.php"></script><script async="" src="./二七路   诚聘英才_files/aplus_pw_min.js"></script><div style="display: none;"><iframe src="./二七路   诚聘英才_files/y.htm" id="iframe1415697432438" name="iframe1415697432438"></iframe></div><script async="" src="./二七路   诚聘英才_files/saved_resource"></script><div id="pw_box" class="" style="position: absolute; left: -10000px; z-index: 1011;"></div>



<style>
#head{
	position:relative;
}
.qixi{
width: 226px;
height: 70px;
position: absolute;
left: 198px;
z-index: 10;
text-indent:-9999px;
}
</style>
<div class="wrap">
<div id="header">
     <div id="head" class="cc">
        <a href="http://www.erqilu.com/"><img src="./二七路   诚聘英才_files/logo.png" class="fl" title="二七路"></a>
        <a href="http://www.erqilu.com/index.php?m=area&alias=tanabata" target="_blank"><div class="qixi"></div></a>
		<a href="http://www.erqilu.com/"><img src="./二七路   诚聘英才_files/linklogo.png" class="f2" title="Link"></a>

<form action="http://www.erqilu.com/login.php" name="login_FORM" method="post" onsubmit="return headerAjaxLogin.login(document.login_FORM);">
<input type="hidden" name="jumpurl" value="http://www.erqilu.com/misc.php?a=jobs">
<input type="hidden" name="step" value="2">
<input type="hidden" name="ajax" value="1">

		<input type="hidden" name="lgt" id="nav_lgt" value="0">


<style>
.tooltip.top {
margin-top: -2px;
}
.tooltip {
position: absolute;
left:581px;
top:-27px;
z-index: 1020;
display: block;
visibility: visible;
padding: 5px;
font-size: 11px;
opacity: 0;
filter: alpha(opacity=0);
}
.tooltip.in {
opacity: 0.8;
filter: alpha(opacity=80);
}
.fade.in {
opacity: 0.8;
}
.tooltip.top .tooltip-arrow {
bottom: 0;
left: 50%;
margin-left: -5px;
border-left: 5px solid transparent;
border-right: 5px solid transparent;
border-top: 5px solid #C53131;
}
.tooltip-arrow {
position: absolute;
width: 0;
height: 0;
}
.tooltip-inner {
max-width: 200px;
padding: 3px 10px;
color: white;
text-align: center;
text-decoration: none;
background-color: #C53131;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
box-shadow: 0 0 1px #C53131;
}
.header_login{
	position:relative;
}
#nav_pwuser.input,#showpwd.input{
	width:100px;
}
</style>

</form>
<script type="text/javascript">
function  detectCapsLock(event)
{
	var e = event||window.event;
	var o = e.target||e.srcElement;
	var oTip = o.nextSibling;
	var keyCode  =  e.keyCode||e.which; // 获取按键的keyCode
	var isShift  =  e.shiftKey ||(keyCode  ==   16 ) || false ;
	// 判断shift键是否按住
	if (
	((keyCode >=   65   &&  keyCode  <=   90 )  &&   !isShift)
	// Caps Lock 打开，且没有按住shift键
	|| ((keyCode >=   97   &&  keyCode  <=   122 )  &&  isShift)
	// Caps Lock 打开，且按住shift键
	){ document.getElementById('capslk_tips').style.display = ''; }
	else{ document.getElementById('capslk_tips').style.display  =  'none'; }
}
document.getElementById('showpwd').onkeypress = detectCapsLock;
//document.getElementById('showpwd').onblur = function(){document.getElementById('capslk_tips').style.display  =  'none';}
</script>
<script type="text/javascript">
var default_login_type = '0';
var default_input_value = '输入' + '用户名';
function placeHolder(elem){
		   var placeholder;
		   if(elem.getAttribute("placeholder")){
	placeholder=elem.getAttribute("placeholder");
		   }
		   elem.value=placeholder;
		   var style=elem.style;
		   style.color="#888";
		   elem.onfocus=function(){
	if(this.value==placeholder){
		 this.value="";
		 style.color="#000";
	}
		   }
		   elem.onblur=function(){
	if(this.value.replace(/\s*/g,"")==""){
		 this.value=placeholder;
		 style.color="#888";
	}
		   }
 }
function changeDefaultInputValue(text){
	var nav_pwuser=getObj('nav_pwuser');
	nav_pwuser.setAttribute("placeholder",text);
	placeHolder(nav_pwuser);
	getObj('nav_lgt').value = default_login_type;
}



var headerAjaxLogin = {
	'username' : '',
	'pwd' : '',
	'login' : function(obj) {
		var _this = this;
		var username = obj.pwuser.value;
		if ((!username || username.indexOf('输入')===0) && !obj.pwpwd.value) {
document.location.href="login.php";
return false;
		}
		obj.head_login.disabled = true;
		_this.username = obj.pwuser.value;
		_this.pwd = obj.pwpwd.value;
		_this.submitBasicInfo(obj);
		return false;
	},
	
	'submitBasicInfo' : function(obj) {
		var url = 'login.php';
		ajax.send(url, obj, function() {
var rText = ajax.request.responseText.split('	');
if (rText[0] == 'error') {
	showDlg('error', rText[1], 2);
	obj.head_login.disabled = false;
} else if (rText[0] == 'success') {
	document.location.href = rText[1];
} else {
	ajax.get('', '1','',1);
	//临时遮罩
	var dd=document.documentElement;
	var cw=dd.clientWidth;
	var sh=Math.max(dd.scrollHeight,dd.clientHeight);
	var div=document.createElement("div");
	div.setAttribute("id","headerTmpMask");
	div.style.position="absolute";
	div.style.width=cw+"px";
	div.style.height=sh+"px";
	div.style.left=0;
	div.style.top=0;
	div.style.backgroundColor="#333";
	div.style.opacity="0.5";
	div.style.filter="alpha(opacity=50)";
	div.style.zIndex=1000;
	document.body.appendChild(div);
	//end
}
		});
		return false;
	},
	
	'submitCheckInfo' : function(obj) {
		var _this = this;
		var url = 'login.php';
		var ifChangeGdcode = true;
		obj.pwuser.value = _this.username;
		obj.pwpwd.value = _this.pwd;
		ajax.send(url, obj, function() {
var rText = ajax.request.responseText.split('	');
if (rText[0] == 'error') {
	if (rText[1] == 'gdcodeerror') {
		getObj('headrajaxlogintip').innerHTML = '验证码不正确或已过期';
	} else if (rText[1] == 'ckquestionerror') {
		getObj('headrajaxlogintip').innerHTML = '请输入正确的验证问题答案';
	} else if (rText[1] == 'safequestionerror') {
		getObj('headrajaxlogintip').innerHTML = '安全问题错误,您还可以尝试 ' + rText[2] + ' 次';
	}
	getObj('headrajaxlogintip').style.display = '';
} else if (rText[0] == 'success') {
	location.href = rText[1];
	ifChangeGdcode = false;
} else {
	getObj('headrajaxlogintip').innerHTML = rText[0];
	getObj('headrajaxlogintip').style.display = '';
}
if (ifChangeGdcode && getObj('changeGdCode')) getObj('changeGdCode').onclick();
		});
		return false;
	},
	
	'close' : function(obj) {
		document.login_FORM.head_login.disabled = false;
		closep();
		//清除遮罩
		if(getObj("headerTmpMask")){
var mask=getObj("headerTmpMask");
mask.parentNode.removeChild(mask);
		}
		//end
	}
};
</script>
    </div>

<script>
var timeoutSpecifyId = {};
var navBStyle = '';

function tmpClose(elementId) {
    timeoutSpecifyId[elementId] = setTimeout(function() {
        getObj(elementId).style.display = 'none';
    }, 100);
}
function tmpHideAllCross(currentSubMenuId,showNavB) {
	if(!getObj('navB')) return;
	if (showNavB) {
		getObj('navB').style.display = '';
	}
    var elements = getElementsByClassName('navB', getObj('navB'));
    if(elements.length){
        for (var i=0,len = elements.length; i<len; i++) {
            if (elements[i].id != '' && elements[i].id != currentSubMenuId) elements[i].style.display = 'none';
        }
    }
}

function ctrlSubMenu(parentId, subMenuId) {
    try {
		clearTimeout(timeoutSpecifyId[subMenuId]);

		tmpHideAllCross(subMenuId,true);
		getObj(subMenuId).style.display = '';

		getObj(parentId).onmouseout = function() {
tmpClose(subMenuId);
 timeoutSpecifyId[parentId] = setTimeout(function() {
	if (navBStyle) {
		getObj('navB').style.display = 'none';
	}
}, 100);
getObj(parentId).onmouseout = '';
		};
		getObj(subMenuId).onmouseout = function() {
tmpClose(subMenuId);
if (navBStyle) {
	getObj('navB').style.display = 'none';
}
		};
		getObj(subMenuId).onmouseover = function() {
clearTimeout(timeoutSpecifyId[subMenuId]);
clearTimeout(timeoutSpecifyId[parentId]);
getObj(subMenuId).style.display = '';
getObj('navB').style.display = '';
		};
	}catch(e){}
}
</script>

<script>var td_skin = {pz : 22}</script>
</div>
<div class="tac mb5">
</div>
<div class="main-wrap">
<div id="main">




<title>Link | 诚聘英才</title>
<script type="text/javascript" src="./二七路   诚聘英才_files/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="./二七路   诚聘英才_files/main.js"></script>
<link href="./二七路   诚聘英才_files/pw_core.css" rel="stylesheet" type="text/css">
<link href="./二七路   诚聘英才_files/about.css" rel="stylesheet" type="text/css">



<div class="main">

<div class="about_right">
<div><img src="./二七路   诚聘英才_files/pic_aboutus.jpg" width="643" height="100"></div>
<div class="h2">诚聘英才</div>
<div class="about_right_c">
<?php echo '<p><strong>'.$string.'</strong></p>' ?>
</div></div>
<div class="clearfloat"></div>
</div>
</div></div><!--.main-wrap,#main End-->
<div class="footer-wrap">
<div id="bottom"></div>

<div id="footer">
	<div class="mb5">
		<div class="bottom tac">

<span class="mr10"><a id="nav_key_up_47" href="jobs.htm" title="">招募页面</a></span><span class="gray mr10"></span><span class="mr10"><a id="nav_key_up_7" href="contact.html" title="">联系我们</a></span><span class="gray mr10"></span><span class="gray mr10"></span><span class="mr10"><a id="nav_key_up_9" href="question.html" title="">Question&Answer</a></span><span class="gray mr10"></span>

		</div>
	</div>
	<div class="foot_l fl"></div>
	<div class="foot_r fl">
		<a href="http://www.erqilu.com/"><img src="./二七路   诚聘英才_files/linklogo.png" class="f2"  align="center" title="Link"></a>
		<div class="f10 s6 fl" style="margin:15px 30px">
<p>Copyright 2010-2012<a href="http://www.erqilu.com/" target="_blank">二七路</a> 版权所有，并保留所有权利。 </p>
<p>Power By Phpwind 信息产业部备案/许可证编号：<a href="http://www.miibeian.gov.cn/" target="_blank">黔ICP备12003949号</a></p>
 <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F63a8e8ef564e45aeeb6535fb2717b5d9' type='text/javascript'%3E%3C/script%3E"));
</script><script src="./二七路   诚聘英才_files/h.js" type="text/javascript"></script>

<script>
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20962791-1']);
_gaq.push(['_addOrganic', '百度', 'word']);
_gaq.push(['_addOrganic', '百度', 'wd']);
_gaq.push(['_addOrganic', '腾讯搜搜', 'w']);
_gaq.push(['_addOrganic', '3721', 'name']);
_gaq.push(['_addOrganic', 'yodao', 'q']);
_gaq.push(['_addOrganic', 'vnet', 'kw']);
_gaq.push(['_addOrganic', '搜狗', 'query']);
_gaq.push(['_setDomainName', 'none']);
_gaq.push(['_setAllowLinker', true]);
if(typeof(windid) ==='undefined' || windid === '' ){
     _gaq.push(['_setCustomVar', 1, '游客', '游客', 3]);
} else if( isStaff ){
     _gaq.push(['_setCustomVar', 1, '员工', staffName, 3]);
} else {
     _gaq.push(['_setCustomVar', 1, '注册用户', winduid, 3]);
}

if( typeof tid !== 'undefined' ){
     _gaq.push(['_setCustomVar', 2, '阅读页', fid+'_'+tid+'_'+page, 3]);
} else if( typeof fid !== 'undefined' ){
     _gaq.push(['_setCustomVar', 2, '帖子列表页', forumtitle+'_'+page, 3]);
} else if( location.pathname.match('^/(index.php)?$') ){
     _gaq.push(['_setCustomVar', 2, '首页', '首页', 3]);
} else {
     _gaq.push(['_setCustomVar', 2, '其他', '其他', 3]);
}
_gaq.push(['_trackPageview']);
_gaq.push(['_trackPageLoadTime']);
(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
if(typeof(isStaff) == 'undefined' || !isStaff ){
     var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
     document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F3eeb93948090578398400c8939959728' type='text/javascript'%3E%3C/script%3E"));
}
</script><script src="./二七路   诚聘英才_files/h(1).js" type="text/javascript"></script>
<script type="text/javascript" src="./二七路   诚聘英才_files/stats" charset="UTF-8"></script> 

		</div>
	</div>	
</div>
</div>
</div>


<script type="text/javascript" src="./二七路   诚聘英才_files/g=bbsjsfooter"></script>
<script>
$('img').lazyload();
</script>

<!-- <script type="text/javascript" src="mode/area/js/adminview.js"></script> -->

<script type="text/javascript">
document.write(unescape("%3Cscript src='http://lianjie.phpwind.com/static/js/app.js' type='text/javascript'%3E%3C/script%3E"));
</script><script src="http://lianjie.phpwind.com/static/js/app.js" type="text/javascript"></script>
<script type="text/javascript">
try{
var pw = taobaoke.chushi();
pw.pwhash('10BglRUgBTVwYEWwYKDlZZAAcBDg5bU1AFVQRWAFIIVVY');
pw.creathash();
pw.exchange();
}catch(e){}
</script>


<!--<script type="text/javascript" src="js/app_global.js"></script> -->

<script>
var openmenu = {'td_skin' : 'menu_skin','weibo_login' : 'menu_weibo_login'};
var messagetip=null;
window.onReady(function(){
	read.InitMenu();
	//消息提示
	messagetip=new messageTip(90);
	messagetip.init();
});
WINDOW_LOADED=1;
</script>

<script>
onReady(function(){
	ajax.send("y.php?action=sync", "");
})
</script>



<script type="text/javascript">(function(d,t){var url="http://app.open.phpwind.com/?src=read&url=www.erqilu.com&sn=www.erqilu.com&fid=0&uid=&tid=0&b16983a4=0&charset=utf-8&username=&title=&_ua=256b07ea7643c460bd&_shr=aHR0cDovL3d3dy5lcnFpbHUuY29tLw%3D%3D&_sqs=YT1qb2Jz&_ssn=L21pc2MucGhw&_t=1415778755&_v=2314";var g=d.createElement(t);g.async=1;g.src=url;d.body.insertBefore(g,d.body.firstChild);}(document,"script"));</script><div id="scrollBar" style="position: fixed; right: 50%; margin-right: -510px; bottom: 75px; display: block;"><a hidefocus="true" href="javascript:void(0)">回到顶部</a></div></body></html>
