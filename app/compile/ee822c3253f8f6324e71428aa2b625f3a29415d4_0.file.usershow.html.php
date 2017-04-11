<?php
/* Smarty version 3.1.30, created on 2017-04-11 04:19:33
  from "C:\wamp\www\app\template\admin\usershow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ec3d355ab5a0_64873960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee822c3253f8f6324e71428aa2b625f3a29415d4' => 
    array (
      0 => 'C:\\wamp\\www\\app\\template\\admin\\usershow.html',
      1 => 1491613328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ec3d355ab5a0_64873960 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/usershow.css" />
</head>
<body>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>id</th>
        <th>账号</th>
        <th>角色</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aresult']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['aname'];?>
</td>
        <td>管理员</td>
        <td>
            <a class="btn btn-default" href="index.php?m=admin&f=user&a=deluser&aid=<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
">删除</a>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['uname'];?>
</td>
        <td>普通会员</td>
        <td>
            <a class="btn btn-default" href="index.php?m=admin&f=user&a=deluser&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">删除</a>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tbody>
</table>
</body>
</html><?php }
}
