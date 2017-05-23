<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>课程列表</title>
    

</head>
<body>
      <a href="<?php echo U('admin/answer/add');?>">新增</a>
  <table>
    <tr>
      <td>id</td>
      <td>question</td>     
      <td>选项</td>
      <td>是否正确</td>
      <td>操作</td>
    </tr>
    <?php foreach ($qa as $value) { ?>
    <tr>
         <td><?php echo $value['id'] ; ?></td>
         <td><?php echo $value['stem'] ; ?></td>
         <td><select name="" >
         <?php foreach ($value['answer'] as $v) { ?>
           <option><?php echo $v['sn'].':' . $v['content']; ?></option>      
         <?php } ?>
         </select></td>
         <td><select name="" >
         <?php foreach ($value['answer'] as $v2) { ?>
           <option><?php echo $v2['is_true']; ?></option>         
         <?php } ?>
         </select></td>
         <td>
            <a href="<?php echo U('admin/answer/edit',array('id'=>$value['id']));?>">修改</a>
            <a href="<?php echo U('admin/answer/delete',array('id'=>$value['id']));?>">删除</a>


         </td>
    </tr>
        <?php } ?>




  </table>
</body>
</html>