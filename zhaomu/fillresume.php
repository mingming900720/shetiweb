<?php
echo '
	<html>

				<head>
					<meta charset="utf-8" />
					<title>Link | 简历</title>
<style>
.textbox { BACKGROUND: white; BORDER-TOP: white 1px solid; BORDER-LEFT: white 1px solid; 

BORDER-RIGHT: white 1px solid; BORDER-BOTTOM: white 1px solid; FONT-FAMILY: 微软雅黑,"宋体", 

"Verdana", "Arial", "Helvetica"; FONT-SIZE: 12px; TEXT-ALIGN: LIFT;}
</style> 
				</head>

	<body>
				<form action="saveresume.php" method="post">
				  <div align="center">
					  <table width="1083" height="52" border="1">
					    <tr>
					      <th scope="col">个人资料</th>
				        </tr>
				    </table>
				    <table width="1083" border="1">
					    <tr>
					      <th width="94" height="30" scope="col"><div 

align="left">姓名：</div></th>
					      <th width="432" scope="col">&nbsp;<div 

align="left"><input type="text" name="name" /></th>
					      <th width="94" scope="col"><div 

align="left">
					        
				          年级：</div></th>
					      <th width="432" scope="col">&nbsp;<div 

align="left"><input type="text" name="grade" /></th>
				        </tr>
					    <tr>
					      <td height="30">性别：</td>
					      <td>&nbsp;<div align="left"><input 

type="text" 

name="sex" /></td>
					      <td>院系：</td>
					      <td>&nbsp;<div align="left"><input 

type="text" 

name="departments" /></td>
				        </tr>
					    <tr>
					      <td height="30">出生日期：</td>
					      <td>&nbsp;<div align="left"><input 

type="text" 

name="age" /></td>
					      <td>专业:</td>
					      <td>&nbsp;<div align="left"><input 

type="text" 

name="subject" /></td>
				        </tr>
					    <tr>
					      <td height="30">电话号:</td>
					      <td>&nbsp;<div align="left"><input 

type="text" 

name="phonenumber" /></td>
					      <td>住址：</td>
					      <td>&nbsp;<div align="left"><input 

type="text" 

name="address" /></td>
				        </tr>
					    <tr>
					      <td height="30">QQ号：</td>
					      <td>&nbsp;<div align="left"><input 

type="text" 

name="QQnumber" /></td>
					      <td>格言：</td>
					      <td>&nbsp;<div align="left"><input 

type="text" 

name="motto" /></td>
				        </tr>
			        </table>
				    <p>&nbsp;</p>
				  </div>
					<div align="center">
					  <table width="1083" border="1">
					    <tr>
					      <th height="30" scope="col">两年内担任过的
					        
				          职务</th>
				        </tr>
					    <tr>
					      <td height="120">&nbsp;<textarea cols=160 

rows=10 class="textbox"  name="experience" ></textarea></td>
				        </tr>
					    </table>
					  <p>&nbsp;</p>
			      </div>
					
					<div align="center">
					  <table width="1083" border="1">
					    <tr>
					      <th height="30" scope="col">所获奖项及荣誉
					        
  </th>
				        </tr>
					    <tr>
					      <td height="120">&nbsp;<textarea cols=160 

rows=10 class="textbox"  name="skill" ></textarea></td>
					        
				        </tr>
					    </table>
					  <p>&nbsp;</p>
			      </div>
					<div align="center">
					  <table width="1083" border="1">
					    <tr>
					      <th height="36" scope="col">自我评价（请从
					        
				          性格，执行力或其他方面评价）				

          </th>
				        </tr>
					    <tr>
					      <td height="30">&nbsp;<textarea cols=160 

rows=10 class="textbox"  name="selfevaluation" ></textarea></td>
					       
				          <p>&nbsp;</p></td>
				        </tr>
				      </table>
				  </div>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<input type="submit" name="sub" />
	</form>
	</body>
			</html>
			'
			
?>
