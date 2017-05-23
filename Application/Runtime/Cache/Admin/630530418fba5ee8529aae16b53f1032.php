<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>修改广告信息</title>
</head>
<body>
<form action="<?php echo U('admin/advert/handleedit');?>" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo ($a['id']); ?>">
	<!-- 修改分类 :	
			<select name="type">
		  	<?php foreach($type as $key =>$v) { ?>
		  		<option value="<?php echo ($key); ?>"><?php echo ($v['name']); ?></option>
		 	<?php } ?>	
		  	</select>
			<br><br> -->
	修改图片 :
		<input type="file" name="image" value="<?php echo ($a['img']); ?>"><br>
		<br><br>
	修改地址 :
		<input type="text" name="address" value="<?php echo ($a['address']); ?>"><br>
	<!-- 修改状态 : -->
		<!-- <input type="text" name="status" value="<?php echo ($a['status']); ?>"> -->
		<input type="submit" name=""><br>

	</form>
</body>
</html>