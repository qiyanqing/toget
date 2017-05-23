<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>题库列表</title>
</head>
<body>
<table border="1" cellpadding="0" cellspacing="0">
	<tr>
		<td>id</td>
		<td>题干</td>
		<td>课程id</td>
		<td>obj_id</td>
		<td>type</td>
		<td>explain</td>
		<td>question_type</td>
		<td>status</td>
		<td>操作</td>
	</tr>
	<?php foreach ($lists as $value) { ?>
	<tr>
		<td><?php echo ($value['id']); ?></td>
		<td><?php echo ($value['stem']); ?></td>
		<td><?php echo ($value['course_id']); ?></td>
		<td><?php echo ($value['obj_id']); ?></td>
		<td><?php echo ($value['type']); ?></td>
		<td><?php echo ($value['explain']); ?></td>
		<td><?php echo ($value['question_type']); ?></td>
		<td><?php echo ($value['status']); ?></td>
		<td><a href="http://toget.cn/index.php/admin/question/edit?id=<?php echo ($value[id]); ?>">修改</a>
			<a href="http://toget.cn/index.php/admin/question/delete?id=<?php echo ($value[id]); ?>">删除</a>
			</td>
	</tr>
	<?php } ?>
</table>
</body>
</html>