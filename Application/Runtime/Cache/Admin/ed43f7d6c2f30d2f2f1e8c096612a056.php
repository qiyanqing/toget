<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>修改分类信息</title>
</head>
<body>
<form action="<?php echo U('admin/course/handleedit');?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo ($a['id']); ?>">
	<!-- 修改分类 ：<select name="parent">
			<?php foreach($course as $v) { ?>
				<option value="<?php echo ($v['id']); ?>"><?php echo ($v['name']); ?></option>
			<?php } ?>	
			<!-- <option value="0">顶级分类</option>
			<?php foreach($course as $v) { ?>
			<?php echo ($v); ?>
			<?php } ?> -->
		<!-- </select> -->
		<br><br>
	修改课程名 :
		<input type="text" name="name" value="<?php echo ($a['name']); ?>"><br>
		<br><br>
	修改已做人数 :
		<input type="text" name="user_done_num" value="<?php echo ($a['user_done_num']); ?>"><br>
		<br><br>
	修改收藏 :
		<input type="text" name="status" value="<?php echo ($a['status']); ?>"><br>
		<br><br>
	修改img  :
		<input type="file" name="img" value="<?php echo ($a['img']); ?>"><br>
		<br><br>
	修改状态 :
		<input type="text" name="status" value="<?php echo ($a['status']); ?>"><br><br>
		<input type="submit" name="">

	</form>
</body>
</html>