<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>增加广告</title>
</head>
<body>
	<form action="<?php echo U('admin/advert/handleadd');?>" method="post" enctype="multipart/form-data">
	图片 :<input type="file" name="image">
		  <br><br>
	<!-- 类型 :<select name="type">
		  	<?php foreach($type as $key =>$v) { ?>
		  		<option value="<?php echo ($key); ?>"><?php echo ($v['name']); ?></option>
		 	<?php } ?>	
		  </select>
		  <br><br> -->
	网址 :<input type="text" name="address">
		  <br><br>
	状态 :<input type="text" name="status">
		  <br><br>  
		  <input type="submit" name="">
	</form>
</body>
</html>