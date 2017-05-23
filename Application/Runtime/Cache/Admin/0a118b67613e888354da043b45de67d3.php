<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>分类列表</title>
</head>
<body>
<table border="1" cellpadding="0" cellspacing="0">
	<tr>
		<td>id</td>
		<td>img</td>
		<td>课程名</td>
		<td>category_id</td>
		<td>status</td>
		<td>已做人数</td>
		<td>收藏</td>
		<td>操作</td>
	</tr>
	<?php foreach ($list as $value) { ?>
	<tr>
		<td><?php echo ($value['id']); ?></td>
		<td><?php echo ($value['img']); ?></td>
		<td><?php echo ($value['name']); ?></td>
		<td><?php echo ($value['category_id']); ?></td>
		<td><?php echo ($value['status']); ?></td>
		<td><?php echo ($value['user_done_num']); ?></td>
		<td><?php echo ($value['status']); ?></td>
		<td><a href="http://toget.cn/index.php/admin/course/edit?id=<?php echo ($value[id]); ?>">修改</a>
			<a href="http://toget.cn/index.php/admin/course/delete?id=<?php echo ($value[id]); ?>">删除</a>
			</td>
	</tr>
	<?php } ?>
</table>
</body>
</html>