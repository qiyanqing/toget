<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>广告列表</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="0">
	<tr>
		<td>id</td>
		<td>图片</td>
		<td>跳转地址</td>
		<td>状态</td>
		<td>操作</td>
	</tr>
	<?php  foreach($a as $value) { ?>
	<tr>
		<td><?php echo ($value['id']); ?></td>
		<td><img src="<?php echo ($value['img']); ?>" height="100px" width="100px" ></td>
		<td><?php echo ($value['address']); ?></td>
		<td><?php echo ($value['status']); ?></td>
		<td><a href="http://toget.cn/index.php/admin/advert/edit?id=<?php echo ($value['id']); ?>">修改</a>
			<a href="http://toget.cn/index.php/admin/advert/delete?id=<?php echo ($value['id']); ?>">删除</a>
		</td>
	</tr>
	<?php  } ?>

</table>
<a href="http://toget.cn/index.php/admin/advert/add">增加</a>
</body>
</html>