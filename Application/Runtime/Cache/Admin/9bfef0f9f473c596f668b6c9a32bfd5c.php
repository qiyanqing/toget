<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>分类列表</title>
</head>
<body>
<table border="1" cellpadding="0" cellspacing="0">
	<tr>
		<td>id</td>
		<td>icon</td>
		<td>课程名</td>
		<td>parent_id</td>
		<td>status</td>
		<td>操作</td>
	</tr>
	<?php foreach ($list as $value) { ?>
	<tr>
		<td><?php echo ($value['id']); ?></td>
		<td><?php echo ($value['icon']); ?></td>
		<td><?php echo ($value['name']); ?></td>
		<td><?php echo ($value['parent_id']); ?></td>
		<td><?php echo ($value['status']); ?></td>
		<td><a href="http://toget.cn/index.php/admin/category/edit?id=<?php echo ($value[id]); ?>">修改</a>
			<a href="http://toget.cn/index.php/admin/category/delete?id=<?php echo ($value[id]); ?>">删除</a>
			</td>
	</tr>
	<?php } ?>
</table>
</body>
</html>