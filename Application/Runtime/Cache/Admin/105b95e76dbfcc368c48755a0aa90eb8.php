<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>增加题</title>
</head>
<body>
	<form action="<?php echo U('admin/question/handleadd');?>" method="post" enctype="multipart/form-data">
	分类 :<select name="parent">
			<option value="0">属课</option>
			<?php foreach($course as $v) { ?>
			<?php echo ($v); ?>
			<?php } ?> 
		</select>
		<br><br>
	题干 :
		<input type="text" name="stem">
		<br><br>
	obj :
		<input type="text" name="obj_id"><br><br>
	type :
		<input type="text" name="type"><br>（1：章节题  2：试卷题）<br><br>
	解析 :
		<input type="text" name="explain"><br><br>
	类型 :
		<input type="text" name="question_type"><br>（1：单、2：多）<br>
		<br><br>
		<input type="submit" name=""><br>
	</form>
</body>
</html>